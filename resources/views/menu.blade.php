<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Padrão</title>
    

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

<body>
    <div class="nav"> 
        <ul>
            <li><a href="#">Direção</a></li>
            <li><a href="#">Coordenação</a></li>

            
            <li> <a href="#">Professores</a> <ul>
                <li> <a href="{{ route('professor.lista') }}">Lista Professores</a> </li>
                <li> <a href="#">More 2</a> </li>
            </ul></li>

            <li><a href="#">Alunos</a><ul>
                <li><a href="{{ route('aluno.lista') }}">Lista Alunos</a></li>
                <li><a href="#">More 2</a></li>
            </ul></li>

            <li><a href="#">Turmas</a>
        <ul>
            <li> <a href="{{ route('turma.lista') }}">Lista Turmas</a> </li>
            <li><a href="#">More 2</a></li>
        </ul>
            </li>
            <li> <a href="#">Disciplina</a>  <ul>
            <li> <a href="{{ route('disciplina.lista') }}">Lista Disciplna</a> </li>
            <li><a href="#">More 2</a></li>
        </ul></li>
            <li><a href="#">Cantact</a></li>    
        <ul>
    </div>
           
</body>
</html>