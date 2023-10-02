<div class="card text-rigth">
  <div class="card-header text-center">
      <h4 class="card-title">Diferencias entre variables locales y globales de PHP</h4>
  </div>
  <div class="card-body">
    <p><h5>Explicacion personal sobre variables locales y globales en PHP</h5></p>
    <br>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Aspecto</th>
                    <th scope="col">Variable Local</th>
                    <th scope="col">Variable Global</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="col"><b>Alcance:</b></td>
                    <td scope="col">Teniendo en cuenta que las variables locales son aquellas que se definen y utilizan dentro de un funcion o metodo en especifico el alcance de las mismas se limita al lugar donde fueron definidas</td>
                    <td scope="col">A diferencia de las locales las globales se definen fuera de las funciones o metodos y pueden ser accedidas en cualquier parte del codigo</td>
                </tr>
                <tr>
                    <td scope="col"><b>Vida util:</b></td>
                    <td scope="col">Las variables locales viven unicamente en el tiempo de ejecucion de la funcion</td>
                    <td scope="col">Mientras que las globales viven hasta que finaliza el script o se elimina completamente</td>
                </tr>
            </tbody>
        </table>
    </div>
  </div>
  <div class="card-footer">
  <button type="button" class="btn btn-outline-success ml-auto" id="btn-ajax">Buscar</button>
  </div>
</div>