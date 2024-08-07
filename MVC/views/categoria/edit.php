<div class="card">
    <div class="card-header">
        Editar categoría
    </div>
    <div class="card-body">

        <form action="" method="post">

        <div class="mb-3">
          <label for="id_persona" class="form-label"></label>
          <input readonly type="text"
            class="form-control" value="<?php echo $compra->id_categoria; ?>" name="id_categoria" id="id_categoria" aria-describedby="helpId" placeholder="ID categoria">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Nombre categoria:</label>
          <input type="text" 
            class="form-control" value="<?php echo $compra->nombre_categoria; ?>" name="nombre_categoria" id="nombre_categoria" aria-describedby="helpId" placeholder="Escriba el nombre">
        </div>

        <input name="" id="" class="btn btn-success" type="submit" value="Editar categoria">
        <a href="?controlador=categoria&accion=inicio"  class="btn btn-primary">Cancelar </a>
        
        </form>

      </div>
    
</div>