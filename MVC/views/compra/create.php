<div class="card">
    <div class="card-header">
        Agregar compra
    </div>
    <div class="card-body">

        <form action="" method="post">
          

        <div class="mb-3">
          <label for="" class="form-label">Codigo cliente:</label>
          <input type="text" 
          class="form-control" name="codigo_cliente" id="codigo_cliente" aria-describedby="helpId" placeholder="Digite su numero de documento" required>
        </div>
          
        <div class="mb-3">
          <label for="" class="form-label">Tipo de cliente:</label>
          <select name="tipo_cliente" id="tipo_cliente" class="form-select" aria-label="Default select example" required>
            <option selected>Seleccione</option>
            <option value="CLTE-FRCT">CLIENTE FRECUENTE</option>
            <option value="CLTE-HBT">CLIENTE HABITUAL</option>
            <option value="CLTE-REG">CLIENTE REGULAR</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Nombre completo:</label>
          <input type="text" 
          class="form-control" name="nombre_completo" id="nombre_completo" aria-describedby="helpId" placeholder="Escriba su nombres completo" required>
        </div>

        <?php         
        date_default_timezone_set('America/Bogota');
        $fecha_actual=date("Y-m-d H:i:s");
        ?>
        <div class="mb-3">
          <label for="" class="form-label">Fecha de compra:</label>
          <input type="datetime" class="form-control" name="fecha_de_compra" value="<?= $fecha_actual?>" >
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Valor total:</label>
          <input type="text" 
          class="form-control" name="valor_total" id="valor_total" aria-describedby="helpId" placeholder="Escriba el valor correspondiente" required>
        </div>
              
        <input name="" id="" class="btn btn-success" type="submit" value="Agregar compra">

        <a href="?controlador=compra&accion=inicio"  class="btn btn-primary">Cancelar </a>
        
        </form>

      </div>
    
</div>