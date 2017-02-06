<!-- background -->
<div class="header">
<!-- Container voor centreren van content -->
	<div class="container-fluid">
		<!-- Row wrapper voor content -->
		<div class="row ">

		@include('partials.logo')

			<!-- navigatie -->
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<div class="placeholder-nav">
					<!-- navbar -->
					<nav class="navbar navbar-default navbar-right xs-clear-float">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed xs-space-outside-right-sm" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>
						    @include('partials.navigation')
					  </div><!-- /.container-fluid -->
					</nav>
				</div>
			</div>

		</div> <!-- End of the row  -->
	</div>
</div>

@include('partials.contact-information')