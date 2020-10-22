@extends('layouts.main')

@php

$data = config('db_pasta');

 
$lunga = [];
$corta = [];
$cortissima = [];

foreach ($data as $pasta) {
    if ($pasta["tipo"] == "lunga") {
        $lunga[] = $pasta;
    } elseif ($pasta["tipo"] == "corta") {
        $corta[] = $pasta;
    } elseif ($pasta["tipo"] == "cortissima") {
        $cortissima[] = $pasta;
    } 
};
@endphp

@section('title')
    La Molisana
@endsection

@section('mainContent')
<section class="pasta-list">
    <div class="container">
        <h2>LE LUNGHE</h2>
        <ul class="tipo">
            @foreach ($lunga as $tipo)
                <li>
                    <div class="img-responsive">
                        <img src="{{$tipo["src"]}}" alt="">
                    </div>
                    <div class="overlay">
                        <div class="small-container">
                            <a href="#">{{$tipo["titolo"]}}</a>
                            <div class="overlay-img">
                                <img src="{{asset('img/icon.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach      
        </ul>
        <h2>LE CORTE</h2>

        <ul class="tipo">
            @foreach ($corta as $tipo)
                <li>
                    <div class="img-responsive">
                        <img src="{{$tipo["src"]}}" alt="">
                    </div>
                </li>
            @endforeach      
        </ul>
        <h2>LE CORTISSIME</h2>

        <ul class="tipo">
            @foreach ($cortissima as $tipo)
                <li>
                    <div class="img-responsive">
                        <img src="{{$tipo["src"]}}" alt="">
                     </div>
                </li>
            @endforeach      
        </ul>
    </div>
</section>
@endsection

