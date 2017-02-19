@extends('master')

@section('title') Over ons @stop

@section('content')
	<section class="container-fluid
									xs-space-inside-sides-xl-none
									space-inside-sides-xl
									no-overflow
	">
		<div class="row">
			@include('pages.partials.page-title', ['pageTitle' => 'Wat is Mentor4you ?'])
			<div class="col-lg-12  ">
				<div class="divider bg-accent"></div>
			</div>
		</div>
	</section>

	<section class="container-fluid
									xs-space-inside-sides-xl-none
									space-inside-sides-xl
									space-outside-up-lg
									no-overflow
	">
		<div class="row xs-space-inside-sides-xs">

			<div text-inject>@include('pages.partials.over-ons.about-mentor4you', ['iterator' => $iterator ])</div>

		</div>
	</section>

	<section class="container-fluid
									space-outside-lg
									bg-accent
									fadeInDown
									wow
	">
		<div class="row-centered
								xs-space-inside-sides-lg-none
								space-inside-sides-lg
		">

			@include('pages.partials.over-ons.aanmelden-promoten')

		</div>
	</section>
@stop