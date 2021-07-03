@extends('layouts.app')


@section('content_head')
    <title>Pharmacy</title>
    <link rel="stylesheet" href="/css/Pharmacy.css" media="screen">
    <script class="u-script" type="text/javascript" src="/js/pharmacy.js" defer=""></script>

@endsection




@section('contents')
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-playfair-display u-text u-text-palette-1-base u-text-1">{{$pharmacy->name}}</h1>
        <h2 class="u-custom-font u-font-playfair-display u-text u-text-palette-1-dark-2 u-text-2">{{$user->name}}</h2>
        <h3 class="u-custom-font u-font-playfair-display u-text u-text-palette-1-dark-2 u-text-3">contact: {{$pharmacy->Contact}}</h3>
        <h3 class="u-custom-font u-font-playfair-display u-text u-text-palette-1-dark-2 u-text-4">address: {{$pharmacy->address}}</h3>
        <div class="u-grey-light-2 u-map u-map-1">
            <div class="embed-responsive">
                <!--The div element for the map -->
                <div id="map"></div>

                <!-- Async script executes immediately and must be after any DOM elements used in callback. -->

                <iframe src="{{$pharmacy->location}}"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>'


            </div>



        </div>
    </div>




@endsection
