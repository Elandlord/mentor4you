
	<!-- Section waar blogverhalen weergegeven worden -->
	<section class="container-fluid space-inside-sides-xl xs-space-inside-sides-xl-none bg-main space-outside-up-lg no-overflow ">
		<div class="row">
			<!-- Ronde foto  -->
			<div class="col-lg-12 xs-space-inside-sides-xl-none space-inside-sides-xl xs-space-inside-sides-xs">
				<div class="col-lg-4 col-xs-12 xs-space-outside-down-xs space-outside-xl xs-text-center sm-text-center">
						<div class="image circle circle-xl wow fadeInDown">
							<img class="width-auto " src="{{ $laatsteNieuwsbericht->photos->first()['path'] }}" alt="{{ $laatsteNieuwsbericht->title }} ">
						</div>
				</div>
				<!-- Titel, tekst en link bij foto  -->
				<div class="col-lg-8 col-xs-12 space-outside-xl xs-space-outside-up-lg xs-text-center wow fadeInDown">
				<div class="row ">
					<div class="col-lg-9 col-xs-12">
						<h1 class="text-color-light   xs-text-center xs-space-outside-down-sm"> {{ $laatsteNieuwsbericht->title }} </h1>
					</div>
					<div class="col-lg-3 col-xs-12 xs-text-center">
						<p class="text-color-light  "> {{ $laatsteNieuwsbericht->publish_date }} </p>
					</div>
				</div>

					<div class="divider bg-secondary space-outside-md" ></div>

					<p class="text-color-light space-outside-down-md xs-space-inside-sides-sm">
						{!! nl2br($laatsteNieuwsbericht->body) !!}
					</p>
					<div class="row">
						<div  class="col-lg-12 xs-text-center xs-space-inside-sides-sm">
							<a href="/actueel" class="btn-round light text-color-light hidden-xs"> Meer nieuws <span class="circle circle-sm bg-secondary space-outside-xs"> > </span> </a>
							<a class="btn-standard visible-xs bg-secondary light text-color-light" href="/actueel">MEER LEZEN</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>