<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Posts</title>        
    </head>
    <body>
        <nav>
            <a href="/posts/">Postagens</a> |
            <a href="/posts/create/view/">Postar</a> |
            <a href="/users/login/view/">Login</a> |
            <a href="/users/logout/view/">Sair</a> |
            <a href="/users/create/view/">Registrar</a>
        </nav>
        
        <h1>Veja todos os posts desse blog:</h1>

        @foreach($posts as $post)
            <h3>{{ $post->title }}</h3>
            <br>
            {{ $post->text }}
            <br>
            <p>Comentários:</p>
            @if ($user != null)
                <form action="/comments/create">
                    @csrf
                    <input type="text" name="comment" placeholder="Comente sobre">
                    <input type="hidden" name="post" value="{{$post->id}}">
                    <input type="hidden" name="user" value="{{$user->id}}">
                    <input type="submit" name="submit" value="Entrar">
                </form>
            @endif
            <br>
            @foreach($comments as $comment)
                @if ($post->id == $comment->post)
                    {{ $comment->comment }}
                    <br>
                    {{ $comment->user }} | {{ $comment->updated_at }}
                @endif
            @endforeach  
        @endforeach
        
    </body>
</html>
