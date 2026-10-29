@extends('layouts.app')

@section('title', 'Login Petugas')

@section('content')
<h2 style="color: #1e3a8a; margin-bottom: 20px;">Login Petugas BPBD</h2>

@if($errors->any())
    <div class="alert-error">
        {{ $errors->first() }}
    </div>
@endif

<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Email Petugas</label>
        <input type="email" name="email" value="{{ old('email') }}" required placeholder="Masukkan email petugas">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" required placeholder="Masukkan password">
    </div>

    <button type="submit" class="btn">Masuk</button>
</form>
@endsection