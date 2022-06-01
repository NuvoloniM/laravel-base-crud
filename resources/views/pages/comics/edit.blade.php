@extends('layouts.layout')

@section('title', 'Modifica')


@section('content')
<div class="container text-center">
    <h1 class="text-primary"> Inserisci qui le tue modifiche</h1>

    {{-- questo form lo redirecto alla pagina degli update. mi passo i dati per modificare il $characters --}}
    <form action=" {{route('comics.update', $comic->id)}}" method="POST">
        {{-- il form accetta solo metodo post o get ma la rotta update ha bisogno del put/patch --}}
        {{-- allora uso laravell blade per richiamare il metodo che mi serve  --}}
        @method('PUT')
        @csrf
        <button type="submit" class="btn btn-primary">Change</button>
        <div class="mb-3">
          <label for="title" class="form-label">Add title</label>
          {{-- metto enl value il valore corrente del comic, così leggo cosa dovrei modificare --}}
          <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
          <div class="form-text">
              Inserisci il titolo del fumetto
          </div>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" class="form-control" id="description" name="description" value="{{$comic->description}}">
          <div class="form-text">
              Inserisci una breve descrizione del fumetto
          </div>
        </div>
        <div class="mb-3">
          <label for="thumb" class="form-label">Image</label>
          <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
          <div class="form-text">
              Inserisci l'URL della copertina
          </div>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" class="form-control" name="price" value="{{$comic->price}}">
          <div class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
          <div class="form-text">
              Inserisci il nome della serie di cui fa parte il fumetto
          </div>
        </div>
        <div class="mb-3">
          <label for="sale_date" class="form-label">Sale Date</label>
          <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
          <div class="form-text">
              Inserisci la data di inizo vendita
          </div>
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="type">
                <option selected>Open this select menu</option>
                <option value="comic book">Comic Book</option>
                <option value="graphic novel">Graphic Novel</option>
             /select>
        </div>
    </form>
</div>
@endsection