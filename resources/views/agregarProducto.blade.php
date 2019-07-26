<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar producto</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <form class="" action="/agregarProducto" method="post">
          @csrf
      <label for="">Nombre:</label>
      <input type="text" name="name" value="">

      <label for="">Descripcion:</label>
      <input type="text" name="description" value="">

      <label for="">Precio:</label>
      <input type="number" name="price" value="">

      <label for="">Imagen:</label>
      <input type="file" name="image" value="">

      <button type="submit" name="button">Ingresar</button>

    </form>
  </body>
</html>
