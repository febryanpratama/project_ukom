@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title }}</a></li>
        </ol>
    </div>
    <!-- row -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {{-- <div class="row">
                        <div class="col-md-8">
                            <h3>
                                Apa yang menjadi kriteria utama Anda dalam memilih pemasok untuk pengadaan produk atau layanan?
                            </h3>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-12 " style="text-align: right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Tambah {{ $title }}</button>

                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $title }}</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead >
                                <tr class="text-center">
                                    <th width="20%">Nama Pengguna</th>
                                    <th width="20%">Nomor Sertifikat</th>
                                    <th width="20%">Bukti Sertifikat</th>
                                    <th width="20%">Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                
                                @foreach ($data as $item)
                                    <tr class="text-center">
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->nomor_sertifikat }}</td>
                                        <td>
                                            <a href="{{ asset('file_sertifikat/'.$item->file_sertifikat) }}" target="_blank">Lihat Bukti</a>
                                        </td>
                                        <td>
                                            @switch($item->status)
                                                @case('Belum Terverifikasi')
                                                    <div class="badge badge-warning">{{ $item->status }}</div>
                                                    @break
                                                @case('Terverifikasi')
                                                    <div class="badge badge-success">{{ $item->status }}</div>
                                                @break
                                                @case('Ditolak')
                                                <div class="badge badge-danger">{{ $item->status }}</div>
                                                    
                                                @break
                                                @default
                                                    
                                            @endswitch
                                        </td>
                                        <td style="text-align: center">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-pencil"></i></a>
                                            <div class="dropdown-menu text-black" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item text-black" href="{{ url('admin/list-sertifikasi/setuju/'.$item->id) }}">Setujui Sertifikasi</a>
                                                <a class="dropdown-item text-black" href="{{ url('admin/list-sertifikasi/tolak/'.$item->id) }}">Tolak Sertifikasi</a>
                                            </div>
                                            {{-- <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a> --}}
                                            {{-- <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Nama Pengguna</th>
                                    <th>Nomor Sertifikat</th>
                                    <th>Bukti Sertifikat</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection