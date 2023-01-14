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
            <table class="table mg-b-0" style="width: 100%;" border="1" cellpadding="0" cellspacing="0">
                <tr>
                    <th colspan="2">Lembar Disposisi</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <div style="display: flex">
                            <div style="width: 200px">Indeks Berkas</div>
                            <div>: A.2</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div style="display: flex">
                            <div style="width: 200px">No. Surat</div>
                            <div>: A9218</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div style="display: flex">
                            <div style="width: 200px">Asal Surat</div>
                            <div>: Dinas sosial tenaga kerja dan transmigrasi daerah kabupaten nganjuk</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div style="display: flex">
                            <div style="width: 200px">Diterima Tanggal</div>
                            <div>: 19-02-2023</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div style="display: flex">
                            <div style="width: 200px">Tanggal Penyelesaian</div>
                            <div>: </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>Isi Disposisi : Segera hadiri undangan</div>
                        <div>Sifat : Penting</div>
                        <div>Catatan : Mohon Hadir</div>
                    </td>
                    <td>
                        <div>Diteruskan kepada: </div>
                        <div>Ani Triastuti, S.E., S.Pd</div>
                    </td>
                </tr>
                                            
            </table>
        </div>
    </div>
</body>
</html>