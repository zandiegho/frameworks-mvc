<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function all(){
        return $this->sucessResponse(Category::all());
    }

    public function index(){
        return $this->sucessResponse(Category::paginate(10));
    }


}
