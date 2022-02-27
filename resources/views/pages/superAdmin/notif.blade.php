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

                            <div class="section-notification-entry-submission text-left">
                                <p class="entry-submission">Pengajuan Izin Masuk Kawasan</p>
                                @forelse ($entrySubmissions as $entry)
                                    <div class="card p-2 entry-submission-card">
                                        <a href="{{ route('AdminchangeSubmissionStatus', $entry->id) }}" class="d-flex text-primary" target="__blank">
                                            <i class="fas fa-check my-auto mr-2"></i>
                                            <p class="my-auto">{{ \Illuminate\Support\Str::of($entry->user->name)->words(1, '') }} Melakukan Pengajuan : {{ $entry->conservation_area->name }}</p>
                                        </a>
                                    </div>
                                @empty
                                    <div class="card p-2 entry-submission-card">
                                        <a class="d-flex text-primary">
                                            <p class="my-auto">Belum Ada Pengajuan Yang Masuk!</p>
                                        </a>
                                    </div>
                                @endforelse
                            </div>

                            <div class="section-notification-payment text-left">
                                <p class="payment">Pembayaran Retribusi Izin Masuk Kawasan</p>
                                @forelse ($payments as $payment)
                                    <div class="card p-2 payment-card">
                                        <a href="{{ route('AdminchangeTransactionStatus', $payment->id) }}" class="d-flex text-primary" target="__blank">
                                            <i class="fas fa-check my-auto mr-2"></i>
                                            <p class="my-auto">Ada Pembayaran Baru Dari {{ \Illuminate\Support\Str::of($payment->user->name)->words(1, '') }}</p>
                                        </a>
                                    </div>
                                @empty
                                    <div class="card p-2 payment-card">
                                        <a class="d-flex text-primary">
                                            <p class="my-auto">Belum Ada Pengajuan Yang Ditolak!</p>
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
