<div class="card">
    <div class="card-header">
        Detalle de compra
    </div>
    <div class="card-body">
        <form action="" method="post">
        
        <div class="mb-3">
          <label for="" class="form-label">Cantidad:</label>
          <input type="text" 
          class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="Digite su numero de documento" required>
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
          <label for="" class="form-label">Valor unitario:</label>
          <input type="text" 
          class="form-control" name="valor_unitario" id="valor_unitario" aria-describedby="helpId" placeholder="Escriba sus apellidos completos" required>
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Valor Subtotal:</label>
          <input type="text" 
          class="form-control" name="valor_subtotal" id="valor_subtotal" aria-describedby="helpId" placeholder="Escriba su direccion de residencia">
        </div>
                    
        <input name="" id="" class="btn btn-success" type="submit" value="Agregar detalle de compra">

        <a href="?controlador=detalle_de_venta&accion=inicio"  class="btn btn-primary">Cancelar </a>
        
        </form>

      </div>
    
</div>