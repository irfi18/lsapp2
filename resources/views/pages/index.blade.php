@extends('layout.app')

@section('content')
<div class="jumbotron">
        <h1>Data Minyak</h1>
        <p class="lead">
                @if(count($services) > 0)
                    <ul class = "list-group">
                        @foreach($services as $service)
                            <li class="list-group-item">
                                {{$service}}
                            </li>
                        @endforeach
                    </ul>
                @endif
        </p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
      </div>
@endsection
