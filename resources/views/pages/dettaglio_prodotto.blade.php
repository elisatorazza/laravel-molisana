@extends('layouts/main');

@section('title')
    Dettaglio prodotto
@endsection;

@section('mainContent')
    <section class="detail">
        <div>
            <h1>{{$prodotto["titolo"]}}</h1>
            <div class="img-responsive">  
                <img src="{{$prodotto["src-h"]}}" alt="">
            </div>  
            <div class="img-responsive">  
                <img src="{{$prodotto["src-p"]}}" alt="">    
            </div>  
            <p class="container">
            {!!$prodotto["descrizione"]!!}
            </p>        
            

        </div>

    </section>

@endsection;