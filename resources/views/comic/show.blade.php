@extends('layouts.base')

@section('pageTitle',  '{{$comic->title}}')  



@section('content')

    <div class="container">
        
        <h1>{{$comic->title}}</h1>
        <div><strong>descrizione:</strong> {{$comic->description}}</div>
        <div><strong>immagine:</strong> {{$comic->thumb}}</div>
        <div><strong>prezzo</strong> {{$comic->price}}</div>
        <div><strong>serie:</strong> {{$comic->series }}</div>
        <div><strong>saledate:</strong> {{$comic->sale_date }}</div>
        <div><strong>tipo</strong> {{$comic->type }}</div>


        <a class="btn btn-primary mt-5" href="{{route('comic.index')}}" role="button">Torna alla lista</a>

    </div>



@endsection