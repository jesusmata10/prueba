<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'codigo',
    	'nombre',
    	'descripcion',
    	'precio',
    	'stock',
    	'imagen'
    ];

    public static function store($data)
    {
    	Product::create($data);
    }

    public static function deletee($id)
    {
    	Product::where('id', $id)->delete();
    }

    public static function updatee($data, $id)
    {
    	Product::where('id', $id)->update($data);
    }


}
