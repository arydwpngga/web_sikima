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
                    <thead></thead>
                </table>
            </div>
        </div>
    </div>
@endsection
