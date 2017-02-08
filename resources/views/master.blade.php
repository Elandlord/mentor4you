<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">
        <title>@yield('title') || Mentor4you</title>

		<link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700' rel='stylesheet' type='text/css'>

        @include('partials.styles')

    </head>

    <body>

    	@include('partials.header')

        @if(session('addEmail'))

            <section class="container-fluid xs-space-inside-sides-sm space-inside-sides-xl fadeInDown wow">

                <div class="row">

                    <div class="col-lg-12 space-outside-md text-center">

                        <div class="alert alert-success" role="alert">

                            <p class="text bold">

                                {!! session('addEmail') !!}

                            </p>

                         </div>

                     </div>

                </div>

            </section>

        @endif
    	@yield('content')



        @include('partials.footer')

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/vue.js"></script>

<script type="text/javascript">

jQuery(document).ready(function($){
    var slidesWrapper = $('.cd-hero-slider');

    //check if a .cd-hero-slider exists in the DOM
    if ( slidesWrapper.length > 0 ) {
        var primaryNav = $('.cd-primary-nav'),
            sliderNav = $('.cd-slider-nav'),
            navigationMarker = $('.cd-marker'),
            slidesNumber = slidesWrapper.children('li').length,
            visibleSlidePosition = 0,
            autoPlayId,
            autoPlayDelay = 5000;

        //upload videos (if not on mobile devices)
        uploadVideo(slidesWrapper);

        //autoplay slider
        setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);

        //on mobile - open/close primary navigation clicking/tapping the menu icon
        primaryNav.on('click', function(event){
            if($(event.target).is('.cd-primary-nav')) $(this).children('ul').toggleClass('is-visible');
        });

        //change visible slide
        sliderNav.on('click', 'li', function(event){
            event.preventDefault();
            var selectedItem = $(this);
            if(!selectedItem.hasClass('selected')) {
                // if it's not already selected
                var selectedPosition = selectedItem.index(),
                    activePosition = slidesWrapper.find('li.selected').index();

                if( activePosition < selectedPosition) {
                    nextSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, selectedPosition);
                } else {
                    prevSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, selectedPosition);
                }

                //this is used for the autoplay
                visibleSlidePosition = selectedPosition;

                updateSliderNavigation(sliderNav, selectedPosition);
                updateNavigationMarker(navigationMarker, selectedPosition+1);
                //reset autoplay
                setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);
            }
        });
    }

    function nextSlide(visibleSlide, container, pagination, n){
        visibleSlide.removeClass('selected from-left from-right').addClass('is-moving').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
            visibleSlide.removeClass('is-moving');
        });

        container.children('li').eq(n).addClass('selected from-right').prevAll().addClass('move-left');
        checkVideo(visibleSlide, container, n);
    }

    function prevSlide(visibleSlide, container, pagination, n){
        visibleSlide.removeClass('selected from-left from-right').addClass('is-moving').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
            visibleSlide.removeClass('is-moving');
        });

        container.children('li').eq(n).addClass('selected from-left').removeClass('move-left').nextAll().removeClass('move-left');
        checkVideo(visibleSlide, container, n);
    }

    function updateSliderNavigation(pagination, n) {
        var navigationDot = pagination.find('.selected');
        navigationDot.removeClass('selected');
        pagination.find('li').eq(n).addClass('selected');
    }

    function setAutoplay(wrapper, length, delay) {
        if(wrapper.hasClass('autoplay')) {
            clearInterval(autoPlayId);
            autoPlayId = window.setInterval(function(){autoplaySlider(length)}, delay);
        }
    }

    function autoplaySlider(length) {
        if( visibleSlidePosition < length - 1) {
            nextSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, visibleSlidePosition + 1);
            visibleSlidePosition +=1;
        } else {
            prevSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, 0);
            visibleSlidePosition = 0;
        }
        updateNavigationMarker(navigationMarker, visibleSlidePosition+1);
        updateSliderNavigation(sliderNav, visibleSlidePosition);
    }

    function uploadVideo(container) {
        container.find('.cd-bg-video-wrapper').each(function(){
            var videoWrapper = $(this);
            if( videoWrapper.is(':visible') ) {
                // if visible - we are not on a mobile device
                var videoUrl = videoWrapper.data('video'),
                    video = $('<video loop><source src="'+videoUrl+'.mp4" type="video/mp4" /><source src="'+videoUrl+'.webm" type="video/webm" /></video>');
                video.appendTo(videoWrapper);
                // play video if first slide
                if(videoWrapper.parent('.cd-bg-video.selected').length > 0) video.get(0).play();
            }
        });
    }

    function checkVideo(hiddenSlide, container, n) {
        //check if a video outside the viewport is playing - if yes, pause it
        var hiddenVideo = hiddenSlide.find('video');
        if( hiddenVideo.length > 0 ) hiddenVideo.get(0).pause();

        //check if the select slide contains a video element - if yes, play the video
        var visibleVideo = container.children('li').eq(n).find('video');
        if( visibleVideo.length > 0 ) visibleVideo.get(0).play();
    }

    function updateNavigationMarker(marker, n) {
        marker.removeClassPrefix('item').addClass('item-'+n);
    }

    $.fn.removeClassPrefix = function(prefix) {
        //remove all classes starting with 'prefix'
        this.each(function(i, el) {
            var classes = el.className.split(" ").filter(function(c) {
                return c.lastIndexOf(prefix, 0) !== 0;
            });
            el.className = $.trim(classes.join(" "));
        });
        return this;
    };
});

        </script>
        <script type="text/javascript" src="/js/vue.js"></script>
        <script type="text/javascript" src="/js/app.js"></script>
        <script src="/js/wow.min.js"></script>
              <script>
                  new WOW().init();
              </script>
    </body>

</html>
