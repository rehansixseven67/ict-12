@extends('layout.layout')
@section('content')
<a href="{{ route('ready.create') }}" class="btn btn-primary ms-auto mb-2">Tambah alat ada</a>
<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">alat yang ada</h5>
            <form class="ms-auto position-relative">
                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                <input class="form-control ps-5" type="text" placeholder="search">
            </form>
        </div>
        <div class="table-responsive mt-3">
            <table class="table align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th>id</th>
                        <th>foto</th>
                        <th>Nama alat</th>
                        <th>jumlah</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($readies as $ready)
                    <tr>
                        <td>{{ $ready->id_borrow }}</td>
                        <td>
                            <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="{{ asset('storage/' . $ready->image) }}"
                                    class="rounded"
                                    width="100"
                                    height="100"
                                    alt="{{ $ready->nama_alat }}">
                            </div>
                        </td>
                        <td>{{ $ready->nama_alat }}</td>
                        <td>{{ $ready->jumlah }}</td>
                        <td>
                            <span class="badge bg-success">Tersedia</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                                <!-- <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a> -->
                                <a href="{{ route('ready.edit', $ready->id_borrow) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                <form action="{{ route('ready.destroy', $ready->id_borrow) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-danger border-0 bg-transparent" onclick="return confirm('Hapus data?')">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- rehan12pplg2 -->
@endsection