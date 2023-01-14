@extends('layouts.dashboard')

@section('content')
<div class="az-content-body pd-lg-l-40 d-flex flex-column">
    <div class="az-content-breadcrumb">
      <span>Arsip</span>
      <span>Surat Masuk</span>
    </div>
    <h2 class="az-content-title">Surat Masuk</h2>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.surat_masuk.create') }}">
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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">4 / 421</th>
                                    <td>Surat undangan untuk menghadiri acara pameran bursa kerja untuk percepatan penempatan tenaga
                                        <br/>File : <a href="">surat_masuk.jpg</a>
                                    </td>
                                    <td>Dinas Sosial Tenaga Kerja dan Transmigrasi Daerah Kabupaten Deli Serdang</td>
                                    <td>560/401.233/2023</td>
                                    <td width="25%">
                                        <button class="btn btn-sm btn-warning" style="color: white">
                                            Edit
                                        </button>
                                        <a href="{{ route('admin.disposisi') }}">
                                            <button class="btn btn-sm btn-info" style="color: white">Disp</button>
                                        </a>
                                        <button class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4 / 4901</th>
                                    <td>Surat edaran pertemuan rufis musyawarah guru mata pelajaran bahasa inggris 
                                        <br/>File : <a href="">surat_masuk2.jpg</a>
                                    </td>
                                    <td>Musyawarah guru mata pelajaran bahasa inggris</td>
                                    <td>560/401.314/2023</td>
                                    <td width="25%">
                                        <button class="btn btn-sm btn-warning" style="color: white">
                                            Edit
                                        </button>
                                        <a href="{{ route('admin.disposisi') }}">
                                            <button class="btn btn-sm btn-info" style="color: white">Disp</button>
                                        </a>
                                        <button class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4 / 839</th>
                                    <td>Pencairan Dana Bantuan Sebesar Rp. 800.000 
                                        <br/>File : <a href="">surat_masuk3.jpg</a>
                                    </td>
                                    <td>Badan Amal Zakat Nasional</td>
                                    <td>560/401.444/2023</td>
                                    <td width="25%">
                                        <button class="btn btn-sm btn-warning" style="color: white">
                                            Edit
                                        </button>
                                        <a href="{{ route('admin.disposisi') }}">
                                            <button class="btn btn-sm btn-info" style="color: white">Disp</button>
                                        </a>
                                        <button class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>
                                    </td>
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