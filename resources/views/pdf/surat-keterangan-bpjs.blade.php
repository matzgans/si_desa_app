<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan BPJS</title>
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

        .page-break {
            page-break-after: always;
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

        .content .table {
            margin-left: 30px;
            margin-top: 20px;
            margin-bottom: 20px;
        }



        .footer .table {
            margin-top: 30px;
            width: 55%;
            margin-left: 60%;
        }

        .footer .table .text-table {
            text-align: center;
            margin-right: 80px;
            font-size: 16px;
        }

        .footer .table .text-table .kepala-desa {
            font-weight: bold;
            margin: 0px;
        }

        .footer .table .text-table .nama-kepala-desa {
            font-weight: bold;
            margin: 0px;
            margin-top: 50;
            text-decoration: underline;
        }

        .footer .table .text-table .nip {
            margin: 0px;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <div class="logo">
                <img src="../public/landing/images/logo-bonebol.png" alt="Logo Bonebol">
            </div>
            <div class="header-text">
                <h2>Pemerintah Kabupaten Bonebolango</h2>
                <h2>Kecamatan Kabila Bone</h2>
                <h2>Desa Uabanga</h2>
                <p>Jalan Trans Sulawesi No. 01 Desa Uabanga Kecamatan Bonepantai, Kode Pos 96585</p>
            </div>
        </div>
        <hr>
        <div class="content">
            <h3>SURAT KETERANGAN</h3>
            <p>NOMOR : {{ $no_surat }}</p>

            <div class="text-pendahuluan">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah
                ini, kepala Desa
                Uabanga
                kecamatan
                Bonepantai
                kabupaten Bonebolango menerangkan kepada:</div>
            <div class="table">
                <table>
                    <tr>
                        <td style="padding-right: 50px">Nama</td>
                        <td>:</td>
                        <td>{{ ucfirst($name) }}</td>
                    </tr>
                    <tr>
                        <td>Tempat/Tgl.Lahir</td>
                        <td>:</td>
                        <td>{{ $birth }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ $gender }}</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>{{ $religion }}</td>
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
            <div class="text-akhir">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama tersebut diatas benar-benar
                penduduk
                Desa Uabanga
                Kecamatan Bonepantai dan
                orang tersebut memang benar-benar tidak mampu dan tidak memiliki jaminan kesehatan ( JKN, KIS,
                JAMKESPRA, JAMKESTA).</div>
            <div class="text-akhir">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami
                buat dengan
                sebenarnya dan diberikan kepada yang
                bersangkutan, untuk dapat digunakan seperlunya.</div>

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
                    <p style="margin: 0px;">Mengetahui</p>
                    <p class="kepala-desa">Kepala Desa Uabanga</p>
                    <p class="nama-kepala-desa">MARTEN H. SALEH</p>
                    <p class="nip">NIP : 19791209 201001 1 003</p>
                </div>
            </div>
        </div>

        <div class="page-break"></div>

        <!-- Header Section -->
        <div class="header">
            <div class="logo">
                <img src="../public/landing/images/logo-bonebol.png" alt="Logo Bonebol">
            </div>
            <div class="header-text">
                <h2>Pemerintah Kabupaten Bonebolango</h2>
                <h2>Kecamatan Kabila Bone</h2>
                <h2>Desa Uabanga</h2>
                <p>Jalan Trans Sulawesi No. 01 Desa Uabanga Kecamatan Bonepantai, Kode Pos 96585</p>
            </div>
        </div>
        <hr>
        <div class="content">
            <h3>SURAT KETERANGAN</h3>
            <p>NOMOR : {{ $no_surat_2 }}</p>

            <div class="text-pendahuluan">Yang bertanda tangan dibawah
                ini, kepala Desa Uabanga kecamatan Bonepantai
                kabupaten Bonebolango menerangkan kepada:</div>
            <div class="table">
                <table>
                    <tr>
                        <td style="padding-right: 50px">Nama</td>
                        <td>:</td>
                        <td>{{ ucfirst($name) }}</td>
                    </tr>
                    <tr>
                        <td>Tempat/Tgl.Lahir</td>
                        <td>:</td>
                        <td>{{ $birth }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ $gender }}</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>{{ $religion }}</td>
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
            <div class="text-akhir">Bahwa yang bersangkutan adalah benar-benar penduduk Desa Uabanga Kecamatan
                Bonepantai Kabupaten Bone Bolango dan sesuai pendataan Kepala Dusun {{ ucfirst($kepala_dusun) }}.yang
                bersangkutan
                tergolong masyarakat tidak mampu/ekonomi lemah.</div>
            <div class="text-akhir" style="margin-top: 10px">Demikian surat keterangan ini diberikan dengan sebenarnya
                berdasarkan keadaaan
                sebenarnya sampai dengan hari ini</div>

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
                    <p style="margin: 0px;">Mengetahui</p>
                    <p class="kepala-desa">Kepala Desa Uabanga</p>
                    <p class="nama-kepala-desa">MARTEN H. SALEH</p>
                    <p class="nip">NIP : 19791209 201001 1 003</p>
                </div>
            </div>
        </div>

        <div class="page-break"></div>

        <!-- Header Section -->
        <div class="header">
            <div class="logo">
                <img src="../public/landing/images/logo-bonebol.png" alt="Logo Bonebol">
            </div>
            <div class="header-text">
                <h2>Pemerintah Kabupaten Bonebolango</h2>
                <h2>Kecamatan Kabila Bone</h2>
                <h2>Desa Uabanga</h2>
                <p>Jalan Trans Sulawesi No. 01 Desa Uabanga Kecamatan Bonepantai, Kode Pos 96585</p>
            </div>
        </div>
        <hr>
        <div class="content">
            <h3>SURAT KETERANGAN TIDAK MAMPU</h3>
            <p>NOMOR : {{ $no_surat }}</p>

            <div class="text-pendahuluan">Yang bertanda tangan dibawah ini :</div>
            <div class="table">
                <table>
                    <tr>
                        <td style="padding-right: 50px">Nama Lengkap</td>
                        <td>:</td>
                        <td>MARTEN H. SALEH</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Jabatan</td>
                        <td>:</td>
                        <td>Kepala Desa</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Alamat</td>
                        <td>:</td>
                        <td>Desa Uabanga Kec. Bonepantai </td>
                    </tr>

                </table>
            </div>
            <div class="text-pendahuluan-lanjutan">Dengan ini menerangkan kepada :</div>
            <div class="table">
                <table>
                    <tr>
                        <td style="padding-right: 50px">Nama Lengkap</td>
                        <td>:</td>
                        <td>{{ ucfirst($name) }}</td>
                    </tr>
                    <tr>
                        <td>Tempat/Tgl.Lahir</td>
                        <td>:</td>
                        <td>{{ $birth }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $job }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ ucfirst($address) }}</td>
                    </tr>
                </table>
            </div>
            <div class="text-akhir">Bahwa yang bersangkutan benar-benar terdaftar sebagai masyarakat tidak mampu (
                berpenghasilan rendah ) Sesuai Pendataan dari Kepala Dusun {{ ucfirst($kepala_dusun) }}. Desa Uabanga
                Kecamatan Bonepantai
                Kabupaten Bone Bolango Provinsi Gorontalo.
                Demikian surat keterangan ini diberikan mengingat sumpah jabatan untuk dipergunakan seperlunya
            </div>
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
                    <p class="kepala-desa">Kepala Desa Uabanga</p>
                    <p class="nama-kepala-desa">MARTEN H. SALEH</p>
                    <p class="nip">NIP : 19791209 201001 1 003</p>
                </div>
            </div>
        </div>


    </div>

</body>

</html>
