<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templates.seekviral.com/trimba3/forms/InterestingQuiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Jun 2023 20:36:34 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- font-awesome -->
    <link rel="stylesheet" href="{{ asset('') }}quiz-assets/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Bootstrap-5 -->
    <link rel="stylesheet" href="{{ asset('') }}quiz-assets/assets/css/bootstrap.min.css">

    <!-- custom-styles -->
    <link rel="stylesheet" href="{{ asset('') }}quiz-assets/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('') }}quiz-assets/assets/css/responsive.css">
    <link rel="stylesheet" href="{{ asset('') }}quiz-assets/assets/css/animation.css">

        <!-- color sceme -->
        <link rel="stylesheet" href="{{ asset('') }}quiz-assets/assets/css/colorvariants/default.css" id="defaultscheme">



        <!-- color switcher -->
        <link rel="stylesheet" href="{{ asset('') }}quiz-assets/colorswitcher/assets/css/colorswitcher.css">
</head>
<body>

    <main class="popreveal overflow-hidden">
        <div class="row">
            <div class="sidebar col-md-3 orders">
                <div class="sidebar-inner">

                    <!-- logo -->
                    <div class="logo">
                        <div class="logo-icon">
                            <img src="{{ asset('') }}quiz-assets/assets/images/logo.png" alt="BeRifma">
                        </div>
                        <div class="logo-text">
                            Trimba<span>.</span>
                        </div>
                    </div>

                    <div class="step-counter">
                        <div class="step-rate"><span>0%</span> Complete</div>
                        <div class="step-bar">
                            <div class="move"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="steps-col col-md-9">
                <div class="wrapper">
                    <form id="steps" method="post" class="show-section">
                        <!-- step 1  -->
                        @csrf
                        <input type="hidden" name="assesment_id" value="{{ $assesment_id }}">

                        @foreach ($data->soal as $key=>$item)

                        @php
                            $x = 0;
                        @endphp
                            <section class="steps">
                                <div class="step-inner">
                                    <div class="step-number">Question <span>1</span>/3</div>

                                    <!-- Step 1 Heading  -->
                                    <div class="main-heading">
                                        {{ $item->soal }}
                                    </div>

                                    <!-- Step 1 form  -->
                                    <div id="step{{ $x+1 }}" class="borderc">
                                        @php
                                            $arr = ['A', "B", "C", "D"]
                                        @endphp
                                        @foreach (App\Helpers\Format::getJawaban($item->id) as $dt=>$jb)
                                            <div class="child{{ $dt+1 }} radio-field {{ "delay-".(0*100)."ms" }}">
                                                <input type="radio" name="soal[{{ $jb->soal_id }}]" value="{{ $jb->id }}" checked>
                                                <label>
                                                    <span>{{ $arr[$dt] }}</span>
                                                    {{ $jb->jawaban }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Next Previuos Button  -->
                                    <div class="next-prev">
                                        <button class="prev" type="button"><span>Rev</span></button>
                                        <button class="next" id="step{{ $key+1 }}btn" type="button"><span>Continue</span></button>
                                        <button class="" type="submit"><span>Kirim Jawaban</span></button>
                                    </div>
                                </div>
                            </section>
                        @endforeach

                    </form>

                </div>
            </div>
        </div>
    </main>





    
    <div id="error">

    </div>


    <!-- Bootstrap-5 -->
    <script src="{{ asset('') }}quiz-assets/assets/js/bootstrap.min.js"></script>

    <!-- Jquery -->
    <script src="{{ asset('') }}quiz-assets/assets/js/jquery-3.6.1.min.js"></script>

    <!-- My js -->
    {{-- <script src="{{ asset('') }}quiz-assets/assets/js/custom.js"></script> --}}

        <!-- colorswitcher -->
    <script src="{{ asset('') }}quiz-assets/assets/js/callswitcher.js"></script>
    <script>
        // next prev

        //show active step
        // function showActiveStep()
        // {
        //     if ($('#step1').is(':visible'))
        //     {
        //         $(".step-bar .move").css('width', '25%');
        //         $(".step-rate span").html("25%");
        //     }
        //     else if ($('#step2').is(':visible'))
        //     {
        //         $(".step-bar .move").css('width', '50%');
        //         $(".step-rate span").html("50%");
        //     }
        //     else if ($('#step3').is(':visible'))
        //     {
        //         $(".step-bar .move").css('width', '75%');
        //         $(".step-rate span").html("75%");
        //     }
        //     else
        //     {
        //         $(".step-bar .move").css('width', '100%');
        //         $(".step-rate span").html("100%");
        //     }
        // }


        // next prev
        var divs = $('.show-section section');
        var now = 0; // currently shown div
        divs.hide().first().show(); // hide all divs except first

        // console.log(divs.length)
        // console.log("now"+now)
        function next()
        {
            divs.eq(now).hide();
            now = (now + 1 < divs.length) ? now + 1 : 0;
            divs.eq(now).show(); // show next
            // showActiveStep();
        }

        $(".prev").click(function() {
            divs.eq(now).hide();
            now = (now > 0) ? now - 1 : divs.length - 1;
            divs.eq(now).show(); // show previous
            showActiveStep();
        });

        var allstars = document.querySelectorAll(".star");

        allstars.forEach((star, i) => 
        {
            star.onclick = function()
            {
                let current_level_star = i + 1;
                allstars.forEach((star, j) =>
                {
                    if(current_level_star >= j+1)
                    {
                        star.classList.add('fa-solid');
                        star.classList.remove('fa-regular');
                    }
                    else
                    {
                        star.classList.add('fa-regular');
                        star.classList.remove('fa-solid');
                    }
                    $('#starselection').html(current_level_star);
                })   
            }
            
        });





        // quiz validation
        var checkedradio = false;

        function radiovalidate(stepnumber)
        {
            var checkradio = $("#step"+stepnumber+" input").map(function()
            {
                if($(this).is(':checked'))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }).get();

            checkedradio = checkradio.some(Boolean);
        }



        $(document).ready(function()
        {
            setTimeout(function()
            {
                $("#step1 .radio-field").each(function()
                {
                $(this).addClass('revealfield');
                })
            }, 1000)

            setTimeout(function()
            {
                $("#step2 .radio-field-2").each(function()
                {
                $(this).addClass('revealfield');
                })
            }, 1000)

        })




        // disable on enter
        $('form').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
            if (keyCode === 13) { 
                e.preventDefault();
                return false;
            }
        });

        



        // form validiation
        $(document).ready(function()
        {
            // check step1
            let c = "{{ $count }}"

            // console.log(c)

            console.log("count"+c)
            $("#step1btn").on('click', function()
            {
                radiovalidate(1);

                if(checkedradio == false)
                {
                    
                (function (el) {
                    setTimeout(function () {
                        el.children().remove('.reveal');
                    }, 3000);
                    console.log("el"+el)
                    }($('#error').append('<div class="reveal alert alert-danger">Choose an option!</div>')));
                    
                    radiovalidate(1);

                }

                else
                {
                    next();
                }
            })

            // check step2
            $("#step2btn").on('click', function()
            {
                radiovalidate(2);

                if(checkedradio == false)
                {
                    
                (function (el) {
                    setTimeout(function () {
                        el.children().remove('.reveal');
                    }, 3000);
                    });
                    
                    radiovalidate(2);

                }

                else
                {
                    next();
                }
            })

            // check last step
            // $("#sub").on('click' , function()
            // {
                
            


            //     $("#sub").html("<img src='assets/images/loading.gif'>");

                                
            //     var dataString = new FormData(document.getElementById("steps"));


            //     // console.log(dataString);
                
            //     // send form to send.php
            //     $.ajax({
            //                 type: "POST",
            //             url: "form handling/send.php",
            //             data: dataString,
            //                 processData: false,
            //                 contentType: false,
            //                 success: function(data,status)
            //                 {

            //                 $("#sub").html("Success!");
                            
            //                 window.location = 'thankyou.html';
                            
            //                 },
            //                 error: function(data, status)
            //                 {
            //                 $("#sub").html("<span>failed!</span>");
            //                 }
            //             });

            // });
        });
    </script>
</body>

<!-- Mirrored from templates.seekviral.com/trimba3/forms/InterestingQuiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Jun 2023 20:36:39 GMT -->
</html>