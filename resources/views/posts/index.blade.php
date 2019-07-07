
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Blog REST</title>
</head>
<body>
<div class="container">
<h1>Post</h1>
<!-- iterate Data -->
@foreach ($posts as $post)
<div class="card" style="width: 100%;">
  <div class="card-body">
    <h4 class="card-title">{{$post->title}}</h4>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
@endforeach
</div>
</body>
</html>