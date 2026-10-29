@extends('layouts.app')

@section('title', 'Register Petugas')

@section('content')
<h2 style="color: #1e3a8a; margin-bottom: 20px;">Registrasi Petugas Baru</h2>

@if($errors->any())
    <div class="alert-error">
        <ul style="margin-left: 20px;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('register') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="name" value="{{ old('name') }}" required placeholder="Masukkan nama lengkap">
    </div>

    <div class="form-group">
        <label>Email Petugas</label>
        <input type="email" name="email" value="{{ old('email') }}" required placeholder="email@bpbd.bandungkab.go.id">
    </div>

    <div class="form-group">
        <label>Password (Min. 8 Karakter)</label>
        <input type="password" name="password" required placeholder="Minimal 8 karakter">
    </div>

    <div class="form-group">
        <label>Konfirmasi Password</label>
        <input type="password" name="password_confirmation" required placeholder="Ulangi password">
    </div>

    <button type="submit" class="btn">Daftar Akun</button>
</form>
@endsection