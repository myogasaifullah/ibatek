@extends('layouts.app')

@section('title', 'Tambah Admin')
@section('page-heading', 'Tambah Admin')

@section('content')
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-body">
            <h2 class="h4 text-dark">Tambah Admin Baru</h2>

            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <input type="hidden" name="role" value="admin">

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
