<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid min-vh-100">
        <h1 class="text-center">Pendaftaran Anggota Perpustakaan</h1>
        <div class="d-flex justify-content-center w-100">
            <form class="bg-body-secondary p-5 rounded" action="{{ route('register') }}" method="POST">
                @csrf
                <div>
                    <label class="form-label">Nomor Induk Siswa : </label>
                    <input type="number" name="nis" class="form-control" required />
                </div>
                <div>
                    <label class="form-label">Nama Siswa : </label>
                    <input type="text" name="nama_siswa" class="form-control" required />
                </div>
                <div>
                    <label class="form-label">Kelas : </label>
                    <select class="form-control" name="kelas">
                        <option selected>Pilih Kelas</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                </div>
                <div>
                    <label class="form-label">Jurusan : </label>
                    <select class="form-control" name="jurusan">
                        <option selected>Pilih Jurusan</option>
                        <option value="AKL">Akuntansi</option>
                        <option value="BDP">Bisnis Daring dan Pemasaran</option>
                        <option value="RPL">Rekayasa Perangkat Lunak</option>
                    </select>
                </div>
                <div>
                    <label class="form-label">Username : </label>
                    <input type="text" name="username" class="form-control" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password : </label>
                    <input type="password" name="password" class="form-control" required />
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Daftar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>