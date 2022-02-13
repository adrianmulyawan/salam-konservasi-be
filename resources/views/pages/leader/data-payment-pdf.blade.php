<!DOCTYPE html>
<html>
<head>
<style>
.customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.customers td, .customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

.customers tr:nth-child(even){background-color: #f2f2f2;}

.customers tr:hover {background-color: #ddd;}

.customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.customers td {
	text-align: right;
}

.header {
	text-align: center;
}
</style>
</head>
<body>

<h2>Pengajuan Izin Masuk: {{ $data->user->name }}</h2>

<table class="customers">
  <tr>
    <th>Kode Transaksi</th>
    <td colspan="2">{{ $data->transaction_code }}</td>
  </tr>

  <tr>
    <th>Name Pemohon</th>
    <td colspan="2">{{ $data->user->name }}</td>
  </tr>
  
  <tr>
    <th>Kepentingan</th>
    <td colspan="2">{{ $data->purpose->purpose_name }}</td>
  </tr>
  
  <tr>
    <th>Kawasan Tujuan</th>
    <td colspan="2">{{ $data->conservation_area->name }}</td>
  </tr>
  
  <tr>
    <th>Jumlah Orang Pergi</th>
    <td colspan="2">{{ $userCount }} Orang</td>
  </tr>
  
  <tr>
    <th>Lama Masuk Kawasan</th>
    <td colspan="2">{{ \Carbon\Carbon::create($data->date_of_entry)->format('d F Y') }} - {{ \Carbon\Carbon::create($data->out_date)->format('d F Y') }}</td>
  </tr>
  
  <tr>
    <th>Total Transaksi</th>
    <td colspan="2">Rp {{ number_format($data->total_transaction,2,',','.') }}</td>
  </tr>

  <tr>
    <th>Status Pengajuan</th>
    <td colspan="2">
      @if ($data->submission_status == "PENDING")
        BELUM DIPORSES
      @elseif ($data->submission_status == "ALLOWED")
        DISETUJUI
      @elseif ($data->submission_status == "REJECTED")
        DITOLAK
      @elseif ($data->submission_status == "FAILED")
        GAGAL
      @endif
    </td>
  </tr>

  <tr>
    <th>Status Pembayaran</th>
    <td colspan="2">
      @if ($data->payment_status == "PENDING")
        BELUM DIPORSES
      @elseif ($data->payment_status == "PAIDOFF")
        TERBAYAR
      @elseif ($data->payment_status == "FAILED")
        GAGAL
      @endif
    </td>
  </tr>
</table>

<h2>Data Pengunjung</h2>

<table class="customers">
  <tr>
    <th width="30px" style="text-align:center;">No</th>
    <th style="text-align:center;">Nama</th>
    <th width="50px" style="text-align:center;">Kebangsaan</th>
    <th style="text-align:center;">No Telpon</th>
    <th style="text-align:center;">Alamat</th>
  </tr>
  
  <?php $counter = 0; ?>
  @foreach ($details as $detail)
    <tr>
        <td style="text-align:center;">{{ $counter += 1 }}</td>
        <td style="text-align:center;">{{ $detail->name }}</td>
        <td style="text-align:center;">{{ $detail->citizen }}</td>
        <td style="text-align:center;">{{ $detail->phone_number }}</td>
        <td style="text-align:center;">{{ $detail->address }}</td>
    </tr>
  @endforeach
</table>

<h2>Data Peralatan Bawaan Pengunjung</h2>

<table class="customers">
    <tr>
        <th width="30px" style="text-align:center;">No</th>
        <th style="text-align:center;">Daftar Peralatan</th>
        <th style="text-align:center;">Jumlah Peralatan (Perbuah)</th>
    </tr>
  
 
    <?php $counter = 0; ?>
    @forelse ($equipments as $equipment)
        <tr>
            <td style="text-align:center;">{{ $counter += 1 }}</td>
            <td style="text-align:center;">{{ $equipment->equipment_name }}</td>
            <td style="text-align:center;">{{ $equipment->equipment_total }} Buah</td>
        </tr>
    @empty
        <tr>
            <td style="text-align:center;" colspan="3">Tidak Membawa Peralatan</td>
        </tr>
    @endforelse
</table>

<table class="customers" style="margin-top:25px;">
  <tr>
    <th style="text-align:center;">Surat Pengajuan Kegiatan Penelitian/Pendidikan</th>
  </tr>
  
  <tr>
    <td style="text-align:center;">{{ $data->educational_research_activity_form != null ? 'DIUNGGAH' : 'TIDAK MENGUNGGAH' }}</td>
  </tr>
</table>

<table class="customers" style="margin-top:25px;">
  <tr>
    <th style="text-align:center;">Status Pengajuan Izin Masuk Kawasan</th>
  </tr>
  
  <tr>
    <td style="text-align:center;">
        @if ($data->submission_status == "PENDING")
            BELUM DIPORSES
        @elseif ($data->submission_status == "ALLOWED")
            DISETUJUI
        @elseif ($data->submission_status == "REJECTED")
            DITOLAK
        @elseif ($data->submission_status == "FAILED")
            GAGAL
        @endif
    </td>
  </tr>
</table>

<table class="customers" style="margin-top:25px;">
  <tr>
    <th style="text-align:center;">Status Pembayaran Izin Masuk Kawasan</th>
  </tr>
  
  <tr>
    <td style="text-align:center;">
        @if ($data->payment_status == "PENDING")
            BELUM DIPORSES
        @elseif ($data->payment_status == "PAIDOFF")
            TERBAYAR
        @elseif ($data->payment_status == "FAILED")
            GAGAL
        @endif
    </td>
  </tr>
</table>

</body>
</html>


