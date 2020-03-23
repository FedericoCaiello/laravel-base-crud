<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{route('candies.store')}}" method="post">
        @csrf
        <input type="text" name="isbn" value="" placeholder="isbn">
        <input type="text" name="price" value="" placeholder="price">
        <input type="text" name="genre" value="" placeholder="genre">
        <input type="text" name="name" value="" placeholder="name">
        <input type="text" name="color" value="" placeholder="color">

        <button type="submit" name="button">Salva</button>

        @method('POST')
    </form>
  </body>
</html>
