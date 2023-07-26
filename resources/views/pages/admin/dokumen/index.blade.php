@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title }}</a></li>
        </ol>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    
                    <div style="text-align: right;">
                        {{-- <button class="btn btn-primary sw-btn-prev disabled" type="button">Previous</button> --}}
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalCenter">+ Dokumen Portolio</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($data as $item)
        {{-- {{ dd($item) }} --}}
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <embed src="{{ asset('') }}dokumen/{{ $item->path_dokumen }}" type="application/pdf" width="100%" height="100%">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4><a href="ecom-product-detail.html">{{ $item->tipe_dokumen }}</a></h4>
                                <a href="{{ asset('dokumen/'.$item->path_dokumen) }}" target="_blank"><p>Lihat Dokumen</p></a>
                                {{-- <ul class="star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-empty"></i></li>
                                    <li><i class="fa fa-star-half-empty"></i></li>
                                </ul> --}}
                                <span class="price">{{ $item->nama_dokumen }}</span>
                                <br>
                                <a href="{{ url('admin/dokumen-portfolio/'.$item->id.'/hapus') }}" class="text-danger">Hapus Dokumen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

{{-- MODAL --}}

<div class="modal fade" id="exampleModalCenter">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah {{ $title }}</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="{{ url('admin/dokumen-portfolio') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="" >Nama Dokumen</label>
                            <input type="text" class="form-control text-black" name="nama_dokumen" placeholder="Contoh dokumen Satu" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" >Roles</label>
                            <select name="tipe" id="" class="form-control text-black">
                                <option value="" selected disabled> == PILIH == </option>
                                <option value="PPK">PPK</option>
                                <option value="POKJA">POKJA</option>
                            </select>
                            {{-- <input type="text" class="form-control" placeholder="Contoh dokumen Satu" required> --}}
                        </div>
                        <div class="form-group col-md-12">
                            <label for="" class="control-label">Upload Dokumen</label>
                            <input type="file" class="dropify" name="file_dokumen" data-height="200" data-allowed-file-extensions="pdf" />
                            {{-- <input type="file" class="dropify" data-height="300" /> --}}

                            {{-- <input type="file" class="dropify" placeholder="Contoh dokumen Satu" required> --}}
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