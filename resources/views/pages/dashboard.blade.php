@extends('layouts.main')

@section('content')
<div class="container-fluid">
    @role('Admin')
    <div class="row"@>
        <div class="col-xl-6 col-md-6  col-xxl-12">
            <div class="row">
                
                <div class="col-sm-6">
                    <div class="card avtivity-card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <span class="activity-icon bgl-danger mr-md-4 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: red" fill="none" widht="35px" height="35px" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                    </svg>

                                </span>
                                <div class="media-body">
                                    <p class="fs-14 mb-2">Total User</p>
                                    <span class="title text-black font-w600">{{ $pengguna }} User</span>
                                </div>
                            </div>
                            <div class="progress" style="height:5px;">
                                <div class="progress-bar bg-danger" style="width: 90%; height:5px;" role="progressbar">
                                    <span class="sr-only">42% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="effect bg-danger"></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card avtivity-card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <span class="activity-icon bgl-warning  mr-md-4 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: orange" fill="none" widht="35px" height="35px" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="fs-14 mb-2">Rata<sup>2</sup> Nilai Assesment</p>
                                    <span class="title text-black font-w600">{{ App\Helpers\Format::sumNilai() }}/100</span>
                                </div>
                        </div>
                            <div class="progress" style="height:5px;">
                                <div class="progress-bar bg-warning" style="width: 42%; height:5px;" role="progressbar">
                                    <span class="sr-only">42% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="effect bg-warning"></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card avtivity-card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <span class="activity-icon bgl-primary mr-md-4 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: purple" fill="none" widht="35px" height="35px" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                    </svg>

                                </span>
                                <div class="media-body">
                                    <p class="fs-14 mb-2">Total User PPK</p>
                                    <span class="title text-black font-w600">{{ $ppk }} User</span>
                                </div>
                            </div>
                            <div class="progress" style="height:5px;">
                                <div class="progress-bar bg-secondary" style="width: 82%; height:5px;" role="progressbar">
                                    <span class="sr-only">42% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="effect bg-secondary"></div>
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="card avtivity-card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <span class="activity-icon bgl-success mr-md-4 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: green" fill="none" widht="35px" height="35px" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="fs-14 mb-2">Total User POKJA</p>
                                    <span class="title text-black font-w600">{{ $pokja }} User</span>
                                </div>
                            </div>
                            <div class="progress" style="height:5px;">
                                <div class="progress-bar bg-success" style="width: 42%; height:5px;" role="progressbar">
                                    <span class="sr-only">42% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="effect bg-success"></div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-sm-flex d-block pb-0 border-0">
                    <div class="mr-auto pr-3 mb-sm-0 mb-3">
                        <h4 class="text-black fs-20">Chart List Peserta Lulus Assesment</h4>
                        <p class="fs-13 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                    <div class="dropdown mb-3 show">
                        <button type="button" class="btn rounded btn-light" data-toggle="dropdown" aria-expanded="true">
                            <svg class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip5)">
                                <path d="M0.988957 17.0741C0.328275 17.2007 -0.104585 17.8386 0.0219823 18.4993C0.133362 19.0815 0.644694 19.4865 1.21678 19.4865C1.29272 19.4865 1.37119 19.4789 1.44713 19.4637L6.4592 18.5018C6.74524 18.4461 7.00091 18.2917 7.18316 18.0639L9.33481 15.3503L8.61593 14.9832C8.08435 14.7149 7.71475 14.2289 7.58818 13.6391L5.55804 16.1983L0.988957 17.0741Z" fill="#A02CFA"/>
                                <path d="M18.84 6.49306C20.3135 6.49306 21.508 5.29854 21.508 3.82502C21.508 2.3515 20.3135 1.15698 18.84 1.15698C17.3665 1.15698 16.1719 2.3515 16.1719 3.82502C16.1719 5.29854 17.3665 6.49306 18.84 6.49306Z" fill="#A02CFA"/>
                                <path d="M13.0179 3.15677C12.7369 2.86819 12.4762 2.75428 12.1902 2.75428C12.0864 2.75428 11.9826 2.76947 11.8712 2.79479L7.29203 3.88073C6.6592 4.03008 6.26937 4.66545 6.41872 5.29576C6.54782 5.83746 7.02877 6.20198 7.56289 6.20198C7.65404 6.20198 7.74514 6.19185 7.8363 6.16907L11.7371 5.24513C11.9902 5.52611 13.2584 6.90063 13.4888 7.14364C11.8763 8.87002 10.2639 10.5939 8.65137 12.3202C8.62605 12.3481 8.60329 12.3759 8.58049 12.4038C8.10966 13.0037 8.25397 13.9454 8.96275 14.3023L13.9064 16.826L11.3397 20.985C10.9878 21.5571 11.165 22.3064 11.7371 22.6608C11.9371 22.7848 12.1573 22.843 12.375 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2659L16.6732 16.983C16.8529 16.6919 16.901 16.34 16.8074 16.0135C16.7137 15.6844 16.4884 15.411 16.1821 15.2566L12.8331 13.553L16.3543 9.78636L19.0122 12.0393C19.2324 12.2266 19.5032 12.3177 19.7716 12.3177C20.0601 12.3177 20.3487 12.2114 20.574 12.0038L23.6243 9.16112C24.1002 8.71814 24.128 7.97392 23.685 7.49803C23.4521 7.24996 23.1383 7.12339 22.8244 7.12339C22.5383 7.12339 22.2497 7.22717 22.0245 7.43727L19.7412 9.56107C19.7386 9.56361 14.0178 4.18196 13.0179 3.15677Z" fill="#A02CFA"/>
                                </g>
                                <defs>
                                <clipPath id="clip5">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                            Running
                            <svg class="ml-2" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 0.999999L7 7L13 1" stroke="#0B2A97" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 pb-0">
                    <div id="chartBar"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-4 col-sm-12">
            <div class="card avtivity-card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <span class="activity-icon bgl-success mr-md-4 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color: green" fill="none" widht="35px" height="35px" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>

                        </span>
                        <div class="media-body">
                            <p class="fs-14 mb-2">Total User Sertifikasi L1</p>
                            <span class="title text-black font-w600">2 User</span>
                        </div>
                    </div>
                    <div class="progress" style="height:5px;">
                        <div class="progress-bar bg-success" style="width: 90%; height:5px;" role="progressbar">
                            <span class="sr-only">42% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="effect bg-success"></div>
            </div>
        </div>
        <div class="col-xl-4 col-md-4 col-sm-12">
            <div class="card avtivity-card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <span class="activity-icon bgl-success mr-md-4 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color: green" fill="none" widht="35px" height="35px" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>

                        </span>
                        <div class="media-body">
                            <p class="fs-14 mb-2">Total User Sertifikasi Dasar</p>
                            <span class="title text-black font-w600">2 User</span>
                        </div>
                    </div>
                    <div class="progress" style="height:5px;">
                        <div class="progress-bar bg-success" style="width: 90%; height:5px;" role="progressbar">
                            <span class="sr-only">42% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="effect bg-success"></div>
            </div>
        </div>
        <div class="col-xl-4 col-md-4 col-sm-12">
            <div class="card avtivity-card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <span class="activity-icon bgl-success mr-md-4 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color: green" fill="none" widht="35px" height="35px" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>

                        </span>
                        <div class="media-body">
                            <p class="fs-14 mb-2">Total Uji Kompetensi Okupasi</p>
                            <span class="title text-black font-w600">3 User</span>
                        </div>
                    </div>
                    <div class="progress" style="height:5px;">
                        <div class="progress-bar bg-success" style="width: 90%; height:5px;" role="progressbar">
                            <span class="sr-only">42% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="effect bg-success"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List Portofolio Pengguna</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table  class="display min-w850 example">
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
                                                {{-- <a href="#" class="btn btn-primary items-center shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a> --}}
                                                {{-- <a href="#" class="btn btn-danger items-center shadow btn-xs sharp"><i class="fa fa-trash"></i></a> --}}
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
        {{-- <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List Nilai Uji Coba Assesment</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead >
                                <tr class="text-center">
                                    <th width="50">Tanggal Assesment</th>
                                    <th width="50">Nilai Assesment</th>
                                    <th width="50">Status</th>
                                </tr>
                            </thead>
                            <tbody >
                            @foreach ($assesment as $item)
                                <tr class="text-center">
                                    <td> {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }} </td>
                                    <td>
                                        @if ($item->nilai_assesment != null)
                                        <span class="text-success">{{ $item->nilai_assesment }}</span>/100
                                        @else
                                        
                                        <span class="text-primary">Belum Ada Nilai </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->status_assesment == 'Sudah')
                                        <div class="badge badge-success">Selesai Assesment</div>
                                        
                                        @else
                                            <a href="{{ url('user/assesment/'.encrypt($item->id).'/start') }}">
                                                <div class="badge badge-danger">Belum Assesment</div>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Tanggal Assesment</th>
                                    <th>Nilai Assesment</th>
                                    <th>Status</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    @endrole
    @role('User')
    <div class="row">
        <div class="col-xl-12 col-md-12  col-xxl-12">
            <div class="row">
                
                <div class="col-sm-6">
                    <div class="card avtivity-card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <span class="activity-icon bgl-danger mr-md-4 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: red" fill="none" widht="35px" height="35px" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                    </svg>

                                </span>
                                <div class="media-body">
                                    <p class="fs-14 mb-2">Dokumen Portofolio</p>
                                    <span class="title text-black font-w600">{{ @App\Helpers\Format::getFileCount() }} / {{ App\Helpers\Format::getDokumenCount() }} Indikator</span>
                                </div>
                            </div>
                            <div class="progress" style="height:5px;">
                                <div class="progress-bar bg-danger" style="width: 90%; height:5px;" role="progressbar">
                                    <span class="sr-only">42% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="effect bg-danger"></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card avtivity-card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <span class="activity-icon bgl-primary mr-md-4 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: purple" fill="none" widht="35px" height="35px" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                    </svg>

                                </span>
                                <div class="media-body">
                                    <p class="fs-14 mb-2">Jumlah Ujicoba Assesment</p>
                                    <span class="title text-black font-w600">{{ App\Helpers\Format::getCountAssesment() }} Kali</span>
                                </div>
                            </div>
                            <div class="progress" style="height:5px;">
                                <div class="progress-bar bg-secondary" style="width: 82%; height:5px;" role="progressbar">
                                    <span class="sr-only">42% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="effect bg-secondary"></div>
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="card avtivity-card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <span class="activity-icon bgl-success mr-md-4 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: green" fill="none" widht="35px" height="35px" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="fs-14 mb-2">Nilai Terbaik Assesment</p>
                                    <span class="title text-black font-w600">{{ @App\Helpers\Format::getMaxAssesment() }}/100</span>
                                </div>
                            </div>
                            <div class="progress" style="height:5px;">
                                <div class="progress-bar bg-success" style="width: 42%; height:5px;" role="progressbar">
                                    <span class="sr-only">42% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="effect bg-success"></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card avtivity-card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <span class="activity-icon bgl-warning  mr-md-4 mr-3">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.9996 10.0001C22.7611 10.0001 24.9997 7.76148 24.9997 5.00004C24.9997 2.23859 22.7611 0 19.9996 0C17.2382 0 14.9996 2.23859 14.9996 5.00004C14.9996 7.76148 17.2382 10.0001 19.9996 10.0001Z" fill="#FFBC11"/>
                                        <path d="M29.7178 36.3838L23.5603 38.6931L26.6224 39.8414C27.9402 40.3307 29.3621 39.6527 29.8413 38.3778C30.0964 37.6976 30.021 36.9851 29.7178 36.3838Z" fill="#FFBC11"/>
                                        <path d="M8.37771 27.6588C7.08745 27.1803 5.64452 27.8298 5.15873 29.1224C4.67411 30.4151 5.32967 31.8555 6.62228 32.3413L9.31945 33.3527L16.4402 30.6821L8.37771 27.6588Z" fill="#FFBC11"/>
                                        <path d="M34.8413 29.1225C34.3554 27.8297 32.9126 27.1803 31.6223 27.6589L11.6223 35.1589C10.3295 35.6448 9.67401 37.0852 10.1586 38.3779C10.6378 39.6524 12.0594 40.3309 13.3776 39.8415L33.3777 32.3414C34.6705 31.8556 35.326 30.4152 34.8413 29.1225Z" fill="#FFBC11"/>
                                        <path d="M37.5001 20.0001H31.5455L27.2364 11.3819C26.7886 10.4871 25.8776 9.97737 24.9388 10.0001L19.9996 10.0001L15.061 10.0001C14.1223 9.97737 13.2125 10.4872 12.7637 11.3819L8.45457 20.0001H2.49998C1.1194 20.0001 0 21.1195 0 22.5001C0 23.8807 1.1194 25.0001 2.49998 25.0001H10C10.9473 25.0001 11.8128 24.4654 12.2363 23.6183L15 18.0909V27.4724L19.9998 29.3472L25 27.4719V18.0909L27.7637 23.6183C28.1873 24.4655 29.0528 25.0001 30 25.0001H37.5C38.8806 25.0001 40 23.8807 40 22.5001C40 21.1195 38.8807 20.0001 37.5001 20.0001Z" fill="#FFBC11"/>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="fs-14 mb-2">Rata<sup>2</sup> Nilai Assesment</p>
                                    <span class="title text-black font-w600">{{ App\Helpers\Format::getMeanAssesment() }}/100</span>
                                </div>
                            </div>
                            <div class="progress" style="height:5px;">
                                <div class="progress-bar bg-warning" style="width: 42%; height:5px;" role="progressbar">
                                    <span class="sr-only">42% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="effect bg-warning"></div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-sm-flex d-block pb-0 border-0">
                    <div class="mr-auto pr-3 mb-sm-0 mb-3">
                        <h4 class="text-black fs-20">Chart List Peserta Lulus Assesment</h4>
                        <p class="fs-13 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                    <div class="dropdown mb-3 show">
                        <button type="button" class="btn rounded btn-light" data-toggle="dropdown" aria-expanded="true">
                            <svg class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip5)">
                                <path d="M0.988957 17.0741C0.328275 17.2007 -0.104585 17.8386 0.0219823 18.4993C0.133362 19.0815 0.644694 19.4865 1.21678 19.4865C1.29272 19.4865 1.37119 19.4789 1.44713 19.4637L6.4592 18.5018C6.74524 18.4461 7.00091 18.2917 7.18316 18.0639L9.33481 15.3503L8.61593 14.9832C8.08435 14.7149 7.71475 14.2289 7.58818 13.6391L5.55804 16.1983L0.988957 17.0741Z" fill="#A02CFA"/>
                                <path d="M18.84 6.49306C20.3135 6.49306 21.508 5.29854 21.508 3.82502C21.508 2.3515 20.3135 1.15698 18.84 1.15698C17.3665 1.15698 16.1719 2.3515 16.1719 3.82502C16.1719 5.29854 17.3665 6.49306 18.84 6.49306Z" fill="#A02CFA"/>
                                <path d="M13.0179 3.15677C12.7369 2.86819 12.4762 2.75428 12.1902 2.75428C12.0864 2.75428 11.9826 2.76947 11.8712 2.79479L7.29203 3.88073C6.6592 4.03008 6.26937 4.66545 6.41872 5.29576C6.54782 5.83746 7.02877 6.20198 7.56289 6.20198C7.65404 6.20198 7.74514 6.19185 7.8363 6.16907L11.7371 5.24513C11.9902 5.52611 13.2584 6.90063 13.4888 7.14364C11.8763 8.87002 10.2639 10.5939 8.65137 12.3202C8.62605 12.3481 8.60329 12.3759 8.58049 12.4038C8.10966 13.0037 8.25397 13.9454 8.96275 14.3023L13.9064 16.826L11.3397 20.985C10.9878 21.5571 11.165 22.3064 11.7371 22.6608C11.9371 22.7848 12.1573 22.843 12.375 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2659L16.6732 16.983C16.8529 16.6919 16.901 16.34 16.8074 16.0135C16.7137 15.6844 16.4884 15.411 16.1821 15.2566L12.8331 13.553L16.3543 9.78636L19.0122 12.0393C19.2324 12.2266 19.5032 12.3177 19.7716 12.3177C20.0601 12.3177 20.3487 12.2114 20.574 12.0038L23.6243 9.16112C24.1002 8.71814 24.128 7.97392 23.685 7.49803C23.4521 7.24996 23.1383 7.12339 22.8244 7.12339C22.5383 7.12339 22.2497 7.22717 22.0245 7.43727L19.7412 9.56107C19.7386 9.56361 14.0178 4.18196 13.0179 3.15677Z" fill="#A02CFA"/>
                                </g>
                                <defs>
                                <clipPath id="clip5">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                            Running
                            <svg class="ml-2" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 0.999999L7 7L13 1" stroke="#0B2A97" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 pb-0">
                    <div id="chartBar"></div>
                </div>
            </div>
        </div> --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List Dokumen Portofolio</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table  class="display min-w850 example">
                            <thead >
                                <tr class="text-center">
                                    <th width="20%">Nama Dokumen</th>
                                    <th width="10%">Status</th>
                                    <th width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($dokumen as $item)
                                    
                                    <tr class="text-center">
                                        <td>{{ $item->nama_dokumen }}</td>
                                        <td>
                                        @if ( @App\Helpers\Format::checkProposal($item->id))
                                                <span class="text-success">Sudah Upload</span>
                                            @else
                                                <span class="text-danger">Belum Upload</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{-- <div class="d-flex"> --}}
                                                <a href="{{ url('user/portfolio/'.$item->id.'/detail') }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                                                {{-- <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a> --}}
                                            {{-- </div>												 --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Nama Dokumen</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List Nilai Uji Coba Assesment</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead >
                                <tr class="text-center">
                                    <th width="50">Tanggal Assesment</th>
                                    <th width="50">Nilai Assesment</th>
                                    <th width="50">Status</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody >
                                {{-- {{ dd($assesment) }} --}}
                            @foreach ($assesment as $item)
                                <tr class="text-center">
                                    <td> {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }} </td>
                                    <td>
                                        @if ($item->nilai_assesment != null)
                                        <span class="text-success">{{ $item->nilai_assesment }}</span>/100
                                        @else
                                        
                                        <span class="text-primary">Belum Ada Nilai </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->status_assesment == 'Sudah')
                                        <div class="badge badge-success">Selesai Assesment</div>
                                        
                                        @else
                                            <a href="{{ url('user/assesment/'.encrypt($item->id).'/start') }}">
                                                <div class="badge badge-danger">Belum Assesment</div>
                                            </a>
                                        @endif
                                    </td>
                                    {{-- <td class="text-center" style="text-align: center">
                                        <a href="{{ url('user/assesment/'.encrypt($item->id).'/lapor') }}" class="btn btn-primary items-center shadow btn-xs sharp mr-1" title="Laporkan Data Assesment ke Admin" aria-details="Submit Assesment"><i class="fa fa-upload"></i></a>
                                    </td> --}}
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Tanggal Assesment</th>
                                    <th>Nilai Assesment</th>
                                    <th>Status</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endrole
</div>
@endsection

@section('scripts')
    <script>
        $('.example').DataTable();
    </script>
@endsection