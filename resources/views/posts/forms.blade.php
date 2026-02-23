<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <form action="/posts" method="post">
        @csrf
        <input name="title" type="text">
        <input name="content" type="text">
        <button>Save Data</button>
    </form>
    <a href="/">Navigation</a>
    <a href="/get/posts">index</a>
    
    
</body>
</html>