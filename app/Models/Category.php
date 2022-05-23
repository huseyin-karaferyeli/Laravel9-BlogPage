<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function blogs(){
        return $this -> hasMany(Blog::class);
    }

    public function parent(){
        return $this -> belongsTo(Category::class, 'parentId');
    }

    public function children(){
        return $this -> hasMany(Category::class, 'parentId');
    }
}
