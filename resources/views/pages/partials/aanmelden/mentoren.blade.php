<?php $iterator->next(); ?>
<a href="/aanmelden-als-mentor">
	<div class="col-lg-4">
		<div class="card type-1">
			<div class="space-outside-down-md text-center">
				<div class="image circle circle-lg inline-block">
					<img class="width-auto" src="{{ $iterator->square }}"
						alt="aanmelden als jongere">
				</div>
			</div>
			<div class=" space-outside-sm ">
				<h3 class="text-color-main">
				{{ $iterator->title }}
				</h3>
			</div>

			<div class="space-outside-md inline-block max-width-xl ">
				<p text-inject>
					{{ $iterator->body }}
				</p>
			</div>

			<div class="space-outside-down-lg hidden-lg">
				<a class="
					bg-secondary
					text-color-light
					light
					space-inside-xs
					space-inside-sides-sm
					font-md
					" href="/aanmelden-als-mentor">Aanmelden als mentor</a>
			</div>
		</div>
	</div>
</a>