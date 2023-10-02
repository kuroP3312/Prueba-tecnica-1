<!doctype html>
<html lang="en">
    
<head>
  <title>Prueba1</title>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body style="background-image: url('<?= $baseUrl ?>public/images/code.jpg')">

  <header>
   
  </header>
  <nav class="navbar navbar-expand navbar-light bg-light">
      <ul class="nav navbar-nav">
          <li class="nav-item">
              <a class="nav-link active" href="<?= $baseUrl ?>HomeController/index" aria-current="page">Prueba Tecnica - PHP<span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ejercicios parte 1
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $baseUrl ?>HomeController/helloWorld">Hola mundo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $baseUrl ?>HomeController/add">Sumar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $baseUrl ?>HomeController/selectRecords">Seleccionar registros >= 18</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $baseUrl ?>HomeController/travelArray">Recorrer array</a>
                </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ejercicios parte 2
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $baseUrl ?>HomeController/diferenceVariables">Diferencia entre variables locales y globales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $baseUrl ?>HomeController/readTxt">Leer contenido de txt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $baseUrl ?>HomeController/updateProduct">Actualizar Nombre de producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $baseUrl ?>HomeController/cars">Coches</a>
                </li>
            </ul>
          </li>
      </ul>
  </nav>
  <br><br>
  <main class="container">