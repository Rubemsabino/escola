<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Lateral</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0px;
        }
        a {
            text-decoration: none;
        }

        header {
            background-color: rgb(52, 211, 202);
            padding: 10px;
        }
        .btn-abrir {
            color: white;
            font-size: 25px;
            
        }

        nav {
            height: 100;
            width: 1000;
            background-color: rgb(41, 61, 242);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1;
            overflow: hidden;
            transition: width 0.3s;
        }
        
        nav a {
            color: white;
            font-size: 25px;
            display: block;
            padding: 12px 10px 32px;
        }

        nav a:hover {
            color: rgb(21, 4, 98);
            background-color: white;
        }

        main {
            padding: 10px;
            transition: margin-left 0.5s;
        }
    </style>
</head>
<body>
    <header>
        <a href="#" class="btn-abrir" onclick="abrirMenu()">&#9776;Menu Cora-Coralina</a>
    </header>
    <nav id="menu">
        <a href="#" onclick="fecharMenu()">&times;Fechar</a>
        <a href="{{ route('professor.lista') }}">Professor</a>
        <a href="{{ route('aluno.lista') }}">Alunos</a>
        <a href="{{ route('turma.lista') }}">Turmas</a>
        <a href="#">Youtube</a>
    </nav>
    <main id="conteudo">
        <h1>Exemplo de Sidenav</h1>
        <p>Nesse local fica todo o conteúdo da página</p>
    </main>

    <script>
        function abrirMenu() {
            document.getElementById('menu').style.width = '120px';
            document.getElementById('conteudo').style.marginLeft ='120px';
        }
        
        function fecharMenu() {
            document.getElementById('menu').style.width = '0px';
            document.getElementById('conteudo').style.marginLeft ='0px';
        }
        
    </script>
</body>
</html>