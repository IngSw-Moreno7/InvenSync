<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=detalle_de_compra&accion=crear" role="button">Agregar detalle de compra</a>
    </div>
    <div class="card-body">

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID producto</th>
            <th>ID compra</th>
            <th>Cantidad</th>
            <th>Fecha de compra</th>
            <th>Valor unitario</th>
            <th>Valor subtotal</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($detalles_de_compras as $detalles_de_compra){ ?>
            <tr>
                <td> <?php echo $detalle_de_compra->id_producto;?> </th>
                <td> <?php echo $detalle_de_compra->id_compra;?> </th>
                <td> <?php echo $detalle_de_compra->cantidad;?> </td>
                <td> <?php echo $detalle_de_compra->Fecha_de_compra;?> </td>
                <td> <?php echo $detalle_de_compra->valor_unitario;?> </td>
                <td> <?php echo $detalle_de_compra->valor_subtotal;?> </td>
                <td> 

                    <div class="btn-group" role="group" aria-label="">
                        <a href="?controlador=detalle_de_compra&accion=editar&id=<?php echo $detalle_de_compra->id_producto; ?>"  class="btn btn-info">Editar </a>
                        <a href="?controlador=detalle_de_compra&accion=eliminar&id=<?php echo $detalle_de_compra->id_producto; ?>"  class="btn btn-danger">Eliminar </a>                        
                    </div>

            </td>
            </tr>
            
    <?php } ?>

     
    </tbody>
</table>


        
    </div>
    
</div>
