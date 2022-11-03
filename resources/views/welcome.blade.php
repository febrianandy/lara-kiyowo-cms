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
        <a href="/create" class="btn-create"> + Create</a>
      </div>
    </div>
  </nav>

  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif

  {{-- <div class="alert-success">
    <h5>Data berhasil ditambahkan 👏</h5>
  </div> --}}
  <main>
    <section class="articles">
      <table>
        <thead>
          <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Content</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($articles as $article )
          <tr>
            <td>{{ $article->title }}</td>
            <td>{{ $article->author }}</td>
            <td>{{ substr($article->content,0,50)}}</td>
            <td class="aksi">
              <a href="/update/{{ $article->id }}">
                <button class="btn-edit">
                  <span class="material-icons-outlined">
                    edit
                  </span>
                </button>
              </a>
              <a href="/delete/{{ $article->id }}" onClick="return confirm('Delete This Article?')">
                <button class="btn-delete">
                  <span class="material-icons-outlined">
                    highlight_off
                  </span>
                </button>
              </a>
              <a href="/article/{{ $article->id }}">
                <button class="btn-detail">
                  <span class="material-icons-outlined">
                    loupe
                  </span>
                </button>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </section>
  </main>

  <footer>
    <p>© 2021 Febrian Andy. All rights reserved.</p>
  </footer>
</body>

</html>