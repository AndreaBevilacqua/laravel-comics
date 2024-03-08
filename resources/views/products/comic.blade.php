@extends('layouts.app')

@section('title','Dettaglio comic')

@section('core-content')
    <section id="jumbotron"></section>
    <div class="blue-bar">

    </div>
    <div class="container d-flex">
        <div class="details">
            <h1>{{$comic['title']}}</h1>
            <div class="price">
                <span>U.S. Price:{{$comic['price']}}</span>
                <p>AVAILABLE</p>
            </div>
            <div class="checking">
                Check Availability
            </div>
            <p>{{$comic['description']}}</p>
        </div>
        <div class="advertisment">

        </div>
    </div>
@endsection