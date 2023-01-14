@extends('layouts.dashboard')

@section('content')
<div class="az-content-body pd-lg-l-40 d-flex flex-column">
    <div class="az-content-breadcrumb">
      <span>Referensi</span>
      <span>Edit Data</span>
    </div>
    <h2 class="az-content-title">Referensi</h2>
    <div class="card" style="width: 60%">
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="">Kode Ref</label>
                        <input class="form-control" type="text">
                    </div><!-- col -->
                    <div class="col-md-6 mb-2">
                        <label for="">Nama</label>
                        <input class="form-control" type="text">
                    </div><!-- col -->
                    <p></p>
                    <div class="col-md-6 mb-2">
                        <button class="btn btn-sm btn-warning" style="color: white">Kembali</button>
                    </div><!-- col -->
                    <div class="col-md-6 mb-2" style="text-align: right">
                        <button class="btn btn-sm btn-success">Simpan</button>
                    </div><!-- col -->
                  </div><!-- row -->
            </form>
        </div>
    </div>
</div>
@endsection