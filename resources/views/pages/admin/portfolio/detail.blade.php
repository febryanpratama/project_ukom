@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Portofolio</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title }}</a></li>
        </ol>
    </div>
    
    
    <div class="row">
        @foreach ($data as $item)
        {{-- {{ dd($item) }} --}}
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <embed src="{{ asset('dokumen/'.$item->path_dokumen) }}" type="application/pdf" width="100%" height="100%">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4><a href="ecom-product-detail.html">{{ $item->tipe_dokumen }}</a></h4>
                                
                                
                                @if (App\Helpers\Format::getStatusDokumen($item->id, $user_id) == 'Belum Upload Dokumen')
                                <a href="#"><p>Lihat Dokumen Peserta</p></a>
                                <p class="text-danger">{{ App\Helpers\Format::getStatusDokumen($item->id, $user_id) }}</p>
                                
                                @else
                                <a href="{{ url('admin/portfolio/dokumen/'.$user_id.'/detail/'. App\Helpers\Format::getPortofolioId($item->id, $user_id)) }}"><p>Lihat Dokumen Peserta</p></a>
                                <p class="text-success">{{ App\Helpers\Format::getStatusDokumen($item->id, $user_id) }}</p>
                                    
                                @endif

                                {{-- @if (App\Helpers\Format::getStatusDokumen($item->id, $user_id) == 'Sudah Upload Dokumen')
                                    <p>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ App\Helpers\Format::getIsStatus($item->id, $user_id) }}
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{ url('admin/portfolio/disetujui/'.App\Helpers\Format::getPortofolioId($item->id, $user_id)) }}">Disetujui</a>
                                                <a class="dropdown-item" href="{{ url('admin/portfolio/direvisi/'.App\Helpers\Format::getPortofolioId($item->id, $user_id)) }}">Direvisi</a>
                                                <a class="dropdown-item" href="{{ url('admin/portfolio/direview/'.App\Helpers\Format::getPortofolioId($item->id, $user_id)) }}">Direview</a>
                                                <a class="dropdown-item" href="{{ url('admin/portfolio/ditolak/'.App\Helpers\Format::getPortofolioId($item->id, $user_id)) }}">Ditolak</a>

                                            </div>
                                        </div>
                                    </p>
                                @endif --}}
                                {{-- <ul class="star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-empty"></i></li>
                                    <li><i class="fa fa-star-half-empty"></i></li>
                                </ul> --}}
                                <span class="price">{{ $item->nama_dokumen }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection