<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">

  <link rel="stylesheet" href="/css/main.css">
  <title>Home</title>
</head>

<body>
  <header>
    <img src="/images/avatar.png" alt="Avatar" height="200">
    <h1>Laravel 9 Ajax</h1>
    <p>www.Febrian andy.dev</p>
  </header>
  <nav>
    <h2>Article</h2>
    <div class="breadcrump">
      <p>Fill in the following information</p>
      <div class="create">
        <ul>
          <a href="/">Home</a> >
          <a href="/article/{{ $articles->id }}">{{ $articles->title }}</a>
        </ul>
      </div>
    </div>
  </nav>


  <main>
    <section class="single-article">
      <h1>{{ $articles->title }}</h1>
      <h5>By: <i>{{ $articles->author }}</i></h5>
      <p>{!!$articles->content !!}</p>
    </section>
  </main>
  <footer>
    <p>© 2021 Febrian Andy. All rights reserved.</p>
  </footer>
</body>

</html>