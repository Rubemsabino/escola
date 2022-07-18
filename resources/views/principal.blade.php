<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: 0;
        }
        body{
            width: 100vw;
            height: 100vw;
            background-image: url('49239560_1953296441413467_1939547599547662336_n.jpg');
            background-size: 100%;
            background-repeat: no-repeat;
        }
        Body
                {
            margin: 0;
            background: f2f2f2f;
        }
        .nav {
           width: 100%;
            background: #b5b5f3;
            height: 80px;
        }
        ul {
          list-style: none;
          padding: 0;
          margin: 0;
          position: absolute;
        }
        ul li {
            float: left;
            margin-top: 20px;

        }
        ul li a{
            width: 150px;
            color: white;
            display: block;
            text-decoration: none;
            font-size: 20px;
            text-align: center;
            padding: 10px;
            border-radius: 10px;
            font-family: Century Gothic;
            font-weight: bold;
        }
       a:hover{
        background: #f10c0c;
       }
       ul li ul{
        background: #dddf66f3;
       }
       ul li ul li{
        float: none;
       }
       ul li ul{
        display: none;
       }
       ul li:hover ul{
        display: block;
       }


    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <!-- abriar as paginas-->


        <button onclick="location='{{ route('aluno.lista') }}'"class="btn btn-primary">
            ALUNOS
        </button>

        <button onclick="location='{{ route('professor.lista') }}'"class="btn btn-primary">
            PROFESSOR
        </button>

        <button onclick="location='{{ route('disciplina.lista') }}'"class="btn btn-primary">
            DISCIPLINA
        </button>

        <button onclick="location='{{ route('turma.lista') }}'"class="btn btn-primary">
            TURMA
        </button>


        <!-- Pills content -->
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>
