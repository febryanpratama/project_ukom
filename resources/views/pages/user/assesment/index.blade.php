@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Assesment</a></li>
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
                        <a href="{{ url('user/assesment/request') }}">
                            <button class="btn btn-primary">Request Try Out Assesment</button>
                        </a>
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
                                    <th>Tanggal Assesment</th>
                                    <th>Nilai Assesment</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($data as $item)
                                    <tr class="text-center">
                                        <td> {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }} </td>
                                        <td>
                                            @if ($item->status_assesment == 'Belum')
                                                <span class="text-primary">Belum Ada Nilai </span>
                                            @else
                                                @if ($item->nilai_assesment >= 50)
                                                <span class="text-success">{{ $item->nilai_assesment }} </span>/100
                                                @else
                                                <span class="text-danger">{{ $item->nilai_assesment }} </span>/100
                                                    
                                                @endif
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->status_assesment == 'Sudah')
                                            <div class="badge badge-success">Selesai Assesment</div>
                                            
                                            @else
                                                <a href="{{ url('user/assesment/'.encrypt($item->id).'/start') }}">
                                                    <div class="badge badge-danger">Belum Assesment</div>
                                                </a>
                                            @endif
                                        </td>
                                        <td class="text-center" style="text-align: center">
                                            <a href="{{ url('user/assesment/'.encrypt($item->id).'/lapor') }}" class="btn btn-primary items-center shadow btn-xs sharp mr-1" title="Laporkan Data Assesment ke Admin" aria-details="Submit Assesment"><i class="fa fa-upload"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Tanggal Assesment</th>
                                    <th>Nilai Assesment</th>
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