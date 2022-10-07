<div class="banner">
    <nav class="navbar navbar-default">
        <div class="navbar-header navbar-left">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="{{ route('fe.home') }}"><span>S</span>PI Tech</a></h1>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <nav class="link-effect-2" id="link-effect-2">
                <ul class="nav navbar-nav">
                    <li class="{{ $active && $active == 'home' ? 'active' : '' }}">
                        <a href="{{ route('fe.home') }}">
                            <span data-hover="{{ __('fe.menu.home') }}">{{ __('fe.menu.home') }}</span>
                        </a>
                    </li>
                    <li class="{{ $active && $active == 'about-us' ? 'active' : '' }}">
                        <a href="{{ route('fe.about-us') }}">
                            <span data-hover="{{ __('fe.menu.about-us') }}">{{ __('fe.menu.about-us') }}</span>
                        </a>
                    </li>
                    <li class="{{ $active && $active == 'qa' ? 'active' : '' }}">
                        <a href="{{ route('fe.qa') }}">
                            <span data-hover="{{ __('fe.menu.qa') }}">{{ __('fe.menu.qa') }}</span>
                        </a>
                    </li>
                    <li class="{{ $active && $active == 'contact-us' ? 'active' : '' }}">
                        <a href="{{ route('fe.contact-us') }}">
                            <span data-hover="{{ __('fe.menu.contact-us') }}">{{ __('fe.menu.contact-us') }}</span>
                        </a>
                    </li>
                </ul>
            </nav>
        
        </div>
        <div class="w3_agile_search">
            <ul class="link-effect-2" style="float: right; margin-top: 10px">
                <li class="dropdown" style="list-style-type: none">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @if (app()->getLocale() == 'vi')
                            <img style="width: 30px" src="{{asset('images/vn.svg')}}" alt="">
                        @else
                            <img style="width: 30px" src="{{asset('images/gb.svg')}}" alt="">
                        @endif
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu agile_short_dropdown" style="min-width: auto">
                        <li>
                            <input type="hidden" id="hidden-token" value="{{ csrf_token() }}">
                            
                            @if (app()->getLocale() == 'vi')
                                <a href="{{ route('fe.redirect-locale', ['locale'=>'en','utm'=> request()->route()->getName()]) }}" class="flag-icon change-locale" data-locale="en" style="padding: 0px; padding-top: 1px">
                                    <img style="width: 30px" src="{{asset('images/gb.svg')}}" alt="">
                                </a>
                            @else
                                <a href="{{ route('fe.redirect-locale',['locale'=>'vi','utm'=> request()->route()->getName()]) }}" class="flag-icon change-locale" data-locale="vi" style="padding: 0px; padding-top: 1px">
                                    <img style="width: 30px" src="{{asset('images/vn.svg')}}" alt="">
                                </a>
                            @endif
                        </li>
                    </ul>
                </li>
            </ul>
            
        </div>
    </nav>
</div>