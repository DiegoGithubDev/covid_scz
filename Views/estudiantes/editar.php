<?php $secciones = new Models\Seccion();
    $table_secciones=$secciones->listar();
?>
    <div class="container">
        <div class="card border-primary mb-3" style="max-width: 90%;">
            <div class="card-header"><legend>Editar Estudiante</legend></div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data" >
                  <fieldset>
                    <div class="form-group">
                      <fieldset disabled="">
                        <label class="control-label" for="disabledInput">Id</label>
                        <input name="input_id" value="<?php echo $datos["id"]; ?>" class="form-control" id="disabledInput" disabled="" type="text">
                      </fieldset>
                    </div>
                    <div class="form-group">
                        <img src="<?php echo URL . "Views" .DS ."template" . DS. "imagenes" . DS . $datos["imagen"]; ?>" class="img-thumbnail" width="50" height="50">
                        <input name="input_image" value="<?php echo $datos["imagen"]; ?>" class="form-control" id="disabledInput" disabled="" type="text">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="inputDefault">Nombre</label>
                      <input name="input_nombre" value="<?php echo $datos["nombre"]; ?>" class="form-control" id="inputDefault" type="text">
                      <small id="emailHelp" class="form-text text-muted">please do not enter unknow charateres</small>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="inputDefault">Edad</label>
                      <input name="input_edad" value="<?php echo $datos["edad"]; ?>"  class="form-control" placeholder="edad" id="inputDefault" type="text">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="inputDefault">Promedio</label>
                      <input name="input_promedio" value="<?php echo $datos["promedio"]; ?>" class="form-control" placeholder="promedio" id="inputDefault" type="text">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelect1">Selecionar Seccion</label>
                      <select name = "input_seccion" class="form-control" id="exampleSelect1">
                          <option value="<?php echo $datos["id_seccion"]; ?>" > <?php echo $datos["nombre_seccion"]; ?></option>
                        <?php while ( $row_seccion = mysqli_fetch_array($table_secciones) ) { 
                                if ($datos["id_seccion"] != $row_seccion["id"]) { ?>
                                    <option value="<?php echo $row_seccion["id"]; ?>"  >  <?php echo $row_seccion["nombre"]; ?> </option>                                
                                <?php  }?>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Seleccionar Imagen</label>
                      <!--<input name = "input_imagen" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" type="file"> -->
                      <input name ="input_imagen" type="file" id="img" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </fieldset>
                </form>
            </div>
        </div>
    </div>