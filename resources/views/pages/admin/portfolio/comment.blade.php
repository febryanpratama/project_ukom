@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Portolio</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title }}</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="email-left-box generic-width px-0 mb-5">
                            {{-- <div class="p-0">
                                <a href="email-compose.html" class="btn btn-primary btn-block">Compose</a>
                            </div> --}}
                            
                            {{-- {{ dd($data) }} --}}
                            <div class="intro-title d-flex justify-content-between">
                                <h6>Detail Portofolio Pengguna</h6>
                                {{-- <i class="fa fa-chevron-down" aria-hidden="true"></i> --}}
                            </div>
                            <div class="mail-list mr-3 mt-4">
                                <div class="p-2">
                                    <p><b>Bukti Dukung Portofolio</b></p>
                                    <p>{{ $data->bukti_dukung_portofolio }}</p>
                                    <p><b>KEP Penugasan</b></p>
                                    <p>{{ $data->kep_penugasan }}</p>
                                    <p><b>Keterangan</b></p>
                                    <p>{{ $data->keterangan ?? 'Tidak Ada' }}</p>
                                </div>
                            </div>
                            <div class="intro-title d-flex justify-content-between">
                                <h5>Portfolio Pengguna</h5>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>
                            <div class="mail-list mt-4">
                                <embed src="{{ asset('portofolio/'.$data->path_portofolio) }}" class="img-fluid" type="">
                                <a href="{{ url('portofolio/'.$data->path_portofolio) }}" class="text-center">Lihat Dokumen</a>
                            </div>
                           
                        </div>
                        <div class="email-right-box clear-both ml-0 ml-sm-4 ml-sm-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="right-box-padding">
                                        {{-- <div class="toolbar mb-4" role="toolbar">
                                            <div class="btn-group mb-1">
                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-archive"></i></button>
                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-exclamation-circle"></i></button>
                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-trash"></i></button>
                                            </div>
                                            <div class="btn-group mb-1">
                                                <button type="button" class="btn btn-primary light dropdown-toggle px-3" data-toggle="dropdown">
                                                    <i class="fa fa-folder"></i> <b class="caret m-l-5"></b>
                                                </button>
                                                <div class="dropdown-menu"> 
                                                    <a class="dropdown-item" href="javascript: void(0);">Social</a> 
                                                    <a class="dropdown-item" href="javascript: void(0);">Promotions</a> 
                                                    <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                                </div>
                                            </div>
                                            <div class="btn-group mb-1">
                                                <button type="button" class="btn btn-primary light dropdown-toggle px-3" data-toggle="dropdown">
                                                    <i class="fa fa-tag"></i> <b class="caret m-l-5"></b>
                                                </button>
                                                <div class="dropdown-menu"> 
                                                    <a class="dropdown-item" href="javascript: void(0);">Updates</a> 
                                                    <a class="dropdown-item" href="javascript: void(0);">Social</a> 
                                                    <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                                </div>
                                            </div>
                                            <div class="btn-group mb-1">
                                                <button type="button" class="btn btn-primary light dropdown-toggle v" data-toggle="dropdown">More <span class="caret m-l-5"></span>
                                                </button>
                                                <div class="dropdown-menu"> <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a> <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Add Star</a> <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="read-content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h2 class="mb-0">Komentar</h2>
                                                        </div>
                                                        <div class="card-body">
                                                            @if (App\Helpers\Format::getKomentar($data->id) != null)
                                                                @foreach (App\Helpers\Format::getKomentar($data->id) as $it)
                                                                    @if ($it->sender_id == 3)
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <img class="mr-3 rounded img-fluid text-center" style="text-align: center" width="50" alt="image" src="{{ asset('') }}assets/images/avatar/1.jpg">
                                                                            <div class="media-body mr-2">
                                                                                <h5 class="text-primary mb-0 mt-1">Admin</h5>
                                                                                {{-- <p class="mb-0">20 May 2018</p> --}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9" style="text-align: right">
                                                                            <p>{{ $it->komentar }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    @else    
                                                                    <div class="row">
                                                                        <div class="col-md-9 float-left">
                                                                            <p>{{ $it->komentar }}</p>
                                                                        </div>
                                                                        <div class="col md-3 text-center">
                                                                            <img class="mr-3 rounded img-fluid text-center" style="text-align: center" width="50" alt="image" src="{{ asset('') }}assets/images/avatar/1.jpg">
                                                                            <div class="media-body mr-2">
                                                                                <h5 class="text-primary mb-0 mt-1">User</h5>
                                                                                {{-- <p class="mb-0">20 May 2018</p> --}}
                                                                            </div>
                                                                        </div>
                
                                                                    </div>
                                                                    <hr>
                                                                    @endif
                                                                
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <form action="{{ url('admin/portfolio/komentar') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="portofolio_id" value="{{ $data->id }}">

                                            <div class="form-group pt-3">
                                                <textarea name="komentar" id="write-email" cols="30" rows="5" class="form-control text-black" placeholder="Tuliskan Komentar anda disini"></textarea>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button class="btn btn-primary " type="submit">Send</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection