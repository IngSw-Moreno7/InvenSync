<div class="card">
    <div class="card-header">
        Editar usuario
    </div>
    <div class="card-body">

        <form action="" method="post">

        <div class="mb-3">
          <label for="id_persona" class="form-label"></label>
          <input readonly type="text"
            class="form-control" value="<?php echo $usuario->id_persona; ?>" name="id_persona" id="id_persona" aria-describedby="helpId" placeholder="ID usuario">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Tipo de persona:</label>
          <select name="tipo_de_persona" id="tipo_de_persona" class="form-select" value="<?php echo $usuario->tipo_de_persona; ?>" aria-label="Default select example">
            <option value="<?php echo $usuario->tipo_de_persona; ?>" selected><?php echo $usuario->tipo_de_persona; ?></option>
            <option value="CLTE">CLIENTE</option>
            <option value="EMP">EMPLEADO</option>
            <option value="PRV">PROVEEDOR</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Nombre completo:</label>
          <input type="text" 
            class="form-control" value="<?php echo $usuario->nombre_completo; ?>" name="nombre_completo" id="nombres_completos" aria-describedby="helpId" placeholder="Escriba sus nombres completos">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Correo electrónico:</label>
          <input type="email" 
            class="form-control" value="<?php echo $usuario->correo; ?>" name="correo" id="corre" aria-describedby="emailHelpId" placeholder="Correo del usuario">
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Teléfono de contacto:</label>
          <input type="text" 
            class="form-control" value="<?php echo $usuario->telefono; ?>" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Digite el numero">
        </div>

        <input name="" id="" class="btn btn-success" type="submit" value="Editar usuario">
        <a href="?controlador=usuario&accion=inicio"  class="btn btn-primary">Cancelar </a>
        
        </form>

      </div>
    
</div>