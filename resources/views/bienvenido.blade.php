<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
</head>
<body>

    <h1> Bienvenido al curso de laravel 10 </h1>
    <h2>{{ $nombre }}</h2>
    <h2>Lista de asistencia 07/10/2023</h2>

    <ul>
        @foreach($alumnos as $a)
        <li>{{ $a }}</li>
        @endforeach
    </ul>
    <h2>Datos</h2>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Edad</td>
            <td>Turnos</td>
        </tr>
        @foreach ($datos as $d)
        <tr>
            <td>{{ $d["nombre"] }}</td>
            <td>{{ $d["edad"] }}</td>
            <td>{{ $d["turno"] }}</td>
        </tr>
        @endforeach
    </table>

    <p>Laravel utiliza una arquitectura MVC modelo vista controladores</p>

    <p>
        modelo: Es la base de datos, los modelos son nuestras tablas, por cada tabla 
        debemos tener un modelo.
        los modelos  estan en la carpeta de app/Models 
    </p>

    <p>
        Vistas: las vistas son los HTMLS y CSS que se muestran en la pagina web 
        Estan en la carpeta de resources/wiews
    </p>
    <p>
        Controladores: Sin archivos donde se plasman la logica de negocio 
        estan app/http/Controler 
    </p>
    
</body>
</html>