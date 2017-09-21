@extends('master')

@section('title')
Actueel
@stop

@section('content')
	<section class="container-fluid xs-space-inside-sides-xl-none space-inside-sides-xl space-outside-lg no-overflow">
		<div class="row">

			<div class="col-lg-12
            space-outside-lg
            text-center
            fadeInDown
            wow

			">
			  <h1 class="text-color-main" > Archief </h1>
			</div>

			<p class="col-lg-12 space-outside-down-sm text-center font-md">Hieronder wordt het archief van de nieuwsberichten van mentor4you weergegeven. Voor de nieuwste berichten, bekijk dan nu <a class='bold' href="/actueel">actueel</a>.</p>

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