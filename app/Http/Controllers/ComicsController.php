<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // creo la funzione index, che mi collega i dati del database
        // query che mi riporta tutti i dati del database
        $comics = Comic::All();

        return view('pages.comics.index' , compact('comics') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // ritorno la vista del form dove creare nuove istanze
        return view('pages.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //qui devo inserire la logica che prende i dati dal form e crea l'istanza nella tabella del DB
        // la rrequest viene inviata tramite post una volta submit il form

        // istanzio variabiole che contiene tutti i dati inseriti nel form
        $data = $request->all();

        // creo un nuovo record della tabella vuoto 
        $new_comic = new Comic();
        // riempio e salvo il record nuovo con i dati della request
        $new_comic -> fill( $data );
        $new_comic -> save();

        // ritornami la vista show del nuovo record creato
        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // posso passarmi direttamente tutto il dato singolo 
    public function show(Comic $comic)
    {
        // ritorno la show solo dei dati singoli passati
        return view( 'pages.comics.show', compact('comic') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        // come in show, ritorno la vista dell'edit(form) masolo del comic selezionato
        return view('pages.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // istanzio variabile che raccoglie dati presi dal form modifica 
        $data = $request->all();
        // tramite shortcut update() modifico i dati vecchi con quelli nuovi 
        $comic->update($data);

        // metodo più 'lungo'
         // $data = $request->all();
        // $comic->fill($data);
        // $comic->save();

        // finito l'update ritorno alla show del singolo comics modificato, con i dati nuovi.
        return redirect()->route( 'comics.show', $comic )->with('message', "Hai aggiornato con successo: $comic->title");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
