@extends('layout.app')

@section('content')
<div class="jumbotron">
    <h1>Tambah Data Minyak</h1>
    {!! Form::open(['action' => 'PostsController@store2', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('kode_jenis','Kode Jenis')}}
            {{Form::text('kode_jenis','',['class'=>'form-control','placeholder'=>'Kode Jenis'])}}
            {{Form::label('nama','Nama')}}
            {{Form::text('nama','',['class'=>'form-control','placeholder'=>'Nama'])}}
            {{Form::label('keterangan','Keterangan')}}
            {{Form::textarea('keterangan','',['class'=>'form-control','placeholder'=>'Keterangan'])}}
            {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
</div>
@endsection
