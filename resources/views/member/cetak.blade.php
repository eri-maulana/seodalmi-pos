<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Member</title>
    <style>
        .box {
            position: relative;
            margin: 3px;
        }

        .card {
            width: 85.60mm;
        }

        .logo {
            position: absolute;
            top: 30pt;
            right: 0pt;
            font-size: 16pt;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: #000 !important;
        }

        .logo p {
            text-align: right;
            margin-right: 16pt;
        }

        .logo img {
            position: absolute;
            margin-top: -25pt;
            width: 80px;
            height: 80px;
            right: 25pt;
            top: -10pt;

        }

        .nama {
            position: absolute;
            top: 103pt;
            left: 50pt;
            font-size: 8pt;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: #000 !important;
        }

        .telpon {
            position: absolute;
            top: 115pt;
            left: 50pt;
            font-size: 8pt;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: #000 !important;
        }

        .barcode {
            position: absolute;
            top: 90pt;
            left: .860rem;
            border: 1px solid #fff;
            padding: .5px;
            background: #fff;
        }

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <section style="border: 1px solid #fff">
        <table width="100%">
            @foreach ($datamember as $key => $data)
                <tr>
                    @foreach ($data as $item)
                        <td class="text-center">
                            <div class="box">
                                <img src="{{ asset('img/bg-card.jpg') }}" alt="card" width="100%">
                                <div class="logo">
                                    <p>{{ config('app.name') }}</p>
                                    <img src="{{ asset('img/sdm.png') }}" alt="logo">
                                </div>
                                <div class="nama"> {{ $item->nama }} </div>
                                <div class="telpon">{{ $item->telpon }}</div>
                                <div class="barcode text-left">
                                    <img src="data:image/png;base64,{{ DNS2D::getBarcodePNG("$item->kode_member", 'QRCODE') }}"
                                        alt="qrcode" heigh="45" width="45">
                                </div>
                            </div>

                        </td>
                        @if (count($datamember) == 1)
                            <td class="text-center" style="width: 50%;"></td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </table>
    </section>
</body>

</html>
