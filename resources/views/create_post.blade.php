<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Postar</title>        
    </head>
    <body>
        <nav>
            <a href="/posts/">Postagens</a> |
            <a href="/posts/create/view/">Postar</a> |
            <a href="/users/logout/view/">Sair</a>
        </nav>
        <h1>Faça um post nesse blog:</h1>
        <form action="/posts/create">
            @csrf
            <input type="text" name="title" placeholder="Digite o título">
            <input type="text" name="text" placeholder="Digite o texto">
            <input type="text" name="image" placeholder="Insira o nome da imagem">
            <input type="submit" name="submit" value="Postar">
        </form>
        
    </body>
</html>
