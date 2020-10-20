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
    <ul>
        <h2>LUNGA</h2>
        @foreach ($lunga as $tipo)
            <li>
            <img src="{{$tipo["src"]}}" alt="">
            </li>
        @endforeach      
    </ul>
    <ul>
        <h2>CORTA</h2>
        @foreach ($corta as $tipo)
            <li>
            <img src="{{$tipo["src"]}}" alt="">
            </li>
        @endforeach      
    </ul>
    <ul>
        <h2>CORTISSIMA</h2>
        @foreach ($cortissima as $tipo)
            <li>
            <img src="{{$tipo["src"]}}" alt="">
            </li>
        @endforeach      
    </ul>
@endsection

