@extends('layouts.app')

@section('title', 'Profil Petugas')

@section('content')
<h2 style="color: #1e3a8a; margin-bottom: 20px;">Profil Petugas Active</h2>

<div style="margin-bottom: 25px;">
    <table style="width: 100%; border-collapse: collapse;">
        <tr style="border-bottom: 1px solid #e2e8f0;">
            <td style="padding: 12px 0; font-weight: bold; width: 250px;">Nama Petugas</td>
            <td style="padding: 12px 0;">: {{ $user->name }}</td>
        </tr>
        <tr style="border-bottom: 1px solid #e2e8f0;">
            <td style="padding: 12px 0; font-weight: bold;">Email</td>
            <td style="padding: 12px 0;">: {{ $user->email }}</td>
        </tr>
        <tr style="border-bottom: 1px solid #e2e8f0;">
            <td style="padding: 12px 0; font-weight: bold;">Akun Dibuat Pada</td>
            <td style="padding: 12px 0;">: {{ $user->created_at->format('d F Y, H:i') }} WIB</td>
        </tr>
    </table>
</div>

<a href="{{ route('lapor.index') }}" class="btn">Kembali ke Daftar Laporan</a>
@endsection