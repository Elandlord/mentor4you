<!-- Section voor partners -->
<section class="container-fluid xs-space-inside-sides-xl-none space-inside-sides-xl xs-space-outside-xs space-outside-lg no-overflow">
	<div class="row row-centered">

		@include('pages.partials.page-title', ['pageTitle' => 'Partners'])

		@foreach($partners as $partner)
		<div class="col-lg-3 fadeInDown wow text-center">
			<div class="image rectangular-img text-center">
				<img class="height-auto inline-block" src="{{ $partner->photos->first()['path'] }}"   />
			</div>
		</div>
		@endforeach

	</div>
	<!-- Einde van de row -->
</section>