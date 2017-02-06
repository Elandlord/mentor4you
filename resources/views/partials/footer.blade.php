<footer class="no-overflow">
	
	<div class="container-fluid xs-space-inside-sides-xs space-inside-sides-xl space-outside-up-lg bg-secondary no-overflow">
		
		<div class="row">
			
			

			<form method ='post' action="URL::to('/newsletters/subscribe')">

			{{ csrf_field() }}

			<div class="col-lg-4 col-xs-12 space-outside-sm">



				<input type="email" class="input space-inside-sides-sm space-outside-right-md" name='email' placeholder='Uw emailadres' required />

			</div>

			<div class="col-lg-4 col-xs-12 space-outside-sm">
				
				<button class="btn-round text-color-light hidden-xs" href="#schrijf-mij-in-voor-de-nieuwsbrief">Schrijf mij in voor de nieuwsbrief<span class="circle circle-sm bg-white text-color-dark xs-hidden"> > </span></button>

				

				<button class="btn-standard text-center text-color-light visible-xs bg-main light " href="#nieuwsbrief">Abbonneer op de nieuwsbrief</button>

			</div>

			@if ($errors->has('email'))
			<div class="col-lg-4 col-xs-12 space-outside-sm">
				
                    <span>

                        <p class='text-color-light' >Dit emailadres is al in gebruik!</p>

                    </span>
    
			</div>
			@endif

			</form>
		</div>

	</div>

	<div class="container-fluid xs-space-inside-sides-md space-inside-sides-xl bg-main no-overflow">
		
		<div class="row space-outside-lg">
			
			<div class="col-lg-3 col-sm-6 col-xs-12 xs-space-outside-down-md  space-inside-right-lg">
				
				<p class=" space-outside-xs text-color-light block"> info@mentor4you.nl </p>

				<p class="space-outside-down-xs text-color-light block"> 06-24967211 </p>

				<p class="space-outside-down-xs space-inside-right-md text-color-light left"> Nieuwe Rijksweg  </p>

				<p class=" space-outside-down-xs text-color-light left"> 37 </p>

				<p class=" space-outside-down-xs text-color-light clear-left space-inside-right-md left"> Vries  </p>

				<p class=" space-outside-down-xs text-color-light left"> 9481 AP </p>

			</div>

			<div class="col-lg-4 col-sm-6 col-xs-12 ">
				
				<p class="space-outside-xs text-color-light block"> Algemene voorwaarden</p>
			
				<p class="space-outside-xs text-color-light block"> <a class="text-color-light" href='/aanmelden-als-mentor'>Mentor worden</a> </p>

				<p class="space-outside-xs block"> <a class="text-color-light" href='/aanmelden-als-jongere'>Aanmelden als jongere</a></p>

			</div>

		</div>

	</div>

</footer>