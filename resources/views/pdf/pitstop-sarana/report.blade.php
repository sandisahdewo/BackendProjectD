<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pitstop Sarana {{ $pitstopSarana->line }} - {{ $pitstopSarana->tanggal }} - {{ $pitstopSarana->shift_view }}</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <style>
        table{
            width: 100%;
            border-collapse: collapse;
        }
        .table-bordred table, th, td{
            border: 0.3px solid black;
            height: 10px;
            padding:5px;
        }
        .text-center{
            text-align: center;
        }
        p{
            font-size: 14px;
            padding:0;
            margin:0;
        }
        td{
            font-size: 10px
        }
        th{
            font-size: 10px
        }
    </style>
</head>
<body>
    <table class="table-bordered">
        <thead>
            <tr>
                <td colspan="2" rowspan="4" class="text-center">
                    <p>Logo</p>
                </td>
                <td colspan="3" rowspan="4" style="vertical-align:middle">
                    <p><b>PT. SAPTAINDRA SEJATI</b></p>
                    <p><b>ADARO MINE OPERATION</b> </p>
                    <p><b>LOGISTIC DEPARTMENT</b></p>
                </td>
                <td colspan="2"><b>DRIVER</b></td>
                <td colspan="4">{{ $pitstopSarana->driver }}</td>
            </tr>
            <tr>
                <td colspan="2"><b>FUELMAN</b></td>
                <td colspan="4">{{ $pitstopSarana->rfuelman->nama }}</td>
            </tr>
            <tr>
                <td colspan="2"><b>TANGGAL</b></td>
                <td colspan="4">{{ date_view($pitstopSarana->tanggal) }}</td>
            </tr>
            <tr>
                <td colspan="2"><b>SHIFT</b></td>
                <td colspan="4">{{ $pitstopSarana->shift_view }}</td>
            </tr>
            <tr>
                <td colspan="11" class="text-center" style="font-size:12px"><b>LOG SHEET FUEL</b></td>
            </tr>
            <tr>
                <td colspan="5"><b>WHS NUMBER : </b> {{ $pitstopSarana->whs_number }}</td>
                <td colspan="6"><b>LOCATION : </b> {{ $pitstopSarana->lokasi }}</td>
            </tr>
            <tr>
                <th class="text-center" rowspan="2" style="vertical-align:middle">No</th>
                <th class="text-center" rowspan="2" style="vertical-align:middle">Kode Unit</th>
                <th class="text-center" rowspan="2" style="vertical-align:middle">Model Unit</th>
                <th class="text-center" rowspan="2" style="vertical-align:middle">HM/KM</th>
                <th class="text-center" rowspan="2" style="vertical-align:middle">Qty Solar</th>
                <th class="text-center" rowspan="2" style="vertical-align:middle">Jam</th>
                <th colspan="2" class="text-center">User</th>
                <th class="text-center" rowspan="2" style="vertical-align:middle">FM Awal</th>
                <th class="text-center" rowspan="2" style="vertical-align:middle">FM Akhir</th>
                <th class="text-center" rowspan="2" style="vertical-align:middle">No Polisi</th>
            </tr>
            <tr>
                <th class="text-center">Nama</th>
                <th class="text-center">TTD</th>
            </tr>
        </thead>
        <tbody>
            @php
                $qty_solar = 0;
            @endphp
            @foreach($pitstopSarana->pitstopSaranaDetail as $key => $pitstop)
            @php
                $qty_solar += $pitstop->qty_solar
            @endphp
            <tr>
                <td class="text-center" style="height:10px">{{ ++$key }}</td>
                <td class="text-center">{{ $pitstop->unit->kode_unit }}</td>
                <td>{{ $pitstop->unit->tipe_unit }}</td>
                <td class="text-center">{{ $pitstop->hm_km }}</td>
                <td class="text-center">{{ $pitstop->qty_solar }}</td>
                <td class="text-center">{{ $pitstop->jam }}</td>
                <td>{{ $pitstop->nama_user }}</td>
                <td></td>
                <td class="text-center">{{ $pitstop->flow_meter_awal }}</td>
                <td class="text-center">{{ $pitstop->flow_meter_akhir }}</td>
                <td>{{ $pitstop->unit->no_polisi }}</td>
            </tr>
            @endforeach

            @php
                $flow_meter_awal = $pitstopSarana->pitstopSaranaDetail->first()->flow_meter_awal;
                $flow_meter_akhir = $pitstopSarana->pitstopSaranaDetail->last()->flow_meter_akhir;
                $selisih_flow_meter = $flow_meter_akhir - $flow_meter_awal;
                $qty_refueling = $selisih_flow_meter - $qty_solar;
                $prosentase = (($qty_refueling - $selisih_flow_meter) / $selisih_flow_meter) * 100/100;
            @endphp
            <tr>
                <td colspan="4" class="text-center" rowspan="5" style="vertical-align:middle"><b>TOTAL QUANTITY REFUELING</b></td>
                <td class="text-center" rowspan="5" style="vertical-align:middle"><b>{{ $qty_solar }}</b></td>
                <td colspan="6">Flow Meter Awal Shift: <b>{{ $flow_meter_awal }}<b></td>
            </tr>

            <tr>
                <td colspan="6">Flow Meter Akhir Shift: <b>{{ $flow_meter_akhir }}<b></td>
            </tr>
            <tr>
                <td colspan="6">Selisih Flow Meter: <b>{{ $selisih_flow_meter }}</b></td>
            </tr>
            <tr>
                <td colspan="6">QTY Refueling - Selisih Flow Meter: <b>{{ $qty_refueling }}</b></td>
            </tr>
            <tr>    
                <td colspan="6">
                    (QTY Refueling - Selisih Flow Meter) / Selisih Flow Meter x 100% = <b>{{ $prosentase }}</b>
                </td>
            </tr>
        </tbody>
    </table>

    <table style="margin-top:20px">
        <tr>
            <td width="33%">
                <table style="width:100%">
                    <tr>
                        <td>Approved By:</td>
                    </tr>
                    <tr>
                        <td style="height:60px">
                            
                        </td>
                    </tr>
                    <tr>
                        <td>FOG:</td>
                    </tr>
                </table>
            </td>
            <td width="33%">
                <table style="width:100%">
                    <tr>
                        <td>Approved By:</td>
                    </tr>
                    <tr>
                        <td style="height:25px;vertical-align:bottom">
                            Testing Approve
                        </td>
                    </tr>
                    <tr>
                        <td>No Register Logsheet</td>
                    </tr>
                    <tr>
                        <td style="height:25px"></td>
                    </tr>
                </table>
            </td>
            <td width="33%">
                <table style="width:100%;">
                    <tr>
                        <td width="50%">Fuelman</td>
                        <td width="50%">Driver</td>
                    </tr>
                    <tr>
                        <td style="height:60px;vertical-align:bottom">
                            Nama: {{ $pitstopSarana->rfuelman->nama }}
                        </td>
                        <td style="height:60px;vertical-align:bottom">
                            Nama: 
                        </td>
                    </tr>
                    <tr>
                        <td>NIP:</td>
                        <td>NIP:</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>