@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Een mentor heeft zich aangemeld',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')

        <p>De persoon heeft het volgende bericht achtergelaten</p>

        <p>Telefoonnummer: {{ $telefoonnummer }}</p>
        <p>Geboortedatum: {{ $geboortedatum }}</p>


        <p>{{ $bericht }}</p>

    @include('beautymail::templates.sunny.contentEnd')

@stop