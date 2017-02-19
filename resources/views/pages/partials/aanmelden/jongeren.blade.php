<a href="/aanmelden-als-jongere">
	<div class="col-lg-4 col-xs-12">
		<div class="card type-1">
			<div class="space-outside-down-md text-center">
				<div class="image circle-lg circle circle-lg inline-block">
					<img class="width-auto inline-block" src="{{ $iterator->thumbnail }}"
						alt="aanmelden als jongere">
				</div>
			</div>
			<div class=" space-outside-sm xs-space-outside-sm-none ">
				<h3 class="text-color-main">
				{{ $iterator->title }}
				</h3>
			</div>

			<div class="space-outside-md inline-block max-width-xl ">
				<p class="" text-inject>
				{{ $iterator->body }}

				</p>
			</div>

			<div class="hidden-lg space-outside-down-lg">
				<a class="

					bg-secondary
					text-color-light
					light
					space-inside-xs
					space-inside-sides-sm
					font-md
				" href="/aanmelden-als-jongere">Aanmelden als jongere</a>
			</div>
		</div>
	</div>
</a>
