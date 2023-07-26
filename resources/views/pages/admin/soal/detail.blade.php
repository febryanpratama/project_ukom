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
                    <div class="row">
                        <div class="col-md-8">
                            <h3>
                                {{ $data['soal'] }}
                            </h3>
                        </div>
                        <div class="col-md-4" style="text-align: right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Tambah Jawaban</button>
                        </div>
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
                                    <th width="60%">Jawaban</th>
                                    <th>Nilai Jawaban</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($data_jawaban as $item)
                                {{-- {{ dd($item) }} --}}
                                    <tr class="text-center">
                                        <td>{{ $item->jawaban }}</td>
                                        <td>
                                            @if ($item->is_jawaban)
                                                <div class="badge badge-success">Benar</div>
                                            @else
                                            <a href="{{ url('admin/bank-assesment/jawaban/'.$item->id.'/soal/'.$soal_id) }}">
                                                <div class="badge badge-danger">Salah</div>
                                            </a>
                                                
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex items-center">
                                                <div class="justify-content-center">
                                                    <a href="#" class="btn btn-primary items-center shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger items-center shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </div>												
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- <tr class="text-center">
                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore accusamus iusto deserunt quibusdam soluta! Iusto laborum fuga praesentium unde doloribus ipsum saepe voluptas laboriosam, consectetur distinctio animi. Beatae, a voluptatibus.</td>
                                    <td>
                                        <div class="badge badge-danger">Salah</div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>												
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore accusamus iusto deserunt quibusdam soluta! Iusto laborum fuga praesentium unde doloribus ipsum saepe voluptas laboriosam, consectetur distinctio animi. Beatae, a voluptatibus.</td>
                                    <td>
                                        <div class="badge badge-danger">Salah</div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>												
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore accusamus iusto deserunt quibusdam soluta! Iusto laborum fuga praesentium unde doloribus ipsum saepe voluptas laboriosam, consectetur distinctio animi. Beatae, a voluptatibus.</td>
                                    <td>
                                        <div class="badge badge-danger">Salah</div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>												
                                    </td>
                                </tr> --}}
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Jawaban</th>
                                    <th>Nilai Jawaban</th>
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
                <h5 class="modal-title">Tambah Jawaban</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="{{ url('admin/bank-assesment/jawaban') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="soal_id" value="{{ $soal_id }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="" >Jawaban</label>
                            <input type="text" class="form-control text-black" name="jawaban" placeholder="UUD 1945" required>
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