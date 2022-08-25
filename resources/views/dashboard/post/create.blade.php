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
    <form action="{{route('post.store')}}"method="post">
    @csrf
    <div class="colNom" >
        <label for="">Título</label><br>
        <input class="anchNom" type="text" name="title">
    </div>

    <div class="colUrl" >
        <label for="">Url corta</label><br>
        <input class="anchNom" type="text" name="slug">
    </div>

    <div class="ConCont">  
        <label for="">Conteniedo</label><br>
        <textarea class="anchNom2" name="contenet"></textarea>
    </div>   
    
    <div class="ConDesc">
        <label for="">Descripcion</label><br>
        <textarea class="anchNom2" name="Description"></textarea>
    </div>


    <button class="btn-Enviar" type="submit">Enviar</button>
</form>    
</body>
</html>