<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Edit post with id  {{$singlePost->id}}</h1>

<form action="/get/posts/{{$singlePost->id}}/update" method="post">
    @csrf
    @method('PUT')

    <input name="title" type="text" value="{{$singlePost->title}}">
    <input name="content" type="text" value="{{$singlePost->content}}">
    <input type="submit" value="Atjaunot"/>
</form>
    <a href="/">Navigation</a>
    <a href="/get/posts">index</a>
    
    
</body>
</html>