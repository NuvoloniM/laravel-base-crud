<?php

use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //
    // Importo il model dei fumetti
    public function run()
    {
        // istanzio variabile uguale a database importato in config
        $comics = config('comics');

        // ciclo tutto l'array comics.php
        foreach ($comics as $comic) {
            // nuova variabile = a nuova classe del Model
            $new_comic = new Comic();

            // per non compilare tutti i dati manualmente posso usare fill() e save()
            // per fare questo in model devo rendere tutte le key protected fillable
            $new_comic -> fill( $comic );
            $new_comic -> save();
        }
    }
    }