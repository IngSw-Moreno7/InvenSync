<div class="card">
    <div class="card-header">
        Editar detalle de compra
    </div>
    <div class="card-body">

        <form action="" method="post">

        <div class="mb-3">
          <label for="id_persona" class="form-label"></label>
          <input readonly type="text"
            class="form-control" value="<?php echo $detalle_de_compra->id_producto; ?>" name="id_producto" id="id_producto" aria-describedby="helpId" placeholder="ID usuario">
        </div>

        <div class="mb-3">
          <label for="id_persona" class="form-label"></label>
          <input readonly type="text"
            class="form-control" value="<?php echo $detalle_de_compra->id_compra; ?>" name="id_compra" id="id_compra" aria-describedby="helpId" placeholder="ID usuario">
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Cantidad:</label>
          <input type="text" 
            class="form-control" value="<?php echo $detalle_de_compra->cantidad; ?>" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="Digite su numero de documento">
        </div>
        
        <?php         
        date_default_timezone_set('America/Bogota');
        $fecha_actual=date("Y-m-d H:i:s");
        ?>
        <div class="mb-3">
          <label for="" class="form-label">Fecha de compra:</label>
          <input readonly type="datetime" class="form-control" name="fecha_de_compra" value="<?= $fecha_actual?>" >
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Valor unitario:</label>
          <input type="text" 
            class="form-control" value="<?php echo $detalle_de_compra->valor_unitario; ?>" name="valor_unitario" id="valor_unitario" aria-describedby="helpId" placeholder="Escriba su direccion de residencia">
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Valor subtotal:</label>
          <input type="text" 
            class="form-control" value="<?php echo $detalle_de_compra->valor_subtotal; ?>" name="valor_subtotal" id="valor_subtotal" aria-describedby="emailHelpId" placeholder="Correo del usuario">
        </div>

        <input name="" id="" class="btn btn-success" type="submit" value="Editar detalle de compra">
        <a href="?controlador=detalle_de_compra&accion=inicio"  class="btn btn-primary">Cancelar </a>
        
        </form>

      </div>
    
</div>