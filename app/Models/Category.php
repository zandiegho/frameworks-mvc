<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title' , 
                            'slug'
                           
    ];
    # 1 categoria tiene muchas publicaciones, relaciona de uno a muchos -> hasMany

    public function post(){
        return $this->hasMany(Post::class);
    }
}
