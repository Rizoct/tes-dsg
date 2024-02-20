<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-primary text-white text-center p-5">
        <h1 class="navbar-brand" href="#">Galeri Karya Seni</h1>
    </header>
    <div class="container mt-3">
        <form class="form-inline my-2 my-lg-0" action="{{ url('/search') }}" method="post">
            @csrf
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <div class="row mt-3">
        @foreach ($karya as $item)
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        @if($item->file)
                            <img src="http://192.168.23.3/tes_dsg/img/{{ $item->file }}" class="img-fluid" style="max-width: 200px; height: 200px;">
                        @else
                            <img src="http://192.168.23.3/tes_dsg/img/none.jpg" class="img-fluid" style="max-width: 200px; height: 200px;">
                        @endif
                        <h2>{{ $item->id }}. {{ $item->nama }}</h2>
                        <p class="card-text"><strong>Kategori:</strong> {{ $item->kategori }}</p>
                        <p class="card-text"><strong>Pembuat:</strong> {{ $item->pembuat }}</p>
                        <p class="card-text"><strong>Tahun Pembuatan:</strong> {{ $item->tahun_pembuatan }}</p>
                        <p class="card-text"><strong>Harga:</strong> Rp{{ number_format($item->harga, 2) }}</p>
                        <p class="card-text"><strong>Keterangan:</strong> {{ $item->keterangan }}</p>
                        <a href="/edit/{{ $item->id }}" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danget">Delete</a>
                    </div> 
                </div>
            </div>
        @endforeach
    </div>
</body>