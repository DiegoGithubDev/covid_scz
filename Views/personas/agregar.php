 <div class="container">
        <div class="card border-primary mb-3" style="max-width: 90%;">
            <div class="card-header"><legend>Registrar Persona</legend></div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data" >
                    <span style="color:red;font-weight:bold"></span>
                  <fieldset>
                    <div class="form-group">
                      <label class="col-form-label" for="id_input_nombre">Nombre</label>
                      <input name="input_nombre" class="form-control" id="id_input_nombre" type="text">
                      <small id="emailHelp" class="form-text text-muted">please do not enter unknow charateres</small>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="input_apellido_paterno">Apellido Paterno</label>
                      <input name="input_apellido_paterno" class="form-control" id="input_apellido_paterno" type="text">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelect1">Estado de salud</label>
                      <select name = "input_estado_salud" class="form-control" id="exampleSelect1">
                          <option value="enfermo" >sano</option>
                          <option value="recuperado" >enfermo de covid</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="input_telefono">Telefono</label>
                      <input name="input_telefono" class="form-control" id="input_telefono" type="text">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="input_ubicacion">Ubicacion</label>
                      <input name="input_ubicacion" class="form-control" id="input_ubicacion" type="text">
                    </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                  </fieldset>
                </form>
            </div>
        </div>
    </div>