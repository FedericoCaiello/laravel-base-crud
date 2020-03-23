<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candie extends Model
{
  protected $fillable =
  [
    'isbn',
    'price',
    'genre',
    'name',
    'color'

  ];
}
