<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Borrar Producto</title>
  </head>
  <body>
    <form class="" action="" method="post">

      @csrf
      <label for="">Id:</label>
      <input type="hidden" name="id" value="{{$products->id}}">   

      <label for="">Producto:</label>
      <input type="text" name="name" value="{{$products->name}}">

      <input type="submit" name="" value="delete">

    </form>
  </body>
</html>
