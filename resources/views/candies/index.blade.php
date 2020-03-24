@extends('layouts.layout')
@section('header')
    <h1>Tutte le caramelle</h1>
@endsection
@section('main')
<div class="candies">
  @foreach ($candies as $candie)
    @dd($candies)
    <div class="candie">
      <ul>
        <li>Isbn: {{$candie->isbn}}</li>
        <li>Price: {{$candie->price}}</li>
        <li>Genre: {{$candie->genre}}</li>
        <li>Name: {{$candie->name}}</li>
        <li>Color: {{$candie->color}}</li>
      </ul>
    </div>
  @endforeach
</div>
@endsection
