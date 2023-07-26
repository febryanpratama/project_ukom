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
                                    <th>Nama Lengkap</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($user as $item)
                                    <tr class="text-center">
                                        <td>{{ $item->nama_lengkap }}</td>
                                        <td>
                                            @if (App\Helpers\Format::getDataDokumen($item->user_id) == 'Belum Upload Dokumen')
                                                <div class="badge badge-danger">Belum Upload Dokumen</div>
                                                @else
                                                
                                                <div class="badge badge-success">Sudah Upload Dokumen</div>
                                            @endif
                                        </td>
                                        <td >
                                            <div style="text-align: center">
                                                @if (App\Helpers\Format::getDataDokumen($item->user_id) == 'Sudah Upload Dokumen')
                                                    <a href="{{ url('admin/portfolio/dokumen/'.$item->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1" title="details"><i class="fa fa-bars"></i></a>                                                
                                                @endif
                                                {{-- <a href="#" class="btn btn-primary items-center shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger items-center shadow btn-xs sharp"><i class="fa fa-trash"></i></a> --}}
                                                {{-- <div class="justify-content-center" >
                                                </div> --}}
                                            </div>												
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Nama Lengkap</th>
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