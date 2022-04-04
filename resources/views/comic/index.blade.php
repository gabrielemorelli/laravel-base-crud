@extends('layouts.base')

@section('pageTitle', 'Fumetti')


@section('content')

    <div class="container">

        <h1>Lista dei fumetti</h1>


        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">descrizione</th>
                <th scope="col">immagine</th>
                <th scope="col">prezzo</th>
                <th scope="col">serie</th>
                <th scope="col">saledate</th>
                <th scope="col">tipo</th>
                <th scope="col">azione</th>
              
            </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{$comic->id}}</td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->description}}</td>
                        <td>{{$comic->thumb}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>

                        <td class="d-flex">
                            <a class="btn btn-primary" href="{{route('comic.show',$comic->id)}}" role="button">Vedi</a>
                            <a class="btn btn-primary" href="{{route('comic.edit',$comic->id)}}" role="button">Modifica</a>

                            <form method="POST" action="{{route('comic.destroy', ['comic' => $comic->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="btn btn-danger">Elimina</button>
                            </form>


                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection