<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OneCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

        public function categories()
    {
     return $this->hasMany(Category::class , 'one_category_id');
    }
}
