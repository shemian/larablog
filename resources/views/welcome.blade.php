<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ asset('css/app.css') }}>

        <style>
            
        </style>


    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Blog App</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blogs</a>
                        </li>
                    </ul>

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container">
            <h2>Top Blogs</h2>
            @foreach($listBlogs as $listBlog)
            <p>this: {{$listBlog->content}}</p>
            @endforeach
        </div>
        
        <div class="container">
            <h2 class="top">Create new Blog</h2>
            <form method= "post" action="{{ route('saveBlog') }}" accept-charset="UTF-8">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="blogTitle">Blog Title</label> <br>
                    <input type="text" name="blogTitle" rows="1">
                </div>

                <div class="mb-3">
                    <label for="blogAuthor">Blog Author</label> <br>
                    <input type="text" name="blogAuthor" rows="1">
                </div>
                
                <div class="mb-3">
                    <label for="blogContent">Blog Content</label>
                    <textarea class="form-control" name="blogContent" rows="3"></textarea>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>


        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
