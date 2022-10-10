<!-- footer -->
<div class="footer_agile_w3ls">
    <div class="container">
        <div class="agileits_w3layouts_footer_grids">
            <div class="row">
                <div class="col-md-3 footer-w3-agileits">
                    <h3>Spi Tech</h3>
                    <ul>
                        <li>
                            <a class="{{ $active && $active == 'home' ? 'active' : '' }}" href="{{ route('fe.home') }}">{{ __('fe.menu.home') }}</a>
                        </li>
                        <li>
                            <a class="{{ $active && $active == 'about-us' ? 'active' : '' }}" href="{{ route('fe.about-us') }}">{{ __('fe.menu.about-us') }}</a>
                        </li>
                        <li>
                            <a class="{{ $active && $active == 'qa' ? 'active' : '' }}" href="{{ route('fe.qa') }}">{{ __('fe.menu.faqs') }}</a>
                        </li>
                        <li>
                            <a class="{{ $active && $active == 'contact-us' ? 'active' : '' }}" href="{{ route('fe.contact-us') }}">{{ __('fe.menu.contact-us') }}</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 footer-agileits">
                    <h3>{{ __('fe.menu.faqs') }}</h3>
                    <ul>
                        <li>the printing</li>
                        <li>Etiam quis placerat</li>
                        <li>Lorem Ipsum</li>
                        <li>unknown printer</li>
                    </ul>
                </div>

                <div class="col-md-3 footer-agileits-w3layouts">
                    <h3>{{ __('fe.menu.contact-us') }}</h3>
                    <ul>
                        <li style="width: fit-content">
                            <a href="{{ route('fe.contact-us') }}" class="btn btn-contact">
                                <i class="fa  fa-envelope-o"></i>
                                {{ __('fe.menu.contact-us') }}
                            </a>
                        </li>
                        <li class="dropdown" style="list-style-type: none; margin-top: 1em">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                @if (app()->getLocale() == 'vi')
                                    <img style="width: 30px" src="{{asset('images/vn.svg')}}" alt="">
                                @else
                                    <img style="width: 30px" src="{{asset('images/gb.svg')}}" alt="">
                                @endif
                            </a>
                            <ul class="dropdown-menu agile_short_dropdown" style="min-width: auto">
                                <li>
                                    <input type="hidden" id="hidden-token" value="{{ csrf_token() }}">
                                    
                                    @if (app()->getLocale() == 'vi')
                                        <a href="{{ route('fe.redirect-locale', ['locale'=>'en','utm'=> request()->route()->getName()]) }}" class="flag-icon change-locale" data-locale="en" style="padding: 0px; line-height: 0">
                                            <img style="width: 30px" src="{{asset('images/gb.svg')}}" alt="">
                                        </a>
                                    @else
                                        <a href="{{ route('fe.redirect-locale',['locale'=>'vi','utm'=> request()->route()->getName()]) }}" class="flag-icon change-locale" data-locale="vi" style="padding: 0px; line-height: 0">
                                            <img style="width: 30px" src="{{asset('images/vn.svg')}}" alt="">
                                        </a>
                                    @endif
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
