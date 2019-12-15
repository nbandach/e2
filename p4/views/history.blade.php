@extends('templates.master')

@section('title')
    Game history
@endsection

@section('content')
<h2>Game history</h2> 

<ul>
@foreach($history as $elem)
<li><a href='/details?id={{ $elem['id']}}'>{{$elem['roundtime']}}</a></li>
@endforeach
</ul>

@endsection