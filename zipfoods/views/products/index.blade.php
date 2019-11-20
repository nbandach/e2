@extends('templates.master')

@section('head')
    <link href='css.index.css' rel='stylesheet'>
@endsection

@section('title')
All Products
@endsection

@section('content')
    
<h2>All products</h2>

@foreach ($products as $product)
  {{ $product ['name']}}
  <img src ="/images/products/{{ $product['id']}}.jpg"
@endforeach 

@endsection