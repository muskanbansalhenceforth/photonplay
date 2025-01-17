<?php
$seo_meta=[
    "title"=>"ICOP",
    "description"=>"ICOP",
    "keywords"=>"photonplay, radar speed sign, variable message signs, driver feedback"
];
?>
@include('customer.layout2.header')
<style>
    /* Modal Overlay */
    .modal-overlay {
        display: none;
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
    }

    /* Center the Image */
    .modal-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 90%;
        max-height: 90%;
    }

    /* Hide the Image by Default */
    .modal-content img {
        display: none;
        width: 100%;
        height: 100%;
    }
</style>
<body>
<!-- Modal Overlay and Image -->


<script>
    function showModal(imgurl) {
        var modalOverlay = document.getElementById("modalOverlay");
        var modalContent = document.getElementById("modalContent");
        var image = document.getElementById("myImage");
        image.src=imgurl;
        modalOverlay.style.display = "block";
        image.style.display = "block";
        modalContent.style.width = image.width + "px";
        modalContent.style.height = image.height + "px";
    }

    function hideModal() {
        var modalOverlay = document.getElementById("modalOverlay");
        var image = document.getElementById("myImage");
        modalOverlay.style.display = "none";
        image.style.display = "none";
    }
</script>

    <!-- Banner sec -->
    <section class="banner-sec-smart-city py-4">
        <div class="container">
            <div class="slider-content ">
                <div class="image-smart">
                    <h2 class="text-center text-white fw-normal mb-5">{{$page->title}}</h2>
                    <img src="{{asset('storage/'.$page->cover_image)}}" alt="alt" class="d-block mx-auto img-fluid" style="max-height: 300px;">

                </div>
                <div class="text-center pt-4">
                    <a  href="#inquiry" class="btn btn-primary rounded-0 ">GET QUOTE</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Sec End -->

    <!-- Desc and specification -->
    <section class="sepeicification bg-light position-relative">
        <div class="container pb-lg-5">
            <div class="accodion-wrapper pb-5">
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <h4 class="text-capitalize">Description</h4>
                            <p>
                            {{$page->description}}
                            </p>
                            <div class="thumb-image">
                                <div class="row">
                                    @forelse ($page->images as $image)
                                    <div class="col-4">

                                        <div class="thumb-image-item mb-3">
                                            <img src="{{asset('storage/'.$image->image)}}" alt="" class="img-fluid" style="height: 200px;width: 200px;">
                                            <img src="{{asset('assets/customer/images/zoom-in.png')}}" alt="" onclick="showModal({{asset('storage/'.$image->image)}})" class="zoom-in">
                                        </div>


                                        <div id="modalOverlay" class="modal-overlay" onclick="hideModal()">
                                            <div id="modalContent" class="modal-content">
                                                <img id="myImage" src="{{asset('assets/customer/images/zoom-in.png')}}" alt="Image">
                                            </div>
                                        </div>

                                    </div>
                                    @empty

                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <h4>Specification</h4>
                        </div>
                        <div class="circle-floow foloowers position-relative">
                            <div class="accordion accordion-flush" id="accordionFlushExample1">
                                @foreach ($page->specs as $spec)
                                    <div class="accordion-item border-0 position-inherit ">
                                        <h2 class="accordion-header" id="flush-headingOne{{$spec->id}}">
                                            <button class="accordion-button collapsed optic bg-white te-3 pb-2 shadow-none text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$spec->id}}" aria-expanded="false" aria-controls="flush-collapseOne{{$spec->id}}">
                                                {{$spec->spec}}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne{{$spec->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne{{$spec->id}}" data-bs-parent="#accordionFlushExample1">
                                            <div class="accordion-body pt-0">
                                                {!! $spec->description !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="stone-accordian position-absolute d-flex align-items-center ">
                                    <img src="{{asset('assets/customer/images/object.png')}}" class="img-fluid circle-image d-none d-md-block" alt="not-found">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="dotted-imag img-fluid d-none d-md-inline" src="{{asset('assets/customer/images/dotted-tran.png')}}"
                    alt="not-found">
            </div>
    </section>
    <!-- Desc and specificatio  end -->

    <!-- Feature -->
    <section class="sec-feature">
        <div class="container">
            <h2 class="fs-md-2 mt-3 text-center">Feature</h2>
            <div class="feature-list">
                <!-- <ul class=" m-0 p-0 "> -->
                <div class="d-lg-flex justify-content-between">
                    <ul class="w-100 m-0 p-0">
                        @php
                            $break_point=(int)(count($page->features)/2);
                            $sr=1;

                        @endphp

                        @foreach($page->features as $feature)
                            <li>
                                <div class="content-feature" style="width: 300px;">
                                    <strong>{{ $feature->feature}}</strong>
                                    <span>{{$feature->description}}</span>
                                </div>
                            </li>
                            @if($sr==$break_point)
                    </ul>
                    <ul class="w-100 m-0 p-0">
                        @php
                            $sr=0;
                        @endphp
                        @endif
                        @php
                            $sr++;
                        @endphp
                        @endforeach
                    </ul>
                </div>
                <!-- </ul> -->
            </div>
        </div>
    </section>
    <!-- Feature end -->

    <!-- Application -->
    <section class="application-section">
        <div class="container">
            <h2 class="fs-md-2 mt-3 mb-5 text-center">APPLICATION</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="application-item">
                        <img src="{{asset('assets/customer/images/application-img-1.png')}}" alt="image">
                        <div class="content-application-item">
                            <h4 class="text-uppercase">Real time traffic information </h4>
                            <p>Traffic congestion , Accidents incidents, route options useful to the road user, Ongoing
                                Roadwork zones, Speed Limits</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="application-item">
                        <img src="{{asset('assets/customer/images/standrooms.png')}}" alt="image">
                        <div class="content-application-item">
                            <h4 class="text-uppercase">Parking Lots </h4>
                            <p>Parking availability information</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Application end -->

    <section class="con-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <h4 class="text-white text-center"> VSLS - Brochure</h4>
                </div>
                <div class="col-md-6 text-center">
                    <a href="{{asset('storage/'.$page->brochure)}}" class="btn btn-primary rounded-0" download="">Download Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- _____________________ourclint-last-start___________________ -->
    <section class="our-clints-last">
        <div class="mb-lg-5 text-center">
            <h2 class="fs-md-2 mt-3">GALLERY</h2>
        </div>
        <div class="container">
            <div class="px-4">
                <div class="clints-content-gallery mb-0 ">
                    @foreach ($page->galleries as $gallery)
                    <div>
                        <div class="px-2 branding-diss">
                            <img src="{{asset('storage/'.$gallery->image)}}" class="d-block mx-auto" />
                        </div>
                    </div>
                    @endforeach
                        @foreach ($page->galleries as $gallery)
                            <div>
                                <div class="px-2 branding-diss">
                                    <img src="{{asset('storage/'.$gallery->image)}}" class="d-block mx-auto" />
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- _____________________ourclint-last-end___________________ -->

    <!-- contact form -->
@include('customer.layout2.get_in_touch')
    <!-- Contact form end -->

    <!-- _____________________ourclint-last-start___________________ -->
@include('customer.layout2.our_clients')
    <!-- _____________________ourclint-last-end___________________ -->

    @include('customer.layout2.footer')
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>--}}
{{--    <script src="/assets/customer/js/bootstrap.bundle.min.js"></script>--}}
{{--    <script src="/assets/customer/js/jquery.js"></script>--}}
{{--    <script src="/assets/customer/slick/slick.min.js"></script>--}}
    <script>

{{--        $('.clints-content').slick({--}}
{{--            dots: false,--}}
{{--            infinite: false,--}}
{{--            speed: 300,--}}
{{--            slidesToShow: 4,--}}
{{--            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='{{asset('assets/customer/images/left-chevron.png')}}/></button>",--}}
{{--            nextArrow: "<button type='button' class='slick-next pull-right'><img src='{{asset('assets/customer/images/right-chevron.png')}}/></button>",--}}
{{--            slidesToScroll: 1,--}}
{{--            arrows: true,--}}
{{--            responsive: [--}}
{{--                {--}}
{{--                    breakpoint: 1024,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 3,--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    breakpoint: 600,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 1,--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    breakpoint: 480,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 1,--}}
{{--                    }--}}
{{--                }--}}
{{--            ]--}}
{{--        });--}}
            $('.clints-content-branding').slick({
                dots: false,
                infinite: true,
                speed: 700,
                slidesToShow: 5,
                prevArrow: "<button type='button' class='slick-prev pull-left'><img src='/assets/customer/images/left-chevron.png'/></button>",
                nextArrow: "<button type='button' class='slick-next pull-right'><img src='/assets/customer/images/right-chevron.png'/></button>",
                slidesToScroll: 1,
                arrows: true,
                autoplay:true,
                // fade:true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                        }
                    },

                ]
            });
        $('.clints-content-gallery').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='{{asset('assets/customer/images/left-chevron.png')}}/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='{{asset('assets/customer/images/right-chevron.png')}}/></button>",
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,           // Enable auto-scroll
            autoplaySpeed: 2000,      // Set auto-scroll speed (in milliseconds)
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });

        window.addEventListener('click', function (e) {
            if (window.innerWidth > 992) {
                if ($('.navbar-collapse').hasClass('show')) {
                    $('.navbar-toggler').click();
                }
            }

        })

        // Hover attribute
        $('.dropdown .dropdown-toggle').mouseenter(function () {
            if (window.innerWidth > 991) {
                $(this).addClass('show');
                $(this).attr({
                    'aria-expanded': true
                })
                $(this).siblings('.dropdown-menu').addClass('show');
                $(this).siblings('.dropdown-menu').attr({
                    'data-bs-popper': "static"
                })
            }

        });
        $('.dropdown-menu').mouseleave(function () {
            if (window.innerWidth > 991) {
                $(this).removeAttr('data-bs-popper');
                $(this).siblings('.nav-link ').removeClass('show');
                $(this).removeClass('show');
                $(this).siblings('.nav-link').attr({
                    'aria-expanded': false
                });
            }

        })
        $('.mega-menu h4').click(function () {
            // $(this).siblings('ul').slideDown();
            if ($(this).parent().hasClass('active')) {
                $(this).parent().removeClass('active')
            } else {
                $(this).parent().addClass('active');
            }
            $(this).parent().siblings().removeClass('active');
        });

        $('.toggler-mega').click(function () {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active')
                $('.mega-menu').slideUp();
            } else {
                $(this).addClass('active');
                $('.mega-menu').slideDown();
            }

        })
        $('.mega-menu-parent > h4').click(function () {
            var bodyColor = $('.drop-downs').attr("style");
            // console.log(bodyColor)
            if (bodyColor === 'display: block;') {
                $('.drop-downs').slideUp(200);
                $('.mega-menu-item').removeClass('active');
                // $('.toggler-mega').removeClass('active')
                return;
            }
            $('.drop-downs').slideDown(200);

        })
        // $('.mega-menu .col-md-2 > h4').click( function(){
        //     $(this).siblings('ul').slideDown();
        //     console.log(this)
        // })
    </script>
