<?php

$seo_meta=[
    "title"=>$blog->title,
    "description"=>\Illuminate\Support\Str::limit(strip_tags($blog->body), 200, '...') ,
    "keywords"=>"photonplay, radar speed sign, variable message signs, driver feedback"
];

?>
@include('customer.layout2.header')

    <!-- Banner sec -->
    <section class="inner-banner-bg">
        <h3 class="text-white text-center mb-0">NEWS & EVENTS</h3>
        <h6 class="text-white text-center text-uppercase mt-2">{{$blog->title}}</h6>
    </section>
    <!-- Banner Sec End -->
    <section class="blog-content-list position-relative pb-4">
        <div class="social-icons position-absolute start-0">
            <img src="./assets/images/soxcial-media iconss.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="post-item mb-5">
                        <img src="{{asset("storage/".$blog->image)}}" alt="" class="mb-4 img-fluid w-100">
                        <div class="pb-3 post-info border-0">
                            <h2 class="text-uppercase mb-3"> {{$blog->title}} </h2>
                            <div class="mb-4">
                              {{$blog_created_date}} by {{$blog->author}}
{{--                                @foreach($tags as $tag)--}}
{{--                                    {{$tag}},--}}
{{--                                @endforeach--}}
                            </div>
                            <hr/>
                            {!! $blog->body !!}
                        </div>

                        <div class="post-action d-flex justify-content-between pt-4">
                            <div class="sec-sidebar">
                                <div class="sidebar-item">
                                    <!-- <div class="side-bar-title">Tags</div> -->
                                    <div class="tags">

                                        @foreach($tags as $tag)
                                            <span>    <a href="/blog?tags={{strtolower($tag)}}" class="text-decoration-none"> {{$tag}} </a></span>
                                        @endforeach

{{--                                        <span>development</span>--}}
{{--                                        <span>ui</span>--}}
{{--                                        <span>photography</span>--}}
{{--                                        <span>template</span>--}}
                                        <!-- <span>branding</span> -->
                                    </div>
                                </div>
                            </div>
                            <div class="post-action-fire">
                                <ul class="d-flex p-0 m-0 align-items-center">
                                    <!-- <li class="text-secondary"> <img src="./assets/images/chat-gpt.png" />21 </li> -->
                                    <li class="text-secondary" ><span id="like-totals">{{$count}} </span>  </li>

                                    <li class="text-secondary d-flex align-items-center">
                                        <i id="like-unlike-btn" class="bi bi-suit-heart{{$like?"-fill text-danger":""}}"  style="font-size: 25px;"></i>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>


