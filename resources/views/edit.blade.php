@extends('template')
@section('main')
    <h2>Edit Data Siswa</h2>
    <form action="{{ route('siswa.update', $data->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleInputEmail1">Nis</label>
            <input type="number" class="form-control @error('nis') is-invalid @enderror " name="nis" value="{{ $data->nis }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"  value="{{ $data->nama }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"  value="{{ $data->alamat }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
