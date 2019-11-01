@extends('layout.app')

@section('content')
<div class="jumbotron">
    <h1>Data Minyak</h1>
    @if(count($posts) > 0)
    <table class ="table table-bordered">
            <trs>
            <th width="100px">Nama</th>
            <th width="100px">Stok</th>
            <th width="200px">Tanggal Produksi</th>
            <th width="200px">Tanggal Distribusi</th>
            <th width="100px">Kode Jenis Minyak</th>
            <th>Aksi</th>
            </tr>    
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->nama}}</td>
            <td>{{ $post->stok}}</td>
            <td>{{ $post->tgl_produksi}}</td>
            <td>{{ $post->tgl_distribusi}}</td>
            <td>{{ $post->kode_jenis}}</td>
            <td><a class="btn btn-warning btn-sm" href="#">Edit</a>
            <a class="btn btn-danger btn-sm" href="#">Hapus</a></td>
        </tr>
        @endforeach
    </table>
    @else
        <p>Tidak Ada Data</p>
    @endif
</div>
@endsection
