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
                                    <th>Nilai Assesment</th>
                                    <th>Periode Ujian</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($data as $item)
                                    <tr class="text-center">
                                        <td>{{ $item->user->detail->nama_lengkap }}</td>
                                        <td>
                                            <span class="text-success">{{ $item->assesment->nilai_assesment }}</span>/100
                                        </td>
                                        <td>
                                            @if ($item->periode_id == null)
                                            <a href="#" data-toggle="modal" data-target="#periode{{ $item->id }}">
                                                <div class="badge badge-danger">Tentukan Periode Ujian</div>
                                            </a>
                                            @else
                                            <div class="badge badge-success">{{ $item->periode->nama_periode }}</div>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->status == 'Ditolak')
                                            <div class="badge badge-danger">Ditolak</div>
                                            @elseif($item->status == 'Diproses')
                                            <div class="badge badge-warning">Diproses</div>
                                            @elseif($item->status == 'Diterima')
                                            <div class="badge badge-success">Diterima</div>
                                            @endif
                                        </td>
                                        <td class="text-center" style="text-align: center">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1" title="details"><i class="fa fa-bars"></i></a>
                                            {{-- <a href="#" class="btn btn-primary items-center shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a> --}}
                                            {{-- <a href="#" class="btn btn-danger items-center shadow btn-xs sharp"><i class="fa fa-trash"></i></a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Nama Lengkap</th>
                                    <th>Nilai Assesment</th>
                                    <th>Periode Ujian</th>
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
@foreach ($data as $item)
    <div class="modal fade" id="periode{{ $item->id }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Periode</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="{{ url('admin/assesment/periode') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="parsing_id" value="{{ $item->id }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="" >Nama Periode</label>
                            <select name="periode_id" class="form-control" id="">
                                <option value="" selected disabled> == Pilih Periode == </option>
                                @foreach ($periode as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama_periode }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p> --}}
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
@endsection