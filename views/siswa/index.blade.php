<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container vh-100 d-flex justify-content-center flex-column align-items-center">
        <h1>Halaman Login Siswa</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-success">{{ $errors }}</div>
        @endif
        <div class="bg-body-secondary p-4 rounded">
            <form action="{{ route('login.submit') }}" method="POST">
                <div>
                    <label class="form-label" for="username">Username :</label>
                    <input class="form-control" type="text" id="username" name="username" required />
                </div>
                <div>
                    <label class="form-label" for="password">Password :</label>
                    <input class="form-control" type="password" id="password" name="password" required />
                </div>
                <div>
                    <label>Belum punya akun.? daftar <a href="/pendaftaran">disini</a></label>
                </div>
                <div>
                    <button class="btn btn-info">Login</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>