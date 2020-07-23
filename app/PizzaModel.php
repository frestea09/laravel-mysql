<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PizzaModel extends Model
{
    protected $table = 'pizza_table'; 
    protected $primaryKey = 'pizza_id';
    public $timestamps = false;
    protected $fillable = [
        'id', 'pizza_name', 'pizza_prize'
    ];
}
