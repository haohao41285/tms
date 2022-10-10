@extends('fe.pages.master')

@section('title')
    {{__('fe.menu.home')}}
@endsection

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
                    <h2>{{ __('fe.home.why.title') }}</h2>
                    <p>{{ __('fe.home.why.description') }}</p>
                    <ul class="some_agile_facts">
                        {!! __('fe.home.why.facts') !!}
                    </ul>
                </div>
                <a href="{{ route('fe.contact-us') }}" class="btn btn-contact">
                    <i class="fa  fa-envelope-o"></i>
                    {{ __('fe.menu.contact-us') }}
                </a>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 w3ls_banner_bottom_right">
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
        <div class="col-md-3 w3ls-special-img text_info">
            <h4>{{ __('fe.home.project.type') }}</h4>
        </div>
        <div class="col-md-3 w3ls-special-img w3l-grid-1">
            <div class="w3ls-special-text effect-1">
                <h4>{{ __('fe.home.project.type1.name') }}</h4>
                <ul>
                    <li>{{ __('fe.home.project.type1.description') }}</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 w3ls-special-img w3l-grid-2">
            <div class="w3ls-special-text effect-1">
                <h4>{{ __('fe.home.project.type2.name') }}</h4>
                <ul>
                    <li>{{ __('fe.home.project.type2.description') }}</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 w3ls-special-img w3l-grid-3">
            <div class="w3ls-special-text effect-1">
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
            <h3 class="w3l_header w3_agileits_header">{{ __('fe.menu.faqs') }}</h3>
            <p class="sub_para_agile">{{ __('fe.faqs.title') }}</p>
            <div class="agile_team_grids_top">
                <div class="col-md-4 w3_agile_services_grid">
                    <div class="agile_services_grid1 wthree_services_grid1">
                        <h3>Funding</h3>
                        <div class="agile_services_grid1_sub">
                            <p>05 January 2017</p>
                        </div>
                        <h4><span>Fund</span>ing</h4>
                    </div>
                    <div class="agileits_w3layouts_services_grid1">
                        
                        <h4><a href="#" data-toggle="modal" data-target="#myModal">Sed dictum augue quis varius</a>
                        </h4>
                        <p>Etiam quis placerat dui, sit amet tristique nisl. Donec eget finibus eros.</p>
                    </div>
                </div>
                <div class="col-md-4 w3_agile_services_grid">
                    <div class="agile_services_grid1 wthree_services_grid2">
                        <h3>Funding</h3>
                        <div class="agile_services_grid1_sub">
                            <p>14 January 2017</p>
                        </div>
                        <h4><span>Fund</span>ing</h4>
                    </div>
                    <div class="agileits_w3layouts_services_grid1">
                        <h4><a href="#" data-toggle="modal" data-target="#myModal">lobortis sem dictum placerat</a>
                        </h4>
                        <p>Etiam quis placerat dui, sit amet tristique nisl. Donec eget finibus eros.</p>
                    </div>
                </div>
                <div class="col-md-4 w3_agile_services_grid">
                    <div class="agile_services_grid1 wthree_services_grid3">
                        <h3>Funding</h3>
                        <div class="agile_services_grid1_sub">
                            <p>20 January 2017</p>
                        </div>
                        <h4><span>Fund</span>ing</h4>
                    </div>
                    <div class="agileits_w3layouts_services_grid1">
                        <h4><a href="#" data-toggle="modal" data-target="#myModal">Praesent amet tempor risus</a>
                        </h4>
                        <p>Etiam quis placerat dui, sit amet tristique nisl. Donec eget finibus eros.</p>
                    </div>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="signin-form profile">
                    <h3 class="agileinfo_sign">Funding</h3>
                    <div class="modal-body">
                        <img src="images/g1.jpg" alt=" " class="img-responsive" />
                        <p>Ut enim ad minima veniam, quis nostrum
                            exercitationem ullam corporis suscipit laboriosam,
                            nisi ut aliquid ex ea commodi consequatur? Quis autem
                            vel eum iure reprehenderit qui in ea voluptate velit
                            esse quam nihil molestiae consequatur, vel illum qui
                            dolorem eum fugiat quo voluptas nulla pariatur.
                            <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                                esse quam nihil molestiae consequatur.</i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="gallery">
        <h3 class="w3l_header w3_agileits_header">{{ __('fe.home.technology.title') }}</h3>
        <p class="sub_para_agile">{{ __('fe.home.technology.description') }}</p>
        <div class="agile_team_grids_top">
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
