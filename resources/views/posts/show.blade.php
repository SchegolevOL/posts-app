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
                <a class="nav-link active" aria-current="page" href="{{route('create')}}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('index')}}">List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
    </div>


    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    <div class="col">
                        <div class="card shadow-sm">
                            <h3 class="text-center">{{$post->title}}</h3>
                            <div class="card-body">
                                <p class="card-text">{{$post->content}} </p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a  class="btn btn-sm btn-outline-secondary" href="{{route('edit',$post)}}">
                                            Edit</a>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>

</main>

</body>
</html>
