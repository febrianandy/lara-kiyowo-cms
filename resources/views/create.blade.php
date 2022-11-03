<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Sharp" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

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
      <ul>
        <a href="/">Home</a> >
        <a href="/create">Create</a>
      </ul>
    </div>
  </nav>

  <main>
    <section class="fill">
      <form action="/create" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title">
          @error('title')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="author">Author</label>
          <input type="text" name="author" id="author">
          @error('author')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" id="summernote" cols="30" rows="10" placeholder="Content"></textarea>
          @error('content')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group footer-submit">
          <button type="submit" class="btn-submit">Submit</button>
        </div>
      </form>
    </section>
  </main>
  <footer>
    <p>© 2021 Febrian Andy. All rights reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

  <script>
    $('#summernote').summernote({
      placeholder: '',
      tabsize: 2,
      height: 320,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>
</body>

</html>