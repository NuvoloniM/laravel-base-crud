@extends('layouts.layout')

@section('title', 'Add Comic')

@section('content')
    <div class="container text-center">
        <h1 class="text-primary"> Compila per aggiungere un fumetto</h1>

        <form action=" {{route('comics.store')}}" method="POST">

            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
            <div class="mb-3">
              <label for="title" class="form-label">Add title</label>
              <input type="text" class="form-control" id="title" name="title">
              <div class="form-text">
                  Inserisci il titolo del fumetto
              </div>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <input type="text" class="form-control" id="description" name="description">
              <div class="form-text">
                  Inserisci una breve descrizione del fumetto
              </div>
            </div>
            <div class="mb-3">
              <label for="thumb" class="form-label">Image</label>
              <input type="text" class="form-control" id="thumb" name="thumb">
              <div class="form-text">
                  Inserisci l'URL della copertina
              </div>
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="number" class="form-control" name="price">
              <div class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="series" class="form-label">Series</label>
              <input type="text" class="form-control" id="series" name="series">
              <div class="form-text">
                  Inserisci il nome della serie di cui fa parte il fumetto
              </div>
            </div>
            <div class="mb-3">
              <label for="sale_date" class="form-label">Sale Date</label>
              <input type="text" class="form-control" id="sale_date" name="sale_date">
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