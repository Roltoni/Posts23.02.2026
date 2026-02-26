<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <a href="/get/posts/{{$post->id}}/edit">edit</a>
    <form action="/get/posts/{{$post->id}}/destroy" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" value="Delete">
    </form>

</body>
</html>