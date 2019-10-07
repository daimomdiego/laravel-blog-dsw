<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Registrar</title>        
    </head>
    <body>
        <nav>
            <a href="/posts/">Postagens</a> |
            <a href="/users/login/view/">Login</a> |
            <a href="/users/create/view/">Registrar</a>
        </nav>
        <h1>Faça seu cadastro nesse blog:</h1>
        <form action="/users/create" method="post">
            @csrf
            <input type="text" name="name" placeholder="Nome">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Senha">
            <input type="password" name="confirm_password" placeholder="Confirme sua Senha">
            <input type="submit" name="submit" value="Registrar">
        </form>       
    </body>
</html>
