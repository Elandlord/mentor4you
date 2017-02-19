@extends('master')

@section('title')
	Werkgebied
@stop

@section('content')
	<section class="container-fluid xs-space-inside-sides-xl-none space-inside-sides-xl space-outside-lg no-overflow">
		<div class="row">
			<div text-inject>
				@include('pages.partials.page-title', ['pageTitle' => $iterator->title])

				<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12 space-outside-down-lg fadeInDown wow">
					<p class=" font-md">
						{!! nl2br($iterator->body) !!}
					</p>
				</div>
			</div>

			<div class='col-lg-4 col-md-6 col-sm-12 col-xs-12 space-outside-down-lg fadeInDown wow text-center'>
				<div style="width: 300px; height: 200px;" class="image inline-block">
					<img src='/images/drenthe.jpg' class='img-responsive'/>
				</div>
			</div>

		</div>
	</section>
@stop