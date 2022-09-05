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
    
    @include('dashboard.partials.nav-header-main')
    <a class="btn btn-primary" href="{{router(post.create)}}">Crear</a>
    <div class="container">
    <table>
        <thead>
            <body>
                <tr>
                    <td>
                    ID
                    </td>
                </tr>
                <tr>
                    <td>
                    Nombre
                    </td>
                </tr>  
                <tr>
                    <td>
                    Ruta
                    </td>
                </tr>   
                <tr>
                    <td>
                    Creacion
                    </td>
                </tr>    
                <tr>
                    <td>
                    Actualizacion
                    </td>
                </tr>  
            </doby>     

        </thead>    
    </table>        

</div> 



</body>
</html>