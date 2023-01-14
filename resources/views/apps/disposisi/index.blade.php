@extends('layouts.dashboard')

@section('content')
<div class="az-content-body pd-lg-l-40 d-flex flex-column">
    <div class="az-content-breadcrumb">
      <span>Arsip</span>
      <span>Surat Masuk</span>
      <span>Disposisi</span>
    </div>
    <h2 class="az-content-title">Disposisi</h2>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.disposisi.create') }}">
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
                                    <th>Tujuan Disposisi</th>
                                    <th>Isi Disposisi</th>
                                    <th>Sifat Batas Waktu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Arif Tristuti, S.E, S.Pd</th>
                                    <td>Segera hadir undangan</td>
                                    <td>Penting 17 Mei 2023</td>
                                    <td width="25%">
                                        <button class="btn btn-sm btn-warning" style="color: white">
                                            Edit
                                        </button>
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