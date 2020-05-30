
    <div class="container" > 
        <div class="">
            <h1 class="display-4">Lista Personas</h1>
            <table class="table table-hover">
              <thead>
                <tr class="bg-primary" >
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido paterno</th>
                  <th scope="col">Apelllido materno</th>
                  <th scope="col">Estado de salud</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Ubicacion</th>
                  <th scope="col">Accion</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                    while ($row = mysqli_fetch_array($datos)) { ?>
                    <tr>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["apellido_paterno"]; ?></td>
                        <td><?php echo $row["apellido_materno"];   ?></td>
                        <td><?php echo $row["estado_salud"]; ?></td>
                        <td><?php echo $row["telefono"]; ?></td>
                        <td><?php echo $row["ubicacion"]; ?></td>
                        <td> 
                            <a class="btn btn-warning" href="<?php echo URL ;?>persona/editar/<?php echo $row["id"]; ?>">editar </a> 
                            <a class="btn btn-warning">detalle<?php  ?></a> 
                            <a class="btn btn-warning">eliminar<?php  ?></a> 
                        </td>
                    </tr>
                  <?php } ?>
              </tbody>
            </table> 
        </div>
    </div> 
    
