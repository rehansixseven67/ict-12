@extends('layout.layout')
@section('content')
<a href="{{ route('broken.create') }}" class="btn btn-sm btn-outline-primary ms-auto mb-2">tambah alat rusak</a>
<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">Daftar Alat Rusak</h5>
            <form class="ms-auto position-relative">
                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                <input class="form-control ps-5" type="text" placeholder="search">
            </form>
        </div>
        <div class="table-responsive mt-3">
            <table class="table align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>id</th>
                        <th>foto</th>
                        <th>nama</th>
                        <th>deskripsi</th>
                        <th>status</th>
                        <th>actions</th>
                    </tr>
                    <!-- rehan12pplg2 -->
                </thead>
                <tbody>
                    @foreach ($brokens as $broken)
                    <tr>
                        <td>{{ $broken->id }}</td>
                        <td>
                            <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="{{ asset('storage/' . $broken->image) }}"
                                    class="rounded"
                                    width="100"
                                    height="100"
                                    alt="{{ $broken->nama_alat }}">
                            </div>
                        </td>
                        <td>{{ $broken->nama_alat }}</td>
                        <td>{{ $broken->deskripsi }}</td>
                        <td>
                            <span class="badge bg-light-{{ $broken->status === 'rusak' ? 'danger' : 'warning' }} text-{{ $broken->status === 'rusak' ? 'danger' : 'warning' }} w-100">
                                {{ ucfirst($broken->status) }}
                            </span>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('broken.edit', $broken->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('broken.destroy', $broken->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus data?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>@endsection