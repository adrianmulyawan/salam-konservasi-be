@extends('layouts.payment')

@section('title', 'Pembayaran Retribusi')

@section('content')
    {{-- Content --}}
    <main> 
        <section class="section-transaction-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 pl-lg-0" data-aos="fade-up">
                        <div class="card">
                            <div class="section-transaction-header text-center">
                                <h3>Pembayaran</h3>
                                <p>Selesaikan Proses Pembayaran <br>
                                    Untuk Mendapatkan Surat Izin Masuk Kawasan <br>
                                    Konservasi Perairan Daerah
                                </p>
                            </div>
                            <hr>
                            <div class="section-transaction-total text-center">
                                <h3>Total Pembayaran Retribusi</h3>
                                <p>
                                    Rp 250.000,00
                                </p>
                            </div>

                            <div class="row justify-content-center">
                                <div class="bank mt-3">
                                    <div class="bank-item">
                                        <img src="{{ url('frontend/images/credit-card-ic.svg') }}" class="bank-image" alt="credit-card">
                                        <div class="description">
                                            <h3 class="agency-name">Dinas Kelautan dan Perikanan</h3>
                                            <p class="agency-bank">
                                                Bank Central Asia 
                                                <br>
                                                0881 8829 8800
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
            
                                    <div class="bank-item">
                                        <img src="{{ url('frontend/images/credit-card-ic.svg') }}" class="bank-image" alt="credit-card">
                                        <div class="description">
                                            <h3 class="agency-name">Dinas Kelautan dan Perikanan</h3>
                                            <p class="agency-bank">
                                                Bank Mandiri
                                                <br>
                                                0881 8829 8800
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row section-transaction-upload justify-content-center">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <label class="label-header" for="inputNamaPemilikRekening">Nama Pemilik Rekening</label>
                                        <input type="text" name="account_owner" class="form-control" id="inputNamaPemilikRekening" placeholder="Nama Pemilik Rekening" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="label-header" for="uploadBuktiTransfer">Unggah Bukti Transfer</label>
                                        <div class="custom-file mb-2">
                                            <label class="custom-file-label" for="uploadBuktiTransfer">Unggah Bukti Transfer</label>
                                            <input type="file" name="evidence_of_transfer" class="custom-file-input mb-2 mr-sm-2 input-formulir" id="uploadBuktiTransfer" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-accept success">Saya Sudah Membayar</button>
                                    <a href="{{ route('dashboardPayment') }}" class="btn btn-block btn-back">Kembali Ke Pembayaran Retribusi</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('addon-script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('.success').click(function () {    
            swal("Pembayaran Berhasil Dilakukan!", "Surat Izin Masuk Kawasan Segera Dikirimkan", "success");
        });
    </script>
@endpush