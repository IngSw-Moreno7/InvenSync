<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=producto&accion=crear" role="button">Agregar producto</a>
    </div>
    <div class="card-body">

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID producto</th>
            <th>ID categoria</th>
            <th>Nombre del producto</th>
            <th>Descripción del producto</th>
            <th>Stock</th>
            <th>Valor por unidad</th>
            <th>Valor compra</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($productos as $producto){ ?>
            <tr>
                <td> <?php echo $producto->id_producto;?> </th>
                <td> <?php echo $producto->id_categoria;?> </th>
                <td> <?php echo $producto->nombre_producto;?> </th>
                <td> <?php echo $producto->descripcion_producto;?> </td>
                <td> <?php echo $producto->valor_unitario;?> </td>
                <td> <?php echo $producto->valor_compra;?> </td>
                <td> 

                    <div class="btn-group" role="group" aria-label="">
                        <a href="?controlador=producto&accion=editar&id=<?php echo $producto->id_producto; ?>"  class="btn btn-info">Editar </a>
                        <a href="?controlador=producto&accion=eliminar&id=<?php echo $producto->id_producto; ?>"  class="btn btn-danger">Eliminar </a>                        
                    </div>

            </td>
            </tr>
            
    <?php } ?>

     
    </tbody>
</table>


        
    </div>
    
</div>
