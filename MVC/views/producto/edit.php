<div class="card">
    <div class="card-header">
        Editar producto
    </div>
    <div class="card-body">

        <form action="" method="post">

        <div class="mb-3">
          <label for="id_persona" class="form-label"></label>
          <input readonly type="text"
            class="form-control" value="<?php echo $producto->id_producto; ?>" name="id_producto" id="id_producto" aria-describedby="helpId" placeholder="ID producto">
        </div>

        <div class="mb-3">
          <label for="id_persona" class="form-label"></label>
          <input readonly type="text"
            class="form-control" value="<?php echo $producto->id_categoria; ?>" name="id_categoria" id="id_categoria" aria-describedby="helpId" placeholder="ID categoria">
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Nombre del producto:</label>
          <input type="text" 
            class="form-control" value="<?php echo $producto->nombre_producto; ?>" name="nombre_producto" id="nombre_producto" aria-describedby="helpId" placeholder="Ingrese el nombre del producto">
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Descripción del producto:</label>
          <input type="text" 
            class="form-control" value="<?php echo $producto->descripcion_producto; ?>" name="descripcion_producto" id="descripcion_producto" aria-describedby="helpId" placeholder="Realize una breve descripción del producto que va ingresar">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Stock:</label>
          <input type="text" 
            class="form-control" value="<?php echo $producto->stock_producto; ?>" name="stock_producto" id="stock_producto" aria-describedby="helpId" placeholder="Mercancías o productos que se tienen almacenados en espera de su venta o comercialización>
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Valor por unidad:</label>
          <input type="text" 
            class="form-control" value="<?php echo $producto->valor_unitario; ?>" name="valor_unitario" id="valor_unitario" aria-describedby="helpId" placeholder="Ingrese el valor correspondiente">
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">valor compra:</label>
          <input type="email" 
            class="form-control" value="<?php echo $producto->valor_compra; ?>" name="valor_compra" id="valor_compra" aria-describedby="emailHelpId" placeholder="Ingrese el valor correspondiente">
        </div>
     
       
        <input name="" id="" class="btn btn-success" type="submit" value="Editar producto">
        <a href="?controlador=producto&accion=inicio"  class="btn btn-primary">Cancelar </a>
        
        </form>

      </div>
    
</div>