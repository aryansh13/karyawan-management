@extends('layouts.app')

<div class="sidebar">
    <img src="https://via.placeholder.com/60" alt="User Avatar" class="avatar">
    <h4 class="text-center">Dashboard Karyawan</h4>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="bi bi-house-door"></i> Karyawan
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cuti') }}">
                <i class="bi bi-person"></i> Cuti
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('sisa_cuti') }}">
                <i class="bi bi-clock"></i> Sisa Cuti
            </a>
        </li>
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="nav-link">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </li>
    </ul>
</div>

@section('content')
    <div class="container">
        <div class="header">
            <h1>@yield('title', 'Daftar Sisa Cuti')</h1>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nomor Induk</th>
                    <th>Nama</th>
                    <th>Sisa Cuti</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sisa_cuti_list as $item)
                    <tr>
                        <td>{{ $item['nomor_induk'] }}</td>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['sisa_cuti'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
