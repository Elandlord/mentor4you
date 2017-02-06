@extends('master')

@section('title')
Contact
@stop

@section('content')

	<section class="container-fluid xs-space-inside-sides-sm space-inside-sides-xl space-outside-lg">

			
		<div class="row">
			
			<div class="col-lg-12 space-outside-down-lg fadeInDown wow">
			
				<h1> {{ $data['titel']->title }} </h1>	

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

			<div class="col-lg-12 space-outside-down-lg fadeInDown wow">

				<p class="text">

					{{ $data['titel']->body }} 

				</p>

			</div>

			<div class="col-lg-12 space-outside-down-sm fadeInDown wow">
				
				<p class="text bold">
					
					{{ $data['bold']->title }} 

				</p>

			</div>

		<form method='post' action="URL::to('/mail/contact-mail')" >

		{{ csrf_field() }}

		<div class="col-lg-12 space-outside-sm fadeInDown wow">

			<div class="row">
				

				<div class="col-lg-5 clear-left"> 
	    			<input type='text' name='naam' placeholder='Uw volledige naam' class='input border border-accent space-outside-xs' required />
	    		</div>

				<div class="col-lg-5 clear-left"> 
					<input type='text' name='emailadres' placeholder='Uw emailadres' class='input border border-accent space-outside-xs' required />
				</div>

				<div class="col-lg-7 clear-left"> 
					<input type='text' name='telefoonnummer' placeholder='Telefoonnummer' class='input border border-accent space-outside-xs' required />
				</div>
					
				<div class="col-lg-7 clear-left"> 	
					<textarea name='bericht' placeholder='Uw bericht of opmerking' class='textarea border border-accent space-outside-xs' required></textarea>
				</div>

				<div class="col-lg-12 space-outside-sm"> 
					 <input type='submit' name='Verzenden' value='Verzenden' class='btn-standard bg-secondary light text-color-light' />
				</div>
			</div>

		</div>

			</form>

		

			</div>


		</div>

		<div class="divider bg-accent"></div>

	</section>

	<section class="container-fluid xs-space-inside-sides-sm space-inside-sides-xl space-outside-lg xs-space-outside-down-xs fadeInDown wow">

			
		<div class="row">
			
			<div class="col-lg-2 space-outside-down-lg">
			
				<h3> {{ $data['vestiging']->title }} </h3>	

			</div>

			<div class="col-lg-8 space-outside-down-lg">
			
				<p class="text">
						
						{{ $data['vestiging']->body }} 

				</p>	

			</div>

			<div class="col-lg-12 space-outside-down-md xs-space-outside-down-xs">

				<div class="image hidden-xs hidden-sm">

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2396.981542728389!2d6.576944415828201!3d53.07460487992301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c82fb3da541745%3A0x88ba63ae175b784d!2sNieuwe+Rijksweg+37%2C+9481+AP+Vries!5e0!3m2!1snl!2snl!4v1476097504382" width="1600" height="750" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>
				
				<div class="image hidden-lg hidden-md">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2396.981542728389!2d6.576944415828201!3d53.07460487992301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c82fb3da541745%3A0x88ba63ae175b784d!2sNieuwe+Rijksweg+37%2C+9481+AP+Vries!5e0!3m2!1snl!2snl!4v1476097504382" width="992" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

			</div>

		</div>

	</section>

@stop