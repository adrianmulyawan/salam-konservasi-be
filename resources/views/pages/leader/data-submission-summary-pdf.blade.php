<!DOCTYPE html>
<html>
<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    th {
      text-align: center;
    }

    td {
      text-align: center;
    }

    th.no {
      width: 30px;
    }

    .no_urut {
      text-align: center;
    }

    .none {
      text-align: center;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
  <title>Rekapan Pengajuan Izin Masuk Kawasan Konservasi</title>
</head>
<body>

  <h2>Rekapan Pengajuan Izin Masuk Kawasan</h2>

  <table>
    <tr>
      <th class="no">No</th>
      <th>Kode Transaksi</th>
      <th>Nama Pemohon</th>
      <th>Kawasan Tujuan</th>
      <th>Tujuan Masuk Kawasan</th>
      <th>Lama Masuk Kawasan</th>
    </tr>
    <?php $noUrut = 0; ?>
    @forelse ($datas as $data)
      <tr class="center-text">
        <td>{{ $noUrut += 1 }}</td>
        <td>{{ $data->transaction_code }}</td>
        <td>{{ $data->user->name }}</td>
        <td>{{ $data->conservation_area->name }}</td>
        <td>{{ $data->purpose->purpose_name }}</td>
        <td>{{ \Carbon\Carbon::create($data->date_of_entry)->format('d F Y') }} - {{ \Carbon\Carbon::create($data->out_date)->format('d F Y') }}</td>
      </tr>
    @empty
        <tr>
          <td colspan="6" class="none">Belum Ada Data Apapun!</td>
        </tr>
    @endforelse
  </table>

  <script>
    window.print()
  </script>
</body>
</html>

