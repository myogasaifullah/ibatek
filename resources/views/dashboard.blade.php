@extends('layouts.app')

@section('title', 'Dashboard - Admin IBATEK')
@section('page-heading', 'Statistik Situs')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-9">
            <div class="row">
                {{-- Statistik Total Pengguna --}}
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Total Pengguna</h6>
                                    <h6 class="font-extrabold mb-0">{{ $totalUsers }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Statistik Total Organisasi --}}
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Total Organisasi</h6>
                                    <h6 class="font-extrabold mb-0">{{ $totalOrganizations }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Statistik Total Fakultas --}}
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Total Fakultas</h6>
                                    <h6 class="font-extrabold mb-0">{{ $totalFakultas }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Statistik Total Prodi --}}
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldDocument"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Total Prodi</h6>
                                    <h6 class="font-extrabold mb-0">{{ $totalProdi }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Bagian Aktivitas Terbaru dengan placeholder --}}
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Aktivitas Terbaru</h4>
                        </div>
                        <div class="card-body">
                            {{-- Placeholder untuk chart/grafik --}}
                            <p class="text-muted text-center">Data aktivitas terbaru akan muncul di sini.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Sidebar kanan dashboard --}}
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            {{-- Ganti path gambar statis dengan asset() --}}
                            <img src="{{ asset('build/assets/images/faces/1.jpg') }}" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            {{-- Ganti nama statis dengan nama user yang sedang login --}}
                            <h5 class="font-bold">Selamat Datang, {{ Auth::user()->name }}!</h5>
                            <h6 class="text-muted mb-0">({{ Auth::user()->role }})</h6>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bagian ini akan menjadi tempat notifikasi real-time --}}
            <div class="card">
                <div class="card-header">
                    <h4>Notifikasi</h4>
                </div>
                <div class="card-content pb-4">
                    <div class="recent-message d-flex px-4 py-3">
                        <p class="text-muted mb-0">Belum ada notifikasi baru.</p>
                    </div>
                </div>
            </div>
            
            {{-- Placeholder untuk Profil Pengunjung --}}
            <div class="card">
                <div class="card-header">
                    <h4>Profil Pengunjung</h4>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
