@extends('master')

@section('title')
	Ervaringen
@stop

@section('content')

	<section class="container-fluid space-inside-sides-xl push-aside-85">
		<div class="row">

			<div class="col-lg-12 space-outside-lg text-center ">
				<h1> Ervaringen </h1>
			</div>

			<!-- @include('pages.ervaringen.search') -->

			<!-- attach vue2.js to this element -->
			<div id="app">
				<m4y-mentorlist :mentoren="{{ $mentoren }}"> </m4y-mentorlist>
			</div>

		</div>
	</section>



@stop
