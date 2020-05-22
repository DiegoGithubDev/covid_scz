
    <div class="container" > 
        <div class="">
            <h1 class="display-4">Lista de Estuiantes</h1>
            <table class="table table-hover">
              <thead>
                <tr class="bg-primary" >
                  <th scope="col">Imagen</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Edad</th>
                  <th scope="col">Promedio</th>
                </tr>
              </thead>
              <tbody>
                  <?php $datos=$estudiantes->index();
                    while ($row = mysqli_fetch_array($datos)) { ?>
                    <tr>
                        <td><?php echo $row["imagen"]; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["edad"];   ?></td>
                        <td><?php echo $row["promedio"]; ?></td>
                    </tr>
                  <?php } ?>
              </tbody>
            </table> 
        </div>
    </div> 
    
