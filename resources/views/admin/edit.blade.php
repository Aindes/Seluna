@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Data Tone Kulit</h2>
        <form action="{{ route('admin.update', $toneKulit->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $toneKulit->nama }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endsection
