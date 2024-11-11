@extends('layouts.app', ['title' => 'Data Kelompok 6'])
@section('content')
<div class="card">
    <h2 class="card-header">Data Kelompok 6</h2>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Anggota</th>
                    <th>NIM</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->no_pasien }}</td>
                    <td>
                        @if($item->foto)
                            <a href="{{  \Storage::url($item->foto) }}" target="blank">
                                <img src="{{ \Storage::url($item->foto) }}" width="50" />
                            </a>
                        @endif
                        {{ $item->nama }}
                    </td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <a href="/pasien/ {{ $item->id }}/edit" class="btn btn-warning btn-sm ml-2">Edit</a>
                        <form action="/pasien/{{ $item->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm ml-2"
                            onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $pasien->links() !!}
    </div>
</div>
@endsection
