<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        </style>
    </head>
    <body class="antialiased">
    <div class="shadow mb-5 bg-white rounded">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand text-info" href="/">BNCC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="create">Absensi</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
    </div>

<h1 class="text-center">Daftar Absensi</h1>
<br>
<div class="d-flex flex-row justify-content-center gap-5">
    @foreach ($absensis as $data)
        <div class="card" style="width: 18rem;">
            <img src="{{asset('/storage/image/'.$data->image)}}" class="card-img-top" alt="">
            <div class="card-body">
              <p class="card-title">Nama  : {{$data->name}}</p>
              <p class="card-text">NIM    : {{$data->NIM}}</p>
              <p class="card-text">BNCCID : {{$data->BNCCID}}</p>
              <p class="card-text">Tanggal: {{$data->absensi_Date}}</p>
              <p class="card-text">LnT: {{$data->absen->LNT_class}}</p>
              <br>
              <a href="{{route('edit', $data->id)}}" class="btn btn-info btn-lg">Edit</a>
              <br>
              <form action="{{route('delete', $data->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-lg">Delete</button>
            </div>
          </div>
    @endforeach
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>
