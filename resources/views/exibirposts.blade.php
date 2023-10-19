<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criação de Posts</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        nav {
            width: 100%;
            background-color: darkgrey;
            color: black;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        header {
            display: flex;
            align-items: center;
            width: 100%;
            background-color: darkgray;
            color: black;
            height: 50px;
        }
        .logo {
            margin-left: 150px;
        }
        .menu {

        }
        .menu a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 20px;
        }
        .menu ul {
            list-style-type: none;
        }
        .menu li {
            display: inline;
            margin-right: 20px;
        }
        .search-container {
            display: flex; /* Adicionado para alinhar o input e o ícone horizontalmente */
            align-items: center; /* Alinha verticalmente o input e o ícone */
        }
        input[type="search"] {
            border: none;
            height: 30px;
            border-radius: 15px;
            padding: 10px;
            margin-right: 10px; /* Adiciona espaço entre o input e os links do menu */
        }
        .search-container input[type="search"] {
            border: none;
            height: 30px;
            border-radius: 15px;
            padding: 10px;
            margin-right: 10px;
        }

        .search-icon {
            display: inline-block;
            vertical-align: middle;
            cursor: pointer;
        }
        body {
            display: flex;
            flex-direction: column;
            background-color: #dbdbdb;
        }

        footer {
            margin-top: auto;
            background-color: darkgrey;
            color: black;
            text-align: center;
            height: 50px; /* Ajuste a altura conforme necessário */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        section {
            margin: 20px auto; /* Define uma margem vertical de 20px e margem horizontal automática para centralizar */
            max-width: 890px;
            display: flex;
            flex-direction: column; /* Centraliza o conteúdo verticalmente */
            justify-content: center;
            align-items: center;
            padding: 20px; /* Adiciona um espaço interno para afastar o conteúdo das bordas */
        }

        .postagens{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px 50px;
            padding: 5px;
        }
        .post{
            border: none;
            border-radius: 15px;
            height: 350px;
            width: 300px;
            background-color: white;
            padding: 10px;
            
        }
        .botao{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        button{
            height: 50px;
            width: 60%;
            border: none;
            border-radius: 15px;
            padding: 5px;
            font-weight: bold;
        }

        
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>LOGO</h1>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="/">Cadastrar Noticias</a></li>
                <li><a href="/cadastrar">Exibir Noticias</a></li>
                <li class="search-container">
                    <input type="search" placeholder="pesquisar..">
                    <span class="search-icon">&#128269;</span>
                </li>
            </ul>
        </nav>
    </header>
        <section>
            <div class="postagens">
                @foreach($posts as $post)
                    <div class="post">
                        <h2>{{$post->title}}</h2>
                        <div class="content">
                            <p>{{$post->content}}</p>
                            <div class="botao">
                            <button>Acessar</button>
                            </div>
                        </div>
                    </div>
                @endforeach

                
            </div>

        </section>
    <footer>
        <p>Desenvolvido por Ewerton França</p>
    </footer>
</body>
</html>
