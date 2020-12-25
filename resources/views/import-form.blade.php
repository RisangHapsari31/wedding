@extends('main')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Import Data</h4>
                <span class="ml-1">Import Data</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Tamu</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Import Data</a></li>
            </ol>
        </div>
    </div>
<div class="row">
    <div class="col-xl-6 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Import Data</h4>
            </div>
            <div class="card-body">
                <div class="basic-formcustom_file_input">
                    <form action="{{route('import')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <div class="custom-file">
                            <label class="custom-file-label">Pilih file</label>
                            <input type="file" name="file" class="custom-file-input">
                        </div>
                    </div>
                    <br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection