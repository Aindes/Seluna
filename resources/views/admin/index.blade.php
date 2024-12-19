@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Data Tone Kulit</h2>
        <a href="{{ route('admin.create') }}" class="btn btn-primary">Tambah Data</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($toneKulit as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>
                            <a href="{{ route('admin.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
