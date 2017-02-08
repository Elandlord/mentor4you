<a href="/aanmelden-als-mentor">
	<div class="col-lg-4">
		<div class="card type-1">
			<div class="space-outside-down-md">
				<div class="image circle circle-lg">
					<img class="width-auto" src="
						<?php $section->render('photo', 2, $sections); ?>"
						alt="aanmelden als jongere">
				</div>
			</div>
			<div class=" space-outside-sm ">
				<h3>
					<?php $section->render('title', 2, $sections); ?>
				</h3>
			</div>

			<div class=" space-outside-md ">
				<p text-inject>
					<?php $section->render('body', 2, $sections); ?>
				</p>
			</div>

			<div class=" space-outside-sm xs-space-outside-down-lg hidden-lg">
				<a class="btn-standard bg-secondary text-color-light light" href="/aanmelden-als-mentor">Aanmelden als mentor</a>
			</div>
		</div>
	</div>
</a>