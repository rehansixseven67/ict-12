@extends('layout.layout')
@section('content')
<h1>Tambah alat tersedia</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('ready.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_alat" class="form-label">Nama Alat</label>
                <input type="text" class="form-control" name="nama_alat" required>
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" name="jumlah" required>
            </div>

            <div class="mb-3">

                <label class="form-label">
                    foto alat ada
                </label>

                <input type="file"
                    name="image"
                    class="form-control"
                    accept="image/jpeg,image/png,image/jpg,image/webp">

                <small> Format: JPG, JPEG, PNG, WEBP. Maksimal 2 MB. </small>

            </div>
            <!-- <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" required>
                    <option value="">Pilih Status</option>
                    <option value="tersedia">Tersedia</option>
                    <option value="tidak_tersedia">Tidak Tersedia</option>
                </select>
            </div> -->
            <button type="submit" class="btn btn-primary">tambahkan alat tersedia</button>
            <a href="{{ route('ready.index') }}" class="btn btn-outline-warning">kembali</a>
        </form>
    </div>
</div>
@endsection
<!-- rehan12pplg2 -->