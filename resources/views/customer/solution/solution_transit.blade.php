@include('customer.layout2.header')
    <!-- header-end -->
    <!-- banner-start -->
    <section class="banner-inner pt-0 pb-0">
        <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="banner">
                        <div class="banner-imageses p-2">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner">
                        <div class="banner-imageses p-2">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner">
                        <div class="banner-imageses p-2">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" data-bs-target="#carouselExampleDark" type="button"
                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Multiple Size Options-start -->
    <section class="option-chose veriants">
        <div class="container option-chose-rows">
            <div class="text-center pb-4">
                <h2 class="fs-md-2 mt-3">Transit </h2>
                <p class="mb-2">Revolutionize public transportation systems with our advanced ITS solutions that offer
                </p>
                <p>real-time data, enhanced safety features, and improved passenger experience.</p>
            </div>
            <div class="row align-items-center">
                <!-- option-one -->

                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Passenger Information Display System <br> (PIDS)</h4>
                        <!-- <span class="text-capitalize d-block">Three Size Options To Choose From</span> -->
                        <p>Viewed by millions of eyes everyday, guiding way to millions of motorist to drive them back
                            home safely every day, Photonplay is contributing its part to the humanity in it own way by
                            enhanced road and traffic safety.</p>

                        <p> The product range starting from Platform Displays for Metro trains, Concourse displays and
                            big summary display charts for train information at a glance. Photonplay’s PIDs signs are
                            highly reliable and rugged components of a Train Signalling system</p>
                        <ul class="ps-3">
                            <li> Point head <span> - details</span></li>
                            <li> Point head <span> - details</span></li>
                            <li> Point head <span> - details</span></li>
                            <li> Point head <span> - details</span></li>
                            <li> Point head <span> - details</span></li>

                        </ul>
                        <div class="d-block mt-md-5 d-flex align-items-center justify-content-between dotted-imagess">
                            <button class="btn btn-primary text-uppercase rounded-2">EXPLORE NOW</button>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/customer/images/BG-area.png') }}" alt="Not Found" class="img-fluid shadow-none">
                    </div>
                </div>
            </div>

            <div class="row py-lg-5 py-0 align-items-center">
                <!-- option-two -->

                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Bus  Signs </h4>
                        <!-- <span class="text-capitalize d-block">Designed to withstand extreme weather 
                            conditions</span> -->
                        <p>Brief lines here...... Brief lines here...... Brief lines here...... Brief lines here......
                            Brief lines here...... Brief lines here...... Brief lines here...... Brief lines here......
                            Brief lines here...... Brief lines here...... Brief lines here...... </p>
                        <ul class="ps-5">

                            <li> Point head <span> - details</span></li>
                            <li> Point head <span> - details</span></li>
                            <li> Point head <span> - details</span></li>
                            <li> Point head <span> - details</span></li>
                            <li> Point head <span> - details</span></li>
                        </ul>
                        <div class="d-block mt-md-5 d-flex align-items-center justify-content-between dotted-imagess">
                            <button class="btn btn-primary text-uppercase rounded-2">EXPLORE NOW</button>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/customer/images/BG-area.png') }}" alt="Not Found" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Multiple Size Options-end -->
    <!--system-bus-start  -->
    <section class="bus-sign">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-sm-12">
                            <div class="d-flex justify-content-between gap-4">
                                <div class="inner-bus text-center w-50 py-5">
                                    <div class="bus-radious">
                                        <img src="{{asset('assets/customer/images/bus-bg.png') }}" alt="not-found" class="img-fluid">
                                    </div>
                                    <div class="mt-4">
                                        <p class="mb-2">Passenger Information </p>
                                        <p>Display System (PIDS)</p>
                                        <img src="{{asset('assets/customer/images/next-bus.png') }}" alt="Not Found" class="img-fluid mt-5">
                                    </div>
                                </div>
                                <div class="inner-bus text-center w-50 py-5">
                                    <div class="bus-radious">
                                        <img src="{{asset('assets/customer/images/bus-bg.png') }}" alt="not-found" class="img-fluid">
                                    </div>
                                    <div class="mt-4">
                                        <p class="mb-2">Bus Signs </p>
                                        <p class="visibility-hidden">Display System (PIDS)</p>
                                        <img src="{{asset('assets/customer/images/next-bus.png') }}" alt="Not Found" class="img-fluid mt-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--system-bus-end  -->
    <!--form-export-start  -->
    <section class="contact-form">
        <div class="text-center pb-4">
            <h2 class="fs-md-2 mt-3">Talk to our Experts</h2>
            <p>Contact our team of expert to suggest you the best product for your ITS project</p>
        </div>
        <div class="container">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                        <input type="password" id="inputPassword5" placeholder="Company Name / Organization*"
                            class="form-control rounded-0 mb-4" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="col-md-6">
                        <input type="password" id="inputPassword5" placeholder="Country*"
                            class="form-control rounded-0 mb-4" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="col-md-6">
                        <input type="password" id="inputPassword5" placeholder="First Name*"
                            class="form-control rounded-0 mb-4" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="col-md-6">
                        <input type="password" id="inputPassword5" placeholder="Last Name*"
                            class="form-control rounded-0 mb-4" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="col-md-6">
                        <input type="password" id="inputPassword5" placeholder="Email Address*"
                            class="form-control rounded-0 mb-4" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="col-md-6">
                        <input type="password" id="inputPassword5" placeholder="Phone Number*"
                            class="form-control rounded-0 mb-4" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control rounded-0 mb-4" rows="4" placeholder="Message"
                            aria-describedby="passwordHelpBlock"></textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary px-5 fw-bold rounded-pill">Send </button>
                </div>
            </div>
        </div>
    </section>
    <!-- _____________________ourclint-last-end___________________ -->

@include('customer.layout2.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $('.responsive').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        window.addEventListener('click', function (e) {
            if ($('.navbar-collapse').hasClass('show')) {
                $('.navbar-toggler').click();
            }
        })

        // Hover attribute
        $('.dropdown .dropdown-toggle').hover(function () {
            $(this).addClass('show');
            $(this).attr({
                'aria-expanded': true
            })
            $(this).siblings('.dropdown-menu').addClass('show');
            $(this).siblings('.dropdown-menu').attr({
                'data-bs-popper': "static"
            })
        });
    </script>