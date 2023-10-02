<div class="card text-rigth">
  <div class="card-header text-center">
      <h4 class="card-title"><?= $title ?></h4>
  </div>
  <div class="card-body">
    <p><h5>Aqui se observa el contenido de un metodo de la clase coche</h5></p>
    <br>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                </tr>
            </thead>
            <tbody id="vehiculoTable">
            </tbody>
        </table>
    </div>
  </div>
  <div class="card-footer">
  </div>
</div>
<script>
    $(document).ready(function() {
        const vehiculo = <?= $vehiculo?>;
        let tr = "<tr><td>"+vehiculo.marca+"</td><td>"+vehiculo.modelo+"</td></tr>"
        $('#vehiculoTable').append(tr);
    });
</script>