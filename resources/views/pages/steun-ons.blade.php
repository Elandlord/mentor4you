@extends('master')

@section('title')
Steun ons
@stop

@section('content')

	<section class="container-fluid xs-space-inside-sides-sm  space-inside-sides-xl space-outside-lg xs-space-outside-down-sm">

			
		<div class="row">

			<div class="col-lg-12 space-outside-down-lg text-center fadeInDown wow">

				<h1>{{ $data['titel']->title }}</h1>

			</div>

			<div class="col-lg-8 col-xs-12 space-outside-down-lg xs-text-center fadeInDown wow">

				<h3 class="space-outside-down-md ">{{ $data['eerste_kop']->title }}</h3>

				<p class="space-outside-down-lg xs-space-inside-right-lg-none space-inside-right-lg">
					
					{!! nl2br($data['eerste_kop']->body) !!}

				</p>

				<h3 class="space-outside-down-md">{{ $data['tweede_kop']->title }}</h3>

				<p class="text">
					
					{!! nl2br($data['tweede_kop']->body) !!}
				
				</p>

			</div>

			<div class="col-lg-4 col-xs-12 xs-space-outside-down-lg-none space-outside-down-lg space-inside-md  space-inside-sides-md  bg-accent fadeInDown wow">

				<div class="row">
					

					<div class="col-lg-12 xs-text-center">
								
						<div class="row">


							<div class="col-lg-2 col-sm-2 col-xs-12 space-outside-down-sm">
								
								<div class="circle circle-md bg-secondary "> <span class="text-color-light"> B </span></div>	

							</div>

							<div class="col-lg-10 col-sm-10 col-xs-12 space-outside-sm">
								
								<p class="text">{{ $data['rekeningnummer']->body }}</p>

							</div>

						</div>
					

					</div>


					<div class="col-lg-12 space-outside-up-sm xs-text-center">
								
						<div class="row">


							<div class="col-lg-2 col-sm-2 col-xs-12 space-outside-down-sm">
								
								<div class="circle circle-md bg-secondary "> <span class="text-color-light light"> P </span></div>	

							</div>

							<div class="col-lg-10 col-sm-10 col-xs-12 space-outside-sm">
								
								<p class="">{{ $data['tav']->body }}</p>

							</div>

						</div>
					

					</div>
			
					<div class="col-lg-12 space-outside-up-md  space-outside-down-lg xs-text-center">
						
						<p class="text">

							{{ $data['uitleg']->body }}

						</p>
						
					</div>

					<div class="col-lg-12 ">

						<a href="/contact" class="btn-standard xs-text-center font-sm lowercase bg-secondary light text-color-light">Naar contactformulier</a>
					</div>


					


				</div>

			</div>

		</div>

	</section>
@stop