<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
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
        $listaCategorias = Category::all();
        return view('dashboard/category.index', compact('listaCategorias'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {    
       // Mostrar el formulario de creación en la vista create.blade.php
       return view('dashboard.category.create');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar y guardar los datos del nuevo registro
        $datos = $request->validate([
        'title' => 'required',
        'slug' => 'required',
        // Otros campos y reglas de validación
        ]);

        Category::create($datos);

        // Redirigir a la vista index.blade.php con un mensaje de éxito
        return redirect()->route('showIndex')->with('success', 'Registro creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    # public function show(Category $category)
    public function show($id)
    {
        // Obtener el registro con el ID proporcionado y mostrarlo en la vista show.blade.php
        $registro = Category::find($id);

        return view('dashboard.category.show', compact('registro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    #public function edit(Category $category)
    public function edit($id)
    {
        // Obtener el registro con el ID proporcionado y mostrar el formulario de edición en la vista edit.blade.php
        
        $registros = Category::findOrFail($id);
        $categorias = Category::all();
        return view('dashboard.category.edit', compact('registros' , 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */

    #public function update(Request $request, Category $category)
    public function update(Request $request, $id)
    {
        // Validar y actualizar los datos del registro con el ID proporcionado
        $datos = $request->validate([
        'title' => 'required',
        'slug' => 'required',
        // Otros campos y reglas de validación
        ]);

        $registro = Category::findOrFail($id);
        $registro->update($datos);

        // Redirigir a la vista index.blade.php con un mensaje de éxito
        return redirect()->route('showIndex')->with('success', 'Registro actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    #public function destroy(Category $category)
    public function destroy($id)
    {
         // Eliminar el registro con el ID proporcionado
        $registro = Category::findOrFail($id);
        $registro->delete();

        // Redirigir a la vista index.blade.php con un mensaje de éxito
        return redirect()->route('showIndex')->with('success', 'Registro eliminado exitosamente');
    }
}
