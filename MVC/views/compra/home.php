<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=compra&accion=crear" role="button">Agregar compra</a>
    </div>
    <div class="card-body">

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID compra</th>
            <th>Codigo cliente</th>
            <th>Tipo de cliente</th>
            <th>Nombre Completo</th>
            <th>Fecha de compra</th>
            <th>Valor total</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($compras as $compra){ ?>
            <tr>
                <td> <?php echo $compra->id_compra;?> </th>
                <td> <?php echo $compra->codigo_cliente;?> </th>
                <td> <?php echo $compra->tipo_cliente;?> </th>
                <td> <?php echo $compra->nombrecompletos;?> </td>
                <td> <?php echo $compra->fecha_de_compra;?> </td>
                <td> <?php echo $compra->valor_total;?> </td>
                <td> 

                    <div class="btn-group" role="group" aria-label="">
                        <a href="?controlador=compra&accion=editar&id=<?php echo $compra->id_compra; ?>"  class="btn btn-info">Editar </a>
                        <a href="?controlador=compra&accion=eliminar&id=<?php echo $compra->id_compra; ?>"  class="btn btn-danger">Eliminar </a>                        
                    </div>

            </td>
            </tr>
            
    <?php } ?>

     
    </tbody>
</table>


        
    </div>
    
</div>
