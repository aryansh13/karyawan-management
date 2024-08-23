@extends('layouts.app')

<div class="sidebar">
    <img src="https://via.placeholder.com/60" alt="User Avatar" class="avatar">
    <h4 class="text-center">Dashboard Karyawan</h4>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('dashboard') }}">
                <i class="bi bi-house-door"></i> Karyawan
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cuti') }}">
                <i class="bi bi-person"></i> Cuti
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('sisa_cuti') }}">
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
            <h1>@yield('title', 'Daftar Karyawan')</h1>
            <a href="#" class="btn-custom text-decoration-none" data-toggle="modal" data-target="#addModal"> + Add New</a>
        </div>
        <div class="d-flex mb-3">
            <button id="filterKaryawanBaru" class="btn btn-info mr-2">Filter Karyawan Baru</button>
            <button id="resetFilter" class="btn btn-secondary">Reset</button>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nomor Induk</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Tanggal Bergabung</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="karyawanTableBody">
                @foreach ($karyawan as $k)
                    <tr>
                        <td>{{ $k->nomor_induk }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->alamat }}</td>
                        <td>{{ $k->tanggal_lahir }}</td>
                        <td>{{ $k->tanggal_bergabung }}</td>
                        <td>
                            <a href="#" class="btn btn-primary view-details" data-toggle="modal"
                                data-target="#lihatModal" data-id="{{ $k->nomor_induk }}">Lihat</a>
                            <a href="#" class="btn btn-warning edit-employee" data-toggle="modal" data-target="#editModal" data-id="{{ $k->nomor_induk }}">Edit</a>
                            <form action="#" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Buttons -->
        <div class="pagination">
            @if ($karyawan->previousPageUrl())
                <a href="{{ $karyawan->previousPageUrl() }}" class="btn btn-primary">
                    << Previous</a>
            @endif

            @if ($karyawan->nextPageUrl())
                <a href="{{ $karyawan->nextPageUrl() }}" class="btn btn-primary">Next >> </a>
            @endif
        </div>

        @include('crud.showModal')
        @include('crud.createModal')
        @include('crud.editModal')
    </div>

    <script>
        // Filter Karyawan Baru
        document.getElementById('filterKaryawanBaru').addEventListener('click', function() {
            fetch('{{ route('karyawanBaru') }}')
                .then(response => response.json())
                .then(data => {
                    let tbody = document.getElementById('karyawanTableBody');
                    tbody.innerHTML = ''; // Kosongkan tabel sebelum mengisi data baru
                    
                    data.forEach(k => {
                        let row = `
                            <tr>
                                <td>${k.nomor_induk}</td>
                                <td>${k.nama}</td>
                                <td>${k.alamat}</td>
                                <td>${k.tanggal_lahir}</td>
                                <td>${k.tanggal_bergabung}</td>
                                <td>
                                    <a href="#" class="btn btn-primary view-details" data-toggle="modal"
                                        data-target="#lihatModal" data-id="${k.nomor_induk}">Lihat</a>
                                    <a href="#" class="btn btn-warning edit-employee" data-toggle="modal" data-target="#editModal" data-id="${k.nomor_induk}">Edit</a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        `;
                        tbody.insertAdjacentHTML('beforeend', row);
                    });
                });
        });

        // Reset Filter
        document.getElementById('resetFilter').addEventListener('click', function() {
            location.reload(); // Muat ulang halaman untuk mengembalikan tampilan awal
        });
    </script>
@endsection
