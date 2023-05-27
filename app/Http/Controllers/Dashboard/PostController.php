<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'rol.admin']); /* ->except('show'); */
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(5); 
        
        return view('dashboard.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id' , 'title');
        $post = new Post();

        /* 
        if (!Gate::allows('create', $post)){
            abort(403);
        }
        */
        return view('dashboard/posts/create' , compact('categories','post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar y guardar los datos del nuevo registro
        #$datos = $request->validate([
            $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'posted' => 'required',
            'category_id' => 'required',
            // Otros campos y reglas de validación
            ]);

            $imgP = $request->file('image');
            $imgName = time() . '_' . $imgP->getClientOriginalName();
            $imgP->storeAs('public/img/', $imgName );
            $rutaImagen = 'public/img' . $imgName;
            
            $postModel = new Post;
            $postModel->title = $request->title;
            $postModel->slug = $request->slug;
            $postModel->description = $request->description;
            $postModel->content = $request->content;
            $postModel->image = $rutaImagen;
            $postModel->posted = $request->posted;
            $postModel->category_id = $request->category_id;
            $postModel->save();


    
            #Post::create($datos);
    
            // Redirigir a la vista index.blade.php con un mensaje de éxito
            return redirect()->route('showIndexPost')->with('success', 'Registro creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id){

        $postPorId = Post::find($id);
        return view('dashboard.posts.show', compact('postPorId'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post){
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post){
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post){
        //
    }

}
