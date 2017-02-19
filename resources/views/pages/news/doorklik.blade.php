@extends('master')

@section('title')
	{{ $data['news']->title }}
@stop


@section('content')

	<section class="container-fluid xs-space-inside-sides-sm space-inside-sides-xl space-outside-lg fadeInDown wow">
		<div class="row">
			<div class="col-lg-6 space-outside-down-md xs-text-center">
				<h1 class="text-color-main">{{ $data['news']->title }} </h1>
			</div>

			<div class="col-lg-7 xs-space-inside-sides-md space-outside-down-lg space-inside-right-lg">
				<p class="font-md">
					{!! htmlentities(nl2br($data['news']->body)) !!}
				</p>
			</div>

			<div class="col-lg-5 col-md-12 col-xs-12 col-sm-12">
				<div class="image lg-rect-xl">
					<img class="height-auto" src="{{ $data['news']->photos->first()['path'] }}">
				</div>
			</div>

			<div class="col-lg-12 space-outside-down-md">
				<a class='inline-block space-inside-sides-sm space-inside-xs font-sm text-light bg-secondary text-color-light light' href='/actueel'>Ga terug</a>
			</div>

		</div>
	</section>

	<section class="container-fluid space-outside-lg bg-accent fadeInDown wow">
		<div class="row-centered xs-space-inside-sides-sm space-inside-sides-lg ">
				@include('pages.partials.over-ons.aanmelden-promoten')
		</div>
	</section>

@stop