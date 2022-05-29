<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ConservationArea;
use App\Models\Equipment;
use App\Models\MasterPrice;
use App\Models\Purpose;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TransactionEquipmentDetail;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicantSubmission;
use App\Models\User;
use Carbon\Carbon;
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
        $purposeObj = Purpose::where('id',$purpose)->first();
        return view('pages.submission', compact('slug', 'price', 'myPrice', 'equipment', 'purpose','purposeObj'));
    }

    public function store(Request $request, $slug)
    {
        try {
            DB::beginTransaction();
                $user= Auth::user();
                $allTotal = 0;
                $educational_file = null;
                if ($request->hasFile('formulir_file')) {
                    $educational_file = $request->file('formulir_file')->store('assets/educational_research_activity_form', 'public') ?: null;
                }
                $conservationArea = ConservationArea::where('slug', $slug)->first();
                $purpose = Purpose::findOrFail($request->purpose);
                $transaction = new Transaction();
                $transaction->purpose_id = $request->purpose;
                $transaction->conservation_area_id = $conservationArea->id;
                $transaction->user_id = $user->id;
                $transaction->name_of_purpose = $purpose->purpose_name;
                $transaction->transaction_code = '1';
                $transaction->permit_application_fee = 0;
                $transaction->visitor_charges = 0;
                $transaction->total_transaction = 0;
                $transaction->educational_research_activity_form = $educational_file;
                $transaction->date_of_entry = date('Y-m-d', strtotime($request->date_of_entry));
                $transaction->out_date = date('Y-m-d', strtotime($request->out_date));
                $transaction->save();

                $price = MasterPrice::select('id', 'citizen', 'price')->where('purpose_id', $purpose->id)->get();
                $permitApplicationFee = 0;
                $myPrice = collect($price)->where('citizen', strtoupper($user->citizen))->firstOrFail();
                $transactionDetail = new TransactionDetail();
                $transactionDetail->transaction_id = $transaction->id;
                $transactionDetail->master_price_id = $myPrice->id;
                $transactionDetail->name = $user->name;
                $transactionDetail->citizen = $user->citizen;
                $transactionDetail->phone_number = $user->phone_number;
                $transactionDetail->address = $user->address;
                $transactionDetail->price = $myPrice->price;
                $transactionDetail->identity_image = $user->identity_image;
                $transactionDetail->flag_pic = 1;
                $transactionDetail->save();
                $allTotal += $myPrice->price;
                $permitApplicationFee += $myPrice->price;

                if (isset($request->visitor)) {

                    foreach ($request->visitor as $key => $value) {
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
                        $transactionDetail->identity_image = $request->file("visitor.$key.image")->store('assets/identity_image', 'public');
                        $transactionDetail->save();
                        $allTotal += $myPrice->price;
                        $permitApplicationFee += $myPrice->price;
                    }
                }

                // date('Y-m-d', strtotime($request->date_of_entry));
                // date('Y-m-d', strtotime($request->out_date));
                $dateOfEntry = new Carbon($request->date_of_entry);
                $outDate = new Carbon($request->out_date);
                $diff = $dateOfEntry->diff($outDate)->days;
                $allTotal = $allTotal * $diff;
                $permitApplicationFee = $permitApplicationFee * $diff;
                // $now = Carbon::now();
                // $difference = ($created->diff($now)->days < 1) ? 'today' : $created->diffForHumans($now);

                $arrEquipment = array();
                if ($request->scuba != '0' && !empty($request->scuba)) {
                    array_push($arrEquipment, 'scuba-set');
                }
                if ($request->peralatan_seluncur != '0' && !empty($request->peralatan_seluncur)) {
                    array_push($arrEquipment, 'peralatan-selancar');
                }
                if ($request->kamera != '0' && !empty($request->kamera)) {
                    array_push($arrEquipment, 'kamera-bawah-air');
                }
                if ($request->video != '0' && !empty($request->video)) {
                    array_push($arrEquipment, 'video-bawah-air');
                }
                if ($request->kapal != '0' && !empty($request->kapal)) {
                    array_push($arrEquipment, 'kapal-pesiar');
                }

                // dd($arrEquipment);
                $equipment = Equipment::whereIn('slug', $arrEquipment)->get();

                $visitorCharges = 0;

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
                    $transactionEquipmentDetail->equipment_total = $total ?: 0;
                    $transactionEquipmentDetail->save();
                    $priceEquipment = $equip->equipment_price * $total;
                    $allTotal += $priceEquipment;
                    $visitorCharges += $priceEquipment;
                }
                // dd($allTotal);
                $transaction->update([
                    'total_transaction' => $allTotal,
                    'transaction_code' => 'SALAM-'.str_pad($transaction->id, 5, '0', STR_PAD_LEFT),
                    'permit_application_fee' => $permitApplicationFee ?: 0,
                    'visitor_charges' => $visitorCharges ?: 0,
                ]);

                // dd($allTotal);
                $userAdmins = User::where('role', 'superadmin')->orWhere('role', 'leader')->get();
                foreach ($userAdmins as $admin) {
                    $emailAdmin = $admin->email;
                    $dataAdmin = [
                        'name' => $admin->name,
                    ];
                    Mail::to($emailAdmin)->send(new ApplicantSubmission($dataAdmin));
                }

                DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage(), $th->getLine(), $th->getFile());
        }
    }

    public function successSubmission()
    {
        return view('pages.success-submission');
    }

    // Proses Pengajuan Ulang
    public function editSubmission($id)
    {
        $user = Auth::user();
        $item = Transaction::findOrFail($id);
        $price = MasterPrice::select('citizen', 'price')->where('purpose_id', $item->purpose_id)->get();
        $equipment = Equipment::select('slug', 'equipment_price')->get();
        $details = TransactionDetail::where('transaction_id', $id)->orderBy('created_at','asc')->get();
        $equipments = collect(TransactionEquipmentDetail::where('transaction_id', $id)->get());
        $myPrice = collect($price)->where('citizen', strtoupper($user->citizen))->firstOrFail();
        $arrEquipment = array(
            'scuba' => $this->searchEquipmentByTransactionId($equipments,1),
            'peralatan_seluncur' => $this->searchEquipmentByTransactionId($equipments,2),
            'kamera' => $this->searchEquipmentByTransactionId($equipments,3),
            'video' => $this->searchEquipmentByTransactionId($equipments,4),
            'kapal' => $this->searchEquipmentByTransactionId($equipments,5),
        );
        $slug = $item->purpose_id;
        $dateOfEntry = new Carbon($item->date_of_entry);
        $outDate = new Carbon($item->out_date);
        $diff = $dateOfEntry->diff($outDate)->days;
        return view('pages.edit-submission', compact(
            'id',
            'item',
            'price',
            'equipment',
            'slug',
            'diff',
            'arrEquipment',
            'details',
            'myPrice'
        ));
    }

    public function update(Request $request, Transaction $transaction)
    {
        try {
            DB::beginTransaction();
                $user= Auth::user();
                $allTotal = 0;
                $payloadTransaction = [
                    'user_id' => $user->id,
                    'date_of_entry' => date('Y-m-d', strtotime($request->date_of_entry)),
                    'out_date' => date('Y-m-d', strtotime($request->out_date)),
                ];

                if ($request->hasFile('formulir_file')) {
                    $payloadTransaction['educational_research_activity_form'] = $request->file('formulir_file')->store('assets/educational_research_activity_form', 'public') ?: null;
                }

                if(isset($request->delete_visitor)){
                    TransactionDetail::whereIn('id', $request->delete_visitor)->delete();
                }

                $price = MasterPrice::select('id', 'citizen', 'price')->where('purpose_id', $transaction->purpose_id)->get();
                $permitApplicationFee = 0;
                $myPrice = collect($price)->where('citizen', strtoupper($user->citizen))->firstOrFail();
                TransactionDetail::where([
                    ['flag_pic',1],
                    ['transaction_id', $transaction->id]
                ])->update([
                    'transaction_id' => $transaction->id,
                    'master_price_id' => $myPrice->id,
                    'name' => $user->name,
                    'citizen' => $user->citizen,
                    'phone_number' => $user->phone_number,
                    'address' => $user->address,
                    'price' => $myPrice->price,
                    'identity_image' => $user->identity_image,
                ]);

                $allTotal += $myPrice->price;
                $permitApplicationFee += $myPrice->price;

                if (isset($request->visitor)) {

                    foreach ($request->visitor as $key => $value) {
                        $value = (object)$value;
                        $myPrice = collect($price)->where('citizen', strtoupper($value->citizen))->firstOrFail();
                        if(isset($value->transaction_detail_id)):
                            $payloadTransactionDetail = [
                                'transaction_id' => $transaction->id,
                                'master_price_id' => $myPrice->id,
                                'name' => $value->name,
                                'citizen' => $value->citizen,
                                'phone_number' => $value->phone_number,
                                'address' => $value->address,
                                'price' => $myPrice->price,
                            ];
                            if($request->hasFile("visitor.$key.image")):
                                $payloadTransactionDetail['identity_image'] =  $request->file("visitor.$key.image")->store('assets/identity_image', 'public');
                            endif;
                            $allTotal += $myPrice->price;
                            $permitApplicationFee += $myPrice->price;
                        else:
                            $transactionDetail = new TransactionDetail();
                            $transactionDetail->transaction_id = $transaction->id;
                            $transactionDetail->master_price_id = $myPrice->id;
                            $transactionDetail->name = $value->name;
                            $transactionDetail->citizen = $value->citizen;
                            $transactionDetail->phone_number = $value->phone_number;
                            $transactionDetail->address = $value->address;
                            $transactionDetail->price = $myPrice->price;
                            $transactionDetail->identity_image = $request->file("visitor.$key.image")->store('assets/identity_image', 'public');
                            $transactionDetail->save();
                            $allTotal += $myPrice->price;
                            $permitApplicationFee += $myPrice->price;
                        endif;
                    }
                }

                // date('Y-m-d', strtotime($request->date_of_entry));
                // date('Y-m-d', strtotime($request->out_date));
                $dateOfEntry = new Carbon($request->date_of_entry);
                $outDate = new Carbon($request->out_date);
                $diff = $dateOfEntry->diff($outDate)->days;
                $allTotal = $allTotal * $diff;
                $permitApplicationFee = $permitApplicationFee * $diff;
                // $now = Carbon::now();
                // $difference = ($created->diff($now)->days < 1) ? 'today' : $created->diffForHumans($now);

                $arrEquipment = array();
                if ($request->scuba != '0' && !empty($request->scuba)) {
                    array_push($arrEquipment, 'scuba-set');
                }
                if ($request->peralatan_seluncur != '0' && !empty($request->peralatan_seluncur)) {
                    array_push($arrEquipment, 'peralatan-selancar');
                }
                if ($request->kamera != '0' && !empty($request->kamera)) {
                    array_push($arrEquipment, 'kamera-bawah-air');
                }
                if ($request->video != '0' && !empty($request->video)) {
                    array_push($arrEquipment, 'video-bawah-air');
                }
                if ($request->kapal != '0' && !empty($request->kapal)) {
                    array_push($arrEquipment, 'kapal-pesiar');
                }

                $equipment = Equipment::whereIn('slug', $arrEquipment)->get();
                // dd($arrEquipment);

                $visitorCharges = 0;
                $abc =[];

                TransactionEquipmentDetail::where('transaction_id', $transaction->id)->delete();
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
                    $transactionEquipmentDetail->equipment_total = $total ?: 0;
                    $transactionEquipmentDetail->save();
                    $priceEquipment = $equip->equipment_price * $total;
                    $allTotal += $priceEquipment;
                    $visitorCharges += $priceEquipment;
                }

                $payloadTransaction['total_transaction'] = $allTotal;
                $payloadTransaction['permit_application_fee'] = $permitApplicationFee ?? 0;
                $payloadTransaction['visitor_charges'] = $visitorCharges ?? 0;
                $payloadTransaction['submission_status'] = 'PENDING';

                $transaction->update($payloadTransaction);

                // dd($allTotal);
                $userAdmins = User::where('role', 'superadmin')->orWhere('role', 'leader')->get();
                foreach ($userAdmins as $admin) {
                    $emailAdmin = $admin->email;
                    $dataAdmin = [
                        'name' => $admin->name,
                    ];
                    Mail::to($emailAdmin)->send(new ApplicantSubmission($dataAdmin));
                }

                DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage(), $th->getLine(), $th->getFile());
        }
    }

    private function searchEquipmentByTransactionId($equipment, $id){
        return $equipment->where('equipment_id',$id)->first();
    }
}
