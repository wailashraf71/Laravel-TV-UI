@extends('layouts.app')

@section('content')

    <div class="slideshow container">
        <div class="title">
            <br>
            <br>
            <h1 class="text-dark pb-3">{{ __('tr.trending') }}</h1>
        </div>
        <div id="demo" class="carousel slide">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/0bd5c027-eca8-49b0-9652-3456d2922745/dbbaulq-9c467822-e18c-40a9-8018-bc31e4c69cd7.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvMGJkNWMwMjctZWNhOC00OWIwLTk2NTItMzQ1NmQyOTIyNzQ1XC9kYmJhdWxxLTljNDY3ODIyLWUxOGMtNDBhOS04MDE4LWJjMzFlNGM2OWNkNy5qcGcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.pHjVG_NErQYj3Do8SQoamTmmVJQiA9QMsArGkkJ9bN4"
                         class="slideshow-image" alt="">
                    <div class="carousel-caption d-md-block">
                        <h5>Real Madrid - Live coaching</h5>
                        <b>SPORT</b>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://www.aljazeera.com/mritems/Images/2016/5/28/8ccd998d49e7468981d19696c24576a5_18.jpg"
                         class="slideshow-image" alt="">
                    <div class="carousel-caption d-md-block">
                        <h5>Real Madrid - Live coaching</h5>
                        <b>SPORT</b>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://e3.365dm.com/19/01/2048x1152/skynews-real-madrid-rich-list_4555324.jpg"
                         class="slideshow-image" alt="">
                    <div class="carousel-caption d-md-block">
                        <h5>Real Madrid - Live coaching</h5>
                        <b>SPORT</b>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </div>
    <div class="container">
        <div class="title">
            <br>
            <br>
            <h1 class="text-dark">{{ __('tr.continue_watching') }}</h1>
        </div>
        <div class="row wow fadeIn">
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/1')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://shahidstatic3.akamaized.net/mediaObject/slider/Ihsan/Thumbs-4/MBC-Iraq-Thumb/original/MBC-Iraq-Thumb.png?height=253&width=450&croppingPoint=&version=1&type=png"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">MBC IRAQ</h5>
                            <h6 class="sub-title">TV SPORT</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://shahidstatic3.akamaized.net/mediaObject/slider/Ihsan/Thumbs-4/MBC-Iraq-Thumb/original/MBC-Iraq-Thumb.png?height=253&width=450&croppingPoint=&version=1&type=png"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">MBC IRAQ</h5>
                            <h6 class="sub-title">TV SPORT</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/1')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://shahidstatic3.akamaized.net/mediaObject/slider/Ihsan/Thumbs-4/MBC-Iraq-Thumb/original/MBC-Iraq-Thumb.png?height=253&width=450&croppingPoint=&version=1&type=png"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">MBC IRAQ</h5>
                            <h6 class="sub-title">TV SPORT</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/1')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://shahidstatic3.akamaized.net/mediaObject/slider/Ihsan/Thumbs-4/MBC-Iraq-Thumb/original/MBC-Iraq-Thumb.png?height=253&width=450&croppingPoint=&version=1&type=png"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">MBC IRAQ</h5>
                            <h6 class="sub-title">TV SPORT</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/1')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://shahidstatic3.akamaized.net/mediaObject/slider/Ihsan/Thumbs-4/MBC-Iraq-Thumb/original/MBC-Iraq-Thumb.png?height=253&width=450&croppingPoint=&version=1&type=png"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">MBC IRAQ</h5>
                            <h6 class="sub-title">TV SPORT</h6>
                        </div>
                    </div>
                </a>
            </div>


        </div>
    </div>
    <div class="container">
        <div class="title">
            <br>
            <br>
            <h1 class="text-dark">{{ __('tr.bein_sport') }}</h1>
        </div>
        <div class="row wow fadeIn">
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://cdn.bein.net/bmg/wp-content/uploads/2018/06/beIN_Logo.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">BEIN SPORT</h5>
                            <h6 class="sub-title">TV SPORT</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://cdn.bein.net/bmg/wp-content/uploads/2018/06/beIN_Logo.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">BEIN SPORT</h5>
                            <h6 class="sub-title">TV SPORT</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://cdn.bein.net/bmg/wp-content/uploads/2018/06/beIN_Logo.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">BEIN SPORT</h5>
                            <h6 class="sub-title">TV SPORT</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://cdn.bein.net/bmg/wp-content/uploads/2018/06/beIN_Logo.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">BEIN SPORT</h5>
                            <h6 class="sub-title">TV SPORT</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://cdn.bein.net/bmg/wp-content/uploads/2018/06/beIN_Logo.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">BEIN SPORT</h5>
                            <h6 class="sub-title">TV SPORT</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://cdn.bein.net/bmg/wp-content/uploads/2018/06/beIN_Logo.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">BEIN SPORT</h5>
                            <h6 class="sub-title">TV SPORT</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://cdn.bein.net/bmg/wp-content/uploads/2018/06/beIN_Logo.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">BEIN SPORT</h5>
                            <h6 class="sub-title">TV SPORT</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="title">
            <br>
            <br>
            <h1 class="text-dark">{{ __('tr.top_channels') }}</h1>
        </div>
        <div class="row wow fadeIn">
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://www.whats-on-netflix.com/wp-content/uploads/2020/07/nickelodeon-logo-netflix-titles.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">Nickelodeon</h5>
                            <h6 class="sub-title">Kids</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://www.whats-on-netflix.com/wp-content/uploads/2020/07/nickelodeon-logo-netflix-titles.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">Nickelodeon</h5>
                            <h6 class="sub-title">Kids</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://www.whats-on-netflix.com/wp-content/uploads/2020/07/nickelodeon-logo-netflix-titles.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">Nickelodeon</h5>
                            <h6 class="sub-title">Kids</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://www.whats-on-netflix.com/wp-content/uploads/2020/07/nickelodeon-logo-netflix-titles.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">Nickelodeon</h5>
                            <h6 class="sub-title">Kids</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://www.whats-on-netflix.com/wp-content/uploads/2020/07/nickelodeon-logo-netflix-titles.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">Nickelodeon</h5>
                            <h6 class="sub-title">Kids</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://www.whats-on-netflix.com/wp-content/uploads/2020/07/nickelodeon-logo-netflix-titles.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">Nickelodeon</h5>
                            <h6 class="sub-title">Kids</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://www.whats-on-netflix.com/wp-content/uploads/2020/07/nickelodeon-logo-netflix-titles.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">Nickelodeon</h5>
                            <h6 class="sub-title">Kids</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://www.whats-on-netflix.com/wp-content/uploads/2020/07/nickelodeon-logo-netflix-titles.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">Nickelodeon</h5>
                            <h6 class="sub-title">Kids</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://www.whats-on-netflix.com/wp-content/uploads/2020/07/nickelodeon-logo-netflix-titles.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">Nickelodeon</h5>
                            <h6 class="sub-title">Kids</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-xs-2 p-4">
                <a href="{{url('/index/2')}}">
                    <div class="card channel">
                        <div class="card-body card-new-body align-self-center">
                            <div><img style="border-radius: 5px"
                                      src="https://www.whats-on-netflix.com/wp-content/uploads/2020/07/nickelodeon-logo-netflix-titles.jpg"
                                      alt=""></div>
                        </div>
                        <div class="card-footer border-0">
                            <h5 class="text-dark card-new-title">Nickelodeon</h5>
                            <h6 class="sub-title">Kids</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <!-- Owl Carousel-->
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script>
        $("#listView .main-content .owl-carousel").owlCarousel({
            stagePadding: 50,
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            mouseDrag: true,
            touchDrag: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',

            navText: [
                '<div class="col"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
                '<div class="col"><i class="fa fa-angle-right" aria-hidden="true"></i></div>'
            ],
            navContainer: '#listView .main-content .custom-nav',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        });
        $("#listView2 .main-content .owl-carousel").owlCarousel({
            stagePadding: 50,
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            mouseDrag: true,
            touchDrag: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',

            navText: [
                '<div class="col"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
                '<div class="col"><i class="fa fa-angle-right" aria-hidden="true"></i></div>'
            ],
            navContainer: '#listView2 .main-content .custom-nav',
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        });
        $("#listView3 .main-content .owl-carousel").owlCarousel({
            stagePadding: 50,
            loop: false,
            margin: 10,
            mouseDrag: true,
            touchDrag: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        });
        $("#listView4 .main-content .owl-carousel").owlCarousel({
            stagePadding: 50,
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            mouseDrag: true,
            touchDrag: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',

            navText: [
                '<div class="col"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
                '<div class="col"><i class="fa fa-angle-right" aria-hidden="true"></i></div>'
            ],
            navContainer: '#listView4 .main-content .custom-nav',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        });
    </script>
@endsection
