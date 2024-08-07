<div class="card">
    <div class="card-header">
        Agregar producto
    </div>
    <div class="card-body">

        <form action="" method="post">
        <div class="mb-3">
          <label for="" class="form-label">Nombre del producto:</label>
          <input type="text" 
          class="form-control" name="nombre_producto" id="nombre_producto" aria-describedby="helpId" placeholder="Ingrese el nombre del producto" required>
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Descripción del producto:</label>
          <input type="text" 
          class="form-control" name="descripcion_producto" id="descripcion_producto" aria-describedby="helpId" placeholder="Realize una breve descripción del producto que va ingresar" required>
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Stock:</label>
          <input type="text" 
          class="form-control" name="stock_producto" id="stock_producto" aria-describedby="helpId" placeholder="Mercancías o productos que se tienen almacenados en espera de su venta o comercialización" required>
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Valor por unidad:</label>
          <input type="text" 
          class="form-control" name="valor_unitario" id="valor_unitario" aria-describedby="helpId" placeholder="Ingrese el valor correspondiente" required>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Valor compra:</label>
          <input type="text" 
          class="form-control" name="valor_compra" id="valor_compra" aria-describedby="helpId" placeholder="Ingrese el valor correspondiente" required>
        </div>
        
        <input name="" id="" class="btn btn-success" type="submit" value="Agregar producto">

        <a href="?controlador=producto&accion=inicio"  class="btn btn-primary">Cancelar </a>
        
        </form>

      </div>
    
</div>