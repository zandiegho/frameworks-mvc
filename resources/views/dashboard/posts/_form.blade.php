@csrf

{{-- Creamos fila para poner titulo y descripción en una sola fila--}}
<div class="row">

    <div class="div--titulo col"> {{-- Columna titulo --}}

        <label for="title">Titulo del post</label>
        <input type="text" name="title" id="title" class="form-control" value="{{old('title', $post->title)}}">
    </div>

    <div class="div--img col"> {{-- Columna Imagen --}}

        <label for="image">Image post</label>
        <input class="form-control" type="file" id="image" name="image">
    </div>
    
</div> {{-- fin ROW --}}

<br>
<div class="row">

    <div class="col div--slug"> {{-- slug del post --}}
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{old('slug', $post->slug)}}">
    </div>
    
    <div class="col div--description"> {{-- descpription del post --}}
        <label for="description">Descripción</label>
        <input type="text" name="description" id="description" class="form-control" value="{{old('description', $post->description)}}">
    </div>
</div>

<br><br>

{{-- Creamos un textarea para el contenido del post--}}
<div class="div--textarea">
    <div class="form-floating ">
        <textarea class="form-control" name="content" id="content" placeholder="Ingrese contenido de post"></textarea>
        <label for="content">Contenido del Post</label>
    </div>
</div>

<br>

<div class="row  div--posted"> {{-- Creamos Fila para los select de categoria y posted --}}

    {{-- Select de categoria que lista las categorias creadas disponibles --}}
    <div class="col col-sm-4 div--categoría">

        <label for="category_id">Categoria de Post</label>
        <select name="category_id" id="category_id" class="form-control">
            <option value="" hidden>Seleccione una categoria</option>
            @foreach ($categories as $title =>$id)
            <option value="{{$id}}" {{old('category_id', 'post->category_id') == $id ? 'selected' : ''}}>{{$title}}
            </option>
            @endforeach
        </select>
    </div>

    <div class="col col-sm-4"> {{-- Damos formato de columa de 1/4 de ancho para el estado --}}

        <label for="posted">Estado</label>
        <select name="posted" id="posted" class="form-control">

            <option value="not" {{old('posted', $post->posted) == 'not' ? 'selected' : ''}}>No Publicado</option>
            <option value="yes" {{old('posted', $post->posted) == 'yes' ? 'selected' : ''}}>Publicado</option>

        </select>
    </div>

    <div class="col col-sm-4 form-check align-self-end"> {{-- checkbox required de aceptación de terminos --}}
        
        <input type="checkbox" class="form-check-input" name="check" id="chek" required> 
        <label  class="form-check-label" for="check">Acepto terminos de publciación</label>
    </div>

</div> {{-- Fin Fila Select y checkbox --}}

<br>

<div class="div--submit"> {{-- Boton de enviar --}}
    <input type="submit" value="Registar Post" class="btn btn-primary" >
</div>
