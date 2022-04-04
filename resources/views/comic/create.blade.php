@extends('layouts.base')

@section('pageTitle', 'Crea formato di pasta')

@section('content')

    <div class="container">

        <h1>Nuovo fumetto</h1>

        <form method="POST" action="{{ route('comic.store') }}">

            @csrf

            <div class="mb-3">
                <label for="src" class="form-label" >Indirizzo immagine</label>
                <input type="text" class="form-control" id="src" name="src" value="{{old('src')}}" required>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label" >Nome del fumetto</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" required>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label" >prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}" required>
            </div>

            
            <div class="mb-3">
                <label for="title" class="form-label" >serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}" required>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label" >data di uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date')}}" required>
            </div>




            <div class="mb-3">
                <div class="form-floating">
                    <select class="form-select" id="type" name="type">
                        <option {{(old('type') == 'comick-book') ? 'selected' : ''}} value="comick-book">comick-book</option>
                        <option {{(old('type') == 'graphic-novel') ? 'selected' : ''}} value="graphic-novel">graphic-novel</option>
                       
                    </select>
                    <label for="floatingSelect">tipo</label>
                </div>
            </div>

          

            <label for="title" class="form-label" >descrizione</label>
            <div class="form-floating">
              
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description" required>
                    {{old('description')}}
                </textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-5">Invia</button>

        </form>

    </div>




@endsection
