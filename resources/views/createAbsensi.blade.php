<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </style>
</head>

<body class="antialiased">
    <div class="shadow mb-5 bg-white rounded">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand text-info" href="/">BNCC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
    <div class = "p-4">
        <h1 class="text-center"> Form Absensi</h1>
        <br>
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value = "{{ old('name') }}" id=""
                        name = "name" placeholder="Nama Lengkap">
                </div>
            </div>
            @error('name')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror
            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value = "{{ old('NIM') }}" id=""
                        name = "NIM" placeholder="Nomor Induk Mahasiswa">
                </div>
            </div>
            @error('NIM')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror
            <br>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">BNCC ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value = "{{ old('BNCCID') }}" id=""
                        name = "BNCCID" placeholder="BNCC...">
                </div>
            </div>
            @error('BNCCID')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror
            <br>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Pertemuan</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" value = "{{ old('absensi_Date') }}" id=""
                        name="absensi_Date">
                </div>
            </div>

            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Foto Diri</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="" name="image">
                </div>
            </div>
            <br>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kelas LNT</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="LNT_class">
                        <option selected>Pilih Kelas LNT </option>
                        @foreach ($kelas as $k)
                            <option value="{{ $k->id }}">{{ $k->LNT_class }} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Hadir!</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
