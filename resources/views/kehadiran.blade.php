@extends('main')

@section('content')
<div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Selamat Datang</h4>
                 
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Tamu</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Tamu</h4>
                <ul class="nav nav-pills m-t-30 m-b-30">
                    <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Belum Dikonfirmasi</a> </li>
                    <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Hadir</a> </li>                </ul>
                <div class="tab-content">
                            <a href="{{route('tamu.create')}}" type="button" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                            </span>Tambah Tamu</a>
                            <!-- <a href="{{route('tamu.create')}}" type="button" class="btn btn-primary">Tambah Tamu</a> -->
                            <br>
                            <br>
                    <div id="navpills-1" class="tab-pane active">
                        <div class="row">
                            <div class="col-md-12"> 
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php $no =1; @endphp
                                    @foreach($data->where('status',1) as $aa)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$aa->nama}}</td>
                                            <td>{{$aa->alamat}}</td>
                                            @if($aa->status == 1)
                                            <td><span class="badge badge-warning">Belum Dikonfirmasi</span></td>
                                            @elseif($aa->status == 3)
                                            <td><span class="badge badge-success">Sudah Hadir</span></td>
                                            @elseif($aa->status == 99)
                                            <td><span class="badge badge-danger">Tidak Hadir</span></td>
                                            @endif
                                            <td>
                                                <form action="{{route('tamu.update',$aa->id)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <button type="submit" value="3" id="status" name="status" class="btn btn-success btn sweet-confirm" data-toggle="tooltip" data-placement="top"
                                                    title="Tamu Datang" onclick="return confirm('Anda yakin tamu ini telah hadir?')">Hadir</button>
                                                </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <a href="{{route('import.form')}}" type="button" class="btn btn-rounded" style="background-color:#dc3545; color:white;" ><span class="btn-icon-left text-danger"><i class="fa fa-upload color-success"></i></span>Import Data</a> <br> <br> 
                                <a href="{{route('export')}}" type="button" class="btn btn-rounded" style="background-color:#198754; color:white;" ><span class="btn-icon-left text-success"><i class="fa fa-download color-success"></i></span>Export Data</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- /tab hadir status 3 -->
                    <div id="navpills-2" class="tab-pane">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="example2" class="display" style="min-width: 900px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Status</th>
                                                <!-- <th>Aksi</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php $no =1; @endphp
                                        @foreach($data->where('status',3) as $datass)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$datass->nama}}</td>
                                                <td>{{$datass->alamat}}</td>
                                                @if($datass->status == 1)
                                                <td><span class="badge badge-warning">Belum Dikonfirmasi</span></td>
                                                @elseif($datass->status == 3)
                                                <td><span class="badge badge-success">Sudah Hadir</span></td>
                                                @elseif($datass->status == 99)
                                                <td><span class="badge badge-danger">Tidak Hadir</span></td>
                                                @endif
                                                <!-- <td>
                                                    <form action="{{route('tamu.update',$datass->id)}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <button type="submit" value="3" id="status" name="status" class="btn btn-warning btn sweet-confirm" data-toggle="tooltip" data-placement="top"
                                                        title="Tamu Datang" onclick="return confirm('Anda yakin tamu ini telah hadir?')">Hadir</button>
                                                    </form>
                                            </td> -->
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection