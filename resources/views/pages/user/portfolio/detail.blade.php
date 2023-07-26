@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Indikator</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title }}</a></li>
        </ol>
    </div>
    <!-- row -->

    {{-- {{ dd($data )}} --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="email-left-box generic-width px-0 mb-5">
                        {{-- <div class="p-0">
                            <a href="email-compose.html" class="btn btn-primary btn-block">Compose</a>
                        </div> --}}
                        
                        <div class="intro-title d-flex justify-content-between">
                            <h5>Portfolio Anda</h5>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                        {{-- {{ dd($data) }} --}}
                        <div class="mail-list mt-4">
                            <embed src="{{ asset('portofolio/'.@$data->path_portofolio) }}" class="img-fluid" type="">
                            <a href="{{ url('portofolio/'.@$data->path_portofolio) }}" class="text-center">Lihat Dokumen</a>
                            {{-- <img src="https://visitjawatengah.jatengprov.go.id/assets/images/c3d41298-3ddc-4474-94e3-e590577e4574.jpg" width="100%" alt=""> --}}
                        </div>
                        <div class="intro-title d-flex justify-content-between">
                            <h5>Indikator Anda</h5>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div>
                        <div class="mail-list mt-4">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModalCenter">{{ $data == NULL ? 'Tambah' : "Update" }} Portofolio</button>
                            </div>
                            {{-- <img src="https://visitjawatengah.jatengprov.go.id/assets/images/c3d41298-3ddc-4474-94e3-e590577e4574.jpg" width="100%" alt=""> --}}
                        </div>
                    </div>
                    <div class="email-right-box clear-both ml-0 ml-sm-4 ml-sm-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="right-box-padding">
                                    <div class="read-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h2>Komentar</h2>
                                                    </div>
                                                    <div class="card-body">
                                                        @if ($data != null)
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
                                                                
                                                                <hr>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @if ($data)
                                    <form action="{{ url('user/portfolio/komentar') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="portofolio_id" value="{{ @$data->id }}">

                                        <div class="form-group pt-3">
                                            <textarea name="komentar" id="write-email" cols="30" rows="5" class="form-control text-black" placeholder="Tuliskan Komentar anda disini"></textarea>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-primary " type="submit">Send</button>
                                    </div>
                                    </form>
                                        
                                    @endif
                                </div>
                            </div>
                        </div>
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
            <form action="{{ url('user/portfolio') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="dokumen_id" value="{{ $dokumen_id }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="" >Bukti Dukung Portofolio</label>
                            <input type="text" class="form-control text-black" name="bukti_dukung_portofolio" value="{{ @$data->bukti_dukung_portofolio }}" placeholder="TOR/KAK/SPEKTEK" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="" >Kep Penugasan</label>
                            <input type="text" class="form-control text-black" name="kep_penugasan" value="{{ @$data->kep_penugasan }}" placeholder="Kep/xxx/XII/xxx" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="" >Keterangan</label>
                            <input type="text" class="form-control text-black" name="keterangan" {{ @$data->keterangan }} placeholder="keterangan">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="" >File Portofolio</label>
                            <input type="file" class="form-control dropify text-black" name="path_portofolio" placeholder="Kep/xxx/XII/xxx" required>
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