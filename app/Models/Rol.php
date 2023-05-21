<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rol extends Model
{
    use HasFactory; 
    
    protected $table = 'roles';
    protected $primaryKey = 'id_rol';
    public $timestamps = false;
    

    protected $fillable = ['rol_name' , 'rol_slug'];


    public function users(){
        return $this->belongsTo(User::class);
    }
}
