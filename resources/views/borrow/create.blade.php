@extends('layout.layout')
@section('content')
<h1>Halaman create pinjam</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('borrow.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">

                <label class="form-label">
                    foto siswa
                </label>

                <input type="file"
                    name="image"
                    class="form-control"
                    accept="image/jpeg,image/png,image/jpg,image/webp">

                <small> Format: JPG, JPEG, PNG, WEBP. Maksimal 2 MB. </small>

            </div>
            <div class="mb-3">
                <label for="nama_siswa" class="form-label">nama siswa</label>
                <input type="string" class="form-control" name="nama_siswa" required>
            </div>

            <div class="mb-3">
                <label for="kelas" class="form-label">kelas</label>
                <input class="form-control" type="string" name="kelas" required>
            </div>
            <div class="mb-3">
                <label for="borrow_id" class="form-label">alat pinjam</label>
                <select name="borrow_id" class="form-control" required>
                    <option value="">Pilih alat</option>
                    @foreach ($readies as $ready)
                    <option value="{{ $ready->id_borrow }}">{{ $ready->nama_alat }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">tambahkan kelas</button>
            <a href="{{ route('borrow.index') }}" class="btn btn-outline-warning">kembali</a>
        </form>
    </div>
</div><!-- rehan12pplg2 -->
@endsection