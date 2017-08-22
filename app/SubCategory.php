<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'sub_categories';
    protected $fillable = ['name_english','name_arabic'];

    public function category()
    {
        return $this->BelongsTo('App\Category', 'category_id');
    }

    public function products()
    {
        return $this->hasMany('App\Product','subcategory_id');
    }

    public function subsubCategories() {
        return $this->HasMany('App\SubSubCategory' , 'subcategory_id');
    }
}
