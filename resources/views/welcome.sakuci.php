@extends('layouts.app')

@section('title', config('app.name') . ' -- Peminjaman Alat Gym')

@section('content')

{{-- Hero Section: Dark Sport Theme --}}
<section class="py-5" style="background-color: #111111; border-bottom: 4px solid #ff3b30; margin-top: 1rem; margin-bottom: 3rem;">
    <div class="container py-4">
        <div class="row align-items-center g-5">

            <div class="col-lg-7 text-lg-start text-center">
                <div class="mb-3">
                    <span class="badge px-3 py-2 rounded-0 fw-bold"
                        style="background-color: #ff3b30; color: #fff; border: 3px solid #fff; box-shadow: 4px 4px 0px #000;">
                        <span class="me-1">💪</span> SAKUCI FITNESS CENTER
                    </span>
                </div>

                <h1 class="display-4 fw-black text-white mb-3"
                    style="font-weight: 900; letter-spacing: -1px;">
                    Peminjaman Alat
                    <span style="background-color: #ff3b30; color: #fff; padding: 0 10px; border: 3px solid #fff; box-shadow: 4px 4px 0px #000; display: inline-block; transform: rotate(-1deg);">
                        Gym & Fitness
                    </span>
                </h1>

                <p class="text-dark lead mb-4 fw-medium"
                    style="font-size: 1.1rem; max-width: 580px; background-color: #ffffff; padding: 12px; border: 3px solid #000; box-shadow: 4px 4px 0px #ff3b30;">
                    Platform digital untuk mengelola peminjaman dan sirkulasi alat fitness member secara cepat, transparan, dan terstruktur.
                </p>

                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">

                    <a class="btn fw-bold px-4 py-3 rounded-0"
                        href="#fitur"
                        style="background-color: #ff3b30; color: #fff; border: 3px solid #fff; box-shadow: 5px 5px 0px #000; transition: transform 0.1s;"
                        onmousedown="this.style.transform='translate(2px, 2px)'; this.style.boxShadow='2px 2px 0px #000'"
                        onmouseup="this.style.transform='translate(0px, 0px)'; this.style.boxShadow='5px 5px 0px #000'">
                        🔥 JELAJAHI FITUR
                    </a>

                    <a class="btn fw-bold px-4 py-3 rounded-0"
                        href="https://github.com/indrabsus/sakuci-framework"
                        target="_blank"
                        style="background-color: #ffffff; color: #000; border: 3px solid #fff; box-shadow: 5px 5px 0px #ff3b30;"
                        onmousedown="this.style.transform='translate(2px, 2px)'; this.style.boxShadow='2px 2px 0px #ff3b30'"
                        onmouseup="this.style.transform='translate(0px, 0px)'; this.style.boxShadow='5px 5px 0px #ff3b30'">
                        🐙 GITHUB REPO
                    </a>

                </div>
            </div>

            <div class="col-lg-5">
                <div class="card rounded-0 p-4"
                    style="background-color: #1f1f1f; border: 4px solid #fff; box-shadow: 8px 8px 0px #ff3b30;">

                    <h6 class="text-uppercase fw-black mb-3 text-white"
                        style="font-size: 0.9rem; letter-spacing: 1px; font-weight: 900;">
                        🏋️‍♂️ STATISTIK FITNESS
                    </h6>

                    <div class="row g-3">

                        <div class="col-6">
                            <div class="p-3 rounded-0"
                                style="background-color: #ffffff; border: 3px solid #000; box-shadow: 4px 4px 0px #ff3b30;">
                                <h3 class="fw-black text-dark mb-0" style="font-weight: 900;">
                                    25+
                                </h3>
                                <small class="text-dark fw-bold" style="font-size: 0.75rem;">
                                    TOTAL ALAT
                                </small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="p-3 rounded-0"
                                style="background-color: #ff3b30; border: 3px solid #000; box-shadow: 4px 4px 0px #fff;">
                                <h3 class="fw-black text-white mb-0" style="font-weight: 900;">
                                    5
                                </h3>
                                <small class="text-white fw-bold" style="font-size: 0.75rem;">
                                    DIPINJAM
                                </small>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="p-3 rounded-0 d-flex align-items-center justify-content-between"
                                style="background-color: #ffffff; border: 3px solid #000; box-shadow: 4px 4px 0px #ff3b30;">

                                <div>
                                    <div class="fw-bold text-dark small">
                                        Sakuci Framework
                                    </div>

                                    <span class="text-muted" style="font-size: 0.75rem;">
                                        v1.0.0 Stable
                                    </span>
                                </div>

                                <span class="badge rounded-0 px-2 py-1 fw-bold"
                                    style="background-color: #28a745; color: #fff; border: 2px solid #000;">
                                    ONLINE
                                </span>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- Fitur --}}
