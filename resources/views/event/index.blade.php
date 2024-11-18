@extends('layouts.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Events</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Events</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                {{-- <i class=""></i> --}}
                <a href="{{ route('index.create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Kegiatan</th>
                            <th>Deskripsi</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Lokasi</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Kegiatan</th>
                            <th>Deskripsi</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Lokasi</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($event as $e)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $e->nama_kegiatan }}</td>
                                <td>{{ $e->deskripsi }}</td>
                                <td>{{ $e->tanggal }}</td>
                                <td>{{ $e->waktu }}</td>
                                <td>{{ $e->lokasi }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-secondary">Daftar</a>
                                    <a href="{{ route('index.edit', $e->id_kegiatan) }}"
                                        class="btn btn-sm btn-warning">edit</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $e->id_kegiatan }}">
                                        hapus
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
