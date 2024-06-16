<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table = 'book';

    protected $fillable = [
        'id_ksiazki',
        'tytul',
        'imie_autor',
        'nazwisko_autor',
        'ISBN',
        'data_wydania'
    ];

    }
