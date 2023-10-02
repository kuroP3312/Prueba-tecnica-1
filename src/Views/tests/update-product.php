<div class="card text-rigth">
  <div class="card-header text-center">
      <h4 class="card-title"><?= $title ?></h4>
  </div>
  <div class="card-body">
    <div class="mb-3">
      <label for="" class="form-label">Nombre del producto</label>
      <input type="text"
        class="form-control" name="product" id="productName" placeholder="Ingresa el nombre del producto">
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody id="productsTable">
            </tbody>
        </table>
    </div>
  </div>
  <div class="card-footer">
  <button type="button" class="btn btn-outline-success ml-auto" id="btn-ajax">Actualizar producto</button>
  </div>
</div>
<script>
    $(document).ready(function() {
        const products = <?= $products?>;
        products.forEach(element => {
            let tr = "<tr><td>"+element.id+"</td><td>"+element.nombre+"</td></tr>"
            $('#productsTable').append(tr);
        });
    });
    $("#btn-ajax").click(function () {
        $.ajax({
            url: "<?= $baseUrl ?>HomeController/execUpdateProduct",
            method: "POST",
            dataType: "json", 
            data: {
                productName: $("#productName").val(),
            },
            success: function (response) {
                window.location.reload();
            },
            error: function (xhr, status, error) {
                // Manejar errores aquí
                console.error(error);
            }
        });
    });
</script>