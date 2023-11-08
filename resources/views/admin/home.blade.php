<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<title>Homepage</title>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
<div class="container">
<a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Rakayasa Perangkat Lunak</a>
</div>
</nav>
<div class="container">
<div class="row mt-3">
<div class="col">
<h4 class="text-secondary">Selamat Datang {{ Auth::user()->name}}</h4>
</div>
</br>
</br>
<div class="container mt-4">
        <div class="row">
            <div class="col text-center">
                <a href="{{ route('admin.tambah_berita') }}" class="btn btn-primary m-2" style="text-decoration: none">Tambah Berita Terbaru Program Studi Keamanan Sistem Informasi</a>
                <a href="{{ route('admin.tambah_dosen') }}" class="btn btn-primary m-2" style="text-decoration: none">input Profil Dosen Program Studi Keamanan Sistem Informasi</a>
            </div>
        </div>
    </div>
</div>
</br>
</div>
<div class="col"></div>
<div class="col-1"><a href="{{ route('logout') }}" style="text-decoration: none">
<p class="btn btn-primary m-2">Logout</p>
</a></div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
