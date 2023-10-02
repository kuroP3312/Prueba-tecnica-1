<div class="card text-rigth">
  <div class="card-header text-center">
      <h4 class="card-title"><?= $title ?></h4>
  </div>
  <div class="card-body">
    <p><h5>Haga click en el boton para ver el texto previamente cargado</h5></p>
    <br>
    <p id="texto"></p>
  </div>
  <div class="card-footer">
  <button type="button" class="btn btn-outline-success ml-auto" id="btn-ajax">Mostrar Texto</button>
  </div>
</div>
<script>
    $("#btn-ajax").click(function () {
        $.ajax({
            url: "<?= $baseUrl ?>HomeController/showTxt",
            method: "POST",
            success: function (response) {
                $("#texto").text( response);
                // Manejar la respuesta del servidor aquí
            },
            error: function (xhr, status, error) {
                // Manejar errores aquí
                console.error(error);
            }
        });
    });
</script>