@extends('layouts.dashboard')

@section('content')
<div class="az-content-body pd-lg-l-40 d-flex flex-column">
    <div class="az-content-breadcrumb">
      <span>Arsip</span>
      <span>Surat Masuk</span>
      <span>Tambah Data</span>
    </div>
    <h2 class="az-content-title">Surat Masuk</h2>
    <div class="card" style="width: 60%">
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="">No. Agenda</label>
                        <input class="form-control" type="text">
                    </div><!-- col -->
                    <div class="col-md-6 mb-2">
                        <label for="">Asal Surat</label>
                        <input class="form-control" type="text">
                    </div><!-- col -->
                    <div class="col-md-6 mb-2">
                        <label for="">No. Surat</label>
                        <input class="form-control" type="text">
                    </div><!-- col -->
                    <div class="col-md-6 mb-2">
                        <label for="">Kode Klasifikasi</label>
                        <select class="form-control">
                            <option value="">-Silahkan Pilih-</option>
                        </select>
                    </div><!-- col -->
                    <div class="col-md-6 mb-2">
                        <label for="">Indeks Berkas</label>
                        <input class="form-control" type="text">
                    </div><!-- col -->
                    <div class="col-md-6 mb-2">
                        <label for="">Tgl Surat</label>
                        <input type="date" class="form-control" type="text">
                    </div><!-- col -->
                    <div class="col-md-6 mb-2">
                        <label for="">File (PNG, JPG, JPEG)</label>
                        <input type="file" class="form-control" type="text">
                    </div><!-- col -->
                    <div class="col-md-6 mb-2">
                        <label for="">Isi Ringkas</label>                    
                        <textarea class="form-control" cols="3" rows="5"></textarea>
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