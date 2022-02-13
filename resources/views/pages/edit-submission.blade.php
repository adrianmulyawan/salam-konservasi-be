@extends('layouts.app')

@section('title-website', 'SALAM Konservasi - Pengajuan Izin Masuk Kawasan')

@push('prepend-style')
    <!-- gijgo -->
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.css') }}">
@endpush

@section('content')
    <!-- Konten Utama -->
    <main> 
        <!-- 1. Header -->
        <section class="section-details-header"></section>

        <!-- 2. Konten -->
        <section class="section-details-content">
            <div class="container">
                <!-- Bread Crumb -->
                <div class="row" data-aos="fade-up">
                    <div class="col p-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">Kawasan Konservasi</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Details 
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Pengajuan Surat Izin Masuk KKPD
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    KKPD Pulau Randayan
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <!-- Tambah Data dan Cek Data -->
                <div class="row">
                    <!-- Tambah Data -->
                    <div class="col-lg-8 pl-lg-0" data-aos="fade-up">
                        <form action="" method="post" id="submit-submission">
                            @csrf
                            <input type="hidden" name="purpose" value="{{ $item->purpose_id }}">
                            <div class="card card-details">
                                <h1>Pengajuan Surat Izin Masuk Kawasan Konservasi</h1>
                                <p>KKPD Pulau Randayan</p>

                                {{-- Tanggal Masuk Kawasan --}}
                                <div class="date">
                                    <h2 class="inputDate">Tambahkan Tanggal Masuk dan Keluar Kawasan</h2>
                                    <div class="form-inline">
                                        <label for="tanggal_masuk" class="sr-only">
                                            Tanggal Masuk
                                        </label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="text" class="form-control datepicker" id="tanggal_masuk" value="{{date('m/d/Y',strtotime($item->date_of_entry))}}" name="date_of_entry" required placeholder="Tanggal Masuk Kawasan" onchange="changeDate()">
                                        </div>

                                        <label for="tanggal_keluar" class="sr-only">
                                            Tanggal Keluar
                                        </label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="text" class="form-control datepicker1" id="tanggal_keluar" value="{{date('m/d/Y',strtotime($item->out_date))}}" name="out_date" required placeholder="Tanggal Keluar Kawasan" onchange="changeDate()">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                {{-- Tambah Data Pengunjung --}}
                                <div class="attendee">
                                    <h2>Data Pengunjung</h2>
                                    <table class="table table-responsive-sm text-center">
                                        <thead>
                                            <tr>
                                                <td>Nama</td>
                                                <td>Kenegaraan</td>
                                                <td>No Telp</td>
                                                <td>Alamat</td>
                                                <td>Foto Identitas</td>
                                                <td></td>
                                            </tr>
                                        </thead>
                                        <tbody id="list-visitor">
                                            @foreach ($item->transaction_details as $row)
                                                <tr class="row-visitor">
                                                    <td class="align-middle">{{ $row->name }}
                                                    </td>
                                                    <td class="align-middle">{{ Str::upper($row->citizen) }}</td>
                                                    <td class="align-middle">
                                                        {{ $row->phone_number }}
                                                    </td>
                                                    <td class="align-middle">
                                                        {{ $row->address }}
                                                    </td>
                                                    <td>
                                                        <img src="{{ Storage::url($row->identity_image) }}" height="70">
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="#" onclick="removeVisitor(this)">
                                                            <img src="{{ url('frontend/images/cancel_icon.png') }}" width="10">
                                                        </a>
                                                    </td>
                                                    <input type="hidden" name="price" class="visitor-price" value="{{ $row->total_transaction }}"/>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="member mt-3">
                                    <h2>Tambah Data Anggota Pengunjung</h2>
                                    <div class="form-inline">
                                        <label for="inputName" class="sr-only">Name</label>
                                        <input type="text" class="form-control mb-2 mr-sm-2 input-name" id="inputName" required placeholder="Nama">

                                        <label for="inputNationality" class="sr-only">Nationality</label>
                                        <select class="custom-select mb-2 mr-sm-2 input-nationality" id="inputCitizen" name="citizen" required>
                                            <option selected disabled value="">Kebangsaan</option>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>

                                        <label for="inputAddress" class="sr-only">Alamat</label>
                                        <input type="text" class="form-control mb-2 mr-sm-2 input-alamat" id="inputAddress" required placeholder="Alamat">

                                        <label for="inputTelpon" class="sr-only">No Telpon</label>
                                        <input type="text" class="form-control mb-2 mr-sm-2 input-telpon" id="inputPhoneNumber" required placeholder="No Telpon">

                                        <div class="custom-file mb-2">
                                            <label class="custom-file-label" for="inputIdentityImage" id="labelIdentityImage">KTP/KK/Passport</label>
                                            <input type="button" class="custom-file-input mb-2 mr-sm-2 input-identity" id="inputIdentity" onclick="addImageVisitor(this)" required>
                                        </div>

                                        <button type="button" role="button" class="btn btn-add-member mb-2 px-4" onclick="addVisitor()">
                                            Tambah
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <div class="tools">
                                    <h2>Peralatan Bawaan Pengunjung (Perbuah)</h2>
                                    <table class="table table-responsive-sm text-center">
                                        <thead>
                                            <tr>
                                                <td>SCUBA Set</td>
                                                <td>Peralatan Selancar</td>
                                                <td>Kamera Bawah Air</td>
                                                <td>Video Bawah Air</td>
                                                <td>Kapal Pesiar</td>
                                                <td></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle" id="value-scuba">
                                                    0
                                                </td>
                                                <input type="hidden" name="scuba">
                                                <td class="align-middle" id="value-peralatan-seluncur">
                                                    0
                                                </td>
                                                <input type="hidden" name="peralatan_seluncur">
                                                <td class="align-middle" id="value-kamera">
                                                    0
                                                </td>
                                                <input type="hidden" name="kamera">
                                                <td class="align-middle" id="value-video">
                                                    0
                                                </td>
                                                <input type="hidden" name="video">
                                                <td class="align-middle" id="value-kapal">
                                                    0
                                                </td>
                                                <input type="hidden" name="kapal">
                                                <td class="align-middle">
                                                    <button type="button" role="button" onclick="resetEquipment()" style="background-color:transparent; border-color: transparent;
                                                    ">
                                                        <img src="{{ url('frontend/images/reload.png') }}" width="16">
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="add-tools">
                                    <h2>Tambah Data Peralatan Bawaan Pengunjung</h2>
                                    <div class="form-inline">
                                        <label for="scubaSet" class="sr-only">SCUBA SET</label>
                                        <input type="number" name="" class="form-control mb-2 mr-sm-2 input-scuba-set" id="scubaSet" required placeholder="SCUBA Set (Buah )">

                                        <label for="peralatanSeluncur" class="sr-only">Peralatan Seluncur</label>
                                        <input type="number" name="" class="form-control mb-2 mr-sm-2 input-alat-seluncur" id="peralatanSeluncur" required placeholder="Alat Seluncur (Buah)">

                                        <label for="kamera" class="sr-only">Kamera Bawah Air</label>
                                        <input type="number" name="" class="form-control mb-2 mr-sm-2 input-kamera" id="kamera" required placeholder="Kamera (Buah)">

                                        <label for="video" class="sr-only">Video Bawah Air</label>
                                        <input type="number" name="" class="form-control mb-2 mr-sm-2 input-jetski" id="video" required placeholder="Video (Buah)">

                                        <label for="kapal" class="sr-only">Kapal Pesiar</label>
                                        <input type="number" name="" class="form-control mb-2 mr-sm-2 input-kapal" id="kapal" required placeholder="Kapal (Buah)">

                                        <button type="button" role="button" class="btn btn-add-tools mb-2 px-4" onclick="addEquipment()">
                                            Set Peralatan
                                        </button>
                                    </div>
                                </div>
                                <div class="note-tools mt-2 mb-0">
                                    <h3>Catatan</h3>
                                    <p>
                                        Jika Tidak Membawa Peralatan Cukup Kosongkan Saja
                                    </p>
                                </div>
                                <hr>
                                <div class="upload-research-education">
                                    <h2>Upload Form Pengajuan Untuk Penelitian dan Pendidikan</h2>
                                    <div class="custom-file mb-2">
                                        <label class="custom-file-label" for="inputFormulir">Upload Formulir Kegiatan Penelitian / Pendidikan</label>
                                        <input type="file" name="formulir_file" class="custom-file-input mb-2 mr-sm-2 input-formulir" id="inputFormulir" required>
                                    </div>
                                </div>
                                <div class="note-research mt-2 mb-0">
                                    <h3>Catatan</h3>
                                    <p>
                                        Upload Form Hanya Untuk Pengaju yang Melakukan Kunjungan Penelitian / Pendidikan
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Detail Tentang Kawasan -->
                    <div class="col-lg-4">
                        <div class="card card-details card-right" data-aos="fade-up">
                            <h2>Konfirmasi Data Pengajuan Masuk Kawasan</h2>

                            <hr>

                            <table class="conservation-checkout">
                                <tr class="mb-2">
                                    <th width="50%">Tujuan Pengajuan</th>
                                    <td width="50%" class="text-right">
                                        Pariwista
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <th width="50%">Jumlah Hari</th>
                                    <td width="50%" class="text-right" id="total-hari">
                                        {{$diff}} Hari
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <th width="50%">Jumlah Pengunjung</th>
                                    <td width="50%" class="text-right" id="total-visitor">
                                        {{count($item->transaction_details)}} Orang
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <th width="50%">Biaya Pengajuan Izin</th>
                                    <td width="50%" class="text-right" id="total-visitor-price">
                                        Rp {{ $item->permit_application_fee }}
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <th width="50%">Biaya Bawaan Pengunjung</th>
                                    <td width="50%" class="text-right" id="total-equipment-price">
                                        Rp {{ $item->visitor_charges }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Total Biaya Pengajuan</th>
                                    <td width="50%" class="text-right total-price" id="submission-total">
                                        Rp {{ $item->total_transaction }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- Button Daftar -->
                        <div class="join-container" data-aos="fade-up">
                            <!-- <a class="btn btn-block btn-join-now mt-3 py-2" data-toggle="modal" data-target="#staticBackdrop">
                                Daftar Pengajuan Izin Masuk Kawasan
                            </a> -->
                            <button type="button" class="btn btn-block btn-join-now mt-3 py-2" data-toggle="modal" data-target="#staticBackdrop">
                                Daftar Pengajuan Izin Masuk Kawasan
                            </button>
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">
                                            Apa Anda Yakin?
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Data yang sudah anda inputkan tidak dapat dirubah
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="button" role="button" onclick="submitSubmission()" class="btn btn-primary">
                                            Lanjutkan
                                        </button>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('addon-script')
    {{-- Gijgo Script --}}
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.js') }}"></script>
    <script src="{{ url('frontend/libraries/momentJs/moment.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Gijgo
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/calendar_icon.png') }}" height="19">'
                }
            });
            $('.datepicker1').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/calendar_icon.png') }}" height="19">'
                }
            });
        });

        function changeDate()
        {
            const tanggal_masuk = $('#tanggal_masuk').val();
            const tanggal_keluar = $('#tanggal_keluar').val();
            if (tanggal_masuk != '' && tanggal_keluar != '') {
                // Moment Js
                var start = moment(tanggal_masuk, "MM/DD/YYYY");
                var end = moment(tanggal_keluar, "MM/DD/YYYY");

                //Difference in number of days
                const diff = moment.duration(end.diff(start)).asDays();

                $('#total-hari').text(`${diff} Hari`)
                updateVisitorPrice()
            }
        }

        function labelButtonImageVisitor(){
            $('#labelIdentityImage').text('KTP/KK/Passport')
        }

        function addImageVisitor(e){
            const numBefore = $('.row-visitor').length;
            let num = $('.row-visitor').length + 1;
            let idx = $('.row-visitor').length - 1;
            labelButtonImageVisitor()
            if($(`#input-image-${numBefore}`).length > 0 && $(`#input-image-${numBefore}`).val().length == 0){
                $(`#row-visitor-${numBefore}`).remove().after(function(){
                    num = $('.row-visitor').length + 1;
                    idx = $('.row-visitor').length - 1;
                })
            }

            $('#list-visitor').append(`
                <tr class="row-visitor" id="row-visitor-${num}" style="display:none">
                    <td class="align-middle">
                        <span id="span-name-${num}"></span>
                        <input type="hidden" id="input-name-${num}" name="visitor[${idx}][name]"/>
                    </td>
                    <td class="align-middle">
                        <span id="span-citizen-${num}"></span>
                        <input type="hidden" id="input-citizen-${num}" name="visitor[${idx}][citizen]"/>
                    </td>
                    <td class="align-middle">
                        <span id="span-phoneNumber-${num}"></span>
                        <input type="hidden" id="input-phoneNumber-${num}" name="visitor[${idx}][phone_number]"/>
                    </td>
                    <td class="align-middle">
                        <span id="span-address-${num}"></span>
                        <input type="hidden" id="input-address-${num}" name="visitor[${idx}][address]"/>
                    </td>
                    <td>
                        <input type="file" style="display:none" id="input-image-${num}" onchange="changeVisitorImage(${num})" name="visitor[${idx}][image]"/>
                        <img height="70" id="preview-identity-${num}">
                    </td>
                    <td class="align-middle">
                        <a href="#" onclick="removeVisitor(this)">
                            <img src="{{ url('frontend/images/cancel_icon.png') }}" width="10">
                        </a>
                    </td>
                    <input type="hidden" id="input-price-${num}" name="price" class="visitor-price"/>
                </tr>
            `).after(function(){
                $(`#input-image-${num}`).click()
            });   
            
        }

        function changeVisitorImage(num){
            const nameImage  = $(`#input-image-${num}`).val().replace(/C:\\fakepath\\/i, '')
            $('#labelIdentityImage').text(nameImage)
            previewFile(`#input-image-${num}`, `#preview-identity-${num}`)
        }

        function addVisitor()
        {
            const name = $('#inputName').val();
            const citizen = $('#inputCitizen').val();
            const address = $('#inputAddress').val();
            const phoneNumber = $('#inputPhoneNumber').val();
            const num = $('.row-visitor').length;

            if (validationVisitor(num)) {
                $(`#row-visitor-${num}`).show()
                const price = getVisitorPrice();
                $(`#span-name-${num}`).text(name)
                $(`#span-citizen-${num}`).text(citizen)
                $(`#span-phoneNumber-${num}`).text(address)
                $(`#span-address-${num}`).text(phoneNumber)

                $(`#input-name-${num}`).val(name)
                $(`#input-citizen-${num}`).val(citizen)
                $(`#input-phoneNumber-${num}`).val(phoneNumber)
                $(`#input-address-${num}`).val(address)
                $(`#input-price-${num}`).val(price)
                updateTotalVisitor()
                updateVisitorPrice()
                resetAddVisitor()
                submissionTotal()
                labelButtonImageVisitor()
            }
        }

        function validationVisitor(num)
        {
            const name = $('#inputName').val();
            const citizen = $('#inputCitizen').val();
            const address = $('#inputAddress').val();
            const phoneNumber = $('#inputPhoneNumber').val();
            const identityImage = $(`#input-image-${num}`)[0].files.length ?? 0

            if (name == '' || name == null) {
                alert('Nama Belum Diisi');
                return false;
            } else if (citizen == '' || citizen == null) {
                alert('Kebangasaan Belum Diisi');
                return false;
            } else if (address == '' || address == null) {
                alert('Alamat Belum Diisi');
                return false;
            } else if (phoneNumber == '' || phoneNumber == null) {
                alert('Nama Belum Diisi');
                return false;
            } else if (identityImage == 0) {
                alert('Gambar Belum Diisi');
                return false;
            }

            return true;
        }

        function updateTotalVisitor()
        {
            const totalVisitor = $('.row-visitor').length;
            $('#total-visitor').text(`${totalVisitor} Orang`);
        }

        function removeVisitor(e)
        {
            const confirms = confirm('Apakah Anda Yakin Menghapus Data Ini?');
            if (confirms) {
                $(e).parents('tr').remove();
                updateTotalVisitor()
                updateVisitorPrice()
                submissionTotal()
            }

        }

        function getVisitorPrice()
        {
            const mstPrices = {!! $price !!}
            const citizen = $('#inputCitizen option:selected').val();
            const price = mstPrices.find(x => x.citizen == citizen).price;
            return price;
        }

        function updateVisitorPrice()
        {
            const tanggal_masuk = $('#tanggal_masuk').val();
            const tanggal_keluar = $('#tanggal_keluar').val();
            // Moment Js
            var start = moment(tanggal_masuk, "MM/DD/YYYY");
            var end = moment(tanggal_keluar, "MM/DD/YYYY");
            //Difference in number of days
            const diff = moment.duration(end.diff(start)).asDays();

            let totalVisitorPrice = 0;
            $('.visitor-price').each(function(i, obj) {
                totalVisitorPrice += parseFloat($(this).val());
            });
            $('#total-visitor-price').text(`Rp ${totalVisitorPrice * diff}`)

            submissionTotal() 
        }

        function resetAddVisitor()
        {
            $('#inputName').val('');
            $('#inputCitizen').val('');
            $('#inputAddress').val('');
            $('#inputPhoneNumber').val('');
            $('#inputIdentity').val(null);
        }

        function previewFile(input, preview){
            var file = $(input).get(0).files[0];
    
            if(file){
                var reader = new FileReader();
    
                reader.onload = function(){
                    $(preview).attr("src", reader.result);
                }
    
                reader.readAsDataURL(file);
            }
        }

        function addEquipment()
        {
            const equipment = {!! $equipment !!};
            const scubaSet = $('#scubaSet').val() || 0;
            const peralatanSeluncur = $('#peralatanSeluncur').val() || 0;
            const kamera = $('#kamera').val() || 0;
            const video = $('#video').val() || 0;
            const kapal = $('#kapal').val() || 0;

            // Masukan Value
            $('#value-scuba').text(scubaSet)
            $('#value-peralatan-seluncur').text(peralatanSeluncur)
            $('#value-kamera').text(kamera)
            $('#value-video').text(video)
            $('#value-kapal').text(kapal)

            // Store Ke DB
            $('[name="scuba"]').val(scubaSet)
            $('[name="peralatan_seluncur"]').val(peralatanSeluncur)
            $('[name="kamera"]').val(kamera)
            $('[name="video"]').val(video)
            $('[name="kapal"]').val(kapal)

            // Hitung Harga
            const priceScubaSet = equipment.find(x => x.slug == 'scuba-set').equipment_price * scubaSet;
            const priceSeluncur = equipment.find(x => x.slug == 'peralatan-selancar').equipment_price * peralatanSeluncur;
            const priceKamera = equipment.find(x => x.slug == 'kamera-bawah-air').equipment_price * kamera;
            const priceVideo = equipment.find(x => x.slug == 'video-bawah-air').equipment_price * video;
            const priceKapal = equipment.find(x => x.slug == 'kapal-pesiar').equipment_price * kapal;

            const total = priceScubaSet + priceSeluncur + priceKamera + priceVideo + priceKapal;

            $('#total-equipment-price').text(`Rp ${total}`)

            // Reset Peralatan
            resetFormEquipment()
            submissionTotal()
        }

        function resetFormEquipment()
        {
            $('#scubaSet').val('');
            $('#peralatanSeluncur').val('');
            $('#kamera').val('');
            $('#video').val('');
            $('#kapal').val('');
        }

        function resetEquipment()
        {
            $('#value-scuba').text('0')
            $('#value-peralatan-seluncur').text('0')
            $('#value-kamera').text('0')
            $('#value-video').text('0')
            $('#value-kapal').text('0')

            // Reset Harga
            $('#total-equipment-price').text(`Rp 0`)
            submissionTotal()
        }

        function submissionTotal()
        {
            const totalVisitorPrice = $('#total-visitor-price').text().replace("Rp ", '')
            const totalEquipmentPrice = $('#total-equipment-price').text().replace("Rp ", '')

            const submissionTotal = (parseFloat(totalVisitorPrice)) + parseFloat(totalEquipmentPrice);
            // console.log(totalVisitorPrice, diff);

            $('#submission-total').text(`Rp ${submissionTotal}`)
        }

        function submitSubmission()
        {
            const data = new FormData($('#submit-submission')[0]);
           
            $.ajax({
                url: '{{ route('submission-store', $slug) }}',
                data: data,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(data){
                    window.location.href = '{{ route('successSubmission') }}';
                }
            });
        }
    </script>
@endpush