@extends('master')

@section('title')
Steun ons
@stop

@section('content')

	<section class="container-fluid xs-space-inside-sides-sm  space-inside-sides-xl space-outside-lg xs-space-outside-down-sm">


		<div class="row">
			@include('pages.partials.page-title', ['pageTitle' => 'Steun ons'])

			<div class="col-lg-8 col-xs-12 space-outside-down-lg xs-text-center fadeInDown wow">
				<h3 class="space-outside-down-md text-color-main"  text-inject>{{ $iterator->title }}</h3>
				<p class="space-outside-down-lg xs-space-inside-right-lg-none space-inside-right-lg font-md">
					{!! nl2br($iterator->body) !!}
				</p>
				<?php $iterator->next(); ?>
			</div>

			<div class="col-lg-4 col-xs-12 xs-space-outside-down-lg-none space-outside-down-lg space-inside-md  space-inside-sides-md  bg-accent fadeInDown wow">
				<div class="row">

					<div class="col-lg-12 xs-text-center">
						<div class="row">

							<div class="col-lg-2 col-sm-2 col-xs-12 space-outside-down-sm">
								<div class="circle circle-md bg-secondary "> <span class="text-color-light font-md text-light relative" style="bottom: 1px;" > B </span></div>
							</div>

							<div class="col-lg-10 col-sm-10 col-xs-12 space-outside-sm" text-inject>
								<p class="font-md relative" style="bottom: 14px;">{{ $iterator->body }}</p>
								<?php $iterator->next(); ?>
							</div>

						</div>
					</div>

					<div class="col-lg-12 space-outside-up-sm xs-text-center">
						<div class="row">

							<div class="col-lg-2 col-sm-2 col-xs-12 space-outside-down-sm">
								<div class="circle circle-md bg-secondary "> <span class="text-color-light text-light font-md relative" style="bottom: 1px;"> P </span></div>
							</div>

							<div class="col-lg-10 col-sm-10 col-xs-12 space-outside-sm" text-inject>
								<p class="font-md relative" style="bottom: 14px;">{{ $iterator->body }}</p>
								<?php $iterator->next(); ?>
							</div>

						</div>
					</div>

					<div class="col-lg-12 space-outside-up-md  space-outside-down-lg xs-text-center" text-inject>
						<p class="font-md">
							{{ $iterator->body }}
						</p>
						<?php $iterator->next(); ?>
					</div>

					<div class="col-lg-12 ">
						<a href="/contact" class="space-inside-sides-sm space-inside-xs xs-text-center font-sm lowercase bg-secondary text-light text-color-light">Naar contactformulier</a>
					</div>
				</div>

			</div>

		</div>

	</section>
@stop