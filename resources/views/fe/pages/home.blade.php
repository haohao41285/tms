@extends('fe.pages.master')

@section('title')
    {{__('fe.menu.home')}}
@endsection

@push('meta_seo')
    <meta name="keywords" content="{{ __('fe.seo.home.keywords') ." - ". ENV('APP_NAME') }}" />
    <meta name="description" content="{{ __('fe.seo.home.description') ." - ". ENV('APP_NAME') }}" />
@endpush

@push('css')
    <style>
        .effect-1{
            background-color: #ffffff94;
        }
        .w3ls-special-text h4{
            color: #192d10;
        }
        .flex-control-nav{
            left: 0;
        }
    </style>
@endpush

@section('content')

    @include('fe.partials._banner-big')

    <div class="banner-bottom">
        <div class="container">
            <div class="col-md-6 w3ls_banner_bottom_left">
                <div class="w3ls_banner_bottom_right1">
                    <h2 data-aos="fade-right" data-aos-duration="1000">{{ __('fe.home.why.title') }}</h2>
                    <p data-aos="fade-up" data-aos-duration="1000">{{ __('fe.home.why.description') }}</p>
                    <ul class="some_agile_facts" data-aos="fade-up" data-aos-duration="1000">
                        {!! __('fe.home.why.facts') !!}
                    </ul>
                </div>
                <a href="{{ route('fe.contact-us') }}" class="btn btn-contact" data-aos="fade-up" data-aos-duration="1000">
                    <i class="fa  fa-envelope-o"></i>
                    {{ __('fe.menu.contact-us') }}
                </a>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 w3ls_banner_bottom_right" data-aos="fade-left" data-aos-duration="1000">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="agileits_w3layouts_banner_bottom_grid">
                                    <img src="{{ asset('images/flex-time.png') }}" alt=" " class="img-responsive" />
                                </div>
                            </li>
                            <li>
                                <div class="agileits_w3layouts_banner_bottom_grid">
                                    <img src="{{ asset('images/save-money.png') }}" alt=" " class="img-responsive" />
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="middle-w3l">
        <div class="col-md-3 w3ls-special-img text_info" data-aos="fade-right" data-aos-duration="1000">
            <h4 data-aos="fade-right" data-aos-duration="2000">{{ __('fe.home.project.type') }}</h4>
        </div>
        <div class="col-md-3 w3ls-special-img w3l-grid-1" data-aos="fade-right" data-aos-duration="1000">
            <div class="w3ls-special-text effect-1" data-aos="fade-up" data-aos-duration="2000">
                <h4>{{ __('fe.home.project.type1.name') }}</h4>
                <ul>
                    <li>{{ __('fe.home.project.type1.description') }}</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 w3ls-special-img w3l-grid-2" data-aos="fade-right" data-aos-duration="1000">
            <div class="w3ls-special-text effect-1" data-aos="fade-up" data-aos-duration="2000">
                <h4>{{ __('fe.home.project.type2.name') }}</h4>
                <ul>
                    <li>{{ __('fe.home.project.type2.description') }}</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 w3ls-special-img w3l-grid-3" data-aos="fade-right" data-aos-duration="1000">
            <div class="w3ls-special-text effect-1" data-aos="fade-up" data-aos-duration="2000">
                <h4>{{ __('fe.home.project.type3.name') }}</h4>
                <ul>
                    <li>{{ __('fe.home.project.type3.description') }}</li>
                </ul>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>

    <div class="testimonials">
        <div class="container">
            <h3 class="w3l_header w3_agileits_header" data-aos="fade-up" data-aos-duration="1000">{{ __('fe.menu.faqs') }}</h3>
            <p class="sub_para_agile" data-aos="fade-up" data-aos-duration="1000">{{ __('fe.faqs.title') }}</p>
            <div class="agile_team_grids_top">
                <div class="col-md-4 w3_agile_services_grid" data-aos="fade-right" data-aos-duration="1000">
                    <div class="agile_services_grid1 wthree_services_grid1" style="background: url({{ asset('images/faqs/question1.webp') }}) no-repeat center; background-size: cover">
                    </div>
                    <div class="agileits_w3layouts_services_grid1">
                        
                        <h4>
                            <a href="{{ route('fe.qa', ['q'=> __('fe.faqs.websites.qa1.slug')]) }}">{{ __('fe.faqs.websites.qa1.question') }}</a>
                        </h4>
                        <div class="faqs-content">{!! __('fe.faqs.websites.qa1.answer') !!}</div>
                    </div>
                </div>
                <div class="col-md-4 w3_agile_services_grid" data-aos="fade-up" data-aos-duration="1000">
                    <div class="agile_services_grid1 wthree_services_grid2" style="background: url({{ asset('images/faqs/question2.png') }}) no-repeat center; background-size: cover">
                    </div>
                    <div class="agileits_w3layouts_services_grid1">
                        <h4>
                            <a href="{{ route('fe.qa', ['q'=> __('fe.faqs.websites.qa2.slug')]) }}">{{ __('fe.faqs.websites.qa2.question') }}</a>
                        </h4>
                        <div class="faqs-content">{!! __('fe.faqs.websites.qa2.description') ?? __('fe.faqs.websites.qa2.answer') !!}</div>
                    </div>
                </div>
                <div class="col-md-4 w3_agile_services_grid" data-aos="fade-left" data-aos-duration="1000">
                    <div class="agile_services_grid1 wthree_services_grid3" style="background: url({{ asset('images/faqs/question3.jpg') }}) no-repeat center; background-size: cover">
                    </div>
                    <div class="agileits_w3layouts_services_grid1">
                        <h4>
                            <a href="{{ route('fe.qa', ['q'=> __('fe.faqs.websites.qa3.slug')]) }}">{{ __('fe.faqs.websites.qa3.question') }}</a>
                        </h4>
                        <div class="faqs-content">{!! __('fe.faqs.websites.qa3.answer') !!}</div>
                    </div>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    
    <div class="gallery">
        <h3 class="w3l_header w3_agileits_header" data-aos="fade-up" data-aos-duration="1000">{{ __('fe.home.technology.title') }}</h3>
        <p class="sub_para_agile" data-aos="fade-up" data-aos-duration="1000">{{ __('fe.home.technology.description') }}</p>
        <div class="agile_team_grids_top" data-aos="fade-left" data-aos-duration="2000">
            <ul id="flexisel-technology">
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/laravel-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/laravel-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/bootstrap-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/bootstrap-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/WordPress-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/WordPress-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/cs-cart-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/cs-cart-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/vuejs-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/vuejs-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/php-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/php-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/jquery-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/jquery-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/laravel-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/laravel-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/bootstrap-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/bootstrap-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/WordPress-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/WordPress-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/cs-cart-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/cs-cart-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/vuejs-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/vuejs-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/php-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/php-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/jquery-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/jquery-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/laravel-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/laravel-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/bootstrap-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/bootstrap-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/WordPress-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/WordPress-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/cs-cart-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/cs-cart-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/vuejs-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/vuejs-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/php-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/php-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                            <div class="view second-effect">
                                <img src="{{ asset('images/technology/jquery-home-black.png') }}" alt="" class="img-responsive" />
                                <div class="overlay">
                                    <img src="{{ asset('images/technology/jquery-home.png') }}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection

@push('js')
@endpush