<hr/>
{{--                    <div--}}
{{--                        class="d-flex justify-content-between align-items-center border-0 border-top border-bottom py-4 mb-4">--}}
{{--                        <div class="d-flex justify-content-between align-items-center"> <img--}}
{{--                                src="./assets/images/arrowlight.jpg" alt="">--}}
{{--                            <p class="text-uppercase ms-3 mb-0">POST WITH TEXT ONLY</p>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex justify-content-between align-items-center">--}}
{{--                            <p class="text-uppercase me-3 mb-0">pOST WITH video</p><img--}}
{{--                                src="./assets/images/arrowlightright.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

                <div class="col-lg-4 col-md-12 position-sticky top-0 h-100">
                  <form method="get" action="{{route('customer.search_photon_things')}}">
                    <div class="search mb-5 position-relative">
                        <input type="text" name="search" placeholder="Search" class="border-0 ">
                        <i class="bi bi-search"></i>
                    </div>
                  </form>
                    <div class="sec-sidebar">
                        <div class="sidebar-item">
                            <div class="side-bar-title">categoriEs</div>
                            <ul class="m-0 p-0">

                                @foreach($categories as $category)
                                    <li class=" "><a href="/blog?category={{$category->slug}}" class="text-decoration-none text-uppercase">{{$category->category}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-item">
                            <div class="side-bar-title text-uppercase">RECENT POSTS</div>
                            <ul class="m-0 p-0 latest-post">
                                @foreach($latestBlogRecords as $lt_blog)
                                    <li>

                                        <a href="{{route('customer.blog_show',$lt_blog->slug)}}" class="d-flex align-items-center text-decoration-none text-secondary">
                                            <img src="{{asset("storage/".$lt_blog->image)}}" />
                                            <div class="latest-post-content ms-2">
                                                <h4>{{$lt_blog->title}}</h4>
                                                <span>
                                                <?php
                                                        $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$lt_blog->created_at);
                                                        $blog_created_date = $date->format('d F, Y');
                                                        echo $blog_created_date;
                                                    ?>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-item">
                            <div class="side-bar-title">Tags</div>
                            <div class="tags">
                                <div class="mb-3">
                                    <?php $i=1;?>
                                @foreach($tags as $tag)
                                        <span>
                                            <a href="/blog?tags={{strtolower($tag)}}" class="text-decoration-none">{{$tag}}</a></span>
                                    @if($i%3==0)
                                </div>
                                            <div class="mb-3">
                                    @endif
                                    <?php $i++; ?>
                                @endforeach
                                </div>

                            </div>
                        </div>
                        <div class="sidebar-item">
                            <div class="side-bar-title">Archive</div>
                            <ul class="m-0 p-0">

                                @foreach($groupedPosts as $postarchive)
                                    <li><a href="/blog?months={{$postarchive->month_year}}" class="text-decoration-none">{{$postarchive->month_year}} ({{$postarchive->count}})</a></li>
                                @endforeach

{{--                                <li><a hre="">April 2023</a></li>--}}
{{--                                <li><a hre="">March 2023</a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- related posted-start -->
    <section class="content-rules pt-0">
        <div class="container">
            <div class="px-4 col-lg-8">
                <div>
                    <h6 class="mb-4 text-uppercase">Related Posts</h6>
                </div>
                <div class="row">
                    @foreach($relatedBlogRecords as $relatedBlog)
                     <div class="col-md-4">
                         <a href="{{route('customer.blog_show',$relatedBlog->slug)}}" class="text-decoration-none">
                             <div>
                                 {{--               below class removed: branding-diss--}}
                                 <div class="px-2 ">
                                     <img src="{{asset("storage/".$relatedBlog->image)}}" class="d-block mx-auto w-100" />
                                     <div class="py-4">
                                         <h6 class="text-uppercase mb-0">{{$relatedBlog->title}}</h6>
                                         <span class="text-lights">{{$relatedBlog->created_at}}  / {{$relatedBlog->author}} </span>
                                     </div>
                                 </div>
                             </div>

                         </a>
                     </div>


                    @endforeach

                </div>
                <div class="rules-content mb-0 border-0 border-bottom pb-5">
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- related posted-end -->
    <!-- blog-banner end  -->
{{--    <section class="our-clints-last">--}}
{{--        <div class="mb-lg-5 text-center">--}}
{{--            <h2 class="fs-md-2 mt-3">Our Clients</h2>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="px-4">--}}
{{--                <div class="clints-content mb-0 d-flex align-items-center">--}}
{{--                    <div>--}}
{{--                        <div class="px-2 branding-diss">--}}
{{--                            <img src="./assets/images/adani.png" class="d-block mx-auto" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <div class="px-2 branding-diss">--}}
{{--                            <img src="./assets/images/afkons.png" class="d-block mx-auto" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <div class="px-2 branding-diss">--}}
{{--                            <img src="./assets/images/ASHOKA.png" class="d-block mx-auto" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <div class="px-2 branding-diss">--}}
{{--                            <img src="./assets/images/CTU.png" class="d-block mx-auto" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <div class="px-2 branding-diss">--}}
{{--                            <img src="./assets/images/adani.png" class="d-block mx-auto" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <div class="px-2 branding-diss">--}}
{{--                            <img src="./assets/images/afkons.png" class="d-block mx-auto" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <div class="px-2 branding-diss">--}}
{{--                            <img src="./assets/images/ASHOKA.png" class="d-block mx-auto" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <div class="px-2 branding-diss">--}}
{{--                            <img src="./assets/images/CTU.png" class="d-block mx-auto" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@include('customer.layout2.our_clients')
@include('customer.layout2.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>

        $('.clint-wrapperr').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",
            arrows: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('.key-slider').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
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

        $('.clints-content').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,
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
        })
        $('.rules-content').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,
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
        })

        $('.clints-content-gallery').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",
            slidesToScroll: 1,
            arrows: true,
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
        })

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
<script>
    $(document).ready(function() {
        $('#like-unlike-btn').click(function() {
            $.ajax({
                url: '/blog/{{$blog->id}}/like-unlike',
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    $('#like-totals').text(response.total);
                    if (response.liked) {
                        $('#like-unlike-btn').attr('class','bi bi-suit-heart-fill text-danger');
                    } else {
                        $('#like-unlike-btn').attr('class','bi bi-suit-heart');
                    }

                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>



<script>
    $('.clints-content-branding').slick({
        dots: false,
        infinite: false,
        speed: 300,
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
                    slidesToShow: 6,
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
    })
    window.addEventListener('click', function (e) {
        if ($('.navbar-collapse').hasClass('show')) {
            $('.navbar-toggler').click();
        }
    })
</script>
