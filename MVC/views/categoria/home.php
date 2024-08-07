<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=categoria&accion=crear" role="button">Agregar categoria</a>
    </div>
    <div class="card-body">

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre categoría</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($categorias as $categoria){ ?>
            <tr>
                <td> <?php echo $categoria->id_categoria;?> </th>
                <td> <?php echo $categoria->nombre_categoria;?> </th>
                <td> 

                    <div class="btn-group" role="group" aria-label="">
                        <a href="?controlador=categoria&accion=editar&id=<?php echo $categoria->id_categoria; ?>"  class="btn btn-info">Editar </a>
                        <a href="?controlador=categoria&accion=eliminar&id=<?php echo $categoria->id_categoria; ?>"  class="btn btn-danger">Eliminar </a>                        
                    </div>

            </td>
            </tr>
            
    <?php } ?>

     
    </tbody>
</table>
        
    </div>
    
</div>
