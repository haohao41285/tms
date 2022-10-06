@extends('fe.pages.master')

@section('content')

    {{-- Big banner --}}
    @include('fe.partials._banner-big')
    {{-- End big banner --}}

    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">
            <div class="col-md-6 w3ls_banner_bottom_left">
                <div class="w3ls_banner_bottom_right1">
                    <h2>Find Loan Products We Offers</h2>
                    <p>Pellentesque convallis diam consequat magna vulputate malesuada.
                        Cras a ornare elit. Nulla viverra pharetra sem, eget pulvinar neque pharetra ac.</p>
                    <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada.
                        Cras a ornare elit. Nulla viverra pharetra sem, eget pulvinar neque pharetra ac.</p>
                    <ul class="some_agile_facts">
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Home Loan.</li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Personal Loan</li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Education Loan</li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Car Loan</li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 w3ls_banner_bottom_right">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="agileits_w3layouts_banner_bottom_grid">
                                    <img src="images/1.jpg" alt=" " class="img-responsive" />
                                </div>
                            </li>
                            <li>
                                <div class="agileits_w3layouts_banner_bottom_grid">
                                    <img src="images/2.jpg" alt=" " class="img-responsive" />
                                </div>
                            </li>
                            <li>
                                <div class="agileits_w3layouts_banner_bottom_grid">
                                    <img src="images/3.jpg" alt=" " class="img-responsive" />
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //banner-bottom -->
    <!-- middle -->
    <div class="middle-w3l">
        <div class="col-md-3 w3ls-special-img text_info">
            <h4>Recent Projects</h4>
        </div>
        <div class="col-md-3 w3ls-special-img w3l-grid-1">
            <div class="w3ls-special-text effect-1">
                <h4>Project 1</h4>
                <ul>
                    <li>Secured </li>
                    <li>Transaction</li>

                </ul>
            </div>
        </div>
        <div class="col-md-3 w3ls-special-img w3l-grid-2">
            <div class="w3ls-special-text effect-1">
                <h4>Project 2</h4>
                <ul>
                    <li>Financial </li>
                    <li>Planning </li>

                </ul>
            </div>
        </div>
        <div class="col-md-3 w3ls-special-img w3l-grid-3">
            <div class="w3ls-special-text effect-1">
                <h4>Project 3</h4>
                <ul>
                    <li>Secured </li>
                    <li>Transaction</li>

                </ul>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //middle -->
    <div class="testimonials">
        <div class="container">
            <h3 class="w3l_header w3_agileits_header">Q&A</h3>
            <p class="sub_para_agile">Ipsum dolor sit amet consectetur adipisicing elit</p>
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
    <!-- bootstrap-pop-up -->
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
    <!-- //bootstrap-pop-up -->
    <!-- gallery -->
    <div class="gallery">
        <h3 class="w3l_header w3_agileits_header">Latest <span>Gallery</span></h3>
        <p class="sub_para_agile">Ipsum dolor sit amet consectetur adipisicing elit</p>
        <div class="agile_team_grids_top">
            <ul id="flexiselDemo1">
                <li>
                    <div class="wthree_gallery_grid">
                        <a href="images/g1.jpg" class="lsb-preview" data-lsb-group="header">
                            <div class="view second-effect">
                                <img src="images/g1.jpg" alt="" class="img-responsive" />
                                <div class="mask">
                                    <p>Funding</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                        <a href="images/g2.jpg" class="lsb-preview" data-lsb-group="header">
                            <div class="view second-effect">
                                <img src="images/g2.jpg" alt="" class="img-responsive" />
                                <div class="mask">
                                    <p>Funding</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                        <a href="images/g3.jpg" class="lsb-preview" data-lsb-group="header">
                            <div class="view second-effect">
                                <img src="images/g3.jpg" alt="" class="img-responsive" />
                                <div class="mask">
                                    <p>Funding</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                        <a href="images/g4.jpg" class="lsb-preview" data-lsb-group="header">
                            <div class="view second-effect">
                                <img src="images/g4.jpg" alt="" class="img-responsive" />
                                <div class="mask">
                                    <p>Funding</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="wthree_gallery_grid">
                        <a href="images/g5.jpg" class="lsb-preview" data-lsb-group="header">
                            <div class="view second-effect">
                                <img src="images/g5.jpg" alt="" class="img-responsive" />
                                <div class="mask">
                                    <p>Funding</p>
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
    <script src="{{ asset('js/demo-1.js') }}"></script>
@endpush
