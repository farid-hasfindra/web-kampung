@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Kampung Tualang Timur</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="#">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="#">PROFIL</a></li>
                <li class="nav-item"><a class="nav-link" href="#">BERITA</a></li>
                <li class="nav-item"><a class="nav-link" href="#">INFORMASI</a></li>
                <li class="nav-item"><a class="nav-link" href="#">GALERI</a></li>
                <li class="nav-item"><a class="nav-link" href="#">INTERAKSI</a></li>
                <li class="nav-item"><a class="nav-link" href="#">E-BOOK</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <!-- Banner/Slider -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card bg-primary text-white">
                <div class="card-body d-flex align-items-center">
                    <img src="{{ asset('assets/img/desa1.jpg') }}" alt="Banner" class="me-4" style="width:120px;height:120px;border-radius:50%;object-fit:cover;">
                    <div>
                        <h3 class="mb-2">Selamat Datang di Website Desa Kampung Tualang Timur</h3>
                        <p class="mb-0">Informasi, layanan, dan data desa dalam satu portal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Statistik -->
    <div class="row mb-4 text-center">
        <div class="col-md-2 col-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-users fa-2x text-info"></i></div>
                    <div class="fw-bold">Total Jiwa</div>
                    <div class="fs-4 text-info">1223</div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-user-friends fa-2x text-danger"></i></div>
                    <div class="fw-bold">Jumlah KK</div>
                    <div class="fs-4 text-danger">679</div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-home fa-2x text-success"></i></div>
                    <div class="fw-bold">Jml Desa</div>
                    <div class="fs-4 text-success">453</div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-map fa-2x text-primary"></i></div>
                    <div class="fw-bold">Luas Wilayah</div>
                    <div class="fs-4 text-primary">3 Km<sup>2</sup></div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="fw-bold mb-2">Jadwal Kerja</div>
                    <div>Pemerintah Kecamatan</div>
                    <div class="d-flex justify-content-between mt-2">
                        <span>Buka: <strong>08.00</strong></span>
                        <span>Tutup: <strong>16.00</strong></span>
                        <span>Libur: <strong>Sabtu-Minggu</strong></span>
                    </div>
                    <div class="mt-2">
                        <a href="#" class="btn btn-success btn-sm">Hubungi</a>
                        <a href="#" class="btn btn-dark btn-sm">Follow</a>
                        <a href="#" class="btn btn-primary btn-sm">Sambutan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Layanan -->
    <div class="row text-center mb-4">
        <div class="col-md-2 col-6 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-envelope fa-2x text-warning"></i></div>
                    <div class="fw-bold">LAYANAN</div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-6 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-poll fa-2x text-info"></i></div>
                    <div class="fw-bold">SURVEI KEPUASAN</div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-6 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-calendar-alt fa-2x text-danger"></i></div>
                    <div class="fw-bold">AGENDA</div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-6 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-database fa-2x text-primary"></i></div>
                    <div class="fw-bold">BANK DATA</div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-6 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-users-cog fa-2x text-success"></i></div>
                    <div class="fw-bold">PEGAWAI</div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-6 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-user-md fa-2x text-secondary"></i></div>
                    <div class="fw-bold">STRUKTUR</div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mb-4">
        <a href="{{ route('login') }}" class="btn btn-primary">Login Admin</a>
    </div>
</div>

<!-- Font Awesome CDN (for icons) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

@endsection