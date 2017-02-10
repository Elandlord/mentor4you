<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

	<ul class="nav navbar-nav xs-text-center xs-space-inside-down-sm">

		<li class="{{ Request::path() == '/' ? 'active' : '' }}">
			<a href="/">HOME <span class="sr-only">(current)</span></a>
		</li>

	 	<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MENTOR4YOU<span class="caret">	</span></a>
				<ul class="dropdown-menu xs-text-center">
				<li><a href="/mentor4you">Mentor4you</a></li>
				<li><a href="/werkgebied">Werkgebied</a></li>
				<li><a href="/team">Team</a></li>
          </ul>
        </li>
        
		<li class="{{ Request::path() == '/actueel' ? 'active' : '' }}">
			<a href="{{ URL::to('actueel') }}">ACTUEEL</a>
		</li>

		<li class="{{ Request::path() == '/ervaringen' ? 'active' : '' }}">
			<a href="/ervaringen">ERVARINGEN</a>
		</li>

		<li class="{{ Request::path() == '/steun-ons' ? 'active' : '' }}">
			<a href="{{ URL::to('steun-ons') }}">STEUN ONS</a>
		</li>

		<li class="{{ Request::path() == '/contact' ? 'active' : '' }}">
			<a href="{{ URL::to('contact') }}">CONTACT</a>
		</li>

	</ul>

</div>