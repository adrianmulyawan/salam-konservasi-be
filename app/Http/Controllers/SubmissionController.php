<?php

namespace App\Http\Controllers;

use App\Models\ConservationArea;
use App\Models\Equipment;
use App\Models\MasterPrice;
use App\Models\Purpose;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TransactionEquipmentDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubmissionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $slug)
    {
        $user= Auth::user();
        $purpose = $request->input('destination-area');
        $price = MasterPrice::select('citizen', 'price')->where('purpose_id', $purpose)->get();
        $myPrice = collect($price)->where('citizen', strtoupper($user->citizen))->firstOrFail();
        $equipment = Equipment::select('slug', 'equipment_price')->get();
        return view('pages.submission', compact('slug', 'price', 'myPrice', 'equipment', 'purpose'));
    }

    public function store(Request $request, $slug)
    {
        try {
            DB::beginTransaction();
                $user= Auth::user();
                $allTotal = 0;
                $conservationArea = ConservationArea::where('slug', $slug)->first();
                $purpose = Purpose::findOrFail($request->purpose);
                $transaction = new Transaction();
                $transaction->purpose_id = $request->purpose;
                $transaction->conservation_area_id = $conservationArea->id;
                $transaction->user_id = $user->id;
                $transaction->name_of_purpose = $purpose->purpose_name;
                $transaction->transaction_code = '1';
                $transaction->total_transaction = 0;
                $transaction->date_of_entry = date('Y-m-d', strtotime($request->date_of_entry));
                $transaction->out_date = date('Y-m-d', strtotime($request->out_date));
                $transaction->save();

                $price = MasterPrice::select('id', 'citizen', 'price')->where('purpose_id', $purpose->id)->get();

                $myPrice = collect($price)->where('citizen', strtoupper($user->citizen))->firstOrFail();
                $transactionDetail = new TransactionDetail();
                $transactionDetail->transaction_id = $transaction->id;
                $transactionDetail->master_price_id = $myPrice->id;
                $transactionDetail->name = $user->name;
                $transactionDetail->citizen = $user->citizen;
                $transactionDetail->phone_number = $user->phone_number;
                $transactionDetail->address = $user->address;
                $transactionDetail->price = $myPrice->price;
                $transactionDetail->save();
                $allTotal += $myPrice->price;

                foreach ($request->visitor as $value) {
                    $value = (object)$value;
                    $myPrice = collect($price)->where('citizen', strtoupper($value->citizen))->firstOrFail();
                    $transactionDetail = new TransactionDetail();
                    $transactionDetail->transaction_id = $transaction->id;
                    $transactionDetail->master_price_id = $myPrice->id;
                    $transactionDetail->name = $value->name;
                    $transactionDetail->citizen = $value->citizen;
                    $transactionDetail->phone_number = $value->phone_number;
                    $transactionDetail->address = $value->address;
                    $transactionDetail->price = $myPrice->price;
                    $transactionDetail->save();
                    $allTotal += $myPrice->price;
                }

                $arrEquipment = array();
                if ($request->scuba != '0') {
                    array_push($arrEquipment, 'scuba-set');
                }
                if ($request->peralatan_seluncur != '0') {
                    array_push($arrEquipment, 'peralatan-selancar');
                }
                if ($request->kamera != '0') {
                    array_push($arrEquipment, 'kamera-bawah-air');
                }
                if ($request->video != '0') {
                    array_push($arrEquipment, 'video-bawah-air');
                }
                if ($request->kapal != '0') {
                    array_push($arrEquipment, 'kapal-pesiar');
                }

                $equipment = Equipment::whereIn('slug', $arrEquipment)->get();

                foreach ($equipment as $equip) {
                    $total = 0;
                    if ($equip->slug == 'scuba-set') {
                        $total = $request->scuba;
                    }
                    if ($equip->slug == 'peralatan-selancar') {
                        $total = $request->peralatan_seluncur;
                    }
                    if ($equip->slug == 'kamera-bawah-air') {
                        $total = $request->kamera;
                    }
                    if ($equip->slug == 'video-bawah-air') {
                        $total = $request->video;
                    }
                    if ($equip->slug == 'kapal-pesiar') {
                        $total = $request->kapal;
                    }    
                    $transactionEquipmentDetail = new TransactionEquipmentDetail();
                    $transactionEquipmentDetail->equipment_id = $equip->id;
                    $transactionEquipmentDetail->transaction_id = $transaction->id;
                    $transactionEquipmentDetail->equipment_name = $equip->equipment_name;
                    $transactionEquipmentDetail->equipment_price = $equip->equipment_price;
                    $transactionEquipmentDetail->equipment_total = $total;
                    $transactionEquipmentDetail->save();
                    $allTotal += $equip->equipment_price;
                }
                $transaction->update([
                    'total_transaction' => $allTotal,
                    'transaction_code' => 'SALAM-'.str_pad($transaction->id, 5, '0', STR_PAD_LEFT),
                ]);

                // dd($allTotal);

                DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage(), $th->getLine());
        }
    }

    public function successSubmission()
    {
        return view('pages.success-submission');
    }
}
