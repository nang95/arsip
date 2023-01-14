<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .header{
            display: flex;
            width: 100%;
        }
        .img{
            padding: 10px;
            width: 10%;
            object-fit: : contain;
        }
        .header-title{
            padding-top: 40px;
            width: 90%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .content{
            padding-top: 20px;
        }
        .content-text{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div style="padding: 20px">
        <div class="header">
            <img src="{{ asset('images/logo.png') }}" alt="" srcset="" class="img">
            <div class="header-title">
                <div style="font-weight: bold;font-size: 24px;text-align: center;">
                    PT. PERKEBUNAN NUSANTARA IV
                </div>
                <div style="font-weight: bold;font-size: 18px;text-align: center;">
                    Alamat: Jl. Letjen Suprapto No.2, Hamdan, Kec. Medan Maimun, Kota Medan, Sumatera Utara 20212
                </div>
            </div>
        </div>
        <div style="border-bottom: 1px solid black; width: 100%; padding-top: 10px"></div>
        <div style="border-bottom: 1px solid black; width: 100%; padding-top: 2px"></div>
        <div class="content">
            <div class="content-text" style="text-align: center; font-size: 24px; margin-bottom: 10px">Rekap Agenda Surat Masuk</div>
            <table class="table mg-b-0" style="width: 100%;" border="1" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th>No. Agenda / Kode</th>
                        <th>Isi Ringkas</th>
                        <th>Asal Surat</th>
                        <th>No. Surat/Tgl Surat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">4 / 421</th>
                        <td>Surat undangan untuk menghadiri acara pameran bursa kerja untuk percepatan penempatan tenaga</td>
                        <td>Dinas Sosial Tenaga Kerja dan Transmigrasi Daerah Kabupaten Deli Serdang</td>
                        <td>560/401.233/2023</td>
                    </tr>
                    <tr>
                        <th scope="row">4 / 4901</th>
                        <td>Surat edaran pertemuan rufis musyawarah guru mata pelajaran bahasa inggris </td>
                        <td>Musyawarah guru mata pelajaran bahasa inggris</td>
                        <td>560/401.314/2023</td>
                    </tr>
                    <tr>
                        <th scope="row">4 / 839</th>
                        <td>Pencairan Dana Bantuan Sebesar Rp. 800.000 </td>
                        <td>Badan Amal Zakat Nasional</td>
                        <td>560/401.444/2023</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>