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
                    <div class="col-md-12 " style="text-align: right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Tambah {{ $title }}</button>

                    </div>
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
                                    <th width="30%">Nama Sertifikasi</th>
                                    <th >Nomor Sertifikasi</th>
                                    <th >File Sertifikasi</th>
                                    <th >Status Sertifikasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                
                                @foreach ($data as $item)
                                    <tr class="text-center">
                                        <td>{{ $item->sertifikasi->nama_sertifikasi }}</td>
                                        <td>{{ $item->nomor_sertifikat }}</td>
                                        <td>
                                            <a href="{{ asset('file_sertifikat/'.$item->file_sertifikat) }}" target="_blank">Lihat Sertifikat</a>
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
                                            {{-- <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1" title="details"><i class="fa fa-bars"></i></a> --}}
                                            @if ($item->status != 'Terverifikasi')
                                            <a href="#" data-toggle="modal" data-target="#editsertifikasi{{ $item->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                
                                            @endif
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Nama Sertifikasi</th>
                                    <th>Nomor Sertifikasi</th>
                                    <th>File Sertifikasi</th>
                                    <th>Status Sertifikasi</th>
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
@foreach ($data as $i)
 <div class="modal fade" id="editsertifikasi{{ $i->id }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah {{ $title }}</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="{{ url('user/sertifikasi/update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="sertifikasipeserta_id" value="{{ $i->id }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="" >Nama Sertifikasi</label>
                            <select name="sertifikasi_id" class="form-control text-black" id="">
                                <option value="" selected disabled> == Pilih Sertifikasi == </option>
                                @foreach ($sertifikasi as $item)
                                    <option value="{{ $item->id }}" {{ $i->id == $item->id ? 'selected' : '' }}>{{ $item->nama_sertifikasi }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="" >Nomor Sertifikasi</label>
                            <input type="text" class="form-control text-black" name="nomor_sertifikat" value="{{ $i->nomor_sertifikat }}" placeholder="Sertifikasi xxi 11" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="" >Bukti Sertifikasi</label>
                            <input type="file" class="form-control text-black dropify" name="file_sertifikat" placeholder="Periode TA 2024">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
<div class="modal fade" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah {{ $title }}</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="{{ url('user/sertifikasi') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="" >Nama Sertifikasi</label>
                            <select name="sertifikasi_id" class="form-control text-black" id="">
                                <option value="" selected disabled> == Pilih Sertifikasi == </option>
                                @foreach ($sertifikasi as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_sertifikasi }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="" >Nomor Sertifikasi</label>
                            <input type="text" class="form-control text-black" name="nomor_sertifikat" placeholder="Sertifikasi xxi 11" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="" >Bukti Sertifikasi</label>
                            <input type="file" class="form-control text-black dropify" name="file_sertifikat" placeholder="Periode TA 2024">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection