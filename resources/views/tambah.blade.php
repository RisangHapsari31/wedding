@extends('main')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Tambah Tamu</h4>
                <span class="ml-1">Tambah Tamu</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Tamu</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Tamu</a></li>
            </ol>
        </div>
    </div>
<div class="row">
    <div class="col-xl-6 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Tamu</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('tamu.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label style="color:black">Nama</label>
                            <input type="text" class="form-control input-default" name="nama" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="form-group">
                            <label style="color:black">Status</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="status" required>
                                <option disabled selected>Pilih Status Tamu...</option>
                                <option value="3">Hadir</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="color:black">Alamat</label>
                            <textarea class="form-control" name="alamat" rows="4" id="comment" placeholder="Masukkan Alamat" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Hadir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection