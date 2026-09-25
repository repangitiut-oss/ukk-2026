@extends('layouts.app')

@section('title', config('app.name') . ' -- Sistem Peminjaman Alat')

@section('content')

    {{-- Hero Section dengan Gradasi Modern & Elemen Kaya --}}
    <section class="py-5 position-relative overflow-hidden text-white" style="background: linear-gradient(135deg, #1e1b4b 0%, #312e81 50%, #4338ca 100%); border-radius: 1.5rem; margin-top: 1.5rem; margin-bottom: 3rem;">
        
        {{-- Aksen Dekoratif Latar Belakang --}}
        <div class="position-absolute top-0 start-0 translate-middle rounded-circle bg-primary opacity-25" style="width: 300px; height: 300px; filter: blur(60px);"></div>
        <div class="position-absolute bottom-0 end-0 translate-middle rounded-circle bg-info opacity-25" style="width: 350px; height: 350px; filter: blur(60px);"></div>

        <div class="container py-5 position-relative z-1">
            <div class="row align-items-center">
                <div class="col-lg-7 text-lg-start text-center mb-5 mb-lg-0">
                    <div class="d-inline-flex align-items-center bg-white bg-opacity-10 backdrop-blur rounded-pill px-3 py-2 mb-4 border border-light border-opacity-10">
                        <span class="badge bg-success rounded-pill me-2 px-2 py-1">LIVE</span>
                        <span class="small fw-semibold text-light">SMK Sangkuriang 1 Cimahi</span>
                    </div>

                    <h1 class="display-4 fw-extrabold mb-3 lh-sm text-white">
                        The Borrowing Tool <span class="text-info">Workout</span>
                    </h1>

                    <p class="lead text-light text-opacity-75 mb-4" style="max-width: 600px;">
                        Solusi digital manajemen peminjaman alat praktik sekolah. Cepat, transparan, dan terstruktur menggunakan kerangka kerja Sakuci PHP OOP murni.
                    </p>

                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
                        <a class="btn btn-info text-dark fw-bold px-4 py-3 shadow-lg rounded-pill" href="#fitur">
                            <i class="bi bi-rocket-takeoff me-2"></i> Jelajahi Fitur
                        </a>
                        <a class="btn btn-outline-light fw-semibold px-4 py-3 rounded-pill" href="https://github.com/indrabsus/sakuci-framework" target="_blank">
                            <i class="bi bi-github me-2"></i> Repositori GitHub
                        </a>
                    </div>
                </div>

                {{-- Kolom Kanan: Kartu Statistik / Ringkasan Cepat yang Interaktif --}}
                <div class="col-lg-5">
                    <div class="card bg-white bg-opacity-10 backdrop-blur border border-white border-opacity-15 shadow-lg rounded-4 p-4 text-white">
                        <h5 class="fw-bold mb-4 text-info">📊 Statistik Sistem</h5>
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="p-3 rounded-3 bg-black bg-opacity-25 border border-white border-opacity-10">
                                    <h3 class="fw-bold text-warning mb-1">45+</h3>
                                    <p class="small text-light text-opacity-75 mb-0">Total Alat</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 rounded-3 bg-black bg-opacity-25 border border-white border-opacity-10">
                                    <h3 class="fw-bold text-success mb-1">12</h3>
                                    <p class="small text-light text-opacity-75 mb-0">Sedang Dipinjam</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="p-3 rounded-3 bg-black bg-opacity-25 border border-white border-opacity-10 d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fw-bold mb-1">Status Sakuci Framework</h6>
                                        <p class="small text-light text-opacity-75 mb-0">v1.0.0 -- Stable & Ready</p>
                                    </div>
                                    <span class="badge bg-success px-3 py-2 rounded-pill">Aktif</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Fitur Unggulan (Grid Lebih Ramai) --}}
    <section class="container mb-5" id="fitur">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Fitur Unggulan Sistem</h2>
            <p class="text-muted">Dirancang khusus untuk memudahkan proses inventarisasi sekolah</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 p-4 rounded-4 bg-light border-start border-primary border-4">
                    <div class="card-body p-0">
                        <div class="mb-3 text-primary fs-2">🛠️</div>
                        <h4 class="fw-bold text-dark h5">Manajemen Alat</h4>
                        <p class="text-secondary small mb-0">Pendataan inventaris alat praktik lengkap dengan kondisi barang, kategori, dan stok secara real-time.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 p-4 rounded-4 bg-light border-start border-success border-4">
                    <div class="card-body p-0">
                        <div class="mb-3 text-success fs-2">⚡</div>
                        <h4 class="fw-bold text-dark h5">Peminjaman Kilat</h4>
                        <p class="text-secondary small mb-0">Alur sirkulasi peminjaman dan pengembalian alat yang cepat tanpa proses yang berbelit-belit.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 p-4 rounded-4 bg-light border-start border-warning border-4">
                    <div class="card-body p-0">
                        <div class="mb-3 text-warning fs-2">📂</div>
                        <h4 class="fw-bold text-dark h5">Struktur MVC Sakuci</h4>
                        <p class="text-secondary small mb-0">Dibangun bersih menggunakan konsep Route, Model, View, dan Controller murni berbasis PHP OOP.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection