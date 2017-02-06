<!-- Section voor partners -->
<section class="container-fluid xs-space-inside-sides-xl-none space-inside-sides-xl xs-space-outside-xs space-outside-lg no-overflow">
	<div class="row row-centered">
		<div class="col-lg-12 text-center">
			<div class="space-outside-lg fadeInDown wow text-inject">
				<h1>
					Partners
				</h1>
			</div>
		</div>

		@foreach($partners as $partner)
		<div class="col-lg-3 fadeInDown wow">
			<div class="image rectangular-img ">
				<img class="height-auto" src="{{ $partner->photos->first()['path'] }}"   />
			</div>
		</div>
		@endforeach

	</div>
	<!-- Einde van de row -->
</section>