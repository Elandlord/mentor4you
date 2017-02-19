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
						<h2 class="space-outside-down-sm text-color-main">{{ $iterator->title }}</h2>
						<p class="font-md">
							{!! $iterator->body !!}
						</p>
						<div class="image rectangular-img space-outside-up-md">
							<img class="height-auto" src="/images/spinn-logo-email.png" />
						</div>
					</div>
				</div>

				<div class="divider bg-accent col-lg-12 space-outside-down-md"></div>
				<?php $iterator->next(); ?>

				<div class="row row-centered ">
					@foreach($teamMembers as $teammember)
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-centered">
            <div class="card type-4 text-center">
              <div class="top background-primary">

              </div>
              <div class="text-center">
                <h3 class='space-outside-down-md text-bold'> {{ $teammember->first_name }} <span class="text-light"> {{ $teammember->last_name }} </span></h3>
                <p class="text-color-main font-md block"> {{ $teammember->role }} </p>
                <p class='space-outside-down-md font-md'> {{ $teammember->description }} </p>
              </div>
              <div class="image round inline-block" style='height:200px; width:200px;'>
                <img class="width-auto" src="{{ $teammember->thumbnail }}">
              </div>
              <div style="clear:both;"></div>
            </div>
          </div>
          @endforeach
				</div>



		</div>
	</section>
	<section class="container-fluid bg-accent space-inside-sides-xl">
		<div class="col-lg-12 space-outside-down-md xs-text-center space-outside-up-md" text-inject>
			<div class="col-lg-8 fadeInDown wow ">
				<h2 class="space-outside-down-sm text-color-main">{{ $iterator->title }}</h2>
				<p class="font-md">
					{!! $iterator->body !!}
				</p>
			</div>
		</div>
	</section>



@stop
