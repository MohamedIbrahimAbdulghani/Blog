<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Post</title>
</head>
<body>

<div class="container">

    @foreach ($users as $user)
        <li>{{ $user }}</li>
    @endforeach


        {{-- <h1>{{ $title }}</h1> --}}
        <h1>{{ isset($title)? $title : 'Welcome In Our Blog' }}</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita nemo dolorem inventore voluptatum optio, quisquam possimus sequi sint soluta error tenetur et magnam rerum aut id eius velit molestias mollitia! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus sint rerum reprehenderit, ab ex explicabo saepe est aliquid at excepturi iure alias ducimus. Placeat possimus ducimus optio dolores, qui rerum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita nemo dolorem inventore voluptatum optio, quisquam possimus sequi sint soluta error tenetur et magnam rerum aut id eius velit molestias mollitia! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus sint rerum reprehenderit, ab ex explicabo saepe est aliquid at excepturi iure alias ducimus. Placeat possimus ducimus optio dolores, qui rerum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita nemo dolorem inventore voluptatum optio, quisquam possimus sequi sint soluta error tenetur et magnam rerum aut id eius velit molestias mollitia! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus sint rerum reprehenderit, ab ex explicabo saepe est aliquid at excepturi iure alias ducimus. Placeat possimus ducimus optio dolores, qui rerum.</p>
        <a href="/" class="btn btn-success">Back</a>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
