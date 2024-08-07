<div class="card">
    <div class="card-header">
        Agregar usuario
    </div>
    <div class="card-body">

        <form action="" method="post">

        <div class="mb-3">

          <!-- name e id son atributos que se usan para idenftificar -->
          <label for="" class="form-label">Tipo de persona:</label>
          <select name="tipo_de_persona" id="tipo_de_persona" class="form-select" aria-label="Default select example" required>
            <option selected>Seleccione</option>
            <option value="CLTE">CLIENTE</option>
            <option value="EMP">EMPLEADO</option>
            <option value="PRV">PROVEEDOR</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Nombres completos:</label>
          <input type="text" 
          class="form-control" name="nombres_completos" id="nombres_completos" aria-describedby="helpId" placeholder="Escriba sus nombres completos" required>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Correo electrónico:</label>
          <input type="email" 
          class="form-control" name="correo_electronico" id="correo_electronico" aria-describedby="emailHelpId" placeholder="Correo del usuario">
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Teléfono de contacto:</label>
          <input type="text" 
          class="form-control" name="telefono_contacto" id="telefono_contacto" aria-describedby="helpId" placeholder="Digite el número">
        </div>
       
        <input name="" id="" class="btn btn-success" type="submit" value="Agregar usuario">

        <a href="?controlador=usuario&accion=inicio"  class="btn btn-primary">Cancelar </a>
        
        </form>

      </div>
    
</div>