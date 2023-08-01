@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">List User</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title }}</a></li>
        </ol>
    </div>
    <!-- row -->

    <div class="row">
        <div class="col-sm-12 col-md-4 text-center">
            <div class="card" style="text-align: center">
                <div class="card-header" >
                    <div class="row m-auto">
                        <div class="col-md-12" style="text-align: center">
                            <div class="profile-photo ">
                                <img src="{{ asset('assets/images/profile/profile.png') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p class="mt-2" style="text-align: center;"><strong class="text-black ">{{ $data->detail->nama_lengkap }}</strong><br><strong class="text-gray">{{ $data->detail->tipe }}</strong></p>
                        </div>
                    </div>
                </div>

                <div class="row p-4">
                    <div class="col-md-6">
                        <p>Nama Lengkap</p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-black"><strong>{{ $data->detail->nama_lengkap }}</strong></p>
                    </div>
                    <div class="col-md-6">
                        <p>NRP</p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-black"><strong>{{ $data->detail->nrp }}</strong></p>
                    </div>
                    <div class="col-md-6">
                        <p>Satuan Wilayah</p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-black"><strong>{{ \App\Helpers\Format::satwil($data->detail->satwil_id) }}</strong></p>
                    </div>
                    <div class="col-md-6">
                        <p>Satuan Kerja</p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-black"><strong>{{ \App\Helpers\Format::satker($data->detail->satker_id) }}</strong></p>
                    </div>
                    <div class="col-md-6">
                        <p>Tipe</p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-black"><strong>{{ $data->detail->tipe }}</strong></p>
                    </div>
                    
                    <div class="col-md-12" style="border-top: 1px solid rgb(199, 196, 196); width: 80%">
                        <p style="text-align: center;" class="mt-2"><strong>Foto KTA</strong> </p>
                        <img src="{{ asset('images/'.$data->detail->path_foto) }}" class="img-fluid" alt="">
                    </div>
                </div>
                {{-- <hr style="color: black"> --}}
            </div>
        </div>
        <div class="col-sm-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Data Diri</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Pendidikan</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Riwayat Pekerjaan</a>
                            <a class="nav-item nav-link" id="nav-sertifikasi-tab" data-toggle="tab" href="#nav-sertifikasi" role="tab" aria-controls="nav-sertifikasi" aria-selected="false">Dokumen Kelengkapan Sertifikasi</a>
                        </div>
                    </nav>
                    {{-- <h4 class="card-title">{{ $title }}</h4> --}}
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <label for="" class="text-black">Nama Lengkap</label>
                                    <input type="text" class="form-control text-black" value="{{ $data->detail->nama_lengkap }}" readonly>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="" class="text-black">Tempat Lahir</label>
                                    <input type="text" class="form-control text-black" value="{{ $data->detail->tempat_lahir }}" readonly>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="" class="text-black">Tanggal Lahir</label>
                                    <input type="text" class="form-control text-black" value="{{ $data->detail->tanggal_lahir }}" readonly>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="" class="text-black">Jenis Kelamin</label>
                                    <input type="text" class="form-control text-black" value="{{ $data->detail->jenis_kelamin }}" readonly>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="" class="text-black">NRP</label>
                                    <input type="text" class="form-control text-black" value="{{ $data->detail->nrp }}" readonly>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="" class="text-black">Jabatan / Pangkat</label>
                                    <input type="text" class="form-control text-black" value="{{ $data->detail->pangkat }}" readonly>
                                </div>
                                {{-- <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label class="mb-1 text-black">Satuan Wilayah</label>
                                        <select name="satwil" class="form-control text-black select2" id="satwil" readonly>
                                            <option value="" selected disabled> == Pilih == </option>
                                            @foreach ($datasatwil as $k)
                                                <option value="{{ $k->id }}">{{ $k->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label class="mb-1 text-black">Satuan Kerja</label>
                                        <select name="satker" class="form-control text-black" id="satker" readonly>
                                            <option value="" selected disabled> == Pilih == </option>
                                            
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-md-6 mt-2">
                                    <label for="" class="text-black">NRP</label>
                                    <input type="text" class="form-control text-black" value="{{ $data->detail->nrp }}" readonly>
                                </div>
                                {{-- <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label class="mb-1 text-black">Foto KTA</label>
                                        <input type="file" class="form-control text-black" name="foto_kta" readonly>
                                    </div>
                                </div> --}}
                                {{-- <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label class="mb-1 text-black">Daftar Sebagai Role : </label>
                                        <select name="tipe" class="form-control text-black" id="role" readonly>
                                            <option value="" selected disabled> == Pilih == </option>
                                            <option value="PPK">PPK</option>
                                            <option value="POKJA">POKJA</option>
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <label class="mb-1 text-black">Email</label>
                                        <input type="email" class="form-control text-black" name="email" value="{{ $data->email }}" placeholder="hello@example.com" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#password">Ubah Password</button>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2" style="text-align: right">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#ubahStatus">Ubah Status</button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="card-body">
                            <div class="row" style="text-align:right">
                                <div class="col-md-12" style="text-align:right">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#dataPendidikan"> Tambah Data Pendidikan</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <table class="table table-bordered example">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Nama Universitas / Perguruan Tinggi</th>
                                                    <th>Jurusan / Program</th>
                                                    <th>Tanggal Lulus</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- {{ dd($data) }} --}}
                                                @foreach ($data->pendidikan as $pd)
                                                {{-- {{ dd($pd) }} --}}
                                                    <tr class="text-center">
                                                        <td>{{ $pd->nama_universitas }}</td>
                                                        <td>{{ $pd->nama_jurusan }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($pd->tanggal_kelulusan)->format('d M Y') }}</td>
                                                        <td>
                                                            <a href="{{ url('user/profil/pendidikan/'.$pd->id.'/delete') }}" class="btn btn-danger shadow btn-xs sharp" title="Hapus Data"><i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="card-body">
                            <div class="row" style="text-align:right">
                                <div class="col-md-12" style="text-align:right">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#dataPekerjaan"> Tambah Riwayat Pekerjaan</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <table class="table table-bordered example">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Jabatan</th>
                                                    <th>Masa Jabatan</th>
                                                    <th>Nomor SK</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- {{ dd($data) }} --}}
                                                @foreach ($data->pekerjaan as $pk)
                                                {{-- {{ dd($pd) }} --}}
                                                    <tr class="text-center">
                                                        <td>{{ $pk->nama_jabatan }}</td>
                                                        <td>{{ $pk->masa_jabatan }} Tahun</td>
                                                        <td>{{ $pk->nomor_sk }}</td>
                                                        <td>
                                                            <a href="{{ url('user/profil/pekerjaan/'.$pk->id.'/delete') }}" class="btn btn-danger shadow btn-xs sharp" title="Hapus Data"><i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-sertifikasi" role="tabpanel" aria-labelledby="nav-sertifikasi-tab">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card" style="background-color: rgb(236, 236, 236)">
                                        <div class="card-body">
                                            <div class="new-arrival-product">
                                                <div class="new-arrivals-img-contnent">
                                                    <img src="https://th.bing.com/th/id/OIP.SvbFzGArvKV904lA0Ey1VgAAAA?pid=ImgDet&rs=1" class="img-fluid" alt="">
                                                    {{-- <embed src="{{ asset('') }}dokumen/{{ $dok->path_dokumen }}" type="application/pdf" width="100%" height="100%"> --}}
                                                </div>
                                                <div class="new-arrival-content text-center mt-3">
                                                    <h4>
                                                        <a href="ecom-product-detail.html">
                                                            Foto KTP
                                                        </a>
                                                    </h4>
                                                    {{-- <a href="{ asset('') }}dokumen/{{ $dok->pat{h_dokumen }}"><p style="color: blue">Lihat Contoh Dokumen</p></a> --}}
                                                    <a href="#"><p style="color: rebeccapurple">Lihat Dokumen Anda</p></a>
                                                    
                                                    <span class="price">Update Dokumen</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card" style="background-color: rgb(236, 236, 236)">
                                        <div class="card-body">
                                            <div class="new-arrival-product">
                                                <div class="new-arrivals-img-contnent">
                                                    <img src="https://image.freepik.com/free-vector/abstract-geometric-certificate-template_23-2148397294.jpg" class="img-fluid" alt="">
                                                    {{-- <embed src="{{ asset('') }}dokumen/{{ $dok->path_dokumen }}" type="application/pdf" width="100%" height="100%"> --}}
                                                </div>
                                                <div class="new-arrival-content text-center mt-3">
                                                    <h4>
                                                        <a href="ecom-product-detail.html">
                                                            Foto Sertifikasi L1
                                                        </a>
                                                    </h4>
                                                    {{-- <a href="{ asset('') }}dokumen/{{ $dok->pat{h_dokumen }}"><p style="color: blue">Lihat Contoh Dokumen</p></a> --}}
                                                    <a href="#"><p style="color: rebeccapurple">Lihat Dokumen Anda</p></a>
                                                    
                                                    <span class="price">Update Dokumen</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card" style="background-color: rgb(236, 236, 236)">
                                        <div class="card-body">
                                            <div class="new-arrival-product">
                                                <div class="new-arrivals-img-contnent">
                                                    <img src="https://image.freepik.com/free-vector/abstract-geometric-certificate-template_23-2148397294.jpg" class="img-fluid" alt="">
                                                    {{-- <embed src="{{ asset('') }}dokumen/{{ $dok->path_dokumen }}" type="application/pdf" width="100%" height="100%"> --}}
                                                </div>
                                                <div class="new-arrival-content text-center mt-3">
                                                    <h4>
                                                        <a href="ecom-product-detail.html">
                                                            Ijazah
                                                        </a>
                                                    </h4>
                                                    {{-- <a href="{ asset('') }}dokumen/{{ $dok->pat{h_dokumen }}"><p style="color: blue">Lihat Contoh Dokumen</p></a> --}}
                                                    <a href="#"><p style="color: rebeccapurple">Lihat Dokumen Anda</p></a>
                                                    
                                                    <a href="#" data-toggle="modal" data-target="#ubahIjazah">
                                                        <span class="price">Update Dokumen</span>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- @foreach ($dokumen as $dok)
                                @endforeach --}}
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>

    
</div>

<div class="modal fade" id="password">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Password</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="{{ url('admin/user/'.$data->id.'/password') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="" >Password Baru</label>
                            <input type="password" class="form-control text-black" name="password"  required>
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
<div class="modal fade" id="ubahStatus">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Status</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="{{ url('admin/user/'.$data->id.'/verif') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="" >Status</label>
                            <select name="status" class="form-control" id="">
                                {{-- <option value="" selected disabled> == Pilih == </option> --}}
                                <option value="1" {{ $data->status == '1' ? 'selected' : '' }}>Terverifikasi</option>
                                <option value="0" {{ $data->status == '0' ? 'selected' : '' }}>Belum Terverifikasi</option>
                            </select>
                            {{-- <input type="password" class="form-control text-black" name="password"  required> --}}
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

@section('scripts')
<script>
    $('.example').DataTable();
</script>
@endsection