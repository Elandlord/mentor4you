@extends('master')

@section('title')
	Homepage
@stop

@section('content')

	<!-- Section waar het aanmelden gepromoot wordt.  -->
	<section class="container-fluid xs-space-inside-sides-xsspace-inside-sides-xl no-overflow">
		<div class="row row-centered">

			<div class="col-lg-12 text-center">
				<div class=" space-outside-lg ">
					<h1> Aanmelden </h1>
				</div>
			</div>

			<!-- aanmelden kopjes  -->
			<div class="col-lg-12 col-centered text-center space-outside-down-lg wow fadeInDown">
				<div text-inject> @include('pages.partials.aanmelden.jongeren', ['section' => $section, 'sections' => $sections]) </div>
				<div text-inject> @include('pages.partials.aanmelden.mentoren', ['section' => $section, 'sections' => $sections]) </div>
				<div text-inject> @include('pages.partials.aanmelden.ervaringen', ['section' => $section, 'sections' => $sections]) </div>
			</div>

		</div>
	</section>

	@include('pages.partials.laatste-nieuwsbericht', $laatsteNieuwsbericht)
	<div text-inject> @include('pages.partials.actueel', ['section' => $section, 'sections' => $sections]) </div>
	@include('pages.partials.partners', $partners)

@stop