<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cursos</title>
    <style>
        /* ... Aquí puedes pegar los mismos estilos que ya usas en tu welcome para el menú ... */
        
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f6f9; }
        
        /* Estilos nuevos para la Tabla */
        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #007bff;
            color: white;
            font-weight: 600;
        }

        table tr:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

    <section style="display: flex; justify-content: space-between; align-items: center; padding: 18px 40px; background-color: #007bff; color: white;">
        <h1>Admin Sena</h1>
        <a href="{{ url('/') }}" style="color: white; text-decoration: none; font-weight: 500;">Volver al Inicio</a>
    </section>

    <div class="container">
        <h2>Listado de Cursos Registrados</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Curso</th>
                    <th>Código / Ficha</th>
                    </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->name_curso }}</td> 
                        <td>{{ $course->day }}</td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>