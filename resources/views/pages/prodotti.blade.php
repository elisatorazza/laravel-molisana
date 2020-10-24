@extends('layouts.main')

@section('title')
    Prodotti
@endsection

@section('mainContent')
<section class="pasta-list">
    <div class="container">
              
        @foreach ($db as $key => $tipopasta)
            <h2>{{$key}}</h2>
            <ul class="tipo">
                @foreach ($tipopasta as $prodotto)
                    <li>
                        <div class="img-responsive">
                            <img src="{{$prodotto["src"]}}" alt="">
                        </div>
                        <div class="overlay">
                        <div class="small-container">
                        <a href="/prodotti/{{$prodotto["id"]}}">{{$prodotto["titolo"]}}</a>
                            <div class="overlay-img">
                                <img src="{{asset('img/icon.svg')}}" alt="">
                            </div>
                        </div>
                        </div>
                    </li>
                @endforeach     
            </ul>
        @endforeach 
    </div>
</section>
@endsection