<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name_english','name_arabic'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\SubCategory','subcategory_id');
    }

    public function subsubcategory()
    {
        return $this->belongsTo('App\SubSubCategory','subsubcategory_id');
    }
}
