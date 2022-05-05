@extends('layouts.main')

@section('container')
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" type="image/jpg" href="assets/logo/logo T.png" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <!-- My css -->
        <link rel="stylesheet" href="./css/style.css" />
    </head>

    <body background="#5743b7">
        <div class="tittle-top mb-5">
            <h2 class="fw-bold">Contact Us</h2>
        </div>
        <form method="POST" action="{{ route('contacts.store') }}" >
            {{ csrf_field() }}
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
                <label for="inputname">Nama</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
                <label for="inputname" class="form-label">Email</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Tinggalkan Pesan disini" id="floatingTextarea" style="height: 100px"
                    name="pesan"></textarea>
                <label for="floatingTextarea">Pesan</label>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </body>

    </html>
@endsection
