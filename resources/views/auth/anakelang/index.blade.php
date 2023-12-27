@extends('auth.layouts.dashboard')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Anak Elang</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Anak Elang</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 10px">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Umur</th>
                                <th>Sekolah</th>
                                <th>Alamat</th>
                                <th>Nama & No Telp Wali</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Umur</th>
                                <th>Sekolah</th>
                                <th>Alamat</th>
                                <th>Nama dan No Telp Wali</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($data as $d )
                            <tr>             
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$d->nama_anak}}</td>
                                    <td>{{$d->tanggal_lahir}}</td>
                                    <td>{{ $d->age() }} tahun</td>
                                    <td>{{$d->sekolah}}</td>
                                    <td>{{$d->alamat}}</td>
                                    <td><b>Nama :</b> {{$d->nama_wali}} <br>
                                        <b>Telp :</b> {{$d->telp_wali}} <br>
                                        <b>Email :</b> {{$d->email}} <br>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div>

@endsection