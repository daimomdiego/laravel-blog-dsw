<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title>        
    </head>
    <body>
        <nav>
            <a href="/posts/">Postagens</a> |
            <a href="/users/login/view/">Login</a> |
            <a href="/users/create/view/">Registrar</a>
        </nav>
        <h1>Faça login nesse blog:</h1>
        {{$message}}
        <form action="/users/login">
            @csrf
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Senha">
            <input type="submit" name="submit" value="Entrar">
        </form>
        
    </body>
</html>
