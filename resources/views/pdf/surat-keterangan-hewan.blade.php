<!-- resources/views/pdf/surat-keterangan-hewan.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Hewan Keluar</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            text-align: justify;
            font-size: 16px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }


        .header {
            position: relative;
            text-align: center;
            line-height: 1.5;
        }

        .header .logo {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 20;
        }

        .header .logo img {
            width: 80px;
            height: 80px;
        }

        .header h2 {
            font-size: 18px;
            text-transform: uppercase;
            margin: 0;
        }

        .header p {
            font-size: 13px;
            margin: 0;
        }

        /* Mengatur jarak antara gambar dan teks agar tidak bertumpuk */
        .header .header-text {
            padding-left: 0px;
            /* Beri padding kiri agar teks tidak menutupi gambar */
        }

        .content h3 {
            margin: 0px;
            margin-top: 5px;
            text-decoration: underline;
            text-align: center;
            font-size: 16px;
        }

        .content p {
            margin: 0px;
            text-align: center;
            font-size: 16px;
            margin-top: 4px;
            margin-bottom: 30px;
        }

        .table-hewan {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }

        .table-hewan td {
            border: 1px solid black;
            padding: 5px;
        }

        .footer .table {
            margin-top: 30px;
            width: 55%;
            margin-left: 60%;
        }

        .text-table {
            text-align: center;
        }

        .kepala-desa {
            font-weight: bold;
            margin: 0px;
        }

        .nama-kepala-desa {
            font-weight: bold;
            margin-top: 50px;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="../public/landing/images/logo-bonebol.png" alt="Logo Bonebol">
            </div>
            <h2>Pemerintah Kabupaten Bonebolango</h2>
            <h2>Kecamatan Kabila Bone</h2>
            <h2>Desa Uabanga</h2>
            <p>Jalan Trans Sulawesi No. 01 Desa Uabanga Kecamatan Bonepantai, Kode Pos 96585</p>
        </div>
        <hr>
        <div class="content">
            <h3>SURAT KETERANGAN HEWAN KELUAR</h3>
            <p>NOMOR : {{ $no_surat }}</p>

            <div>Yang bertanda tangan dibawah ini :</div>
            <div style="margin: 20px 0">
                <table>
                    <tr>
                        <td style="padding-right: 50px">Nama Lengkap</td>
                        <td>:</td>
                        <td>MARTEN H. SALEH</td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>Kepala Desa</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>Desa Uabanga Kec. Bonepantai</td>
                    </tr>
                </table>
            </div>

            <div>Dengan ini menerangkan kepada :</div>
            <div style="margin: 20px 0">
                <table>
                    <tr>
                        <td style="padding-right: 50px">Nama Lengkap</td>
                        <td>:</td>
                        <td>{{ ucfirst($name) }}</td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td>{{ $age }} Tahun</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ ucfirst($job) }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ ucfirst($address) }}</td>
                    </tr>
                </table>
            </div>

            <div style="margin: 20px 0">
                Bahwa yang bersangkutan benar-benar memiliki {{ $total_animals }} ekor {{ $animal }} dengan
                ciri-ciri sebagai berikut:
            </div>

            <table class="table-hewan">
                <tr>
                    <td>Jantan / Betina</td>
                    <td>Warna Bulu</td>
                    <td>Cap / Merk</td>
                    <td>Jumlah</td>
                </tr>
                @foreach ($animals as $index => $animal)
                    <tr>
                        <td>{{ $animal['gender'] }}</td>
                        <td>{{ $animal['skin_color'] }}</td>
                        <td>{{ $animal['brand'] }}</td>
                        <td>{{ $animal['total'] }}</td>
                    </tr>
                @endforeach
            </table>


            <div style="margin: 1px 0; @if (count($animals) >= 5) margin-top: 240px; @endif">
                Demikian surat keterangan ini diberikan kepada yang bersangkutan pada keperluan pengurusan Rekomendasi
                SKCK dari Polsek Bonepantai
            </div>

            <div class="footer">
                <div class="table">
                    <table>
                        <tr>
                            <td>Dikeluarkan di</td>
                            <td>:</td>
                            <td>Uabanga</td>
                        </tr>
                        <tr>
                            <td>Pada Tanggal</td>
                            <td>:</td>
                            <td>{{ date('d-m-Y') }}</td>
                        </tr>
                    </table>

                    <div class="text-table">
                        <p class="kepala-desa" style="margin-bottom: 65px">Kepala Desa Uabanga</p>
                        <p class="nama-kepala-desa" style="margin-bottom: 0px">MARTEN H. SALEH</p>
                        <p>NIP : 19791209 201001 1 003</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
