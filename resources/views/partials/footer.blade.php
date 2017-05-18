<footer class="no-overflow">

	<div class="container-fluid xs-space-inside-sides-xs space-inside-sides-xl space-outside-up-lg bg-secondary no-overflow">

		<div class="row">
			<form method ='post' action="/newsletters/subscribe">
				{{ csrf_field() }}
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 xs-space-outside-up-sm space-outside-sm">

					<!-- <div class="col-lg-6 col-md-6 col-sm-12 reset-padding">
						<input type="email" class="
							space-inside-sides-sm
							font-sm
							text-color-dark
							xs-text-center
							sm-text-center
							space-inside-xs
							border-none
							block
							height-auto
							" name='email' placeholder='Uw emailadres' required />
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 reset-padding">
						<button style="bottom: 1px;"  class="
							relative
							space-inside-xs
							space-inside-sides-sm
							xs-block
							xs-height-auto
							sm-height-auto
							border-none
							font-sm
							inline-block
							text-center
							text-color-light
							bg-main light
							" href="#nieuwsbrief">Abbonneer op de nieuwsbrief</button>
					</div>
 -->
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
				<p class=" space-outside-xs text-color-light block font-md"> info@mentor4you.nl </p>
				<p class="space-outside-down-xs text-color-light block font-md"> 06-24967211 </p>
				<p class="space-outside-down-xs space-inside-right-md text-color-light left font-md"> Nieuwe Rijksweg 37 </p>
				<p class=" space-outside-down-xs text-color-light left font-md">  </p>
				<p class=" space-outside-down-xs text-color-light clear-left space-inside-right-md left font-md"> 9481 AP te Vries  </p>
				<p class=" space-outside-down-xs text-color-light left font-md">  </p>
			</div>

			<div class="col-lg-4 col-sm-6 col-xs-12 ">
				<p class="space-outside-xs text-color-light block font-md"> Algemene voorwaarden</p>
				<p class="space-outside-xs text-color-light block font-md"> <a class="text-color-light" href='/aanmelden-als-mentor'>Mentor worden</a> </p>
				<p class="space-outside-xs block"> <a class="text-color-light font-md" href='/aanmelden-als-jongere'>Aanmelden als jongere</a></p>
			</div>

		</div>
	</div>
</footer>