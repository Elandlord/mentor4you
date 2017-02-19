<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">
        <title>@yield('title') || Mentor4you</title>
        <script>
            window.Laravel = { csrfToken: '{{ csrf_token() }}' };
        </script>
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

        <div id="app">
            @include('partials.banner')
        	@yield('content')
        </div>

    @include('partials.footer')
    <script type="text/javascript" src="/js/vue.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
    <script src="/js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>

    </body>
</html>
