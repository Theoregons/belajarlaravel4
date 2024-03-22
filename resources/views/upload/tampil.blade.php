@extends('template')

@section('main')
<h2>File Upload </h2>
{{-- <a href="{{ url('siswa/create') }}" class="btn btn-primary" >Tambah Data</a> --}}
<form class="d-flex align-items-center" action="{{ route('gambar.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlFile1">Pilih Gambar</label>
      <input type="file" class="form-control-file" name="image">
    </div>
    <div>
        <button class="btn btn-success">Simpan</button>
    </div>
  </form>
<table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            {{-- <th scope="col">Action</th> --}}
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td><img src="{{ "storage/".$item->image }}" width=300 alt=""></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
