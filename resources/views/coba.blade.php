@extends('template')

@section('main')
    <h2>Ini halaman coba</h2>

    <?php for ($i=1; $i <= 3 ; $i++) {  ?>
        <h1>ini perulangan</h1>
    <?php } ?> 

    @for ($i=1; $i <= 10 ; $i++)
        @if ($i % 2)
            <h1>ini menggunakan blade php</h1>
        @endif
    @endfor

    @php
        $no = 5;
        echo $no;
    @endphp
    
    <img src="{{ asset('img/banner.webp') }}" width="30%">
@endsection
