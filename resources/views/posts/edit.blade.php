<!doctype html>
<html lang="en" data-bs-theme="auto">
<head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Album example · Bootstrap v5.3</title>
    <link href="/public/assets/css/bootstrap/css/bootstrap.css" rel="stylesheet" >
    <link href="/public/assets/css/styles.css">

</head>
<body>


<main>
    <div class="container">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('index')}}">List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
    </div>

    <div class="container">


        <form action="" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label  class="form-label">Title</label>
                <input value="{{$post->title}}" type="text" class="form-control" name="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label  class="form-label">Content</label>
                <textarea class="form-control" name="content" rows="6">{{$post->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</main>

</body>
</html>
