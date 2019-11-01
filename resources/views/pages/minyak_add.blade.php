@extends('layout.app')

@section('content')
<div class="jumbotron">
    <h1>Tambah Data Minyak</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('nama','Nama')}}
            {{Form::text('nama','',['class'=>'form-control','placeholder'=>'Nama'])}}
            {{Form::label('stok','Stok')}}
            {{Form::number('stok','',['class'=>'form-control','placeholder'=>'Stok'])}}
            {{Form::label('tgl_produksi','Tanggal Produksi')}}
            {{Form::date('tgl_produksi','',['class'=>'form-control','placeholder'=>'Tanggal Produksi'])}}
            {{Form::label('tgl_distribusi','Tanggal Distribusi')}}
            {{Form::date('tgl_distribusi','',['class'=>'form-control','placeholder'=>'Tanggal Distribusi'])}}
            {{Form::label('kode_jenis','Kode Jenis Minyak')}}
            {{Form::text('kode_jenis','',['class'=>'form-control','placeholder'=>'Kode Jenis Minyak'])}}
            {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
</div>
@endsection
