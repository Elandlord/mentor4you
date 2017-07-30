

@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Er is contact opgenomen via het contactformulier',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')

        <p>Opmerking: tussen 21 juli en 21 augustus is Mentor4You met vakantie.</p>

        <p>De persoon heeft het volgende bericht achtergelaten</p>

        <p>Telefoonnummer: {{ $telefoonnummer }}</p>

        <p>{{ $bericht }}</p>

    @include('beautymail::templates.sunny.contentEnd')

@stop