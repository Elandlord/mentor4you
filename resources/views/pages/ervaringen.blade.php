@extends('master')

@section('title')
	Ervaringen
@stop

@section('content')

	<section class="container-fluid space-inside-sides-xl ">
		<div class="row">
			@include('pages.partials.page-title', ['pageTitle' => 'Ervaringen'])

			@include('pages.ervaringen.search')

			<!-- attach vue2.js to this element -->

			<mentorlist :mentoren="{{ $mentoren }}"> </mentorlist>
		</div>
	</section>



@stop
