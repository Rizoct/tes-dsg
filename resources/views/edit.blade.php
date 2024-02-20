<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Edit Karya Seni</a>
        </nav>
    </header>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <form action="/update/{{ $karya->id }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $karya->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $karya->kategori }}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Pembuat</label>
                        <input type="text" class="form-control" id="pembuat" name="pembuat" value="{{ $karya->pembuat }}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Tahun Dibuat</label>
                        <input type="text" class="form-control" id="tahun_pembuatan" name="tahun_pembuatan" value="{{ $karya->tahun_pembuatan }}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="{{ $karya->harga }}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $karya->keterangan }}">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</body>