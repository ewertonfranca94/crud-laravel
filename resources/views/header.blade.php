<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilo.css') }}">
    <title>Criação de Posts</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1><a href="{{route('exibirposts')}}">LOGO</a></h1>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="{{route('posts.createStore')}}">Cadastrar Noticias</a></li>
                <li><a href="{{route('exibirposts')}}">Exibir Noticias</a></li>
                <li class="search-container">
                    <form action="{{ route('search') }}" method="get">
                        <input type="search" name="search" placeholder="pesquisar..">
                        <button type="submit"><span class="search-icon">&#128269;</span></button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>