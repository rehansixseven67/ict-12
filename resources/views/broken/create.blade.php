@extends('layout.layout')
@section('content')
<h1>Tambah alat rusak</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('broken.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif -->
            <div class="mb-3">
                <label for="nama_alat" class="form-label">Nama Alat</label>
                <input type="text" class="form-control" name="nama_alat" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" required>
            </div>

            <div class="mb-3">

                <label class="form-label">
                    foto alat rusak
                </label>

                <input type="file"
                    name="image"
                    class="form-control"
                    accept="image/jpeg,image/png,image/jpg,image/webp">

                <small> Format: JPG, JPEG, PNG, WEBP. Maksimal 2 MB. </small>

            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" required>
                    <option value="">Pilih Status</option>
                    <option value="rusak">Rusak</option>
                    <option value="perbaikan">Diperbaiki</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">tambahkan alat rusak</button>
            <a href="{{ route('broken.index') }}" class="btn btn-outline-warning">kembali</a>
        </form>
    </div>
</div>
<!-- rehan12pplg2 -->
@endsection