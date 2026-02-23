<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>All Posts</h1>
@foreach($posts as $post)
    <h3>
        {{ $post->title }}
    </h3>
    <p>{{ $post->content }}</p>
    <a href="/get/posts/{{$post->id}}">Show</a>
@endforeach


<a href="/">Navigation</a>
<a href="/posts/create">Submit</a>
</body>
</html>