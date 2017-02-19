@extends('master')

@section('title')
	Homepage
@stop

@section('content')

	<!-- Section waar het aanmelden gepromoot wordt.  -->
	<section class="container-fluid
									xs-space-inside-sides-xs
									space-inside-sides-xl
									no-overflow
	">
		<div class="row row-centered">

			@include('pages.partials.page-title', ['pageTitle' => 'Aanmelden'])

			<!-- aanmelden kopjes  -->
			<div class="col-lg-12
									col-md-12
									col-centered
									text-center
									space-outside-down-lg
									wow
									fadeInDown
			">
				<div class="text-center " text-inject> @include('pages.partials.aanmelden.jongeren'	) </div>
				<div class="text-center " text-inject> @include('pages.partials.aanmelden.mentoren') </div>
				<div class="text-center " text-inject> @include('pages.partials.aanmelden.ervaringen') </div>

				<div class="col-lg-12 col-md-12 hidden-xs hidden-sm hidden-md">

						<div class="col-lg-4 col-md-4 text-center">
							<div class="space-outside-sm xs-space-outside-down-lg ">
								<a class="space-inside-xs font-md space-inside-sides-sm bg-secondary text-color-light light" href="/aanmelden-als-jongere">Aanmelden als jongere</a>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 text-center ">
							<div class=" space-outside-sm xs-space-outside-down-lg ">
								<a class="space-inside-xs font-md space-inside-sides-sm bg-secondary text-color-light light" href="/aanmelden-als-mentor">Aanmelden als mentor</a>
							</div>
						</div>

						<div class="col-lg-4  col-md-4 text-center">
							<div class=" space-outside-sm xs-space-outside-down-lg inline-block ">
								<a class="space-inside-xs font-md space-inside-sides-sm bg-secondary text-color-light light" href="#bekijk-de-resultaten">Bekijk de resultaten</a>
							</div>
						</div>
				</div>

			</div>

		</div>
	</section>


	@include('pages.partials.laatste-nieuwsbericht', $laatsteNieuwsbericht)
	<div text-inject> @include('pages.partials.actueel') </div>
	@include('pages.partials.partners', $partners)

@stop