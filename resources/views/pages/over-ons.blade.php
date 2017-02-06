@extends('master')

@section('title')
Over ons
@stop

@section('content')

	<section class="container-fluid xs-space-inside-sides-xl-none space-inside-sides-xl space-outside-lg no-overflow">

			
		<div class="row">
			
			<div class="col-lg-12 space-outside-down-lg text-center fadeInDown wow">

				<h1 class="">{{ $data['titel']->title }}</h1>

			</div>

			<div class="col-lg-12 space-outside-down-lg ">

				<div class="divider bg-accent"></div>

			</div>

			<div class="row xs-space-inside-sides-xs">
				
				<div class="col-lg-12 space-outside-down-md xs-text-center">

					<div class="col-lg-12 space-outside-down-lg fadeInDown wow">

						<h3 class="space-outside-down-sm ">{{ $data['kop1']->title }}</h3>

						<p class=" ">
							{!! nl2br($data['kop1']->body) !!}
						</p>

					</div>					

				</div>

				<!-- <div class="col-lg-12 space-outside-down-lg">
							
					<div class="col-lg-6">

						<h3 class="space-outside-down-sm">{{ $data['kop3']->title }}</h3>

						<p>
						{!! nl2br($data['kop3']->body) !!}
						</p>

					</div>

					<div class="col-lg-6 ">

						<h3 class="space-outside-down-sm ">{{ $data['kop4']->title }}</h3>

						<p >
							{!! nl2br($data['kop4']->body) !!}
						</p>

					</div>

				</div>

			</div> -->

			<div class="col-lg-12">

				<div class="divider bg-accent"></div>

			</div>			

		</div>

	</section>

<!-- 	<section class="container-fluid xs-space-inside-sides-xl-none no-overflow push-65 ">

			
		<div class="row row-centered">
			
			<div class="col-lg-12 space-outside-down-lg text-center">

				<h1>{{ $data['hetteam']->title }}</h1>

			</div>			

			<div class="image space-outside-down-md">

				<div class="col-lg-12 banner xs-space-inside-sides-xl-none space-inside-sides-xl">
						
					<div class="space-outside-down-md space-inside-up-xl right">
						
						<h1 class="text-color-light uppercase space-outside-down-sm"> Karin Oldenburger </h1>
						
						<p class="text-color-light text-right">
							
							Non ipsum vulputate condimentum eu id tellus. <br>
							Praesent commodo arcu quis rhoncus. <br>
							Suspendisse volutpat, quam eu. <br>

						</p>

					</div>

					<img  src="images/banner.jpeg" alt='banner image mentor4you' />

				</div>


				<div class="slider-arrow slider-arrow-left"> <a class="a a-slider" href="#"> < </a></div>

				<div class="slider-arrow slider-arrow-right"> <a class="a a-slider" href="#"> > </a></div>

			</div>

			<div class="col-lg-12 space-outside-down-sm text-center">

				<div class="col-lg-1 bg-accent circle circle-sm hover-dark col-centered space-outside-left-sm"></div>

				<div class="col-lg-1 bg-accent circle circle-sm hover-dark col-centered space-outside-left-sm"></div>

				<div class="col-lg-1 bg-accent circle circle-sm hover-dark col-centered space-outside-left-sm"></div>

				<div class="col-lg-1 bg-accent circle circle-sm hover-dark col-centered space-outside-left-sm"></div>

			</div>


		</div>

	</section> -->

	<section class="container-fluid  space-outside-lg bg-accent fadeInDown wow">

		<div class="row-centered xs-space-inside-sides-lg-none space-inside-sides-lg ">


			<div class="col-lg-12 space-outside-up-md space-outside-down-sm ">

				<h3 class="text-center">{{ $data['aanmeldbox']->title }}</h3>

			</div>

			<div class="col-lg-4 col-centered space-outside-down-md">

				<p class="text-center">
					{{ htmlentities(nl2br($data['aanmeldbox']->body)) }}
				</p>

			</div>

			<div class="col-lg-12 text-center space-outside-down-md">

				<a href="/aanmelden-als-mentor" class="btn-standard bg-secondary text-color-light light space-outside-down-md ">Mentor worden</a>

				<a href="/aanmelden-als-jongere"  class="space-outside-left-sm text-color-light light btn-standard bg-secondary ">Aanmelden als jongere</a>

			</div>


		</div>

	</section>
@stop