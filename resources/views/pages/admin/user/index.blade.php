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
                                    <th>NRP</th>
                                    <th>Tanda Pengenal</th>
                                    <th>Satwil / Satker</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($data as $item)
                                {{-- {{ dd($item) }} --}}
                                    <tr class="text-center">
                                        <td>{{ $item->detail->nama_lengkap }}</td>
                                        <td>{{ $item->detail->nrp }}</td>
                                        <td>
                                            <img src="https://visitjawatengah.jatengprov.go.id/assets/images/c3d41298-3ddc-4474-94e3-e590577e4574.jpg" class="rounded-circle" width="35" alt="">
                                        </td>
                                        <td>{{ \App\Helpers\Format::satwil($item->detail->satwil_id) }} / {{ \App\Helpers\Format::satker($item->detail->satker_id) }} </td>
                                        <td>{{ $item->detail->tipe }}</td>
                                        <td>
                                            @switch($item->is_active)
                                                @case(0)
                                                <div class="badge badge-danger">Belum Terverifikasi</div>
                                                
                                                @break
                                                @case(1)
                                                
                                                <div class="badge badge-success">Terverifikasi</div>
                                                    @break
                                                @default
                                                    
                                            @endswitch
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-pencil"></i></a>
                                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="{{ url('admin/user/'.$item->id.'/setuju') }}">Setujui Verifikasi</a>
                                                    <a class="dropdown-item" href="{{ url('admin/user/'.$item->id.'/batal') }}">Batalkan Verifikasi</a>
                                                </div>
                                                <a href="{{ url('admin/user/'.$item->id) }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-users"></i></a>
                                            </div>												
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Nama Lengkap</th>
                                    <th>NRP</th>
                                    <th>Tanda Pengenal</th>
                                    <th>Satwil / Satker</th>
                                    <th>Role</th>
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