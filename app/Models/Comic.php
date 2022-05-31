<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // rendo le key delle migration fillable così posso usare la funzione fill() nel seeder
    protected $fillable = [
        'title', 'description', 'thumb', 'price', 'sale_date', 'type'
    ];
}
