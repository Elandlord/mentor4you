@extends('master')

@section('title')
Aanmelden als mentor
@stop

@section('content')
	
	<section class="container-fluid xs-space-inside-sides-sm space-inside-sides-xl fadeInDown wow">
		

		<div class="row">

			<div class="col-lg-12 space-outside-lg xs-text-center"> 

				<h1>{{ $data['aanmeldenMentoren']->title }}</h1>

			</div>

			@if(session('succeed'))
				<div class="col-lg-12 space-outside-down-lg">
					<div class="alert alert-success" role="alert">
						<p class="text bold">
							
							{!! session('succeed') !!} 

						</p>
					</div>
				</div>
			@endif

			<div class="col-lg-5 space-outside-down-lg">
				
				<div class="image aanmelden-foto">
					
					<img class="height-auto" src="images/foto1.jpg" alt="mentor die zich wil aanmelden">

				</div>

				<a href='folder-mentor' class="btn-standard bg-main text-color-light light space-outside-sm">PDF hier downloaden</a>

			</div>
			
			<div class="col-lg-7 space-inside-sides-md">
				
				<p class="text space-outside-down-lg ">
					{!! nl2br($data['aanmeldenMentoren']->body) !!}		

				</p>

				<a href="/over-ons" class="btn-standard bg-secondary text-color-light light space-outside-down-lg"> MEER OVER MENTOR4YOU </a>

			</div>

		</div>

		<div class="divider bg-accent"></div>

	</section>

	<section class="container-fluid space-outside-lg xs-space-inside-sides-sm space-inside-sides-xl fadeInDown wow">

			
		<div class="row">
			
			<div class="col-lg-12 xs-text-center space-outside-down-lg">
			
				<h1> {{ $data['aanmelden']->title }}	 </h1>	

			</div>

			<div class="col-lg-8 xs-space-inside-sides-md space-outside-down-md">
				
				<p>{!! nl2br($data['aanmelden']->body) !!}	</p>

			</div>

			<div class="col-lg-12">
				
				<p class="text bold xs-space-inside-sides-sm">
					
					Vul het onderstaand formulier in

				</p>

			</div>

{!! Form::open(['method' => 'POST', 'action' => 'MailController@mentorMail']) !!}

		{{ csrf_field() }}

		<div class="col-lg-12 space-outside-md">

			<div class="row">
					

				<div class="col-lg-5 space-outside-up-sm"> 
	    		
				{!! Form::label('voornaam', 'voornaam') !!}
	    			{!! Form::text('voornaam', null, ['required', 'placeholder' => 'Voornaam', 'class' => 'input border border-accent space-outside-xs']) !!}
				
	    		</div>

	    		<div class="col-lg-5 clear-left space-outside-up-sm"> 
	    		{!! Form::label('achternaam', 'achternaam') !!}
	    			{!! Form::text('achternaam', null, ['required', 'placeholder' => 'Achternaam', 'class' => 'input border border-accent space-outside-xs']) !!}
	    		</div>

				<div class="col-lg-5 clear-left space-outside-up-sm"> 
	    		{!! Form::label('telefoonnummer', 'telefoonnummer') !!}
					{!! Form::text('telefoonnummer', null, ['required', 'placeholder' => 'Telefoonnummer', 'class' => 'input border border-accent space-outside-xs']) !!}
				</div>

				<div class="col-lg-5 clear-left space-outside-up-sm"> 
				{!! Form::label('emailadres', 'emailadres') !!}
					
					{!! Form::text('emailadres', null, ['required', 'placeholder' => 'Uw emailadres', 'class' => 'input border border-accent space-outside-xs']) !!}
				</div>
				
				<div class="col-lg-5 clear-left space-outside-up-sm"> 

				{!! Form::label('Gemeente', 'gemeente') !!}
					

					{!! Form::select('gemeente', $data['municipalities'], null, [ 'required', 'class' => 'input border border-accent space-outside-xs font-xs']) !!} 

				</div>


				<div class="col-lg-5 clear-left space-outside-up-sm"> 
				{!! Form::label('geboortedatum', 'geboortedatum') !!}
					
				{!! Form::date('geboortedatum', null, ['required', 'placeholder' => '', 'class' => 'input border border-accent space-outside-xs font-xs']) !!}
				</div>
				
				<div class="col-lg-7 clear-left space-outside-up-sm"> 	
				{!! Form::label('bericht', 'kort bericht') !!}

					{!! Form::textarea('bericht', null, ['required', 'placeholder' => 'Uw bericht of opmerking', 'class' => 'textarea border border-accent space-outside-xs']) !!}
				</div>

				<div class="col-lg-12 space-outside-sm"> 
					 {!! Form::submit('Verzenden', ['class' => 'btn-standard bg-secondary text-color-light light']) !!}
				</div>
				
			</div>

		</div>

			{!! Form::close() !!}

					<div class="col-lg-12">

						<p class=" ">

							Bedankt voor het aanmelden. Wij nemen zo spoedig mogelijk contact met je op.

						</p>

					</div>
					
				</div>

			</div>


		</div>


	</section>

@stop