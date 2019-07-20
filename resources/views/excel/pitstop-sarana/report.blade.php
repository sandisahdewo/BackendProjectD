<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <table class="table table-bordered table-condensed table-sm">
        <thead>
            <tr>
                <td colspan="2" rowspan="4" class="text-center">
                    <p>Logo</p>
                </td>
                <td colspan="3" rowspan="4" v-align="center">
                    <p><b>PT. SAPTAINDRA SEJATI</b></p>
                    <p><b>ADARO MINE OPERATION</b> </p>
                    <p><b>LOGISTIC DEPARTMENT</b></p>
                </td>
                <td colspan="2"><b>DRIVER</b></td>
                <td colspan="3">{{ $pitstopSarana->driver }}</td>
            </tr>
            <tr>
                <td colspan="2"><b>FUELMAN</b></td>
                <td colspan="3">{{ $pitstopSarana->rfuelman->nama }}</td>
            </tr>
            <tr>
                <td colspan="2"><b>TANGGAL</b></td>
                <td colspan="3">{{ date_view($pitstopSarana->tanggal) }}</td>
            </tr>
            <tr>
                <td colspan="2"><b>SHIFT</b></td>
                <td colspan="3">{{ $pitstopSarana->shift }}</td>
            </tr>
            <tr>
                <td colspan="10" class="text-center" style="font-size:20px"><b>LAPORAN PENGISIAN SOLAR PITSTOP SARANA</b></td>
            </tr>
            <tr>
                <td colspan="5"><b>WHS NUMBER : </b> {{ $pitstopSarana->whs_number }}</td>
                <td colspan="5"><b>LOCATION : </b> {{ $pitstopSarana->lokasi }}</td>
            </tr>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Kode Unit</th>
                <th class="text-center">Model Unit</th>
                <th class="text-center">HM/KM</th>
                <th class="text-center">Qty Solar</th>
                <th class="text-center">Jam</th>
                <th class="text-center">Nama User</th>
                <th class="text-center">FM Awal</th>
                <th class="text-center">FM Akhir</th>
                <th class="text-center">No Polisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pitstopSarana->pitstopSaranaDetail as $key => $pitstop)
            <tr>
                <td class="text-center">{{ ++$key }}</td>
                <td>{{ $pitstop->unit->kode_unit }}</td>
                <td>{{ $pitstop->unit->tipe_unit }}</td>
                <td>{{ $pitstop->hm_km }}</td>
                <td>{{ $pitstop->qty_solar }}</td>
                <td>{{ $pitstop->jam }}</td>
                <td>{{ $pitstop->nama_user }}</td>
                <td>{{ $pitstop->flow_meter_awal }}</td>
                <td>{{ $pitstop->flow_meter_akhir }}</td>
                <td>{{ $pitstop->unit->no_polisi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>