<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from gymove.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 09:27:25 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gymove - Fitness Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('') }}assets/images/favicon.png">
    <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />

    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
    <style>
        .hide{
            display: none;
        }
        span > .select2-container .select2-container--default .select2-container--below{
            display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #f0f1f5;
  border-radius: 0.75rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; 
        }
    </style>
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-8">
					
					<div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
                                        <h1 class="text-white">
                                            SLOG POLRI
                                        </h1>
										{{-- <a href="{{ asset('') }}assets/index.html"><img src="{{ asset('') }}assets/images/logo-full.png" alt=""></a> --}}
									</div>
                                    <h4 class="text-center mb-4 text-white">Sign up your account</h4>
                                    <form action="{{ url('auth/register') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Nama Lengkap</strong></label>
                                                    <input type="text" class="form-control text-black" name="nama_lengkap"  placeholder="Nama Lengkap" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Jenis Kelamin</strong></label>
                                                    <select name="jenis_kelamin" class="form-control text-black" required>
                                                        <option value="" selected disabled> == Pilih == </option>
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Tempat Lahir</strong></label>
                                                    <input type="text" class="form-control text-black" name="tempat_lahir" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Tanggal Lahir</strong></label>
                                                    <input type="date" class="form-control text-black" name="tanggal_lahir" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>NRP / NIP</strong></label>
                                                    <input type="text" class="form-control text-black" name="nrp" placeholder="NRP / NIP" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Satuan Wilayah</strong></label>
                                                    <select name="satwil" class="form-control select2" id="satwil" required>
                                                        <option value="" selected disabled> == Pilih == </option>
                                                        @foreach ($data as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Satuan Kerja</strong></label>
                                                    <select name="satker" class="form-control text-black" id="satker" required>
                                                        <option value="" selected disabled> == Pilih == </option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Pangkat / Golongan</strong></label>
                                                    <input type="text" class="form-control text-black" name="pangkat" placeholder="Pangkat / Golongan" required>
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Daftar Sebagai : </strong></label>
                                                    <select name="tipe" class="form-control text-black"  required>
                                                        <option value="" selected disabled> == Pilih == </option>
                                                        <option value="PPK">PPK</option>
                                                        <option value="POKJA">POKJA</option>
                                                        <option value="Sertifikat Dasar">Sertifikat Dasar</option>
                                                        <option value="Pejabat Pengadaan">Pejabat Pengadaan</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Pilihan Registrasi : </strong></label>
                                                    <select name="tipe_registrasi" class="form-control text-black"  required>
                                                        <option value="" selected disabled> == Pilih == </option>
                                                        <option value="OKUPASI">OKUPASI</option>
                                                        <option value="NON-OKUPASI">NON-OKUPASI</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Foto KTA</strong></label>
                                                    <input type="file" class="form-control text-black" name="foto_kta" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 hide l1">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Foto Sertifikat L1</strong></label>
                                                    <input type="file" class="form-control text-black" name="foto_l1" >
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Email</strong></label>
                                                    <input type="email" class="form-control text-black" name="email" placeholder="hello@example.com" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>Password</strong></label>
                                                    <input type="password" class="form-control text-black" name="password" required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Daftar Akun</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Sudah mempunyai akun ? <a class="text-white" href="{{ url('login') }}">Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('') }}assets/vendor/global/global.min.js"></script>
<script src="{{ asset('') }}assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="{{ asset('') }}assets/js/custom.min.js"></script>
<script src="{{ asset('') }}assets/js/deznav-init.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2([
            // 'width': 'resolve'
        //     theme: "bootstrap",
		// placeholder: "Buscar y Selecionar",
		// width: 'auto',
		// dropdownAutoWidth: true,
		// allowClear: true,
        ]);

        $('#satwil').on('change', function(){
            $('#satker').html('');
            var id = $(this).val();
            console.log(id)
            $.ajax({
                url: "{{ url('api/getSatker') }}",
                type: "POST",
                dataType: "JSON",
                data: {id: id},
                success: function(data){
                    console.log(data);
                    // $('#satker').html(data);
                    let listData = data.data
                                        // console.log(data.data.length)
                    for(var i = 0; i < listData.length; i++){
                        $('#satker').append('<option value="'+listData[i].id+'">'+listData[i].name+'</option>');
                    }
                }
            })
        })

        $('#role').on('change', function(){
            $('#col').html('')
            var role = $(this).val()

            // console.log(role)

            if(role == 'PPK' || role == 'POKJA'){
                // console.log(true)
                $('.l1').removeClass('hide')
            }else{
                $('.l1').addClass('hide')
            }
        })

        @if (session('success'))
        Swal.fire(
            'Great !',
            '{{ \App\Helpers\Format::messages(session("success")) }}',
            'success'
        )
        // swal("Great !", "{{ session('success') }}", "success");
        @endif ()
        
        @if (session('errors'))
        Swal.fire(
            'Oh No !',
            '{{ \App\Helpers\Format::messages(session("errors")) }}',
            'error'
        )
        // swal("Oh No !", "{{ session('errors') }}", "errors");
        @endif ()
    });
</script>
</body>

<!-- Mirrored from gymove.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 09:27:25 GMT -->
</html>