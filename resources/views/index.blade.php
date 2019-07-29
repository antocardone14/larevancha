<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mi inicio</title>
  </head>
  <body>
  @foreach ($products as $product)
    <article class="miProducto">
      <!-- esto redirecciona al producto individual -->
      <div class="">
      <a href="#">
            <img src="/storage/productos/{{$product->image}}" alt="">
        </div>
        <div class="">
            <h3>{{$product->name}}</h3>
        </div>
      </a>

    </article>
  @endforeach
  </body>
</html>
