@extends('layouts.dashboard')

@section('content')
<div class="az-content-body pd-lg-l-40 d-flex flex-column">
    <div class="az-content-breadcrumb">
      <span>Arsip</span>
      <span>Surat Keluar</span>
    </div>
    <h2 class="az-content-title">Surat Keluar</h2>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.surat_keluar.create') }}">
                <button class="btn btn-sm btn-success">
                    Tambah
                </button>
            </a>
            <p></p>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mg-b-0">
                            <thead>
                                <tr>
                                    <th>No. Agenda / Kode</th>
                                    <th>Isi Ringkas / File</th>
                                    <th>Asal Surat</th>
                                    <th>No. Surat/Tgl Surat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">4 / 421</th>
                                    <td>Surat undangan rapat dinas koordinasi ujian sekolah
                                        <br/>File : <a href="">surat_masuk.jpg</a>
                                    </td>
                                    <td>Dinas Sosial Tenaga Kerja dan Transmigrasi Daerah Kabupaten Deli Serdang</td>
                                    <td>560/401.233/2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">4 / 4901</th>
                                    <td>Surat edaran pelaksanaan praktik kerja industri (Prakerin)
                                        <br/>File : <a href="">surat_masuk2.jpg</a>
                                    </td>
                                    <td>Surat tugas untuk menghadiri undangan penganugrahan bursa khusus SMK</td>
                                    <td>560/401.314/2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">4 / 839</th>
                                    <td>Surat edaran untuk mengikuti kegiatan sholat idhul adha 
                                        <br/>File : <a href="">surat_masuk3.jpg</a>
                                    </td>
                                    <td>Badan Amal Zakat Nasional</td>
                                    <td>560/401.444/2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- table-responsive -->
                </div>
            </div>
        </div>
    </div>  
</div>
    
    
@endsection