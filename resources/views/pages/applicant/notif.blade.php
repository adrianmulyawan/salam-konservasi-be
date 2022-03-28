@extends('layouts.notif')

@section('title', 'Notifikasi')

@section('content')
    <main> 
        <section class="section-notification-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 pl-lg-0" data-aos="fade-up">
                        <div class="card">
                            <div class="section-notification-header text-center">
                                <h3>Notifikasi</h3>
                            </div>

                            <hr>

                            <div class="section-notification-submission-approved text-left">
                                <p class="submission-approved">Pengajuan Disetujui</p>
                                @forelse ($notifPendings as $pending)
                                    <div class="card p-2 submission-approved-card">
                                        <a href="{{ route('dashboardSubmissionPending', $pending->id) }}" class="d-flex text-primary" target="__blank">
                                            <i class="fas fa-check my-auto mr-2"></i>
                                            <p class="my-auto">Pengajuan Izin Masuk {{ $pending->conservation_area->name }} Sedang Diproses!</p>
                                        </a>
                                    </div>
                                @empty
                                    <div class="card p-2 submission-approved-card">
                                        <a class="d-flex text-primary">
                                            <p class="my-auto">Anda Belum Melakukan Pengajuan Apapun!</p>
                                        </a>
                                    </div>
                                @endforelse
                            </div>

                            <div class="section-notification-submission-approved text-left">
                                <p class="submission-approved">Pengajuan Disetujui</p>
                                @forelse ($notifAlloweds as $allow)
                                    <div class="card p-2 submission-approved-card">
                                        <a href="{{ route('dashboardSubmissionApproved', $allow->id) }}" class="d-flex text-primary" target="__blank">
                                            <i class="fas fa-check my-auto mr-2"></i>
                                            <p class="my-auto">Pengajuan Izin Masuk {{ $allow->conservation_area->name }} Telah Disetujui!</p>
                                        </a>
                                    </div>
                                @empty
                                    <div class="card p-2 submission-approved-card">
                                        <a class="d-flex text-primary">
                                            <p class="my-auto">Belum Ada Pengajuan Yang Disetujui!</p>
                                        </a>
                                    </div>
                                @endforelse
                            </div>

                            <div class="section-notification-submission-rejected text-left">
                                <p class="submission-rejected">Pengajuan Ditolak</p>
                                @forelse ($notifRejecteds as $rejected)
                                    <div class="card p-2 submission-rejected-card">
                                        <a href="{{ route('dashboardSubmissionRejected', $rejected->id) }}" class="d-flex text-primary" target="__blank">
                                            <i class="fas fa-check my-auto mr-2"></i>
                                            <p class="my-auto">Pengajuan Izin Masuk {{ $rejected->conservation_area->name }} Telah Ditolak, Anda Dapat Melakukan Pengajuan Ulang!</p>
                                        </a>
                                    </div>
                                @empty
                                    <div class="card p-2 submission-rejected-card">
                                        <a class="d-flex text-primary">
                                            <p class="my-auto">Belum Ada Pengajuan Yang Ditolak!</p>
                                        </a>
                                    </div>
                                @endforelse
                            </div>

                            <div class="section-notification-submission-failed text-left">
                                <p class="submission-failed">Pengajuan Gagal</p>
                                @forelse ($notifFaileds as $failed)
                                    <div class="card p-2 submission-failed-card">
                                        <a href="{{ route('dashboardSubmissionFailed', $failed->id) }}" class="d-flex text-primary" target="__blank">
                                            <i class="fas fa-check my-auto mr-2"></i>
                                            <p class="my-auto">Pengajuan Izin Masuk {{ $failed->conservation_area->name }} Gagal Dilakukan!</p>
                                        </a>
                                    </div>
                                @empty
                                    <div class="card p-2 submission-failed-card">
                                        <a class="d-flex text-primary">
                                            <p class="my-auto">Belum Ada Pengajuan Yang Gagal!</p>
                                        </a>
                                    </div>
                                @endforelse
                            </div>

                            <div class="section-notification-payment-paid-off text-left">
                                <p class="payment-paid-off">Pembayaran Telah Diproses</p>
                                @forelse ($paymentPaidOff as $paidOff)
                                    <div class="card p-2 payment-paid-off-card">
                                        <a href="{{ route('paymentPaidOff', $paidOff->id) }}" class="d-flex text-primary" target="__blank">
                                            <i class="fas fa-check my-auto mr-2"></i>
                                            <p class="my-auto">Pembayaran Retribusi Izin Masuk {{ $paidOff->conservation_area->name }} Telah Diproses Admin!</p>
                                        </a>
                                    </div>
                                @empty
                                    <div class="card p-2 payment-paid-off-card">
                                        <a class="d-flex text-primary">
                                            <p class="my-auto">Belum Ada Pembayaran Diproses!</p>
                                        </a>
                                    </div>
                                @endforelse
                            </div>

                            <div class="section-notification-payment-failed text-left">
                                <p class="payment-failed">Pembayaran Gagal</p>
                                @forelse ($paymentFailed as $failed)
                                    <div class="card p-2 payment-failed-card">
                                        <a href="{{ route('paymentFailed', $failed->id) }}" class="d-flex text-primary" target="__blank">
                                            <i class="fas fa-check my-auto mr-2"></i>
                                            <p class="my-auto">Pembayaran Retribusi Izin Masuk {{ $failed->conservation_area->name }} Tidak Dibayarkan!</p>
                                        </a>
                                    </div>
                                @empty
                                    <div class="card p-2 payment-failed-card">
                                        <a class="d-flex text-primary">
                                            <p class="my-auto">Belum Ada Pembayaran Yang Gagal!</p>
                                        </a>
                                    </div>
                                @endforelse
                            </div>

                            <div class="section-notification-ticket text-left">
                                <p class="ticket">Surat Izin Masuk Kawasan</p>
                                @forelse ($tickets as $ticket)
                                    <div class="card p-2 ticket-card">
                                        <a href="{{ route('areaEntryPermit') }}" class="d-flex text-primary" target="__blank">
                                            <i class="fas fa-check my-auto mr-2"></i>
                                            <p class="my-auto">Surat Izin Masuk {{ $ticket->conservation_area->name }} Telah Terbit!</p>
                                        </a>
                                    </div>
                                @empty
                                    <div class="card p-2 ticket-card">
                                        <a class="d-flex text-primary">
                                            <p class="my-auto">Belum Ada Surat Izin Masuk Apapun</p>
                                        </a>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
