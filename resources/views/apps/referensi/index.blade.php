@extends('layouts.dashboard')

@section('content')
<div class="az-content-body pd-lg-l-40 d-flex flex-column">
    <div class="az-content-breadcrumb">
      <span>Referensi</span>
    </div>
    <h2 class="az-content-title">Referensi</h2>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.referensi.create') }}">
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
                                    <th>Kode Referensi</th>
                                    <th>Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Kepramukaan</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Pendidikan Kedinasan Untuk Depdragi</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Lapangan</td>
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