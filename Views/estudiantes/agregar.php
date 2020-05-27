<?php $secciones = new Models\Seccion();
    $table_secciones=$secciones->listar();
?>
    <div class="container">
        <div class="card border-primary mb-3" style="max-width: 90%;">
            <div class="card-header"><legend>Crear Estudiante</legend></div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data" >
                    <span style="color:red;font-weight:bold"><?php echo (isset($_GET["msg_error"]))? $_GET["msg_error"]:"";?></span>
                  <fieldset>
                    <div class="form-group">
                        <label id ="label_image" for="input_imagen" class="btn btn-primary" >Insertar imagen</label>
                        <input id="input_imagen" style="display:contents" onchange="readURL(this);" name ="input_imagen" type="file" accept="image/*">
                        <img  id="blah" class="img-thumbnail" width="70" height="70">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="inputDefault">Nombre</label>
                      <input name="input_nombre" class="form-control" id="inputDefault" type="text">
                      <small id="emailHelp" class="form-text text-muted">please do not enter unknow charateres</small>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="inputDefault">Edad</label>
                      <input name="input_edad"   class="form-control" placeholder="edad" id="inputDefault" type="text">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="inputDefault">Promedio</label>
                      <input name="input_promedio" class="form-control" placeholder="promedio" id="inputDefault" type="text">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelect1">Selecionar Seccion</label>
                      <select name = "input_seccion" class="form-control" id="exampleSelect1">
                          <option value=""> </option>
                          <?php while ( $row_seccion = mysqli_fetch_array($table_secciones) ) { 
                                if ($datos["id_seccion"] != $row_seccion["id"]) { ?>
                                    <option value="<?php echo $row_seccion["id"]; ?>"  >  <?php echo $row_seccion["nombre"]; ?> </option>                                
                                <?php  }?>
                        <?php } ?>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                  </fieldset>
                </form>
            </div>
        </div>
    </div>
<script>
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                    $('#label_image').hide();  
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>