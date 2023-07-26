<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from gymove.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 09:26:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SIUKOM - Sistem Informasi Uji Kompetensi</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("") }}front/assets/img/logo-scrool.png">
	<link rel="stylesheet" href="{{ asset('') }}assets/vendor/chartist/css/chartist.min.css">
    <link href="{{ asset('') }}assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="{{ asset('') }}assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<!-- Datatable -->
    <link href="{{ asset('') }}assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet">

    {{-- Package --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="https://raw.githubusercontent.com/JeremyFagis/dropify/master/dist/css/dropify.css"> --}}
	<link href="{{ asset('') }}assets/https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    {{-- <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> --}}
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('layouts.partials.nav_header')
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->

		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        @include('layouts.partials.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layouts.partials.sidebar')

        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			@yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="{{ asset('') }}assets/http://dexignzone.com/" target="_blank">DexignZone</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/global/global.min.js"></script>
	<script src="{{ asset('') }}assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="{{ asset('') }}assets/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/js/custom.min.js"></script>
	<script src="{{ asset('') }}assets/js/deznav-init.js"></script>
	<script src="{{ asset('') }}assets/vendor/owl-carousel/owl.carousel.js"></script>
	
	<!-- Chart piety plugin files -->
    {{-- <script src="{{ asset('') }}assets/vendor/peity/jquery.peity.min.js"></script> --}}
	
	<!-- Apex Chart -->
	<script src="{{ asset('') }}assets/vendor/apexchart/apexchart.js"></script>
	<!-- Datatable -->
    <script src="{{ asset('') }}assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}assets/js/plugins-init/datatables.init.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="{{ asset('') }}assets/js/dashboard/dashboard-1.js"></script>

    {{-- Package --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
	<script>
        
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:30,
				nav:false,
				dots: false,
				left:true,
				navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
				responsive:{
					0:{
						items:1
					},
					484:{
						items:2
					},
					882:{
						items:3
					},	
					1200:{
						items:2
					},			
					
					1540:{
						items:3
					},
					1740:{
						items:4
					}
				}
			})			
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000); 
		});
	</script>

    <script>
        $(document).ready(function(){
            $('.dropify').dropify();
        })
    </script>

    @yield('scripts')
</body>

<!-- Mirrored from gymove.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 09:26:43 GMT -->
</html>