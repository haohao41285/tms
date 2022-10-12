<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/imask.js')}}"></script>
<script type="text/javascript" src="{{asset('js/aos.js')}}"></script>
<script>
    AOS.init();
  </script>

<script src="{{ asset('js/mainScript.js') }}"></script>
<script src="{{ asset('js/rgbSlide.min.js') }}"></script>
<!-- carousal -->
<script src="{{ asset('js/slick.js') }}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".center").slick({
            dots: true,
            infinite: true,
            centerMode: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: true,
                        centerMode: false,
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: true,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>
<!-- //carousal -->
<!-- flexisel -->
<script type="text/javascript">
    $(window).load(function() {
        $("#flexisel-technology").flexisel({
            visibleItems: 10,
            animationSpeed: 500,
            autoPlay: true,
            autoPlaySpeed: 2000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: false,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 4
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 5
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 5
                }
            }
        });

    });
</script>
<script type="text/javascript" src="{{ asset('js/jquery.flexisel.js') }}"></script>
<!-- //flexisel -->
<!-- gallery-pop-up -->
<script src="{{ asset('js/lsb.min.js') }}"></script>
<script>
    $(window).load(function() {
        $.fn.lightspeedBox();
    });
</script>
<!-- //gallery-pop-up -->
<!-- flexSlider -->
<script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        	var defaults = {
        	containerID: 'toTop', // fading element id
        	containerHoverID: 'toTopHover', // fading element hover id
        	scrollSpeed: 1200,
        	easingType: 'linear' 
        	};
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>

<script src="{{ asset('js/custom.js') }}"></script>


