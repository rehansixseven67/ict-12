@extends('layout.layout')
@section('content')
<a href="{{ route('borrow.create') }}" class="btn btn-primary ms-auto mb-2">Tambah Data pinjam</a>
<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">pinjam alat</h5>
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
                        <th>foto siswa</th>
                        <th>nama siswa</th>
                        <th>kelas</th>
                        <th>alat pinjam</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($borrows as $borrow)
                    <tr>
             <!-- rehan12pplg2 -->           <td>{{ $borrow->id }}</td> 
                        
                        <td>
                            <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="{{ asset('storage/' . $borrow->image) }}"
                                    class="rounded"
                                    width="100"
                                    height="100"
                                    alt="{{ $borrow->nama_alat }}">
                            </div>
                        </td>
                       <td>{{ $borrow->nama_siswa }}</td>
                        <td>{{ $borrow->kelas }}</td>
                        <td>{{ $borrow->ready?->nama_alat ?? '-' }}</td>
                        <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                                <a href="{{ route('borrow.edit', $borrow->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                <form action="{{ route('borrow.destroy', $borrow->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-danger border-0 bg-transparent"
                                        onclick="return confirm('Hapus data?')">
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
@endsection