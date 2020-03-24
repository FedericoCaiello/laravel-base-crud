@extends('layouts.layout')
@section('header')
  <h1>Iserisci un tipo di caramella</h1>
  @if ($errors->any())
     <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
           @endforeach
        </ul>
      </div>
  @endif

 @endsection
 @section('main')
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{(!empty($candie)) ? route('candies.update') : route('candies.store')}}" method="post">
      @csrf
      <input type="text" name="isbn" value="" placeholder="isbn" value="{{(!empty($candie)) ? $candie->isbn : ''}}">
      <input type="text" name="price" value="" placeholder="price" value="{{(!empty($candie)) ? $candie->price : ''}}">
      <input type="text" name="genre" value="" placeholder="genre" value="{{(!empty($candie)) ? $candie->genre : ''}}">
      <input type="text" name="name" value="" placeholder="name" value="{{(!empty($candie)) ? $candie->name : ''}}">
      <input type="text" name="color" value="" placeholder="color" value="{{(!empty($candie)) ? $candie->color : ''}}">

      <button type="submit" name="button">Salva</button>

      @method('POST')
    </form>
  </body>
  </html>

 @endsection 
