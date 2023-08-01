<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from gymove.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 09:26:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gymove - Fitness Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("") }}front/assets/img/logo-scrool.png">
    <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="{{ asset("") }}front/assets/img/logo-siukom.png" alt=""></a>
									</div>
                                    <h4 class="text-center mt-2 mb-4 text-white">Login menggunakan akun anda</h4>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="text" id="email" class="form-control text-black"  name="email" :value="old('email')" required autofocus autocomplete="username">
                                            <small class=""></small>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input class="form-control text-black" id="password" type="password" name="password" required autocomplete="current-password" >
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Login Sebagai</strong></label>
                                            <select name="tipe" class="form-control" required id="">
                                                <option value="" selected disabled> == Pilih == </option>
                                                <option value="PPK">PPK</option>
                                                <option value="POKJA">POKJA</option>
                                                <option value="PP">PP</option>
                                                <option value="SERTIFIKAT DASAR">SERTIFIKAT DASAR</option>
                                                <option value="ADMIN">ADMIN</option>
                                            </select>
                                            {{-- <input class="form-control text-black" id="password" type="password" name="password" required autocomplete="current-password" > --}}
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1 text-white">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Remember me</label>
												</div>
                                            </div>
                                            {{-- <div class="form-group">
                                                <a class="text-white" href="page-forgot-password.html">Forgot Password?</a>
                                            </div> --}}
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Tidak punya account ? <a class="text-white" href="{{ url('auth/register') }}">Daftar</a></p>
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
    <script src="{{ asset("") }}assets/vendor/global/global.min.js"></script>
	<script src="{{ asset("") }}assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset("") }}assets/js/custom.min.js"></script>
    <script src="{{ asset("") }}assets/js/deznav-init.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        $(document).ready(function(){
            @if (session('success'))
            Swal.fire(
                'Great !',
                '{{ \App\Helpers\Format::messages(session("success")) }}',
                'success'
            )
            @endif ()
            
            @if (session('errors'))
            Swal.fire(
                'Oh No !',
                '{{ \App\Helpers\Format::messages(session("errors")) }}',
                'error'
            )
            @endif ()
        })
    </script>
</body>


<!-- Mirrored from gymove.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 09:26:51 GMT -->
</html>


