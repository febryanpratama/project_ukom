@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Indikator</a></li>
        </ol>
    </div>
    
    
    <div class="row">
        @foreach ($data as $item)
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <embed src="{{ asset('') }}dokumen/{{ $item->path_dokumen }}" type="application/pdf" width="100%" height="100%">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4>
                                    <a href="#">{{ $item->tipe_dokumen }} / @if ( App\Helpers\Format::checkProposal($item->id))
                                            <span class="text-success">Sudah Upload</span>
                                        @else
                                            <span class="text-danger">Belum Upload</span>
                                        @endif
                                    </a>
                                </h4>
                                <a href="{{ asset('') }}dokumen/{{ $item->path_dokumen }}"><p style="color: blue">Lihat Contoh Indikator</p></a>
                                <a href="{{ url('user/portfolio/'.$item->id.'/detail') }}"><p style="color: rebeccapurple">Lihat Indikator Anda</p></a>
                                
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