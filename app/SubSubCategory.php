<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    protected $table = 'sub_sub_categories';
    protected $fillable = ['name_english','name_arabic'];

    public function products()
    {
        return $this->hasMany('App\Product','sub_subcategory_id');
    }

    public function subcategory()
    {
        return $this->BelongsTo('App\SubCategory', 'subcategory_id');
    }
}
