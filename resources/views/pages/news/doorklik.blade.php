@extends('master')

@section('title')
	{{ $data['news']->title }}
@stop


@section('content')

	<section class="container-fluid xs-space-inside-sides-sm space-inside-sides-xl space-outside-lg fadeInDown wow">
			
		<div class="row">

			<div class="col-lg-6 space-outside-down-md xs-text-center">
				


				<h1 >{{ $data['news']->title }} </h1>

			</div>

			<div class="col-lg-7 xs-space-inside-sides-md space-outside-down-lg space-inside-right-lg">
				
				<p>
					
					{!! htmlentities(nl2br($data['news']->body)) !!}

				</p>

			</div>

			<div class="col-lg-5 col-md-12 col-xs-12 col-sm-12">
				
				<div class="image lg-rect-xl">
					
					<img class="height-auto" src="{{ $data['news']->photos->first()['path'] }}">

				</div>

			</div>

			<div class="col-lg-12 space-outside-down-md">
				
				<a class='btn-standard bg-secondary text-color-light light' href='/actueel'>Ga terug</a>
				
			</div>

		</div>	

	</section>

	<section class="container-fluid space-outside-lg bg-accent fadeInDown wow">

		<div class="row-centered xs-space-inside-sides-sm space-inside-sides-lg ">


			<div class="col-lg-12 space-outside-up-md space-outside-down-sm ">

				<h3 class="text-center">{{ $data['aanmeldbox']->title }}</h3>

			</div>

			<div class="col-lg-4 col-centered space-outside-down-md">

				<p class="text-center">
					{{ htmlentities(nl2br($data['aanmeldbox']->body)) }}
				</p>

			</div>

			<div class="col-lg-12 text-center space-outside-down-md">

				<a href="/aanmelden-als-mentor" class="btn-standard font-sm bg-secondary text-color-light light space-outside-down-md ">Mentor worden</a>

				<a href="/aanmelden-als-jongere"  class="space-outside-left-sm font-sm text-color-light light btn-standard bg-secondary ">Aanmelden als jongere</a>

			</div>


		</div>

	</section>

@stop