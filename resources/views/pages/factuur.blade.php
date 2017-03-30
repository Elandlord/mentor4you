<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>@yield('title') || Mentor4you</title>
    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    </script>
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web:200,400,600,700' rel='stylesheet' type='text/css'>
    @include('partials.styles')
    <style>

    	body, p, h1, h2, h3, h4, h5, h6, a, span, div
    	{
    		font-family: 'Titillium Web', sans-serif !important;
    	}

    	p{
    		display: block;
    	}
    </style>
</head>
<body>

<div class='container-fluid space-inside-sides-xl' style='background-color: #EBEBEB;'>
	<div class='row space-inside-sides-xl'>
		<div class='col-lg-2 text-center' style='background-color:#FAA818'>
			<h3 class='text-color-light space-inside-up-xl text-light'>FACTUUR</h3>
			<h5 class='text-color-light space-inside-down-sm'>NR. 2017023</h5>
		</div>
		<div class='col-lg-10'>
			<img src='http://mentechmedia.nl/images/logo.png' class='space-inside-up-md right' style='width: 130px;' />
		</div>
	</div>

	<div class='row space-inside-sides-xl space-outside-up-md'>
		<div class='col-lg-6'>
			<div class='row'>
				<div class='col-lg-12 space-inside-up-md'>
					<h4 class='bold'>KLANT</h4>
				</div>
				<div class='col-lg-12 space-inside-up-sm'>
					<p class='font-md'>Karin Oldenburger (Spinn, Mentor4you)</p>
					<p class='font-md'>info@mentor4you.nl</p>
				</div>
			</div> 
		</div>

		<div class='col-lg-6'>
			<div class='row'>
				<div class='col-lg-12 space-inside-up-md'>
					<h4 class='bold right'>MEN TECHNOLOGY & MEDIA</h4>
				</div>
				<div class='col-lg-12 space-inside-up-sm'>
					<p class='font-md right'>Eric Landheer & Melvin Tehubijuluw</p>
				</div>
				<div class='col-lg-12'>
					<p class='font-md right'>informatie@mentechmedia.nl</p>
				</div>
				<div class='col-lg-12'>
					<p class='font-md right'>Metaallaan 75</p>
				</div>
				<div class='col-lg-12'>
					<p class='font-md right'>9743 BP Groningen</p>
				</div>
			</div>
		</div>

		<div class='col-lg-12 space-inside-up-sm'>
			<hr style='height: 1px; background-color: #95a5a6;' />
		</div>

		<div class='col-lg-6'>
			<p class='font-md ' style='color: #FAA818;'>FACTUUR#2017023</p>
		</div>

		<div class='col-lg-6 space-inside-down-md'>
			<p class='font-md right'>30 maart, 2017</p>
		</div>
	</div>
</div>

<div class='container-fluid space-inside-sides-xl space-outside-up-lg'>
	<div class='row space-inside-sides-xl'>
		<div class='col-lg-6'>
			<p class='font-md bold' style='color: #CECECE;'>BESCHRIJVING</p>
		</div>
		<div class='col-lg-2'>
		<p class='font-md bold' style='color: #CECECE;'>UREN</p>
		</div>
		<div class='col-lg-2'>
			<p class='font-md bold' style='color: #CECECE;'>PRIJS</p>
		</div>
		<div class='col-lg-2'>
			<p class='font-md bold right' style='color: #CECECE;'>TOTAALPRIJS</p>
		</div>

		<div class='col-lg-12 space-inside-up-xs'>
			<hr style='height: 0.5px; background-color: #CECECE;' />
		</div>
	</div>

	<div class='row space-inside-sides-xl'>
		<div class='col-lg-6'>
			<p class='font-md'><span class='bold'>Webapplicatie</span> - Het ontwerpen, implementeren en testen van de webapplicatie. De webapplicatie is opgebouwd aan de hand van 5 pagina's, lorem ipsum dolor solor amet.</p>
		</div>
		<div class='col-lg-2'>
		<p class='font-md'>80</p>
		</div>
		<div class='col-lg-2'>
			<p class='font-md'>30</p>
		</div>
		<div class='col-lg-2'>
			<p class='font-md right'>2400</p>
		</div>
	</div>

	<div class='row space-inside-sides-xl space-inside-up-md'>
		<div class='col-lg-6'>
			<p class='font-md'><span class='bold'>Contentmanagementsysteem</span> - Het ontwerpen, implementeren en testen van de webapplicatie. De beheertool voor de website</p>
		</div>
		<div class='col-lg-2'>
		<p class='font-md'>80</p>
		</div>
		<div class='col-lg-2'>
			<p class='font-md'>30</p>
		</div>
		<div class='col-lg-2'>
			<p class='font-md right'>2400</p>
		</div>
	</div>

	<div class='row space-inside-sides-xl space-inside-up-sm'>

		<div class='col-lg-6'>

		</div>

		<div class='col-lg-6'>
			<hr style='height: 0.5px; background-color: #CECECE;' />
		</div>

	</div>

	<div class='row space-inside-sides-xl space-inside-up-sm'>

		<div class='col-lg-6'>

		</div>

		<div class='col-lg-3'>
			<p class='font-md'>SUBTOTAAL (EXCL. BTW)</p>
		</div>

		<div class='col-lg-3'>
			<p class='font-md right'>4800</p>
		</div>

	</div>

	<div class='row space-inside-sides-xl space-inside-up-sm'>

		<div class='col-lg-6'>

		</div>

		<div class='col-lg-3'>
			<p class='font-md'>BTW (21%)</p>
		</div>

		<div class='col-lg-3'>
			<p class='font-md right'>1008</p>
		</div>

	</div>

	<div class='row space-inside-sides-xl space-inside-up-sm'>

		<div class='col-lg-6'>

		</div>

		<div class='col-lg-3'>
			<p class='font-md bold'>TOTAAL</p>
		</div>

		<div class='col-lg-3'>
			<p class='font-md right'>5808</p>
		</div>

	</div>

	<div class='row space-inside-sides-xl space-inside-up-sm'>

		<div class='col-lg-6'>

		</div>

		<div class='col-lg-6'>
			<p class='font-md bold'>Gelieve het volledige bedrag o.v.v. het factuurnummer binnen 10 werkdagen overmaken op rekeningnummer <span style='color: #FAA818;'> NL63 INGB 0006 6418 34 </span></p>
		</div>

	</div>

	<div class='row space-inside-sides-xl space-outside-up-xl'>
		<div class='col-lg-12'>
			<hr style='height: 0.5px; background-color: #CECECE;' />
		</div>
		<div class='col-lg-2 space-outside-sm'>
			<p class='font-sm'> BTW-nummer: 853939846B01</p>
		</div>

		<div class='col-lg-2 space-outside-sm'>
			<p class='font-sm'> KVK-nummer: 60504595 </p>
		</div>

		<div class='col-lg-3 space-outside-sm'>
			<p class='font-sm'> Rekeningnummer: NL63 INGB 0006 6418 34</p>
		</div>

		<div class='col-lg-5 space-outside-sm'>
			<p class='font-sm'> <span style='color: #FAA818;'>TEL:</span> 0630063231 
& 0646501798 </p>
		</div>
	</div>

</div>

</body>
</html>