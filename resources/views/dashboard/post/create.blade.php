<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Document</title>
</head>
<body>
    <h1 class="titulo"> Ingreso de Post</h1>
    <br>
    <br>



<div class="container">

@if(session('status'))
    <div class="alert alert-danger">
    {{session('status')}}
    </div>


    <form action="{{route('post.store')}}"method="post">
   
@endif
    @csrf
    <div class="colNom" >
        <label for="">Título</label><br>
        <input class="anchNom" type="text" name="title"><br>
        @error('title')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="colUrl" >
        <label for="">Url corta</label><br>
        <input class="anchNom" type="text" name="slug"><br>
        @error('slug')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="ConCont">  
        <label for="">Conteniedo</label><br>
        <textarea class="anchNom2" name="content"></textarea><br>
        @error('content')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>   
    
    <div class="ConDesc">
        <label for="">Descripcion</label><br>
        <textarea class="anchNom2" name="Description"></textarea>
    </div><br><br>
    <button class="btn-Enviar" type="submit">Enviar</button>
</div> 
    
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>    
</body>
</html>