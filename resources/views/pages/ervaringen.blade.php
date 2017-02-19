@extends('master')

@section('title')
	Ervaringen
@stop

@section('content')

	<section class="container-fluid space-inside-sides-xl ">
		<div class="row">
			@include('pages.partials.page-title', ['pageTitle' => 'Ervaringen'])

			<!-- @include('pages.ervaringen.search') -->

			<!-- attach vue2.js to this element -->

			<mentorlist :mentoren="{{ $mentoren }}"> </mentorlist>
		</div>
	</section>



  <section class="container-fluid space-inside-sides-xl">
  <div class="col-lg-12 divider bg-accent space-outside-md"></div>
    <div class="row row-centered">

      @include('pages.partials.page-title', ['pageTitle' => 'Het team'])
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
  </section>


@stop
