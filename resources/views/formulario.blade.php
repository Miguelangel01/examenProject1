<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario en laravel</title>
        <meta name="description" content="formulario en laravel">
        <meta name="author" content="Luis G">
        <link rel="stylesheet" href="/css/app.css">
    </head>
<body>
<div class="container">
<div class="col-sm-8">
<h1>Formulario en laravel</h1>
<form action="/guardar" method="POST">
  
  <div class="form-group row">
    <label for="inputtitulo" class="col-sm-2 col-form-label">Titulo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputtitulo">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputingredientes" class="col-sm-2 col-form-label">Ingredientes</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputingredientes">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputpreparacion" class="col-sm-2 col-form-label">Preparacion</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputpreparacion">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>
</div>
</div>
<script src="/js/app.js"></script>
</body>
</html>