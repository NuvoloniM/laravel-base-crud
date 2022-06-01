@extends('layouts.layout')

@section('title', 'Comics')

@section('content')
    <h1>Comics List</h1>
    {{-- includo sezione messaggio --}}
    @include('includes.message')

    <a href=" {{ route( 'comics.create' ) }} " class="btn btn-info">aggiungi un nuovo fumetto</a>

    <table class="table table-info">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Sale date</th>
            <th scope="col">Type</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            {{-- con il foreach ciclo il database --}}
            @forelse ($comics as $comic)
            <tr>
                <td> {{ $comic->id}}</td>
                <td>
                    <img src=" {{ $comic->thumb}}" alt="img">
                </td>
                <td> {{$comic->title}}</td>
                <td> {{$comic->price}}€ </td>
                <td> {{$comic->series}}</td>
                <td> {{$comic->sale_date}}</td>
                <td> {{$comic->type}}</td>
                <td>
                    <a href=" {{ route( 'comics.show', $comic->id ) }} " class="btn btn-primary">view</a>
                    <a href=" {{ route( 'comics.edit', $comic->id ) }} " class="btn btn-warning">edit</a>
                    {{-- per poter passare l'evento del delete devo usare un form, contenente solo il tasto --}}
                    <form action="{{ route('comics.destroy', $comic->id)}}" method="POST" class="delete-form py-3">
                      {{-- uso @method per poter usare il metofo delete  --}}
                      @method('DELETE')
                      @csrf
                      <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
              </tr>
            @empty
                <h2>Il database non contiene Data</h2>
            @endforelse
          
        </tbody>
      </table>


@endsection