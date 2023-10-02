<div class="card text-rigth">
  <div class="card-header text-center">
      <h4 class="card-title"><?= $title ?></h4>
  </div>
  <div class="card-body">
    <p><h5>Para buscar los usuarios que sean mayores de edad da click en buscar</h5></p>
    <br>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                </tr>
            </thead>
            <tbody id="usersTable">
            </tbody>
        </table>
    </div>
  </div>
  <div class="card-footer">
  <button type="button" class="btn btn-outline-success ml-auto" id="btn-ajax">Buscar</button>
  </div>
</div>

<script>
    $("#btn-ajax").click(function () {
        $.ajax({
            url: "<?= $baseUrl ?>HomeController/searchUsers",
            method: "GET",
            dataType: "json", 
            success: function (response) {
                generateTable(response)
            },
            error: function (xhr, status, error) {
                // Manejar errores aquí
                console.error(error);
            }
        });
    });

    function generateTable(users){
        users.forEach(element => {
            let tr = "<tr><td>"+element.nombre+"</td><td>"+element.edad+"</td></tr>"
            $('#usersTable').append(tr);
        });
    }
</script>