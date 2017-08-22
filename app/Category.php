<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name_english','name_arabic'];

    public function subCategories() {
        return $this->HasMany('App\SubCategory' , 'category_id');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
