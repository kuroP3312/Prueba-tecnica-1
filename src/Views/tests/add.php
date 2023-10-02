<div class="card text-rigth">
  <div class="card-header text-center">
      <h4 class="card-title"><?= $title ?></h4>
  </div>
  <div class="card-body">
    <div class="mb-3">
      <label for="" class="form-label">Numero 1</label>
      <input type="number"
        class="form-control" name="number1" id="number1" placeholder="Ingresa tu primer numero">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Numero 2</label>
      <input type="number"
        class="form-control" name="number2" id="number2" placeholder="Ingresa tu segundo numero">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Resultado</label>
      <input type="text"
        class="form-control" name="result" id="result" disabled placeholder="Aqui veras tu resultado">
    </div>
  </div>
  <div class="card-footer">
  <button type="button" class="btn btn-outline-success ml-auto" id="btn-ajax">Sumar</button>
  </div>
</div>
<script>
    $("#btn-ajax").click(function () {
        if($("#number1").val() && $("#number2").val()){
            $.ajax({
                url: "<?= $baseUrl ?>HomeController/plusNumber",
                method: "POST",
                data: {
                    number1: $("#number1").val(),
                    number2: $("#number2").val()
                },
                success: function (response) {
                    $("#result").val(response)
                },
                error: function (xhr, status, error) {
                    // Manejar errores aquí
                    console.error(error);
                }
            });
        }else{
            $("#result").val("Ingresa todos los campos")
        }
    });
</script>