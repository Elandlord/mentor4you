@extends('master')

@section('title')
	Werkgebied
@stop

@section('content')

	<section class="container-fluid xs-space-inside-sides-xl-none space-inside-sides-xl space-outside-lg no-overflow">
		<div class="row">
			
			<div class="col-lg-12 space-outside-down-lg text-center fadeInDown wow">

				<h1 class="">{{ $data['werkgebied']->title }}</h1>

			</div>

			<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12 space-outside-down-lg fadeInDown wow">

				<p class=" ">
					{!! nl2br($data['werkgebied']->body) !!}
				</p>

			</div>

			<div class='col-lg-4 col-md-6 col-sm-12 col-xs-12 space-outside-down-lg fadeInDown wow'>

				<img src='/images/drenthe.jpg' class='img-responsive'/>

			</div>

		</div>

	</section>



@stop
