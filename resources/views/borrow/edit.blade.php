@extends('layout.layout')
@section('content')
<h1>HALAMAN EDIT borrow</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('borrow.update', $borrow->id) }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">

                <label class="form-label">
                    foto siswa
                </label>
<!-- rehan12pplg2 -->
                <input type="file"
                    name="image"
                    class="form-control"
                    accept="image/jpeg,image/png,image/jpg,image/webp">

                <small> Format: JPG, JPEG, PNG, WEBP. Maksimal 2 MB. </small>

            </div>
            <div class="mb-3">
                <label for="nama_siswa" class="form-label">nama siswa</label>
                <input type="text" class="form-control" name="nama_siswa" value="{{ $borrow->nama_siswa }}" required>
            </div>

            <div class="mb-3">
                <label for="kelas" class="form-label">kelas</label>
                <input type="text" class="form-control" name="kelas" value="{{ $borrow->kelas }}" required>
            </div>
            <div class="mb-3">
                <label for="borrow_id" class="form-label">alat pinjam</label>
                <select name="borrow_id" class="form-control" required>
                    <option value="">Pilih alat</option>
                    @foreach ($readies as $ready)
                    <option value="{{ $ready->id_borrow }}"
                        {{ old('borrow_id', $borrow->borrow_id) == $ready->id_borrow ? 'selected' : '' }}>
                        {{ $ready->nama_alat }}
                    </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">edit pinjam</button>
            <a href="{{ route('borrow.index') }}" class="btn btn-outline-warning">kembali</a>
        </form>
    </div>
</div>
@endsection