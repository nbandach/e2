@extends('templates.master')

@section('title')
    {{ $app->config('app.name')}}
@endsection

@section('content')
<h2>Create a new post</h2> 
    <form>
        <label>Title: <input type='text'></label>
        <label>Content: <textarea></textarea></label>
        <button type='submit'>Create new post</button>
    </form>

@endsection