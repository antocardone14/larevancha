<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css">
    <title>Mi inicio</title>
  </head>
  <body>
    <header>
      <div class="logo">
    <a href="#">  <img src="img/icons/LogoMobile.png" alt=""> </a>
      </div>
    <div class="iconos">
    <a href="#">  <img src="img/icons/LogInRegister.png" alt=""> </a>
    <a href="#">  <img src="img/icons/BolsaDeCompra.png" alt=""> </a>
    </div>

      <div class="menuHeader">
      <ul id="menu">
          <a href="#"><li>INICIO</li></a>
          <a href="#"><li>CATEGORIAS</li></a>
          <a href="#"><li>CONTACTO</li></a>
          <a href="#"><li>PREGUNTAS FRECUENTES</li></a>
      </ul>
    </div>


    </header>


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

  <footer>


  </footer>
   <div class="copyright">
      <p>Copyright 2019</p>
   </div>

  </body>
</html>
