<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
        }

        section{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 40px;
            background-color: #007bff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .titulo h1{
            color: white;
            font-size: 2rem;
            letter-spacing: 1px;
            cursor: pointer;
        }

        .menu ul{
            display: flex;
            align-items: center;
            gap: 25px;
            list-style: none;
        }

        .menu ul li a{
            color: white;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 500;
            padding: 10px 18px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .menu ul li a:hover{
            background-color: rgba(255,255,255,0.2);
            transform: translateY(-2px);
        }

        .menu ul li a:active{
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <section>
        <div class="titulo">
            <h1>Admin Sena</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('area.create')}}">Area</a></li>
                <li><a href="{{route('computer.computador')}}">Computer</a></li>
                <li><a href="{{route('trainingcenter.registro')}}">Training Center</a></li>
                <li><a href="{{route('course.registros')}}">Course</a></li>
                <li><a href="{{route('teacher.registro')}}">Teacher</a></li>
                <li><a href="{{route('aprendiz.registro')}}">Apprentice</a></li>
            </ul>
        </div>
    </section>
</body>
</html>