<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderImage extends Model
{
    use HasFactory;
    protected $guarded = [];
         public function scopeActive($query)
    {
        return $query->whereStatus(1);
    }
  
    public function status()
    {
        return $this->status == 1 ?'Active':'Not Active';
    }
}
