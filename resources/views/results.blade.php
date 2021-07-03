@extends('layouts.app')


@section('content_head')
    <title>Results</title>
    <link rel="stylesheet" href="/css/Result.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

@endsection




@section('contents')
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-custom-font u-font-playfair-display u-text u-text-default u-text-palette-1-base u-text-1">Results</h1>
            <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-list-item u-repeater-item">


                    <!--Single pharmacy-->
                    @foreach($pharmacies as $pharmacy)
                        <div style ="flex: auto">
                    <div class="u-container-layout u-similar-container u-container-layout-1">
                        <div alt="" class="u-image u-image-circle u-image-1" data-image-width="2000" data-image-height="1333">


                        </div>
                        <h3 class="u-text u-text-2">{{$pharmacy -> name}}</h3>
                        <div  style="left: 8%">
                            @for($i=0 ; $i < $pharmacy->rate;$i++)
                                <img  src="https://img.icons8.com/office/16/000000/filled-star--v1.png"/>
                            @endfor

                            @for($i=0 ; $i < 5- $pharmacy->rate;$i++)
                                <img  src="https://img.icons8.com/office/16/000000/filled-star--v2.png"/>
                            @endfor

                        </div>

                        <a href="pharmacy/{{$pharmacy->id}}" data-page-id="506514682" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-1">Show more..&nbsp;</a>
                    </div>
                        <br>
                    @endforeach
                    <br>
                    <!--End Single pharmacy-->
                </div>
                </div>
            </div>
        </div>
    </div>




@endsection
