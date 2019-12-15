@extends('templates.master')

@section('title')
    Game history
@endsection

@section('content')
<h2>Game history</h2> 

<ul>
@foreach($history as $elem)
<li>{{ $elem ['roundtime']}}</li>
@endforeach
</ul>

@endsection