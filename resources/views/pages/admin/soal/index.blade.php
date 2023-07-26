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
                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Tambah Soal</button>
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
                                    <th width="60%">Soal</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($data as $item)
                                    <tr class="text-center">
                                        <td>{{ $item->soal }}</td>
                                        <td>
                                            <div class="badge badge-success">Aktif</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex items-center">
                                                <div class="justify-content-center">
                                                    <a href="{{ url('admin/bank-assesment/detail-bank/'.$bank_id.'/detail/'.$item->id.'/jawaban') }}" class="btn btn-primary shadow btn-xs sharp mr-1" title="details"><i class="fa fa-bars"></i></a>
                                                    <a href="#" class="btn btn-primary items-center shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger items-center shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </div>												
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Soal</th>
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

<div class="modal fade" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah {{ $title }}</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="{{ url('admin/bank-assesment/detail-bank/'.$bank_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="bank_id" value="{{ $bank_id }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="" >Soal</label>
                            <textarea  class="form-control text-black" id="" name="soal" cols="30" rows="10"></textarea>
                            {{-- <input type="text" class="form-control text-black" name="soal" placeholder="Pertanyaan" required> --}}
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
@endsection