@extends('master')

@section('title')
Aanmelden als jongere
@stop

@section('content')
	<section class="container-fluid xs-space-inside-sides-sm space-inside-sides-xl no-overflow ">
		<div class="row fadeInDown wow">
			<div class="col-lg-12 space-outside-lg xs-text-center " text-inject>
				<h1 class="text-color-main ">{{ $iterator->title }}</h1>
			</div>

			@if(session('succeed'))
				<div class="col-lg-12 space-outside-down-lg fadeInDown wow">
					<div class="alert alert-success" role="alert">
						<p class="text bold">
							{!! session('succeed') !!}
						</p>
					</div>
				</div>
			@endif

			<div class="col-lg-5 space-outside-down-lg">
				<div class="image aanmelden-foto">
					<img class="height-auto" src="images/resultaten5.jpg" alt="jongere die zich wil aanmelden">
				</div>

			</div>

			<div class="col-lg-7 space-inside-sides-md">
			<a href='folder-jongere' class="inline-block left space-inside-xs space-inside-sides-sm font-sm text-uppercase bg-main text-color-light light space-outside-down-sm">DOWNLOAD DEZE INFORMATIE ALS PDF</a>
				<p class="text space-outside-down-lg font-md " >
					{!! nl2br($iterator->body) !!}
				</p>
				<a href="/mentor4you" class="space-inside-xs space-inside-sides-sm font-sm bg-secondary text-uppercase text-color-light light inline-block space-outside-down-lg "> Meer over mentor4you</a>
			</div>
		</div>
		<div class="divider bg-accent"></div>
		{{ $iterator->next() }}
	</section>

	<section class="container-fluid  space-outside-lg xs-space-inside-sides-sm space-inside-sides-xl fadeInDown wow">
		<div class="row">

			<div class="col-lg-12 col-xs-12 xs-space-inside-sides-md space-outside-down-lg xs-text-center" text-inject>
				<h1 class="text-color-main"> {{ $iterator->title }}	 </h1>
			</div>

			<div class="col-lg-8 col-xs-12 xs-space-inside-sides-md space-outside-down-md font-md">
				<p>{!! nl2br($iterator->body) !!}	</p>
			</div>

			@include('pages.partials.jongeren-aanmelden.aanmeld-formulier', ['municipalities' => $municipalities])

		</div>
	</section>

@stop