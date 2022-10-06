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
                    <li class="{{ $active && $active == 'home' ? 'active' : '' }}"><a href="{{ route('fe.home') }}"><span data-hover="Home">Home</span></a></li>
                    <li class="{{ $active && $active == 'about-us' ? 'active' : '' }}"><a href="{{ route('fe.about-us') }}"><span data-hover="About Us">About Us</span></a></li>
                    <li class="{{ $active && $active == 'qa' ? 'active' : '' }}"><a href="{{ route('fe.qa') }}"><span data-hover="QA">QA</span></a></li>
                    <li class="{{ $active && $active == 'contact-us' ? 'active' : '' }}"><a href="{{ route('fe.contact-us') }}"><span data-hover="Contact Us">Contact us</span></a></li>
                </ul>
            </nav>
        
        </div>
        <div class="w3_agile_search">
            <form action="#" method="post">
                <input type="search" name="Search" placeholder="Search Keywords..." required="" />
                <input type="submit" value="Search">
            </form>

        </div>
    </nav>
</div>