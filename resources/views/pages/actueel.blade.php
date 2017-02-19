@extends('master')

@section('title')
Actueel
@stop

@section('content')
	<section class="container-fluid xs-space-inside-sides-xl-none space-inside-sides-xl space-outside-lg no-overflow">
		<div class="row">

			@include('pages.partials.page-title', ['pageTitle' => 'Actueel'])

			<div class="col-lg-12 space-outside-down-sm text-center">
				{{ $nieuwsberichten->links() }}
			</div>

			<div class="col-lg-12 space-outside-up-lg text-center">
				<div class="divider bg-accent"></div>
			</div>

			<div class="col-lg-12">
				<div class="row">
					@foreach($nieuwsberichten as $nieuwsbericht)
						@include('pages.partials.actueel.newsmessage')
					@endforeach

				</div>

			</div>
			<div class="col-lg-12 space-outside-sm text-center">
				{{ $nieuwsberichten->links() }}
			</div>
		</div>
	</section>
@stop