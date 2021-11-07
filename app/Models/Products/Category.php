<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function subcategory()
    {
        return $this->hasMany('App\Models\Products\Category', 'parent_id', 'id')->with('subcategory');
    }
    // public function children() {
    //     $this->hasMany(App\Items::class, 'parent_id', 'id');
    //  }
}
