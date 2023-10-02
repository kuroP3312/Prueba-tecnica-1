<div class="card text-rigth">
  <div class="card-header text-center">
      <h4 class="card-title"><?= $title ?></h4>
  </div>
  <div class="card-body">
    <p><h5>Encontrar numeros pares de un arreglo</h5></p>
    <br>
    <div class="mb-3">
        <label for="numeros" class="form-label">Ingresa números separados por comas:</label>
        <input type="text" id="numeros" class="form-control" placeholder="Ejemplo: 2, 4, 6, 8" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57)|| event.charCode == 44)">
    </div>
    <div id="resultado"></div>
  </div>
  <div class="card-footer">
  <button type="button" class="btn btn-outline-success ml-auto" id="btn-ajax">Obtener pares</button>
  </div>
</div>

<script>
    $("#btn-ajax").click(function () {
        var numeros = $("#numeros").val().split(",").map(function (numero) {
            return parseInt(numero.trim());
        });

        $.ajax({
            url: "<?= $baseUrl ?>HomeController/mostrarEnterosPares",
            method: "POST",
            data: { numeros: numeros },
            dataType: "json",
            success: function (response) {
                if (response && response.pares) {
                    var resultado = response.pares.join(", ");
                    $("#resultado").text("Números pares: " + resultado);
                } else {
                    $("#resultado").text("No se encontraron números pares.");
                }
            },
            error: function (xhr, status, error) {
                // Manejar errores aquí
                console.error(error);
            }
        });
    });
</script>