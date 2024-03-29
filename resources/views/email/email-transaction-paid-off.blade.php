<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Notify</title>
    <style>
        body {
            background-color:#bdc3c7;
            margin:0;
        }
        .card {
            background-color:#fff;
            padding:20px;
            margin:20%;
            text-align:center;
            margin:0px auto;
            width: 720px; 
            max-width: 720px;
            margin-top:10%;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .img-top {
            max-width: 320px;
        }

        .title-card {
            margin-top: 20px
            text-align: center;
        }

        p.card-content {
            text-align: center;
        }

        p.copyright {
            text-align: center;
        }

        .garis {
            width: 75%;
        }

        .garis-bawah {
            width: 75%;
        }
        
    </style>
</head>
<body>
    <div class="card">
        <img src="{{ url('frontend/images/logo-salam-konservasi-email.png') }}" class="img-top">
        <h3 class="title-card" style="text-align: center">
            Hello {{ \Illuminate\Support\Str::of($data['name'])->words(1, '') }}, Pembayaran Retribusi Anda Telah Kami Proses
        </h3>

        <hr class="garis">

        <p class="card-content">
            Selamat, Pembayaran Retribusi Izin Masuk Kawasan Telah Kami Proses <br>
            Surat Izin Masuk Kawasan Konservasi Sedang Kami Proses <br>
            Silahkan Tunggu Update Email Dari Kami
        </p>

        @component('mail::button', ['url' => route('dashboardPayment')])
        Tekan Disini Untuk Pergi Ke Halaman
        @endcomponent

        <h4>Terima Kasih Sudah Menggunakan Layanan Kami</h4>

        <p class="copyright">
            Mengalami Masalah? Silahkan Tekan Link 
            <a href="https://wa.me/081258161143?text=Hi, saya ingin bertanya mengenai ...">Berikut</a>
        </p>

        <hr class="garis-bawah">

        <p class="copyright">&copy; Dinas Kelautan dan Perikanan Provinsi Kalimantan Barat</p>
    </div>
</body>
</html>