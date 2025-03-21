<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <style>
        /* Estilos generales */
        body {
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        /* Header */
        header {
            background: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 1.5em;
            font-weight: bold;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Contenedor principal */
        main {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        footer {
            background: #007bff;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 0.9em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Lista de personas */
        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background: #ffffff;
            margin: 10px 0;
            padding: 15px;
            border-left: 6px solid #007bff;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        li:hover {
            transform: scale(1.02);
            border-left: 6px solid #0056b3;
        }

        strong {
            color: #007bff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Header de la aplicacion</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Pie de pagina de la aplicacion</p>
    </footer>

</body>
</html>
