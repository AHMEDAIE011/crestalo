<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OneCategory extends Model
{
    use HasFactory,Sluggable;
    protected $guarded = [];

        public function categories()
    {
     return $this->hasMany(Category::class , 'one_category_id');
    }

        public function scopeActive($query)
    {
        return $query->whereStatus(1);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' =>'name',
            ]
        ];
    }

    public function status()
    {
        return $this->status == 1 ?'Active':'Not Active';
    }
}
