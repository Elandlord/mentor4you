@extends('master')

@section('title')
	Team
@stop

@section('content')

<section class="container-fluid xs-space-inside-sides-xl-none space-inside-sides-xl space-outside-lg no-overflow">
		<div class="row">
			@include('pages.partials.page-title', ['pageTitle' => $iterator->title ])

				<div class="col-lg-12 space-outside-down-md xs-text-center" text-inject>
					<div class="col-lg-8 fadeInDown wow">
						<h3 class="space-outside-down-sm ">{{ $iterator->title }}</h3>
						<p class="">
							{!! $iterator->body !!}
						</p>
						<div class="image rectangular-img ">
							<img class="height-auto" src="/images/spinn-logo-email.png" />
						</div>
					</div>
				</div>

				<?php $iterator->next(); ?>

				<div class="row row-centered ">
					@foreach($teamMembers as $teammember)
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-centered">
						<div class="card type-4 text-center">
							<div class="top background-primary">

							</div>
							<div class="text-center">
								<h3 class='space-outside-down-md'> {{ $teammember->first_name }} {{ $teammember->last_name }}</h3>
								<h5> {{ $teammember->role }} </h5>
								<h5 class='space-outside-down-md'> {{ $teammember->description }} </h5>
							</div>
							<div class="image round inline-block" style='height:200px; width:200px;'>
								<img class="width-auto" src="{{ $teammember->thumbnail }}">
							</div>
							<div style="clear:both;"></div>
						</div>
					</div>
					@endforeach
				</div>

				<div class="col-lg-12 space-outside-down-md xs-text-center space-outside-up-md" text-inject>
					<div class="col-lg-8 fadeInDown wow">
						<h3 class="space-outside-down-sm ">{{ $iterator->title }}</h3>
						<p class="">
							{!! $iterator->body !!}
						</p>
					</div>
				</div>


		</div>
	</section>



@stop