<section class="container mb-5" id="fitur">

    <div class="mb-4 p-3 d-inline-block"
        style="background-color: #ff3b30; border: 3px solid #000; box-shadow: 4px 4px 0px #000;">

        <h3 class="fw-black text-white h4 mb-0" style="font-weight: 900;">
            ✨ FITUR UTAMA GYM
        </h3>

    </div>

    <div class="row g-4">

        {{-- Fitur 1 --}}
        <div class="col-md-4">
            <div class="card h-100 p-3 rounded-0 bg-dark"
                style="border: 4px solid #000; box-shadow: 6px 6px 0px #ff3b30;">

                <div class="card-body">

                    <div class="mb-3 h3 d-inline-block p-2"
                        style="background-color: #ff3b30; border: 3px solid #000; box-shadow: 3px 3px 0px #000;">

                        <i class="bi bi-shield-shaded text-white"></i>

                    </div>

                    <h5 class="fw-black text-white h6"
                        style="font-weight: 900;">
                        MANAJEMEN ALAT GYM
                    </h5>

                    <p class="text-white-50 small mb-0 fw-medium">
                        Pendataan inventaris alat fitness seperti dumbbell,
                        barbell, dan matras lengkap dengan status kelayakannya.
                    </p>

                </div>
            </div>
        </div>


        {{-- Fitur 2 --}}
        <div class="col-md-4">
            <div class="card h-100 p-3 rounded-0 bg-dark"
                style="border: 4px solid #000; box-shadow: 6px 6px 0px #ffc107;">

                <div class="card-body">

                    <div class="mb-3 h3 d-inline-block p-2"
                        style="background-color: #ffc107; border: 3px solid #000; box-shadow: 3px 3px 0px #000;">

                        <i class="bi bi-stopwatch text-dark"></i>

                    </div>

                    <h5 class="fw-black text-white h6"
                        style="font-weight: 900;">
                        PEMINJAMAN MEMBER
                    </h5>

                    <p class="text-white-50 small mb-0 fw-medium">
                        Pencatatan sirkulasi peminjaman alat fitness oleh member
                        secara real-time dan terhindar dari kehilangan.
                    </p>

                </div>
            </div>
        </div>


        {{-- Fitur 3 --}}
        <div class="col-md-4">
            <div class="card h-100 p-3 rounded-0 bg-dark"
                style="border: 4px solid #000; box-shadow: 6px 6px 0px #28a745;">

                <div class="card-body">

                    <div class="mb-3 h3 d-inline-block p-2"
                        style="background-color: #28a745; border: 3px solid #000; box-shadow: 3px 3px 0px #000;">

                        <i class="bi bi-code-square text-white"></i>

                    </div>

                    <h5 class="fw-black text-white h6"
                        style="font-weight: 900;">
                        ARSITEKTUR SAKUCI
                    </h5>

                    <p class="text-white-50 small mb-0 fw-medium">
                        Dibangun di atas kerangka kerja PHP OOP murni dengan
                        penerapan konsep MVC yang sangat terstruktur.
                    </p>

                </div>
            </div>
        </div>

    </div>
</section>

@endsection