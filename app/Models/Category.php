<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends=[
        'parent',
    ];

    public function products(){ //one to many ilişkisi
        return $this->hasMany(Product::class);
    }

    public function parent(){//one to many tersi
        return $this->belongsTo(Category::class,'parent_id');
    }

    public function children(){//one to many
        return $this->hasMany(Category::class,'parent_id');
    }
}
