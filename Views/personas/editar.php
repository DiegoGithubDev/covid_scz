<div class="container">
    <div class="card border-primary mb-3" style="max-width: 90%;">
        <div class="card-header"><legend>Editar Persona</legend></div>
        <div class="card-body">
            <form method="post" >
                <span style="color:red;font-weight:bold"></span>
                   <fieldset>
                    <div class="form-group">
                        <label class="col-form-label" for="input_id">id</label>
                        <input name="input_id" disabled="" value="<?php echo $datos['id']?>"class="form-control" id="input_id" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="input_nombre">Nombre</label>
                        <input name="input_nombre" value="<?php echo $datos['nombre']?>" class="form-control" id="id_input_nombre" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="input_apellido_paterno">Apellido Paterno</label>
                        <input name="input_apellido_paterno" value="<?php echo $datos['apellido_paterno']?>" class="form-control" id="input_apellido_paterno" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="input_apellido_materno">Apellido Materno</label>
                        <input name="input_apellido_materno" value="<?php echo $datos['apellido_materno']?>" class="form-control" id="input_apellido_materno" type="text">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1">Estado de salud</label>
                        <select name = "input_estado_salud" class="form-control" id="exampleSelect1">
                            <option value="<?php $datos['estado_salud']?>" ><?php echo $datos['estado_salud']?></option>
                            <option value="<?php echo ($datos['estado_salud']=='sano')?'enfermo':'sano';?>" ><?php echo ($datos['estado_salud']=='sano')?'enfermo':'sano';?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="input_telefono">Telefono</label>
                        <input name="input_telefono" value="<?php echo $datos['telefono']?>"  class="form-control" id="input_telefono" type="text">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="input_ubicacion">Ubicacion</label>
                        <input name="input_ubicacion"  value="<?php echo $datos['ubicacion']?>" class="form-control" id="input_ubicacion" type="text">
                    </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>