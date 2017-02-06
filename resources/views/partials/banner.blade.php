
<div class="container-fluid no-overflow hidden-xs">
	<div class="row ">

		<div class="col-lg-12 reset-padding banner ">
			<section  class="cd-hero">
				<ul style="list-style:none;padding:0;" class="cd-hero-slider autoplay">
				<?php
					$first = true;
				?>
					@foreach($data['sliders'] as $slider)
						@if($first == true)
							<li class="selected space-inside-sides-xl space-inside-lg">
							<?php
								$first = false;
							?>
						@else
							<li class=" space-inside-sides-xl space-inside-lg">
						@endif
							<div class="cd-full-width">
								<div class="space-inside-sm">
								<h1 class="text-color-light uppercase wow fadeInRight">{{ $slider->title }} </h1>
							</div>
							<div class="space-inside-sm">
								<p class="text-color-light wow fadeInRight">
									{{ $slider->body }}
								</p>
							</div>
							<div class="space-inside-sm">
								<a href="/over-ons" class="btn-standard bg-secondary light text-color-light wow fadeInRight"> lees meer  </a>
							</div>
							<div class="overlay-banner"></div>
							<img class="responsive-image" src="{{ $slider->photos->first()['path'] }}" alt='banner image mentor4you' />
							</div> <!-- .cd-full-width -->
						</li>

					@endforeach

					<!-- othe slides here -->
				</ul> <!-- .cd-hero-slider -->
			</section> <!-- .cd-hero -->
		</div>
	</div>
</div>

