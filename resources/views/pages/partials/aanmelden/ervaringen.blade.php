<a href="/behaalde-resultaten">
	<div class="col-lg-4">
		<div class="card type-1">
			<div class="space-outside-down-md">
				<div class="image circle circle-lg">
					<img class="width-auto" src="
						<?php $section->render('photo', 3, $sections); ?>
						" alt="aanmelden als jongere
					">
				</div>
			</div>
			<div class=" space-outside-sm ">
				<h3>
					<?php $section->render('title', 3, $sections); ?>
				</h3>
			</div>
			<div class=" space-outside-md ">
				<p>
					<?php $section->render('body', 3, $sections); ?>
				</p>
			</div>
			<div class=" space-outside-sm xs-space-outside-down-lg">
				<a class="btn-standard bg-secondary text-color-light light" href="#bekijk-de-resultaten">Bekijk de resultaten</a>
			</div>
		</div>
	</div>
</a>
