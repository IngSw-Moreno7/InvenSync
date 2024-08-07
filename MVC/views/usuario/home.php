<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=usuario&accion=crear" role="button">Agregar usuario</a>
    </div>
    <div class="card-body">

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tipo de persona</th>
            <th>Nombre Completo</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($usuarios as $usuario){ ?>
            <tr>
                <td> <?php echo $usuario->id_persona;?> </th>
                <td> <?php echo $usuario->tipo_de_persona;?> </th>
                <td> <?php echo $usuario->nombre_completo;?> </td>
                <td> <?php echo $usuario->correo;?> </td>
                <td> <?php echo $usuario->telefono;?> </td>
                <td> 

                    <div class="btn-group" role="group" aria-label="">
                        <a href="?controlador=usuario&accion=editar&id=<?php echo $usuario->id_persona; ?>"  class="btn btn-info">Editar </a>
                        <a href="?controlador=usuario&accion=eliminar&id=<?php echo $usuario->id_persona; ?>"  class="btn btn-danger">Eliminar </a>                        
                    </div>

            </td>
            </tr>
            
    <?php } ?>

     
    </tbody>
</table>


        
    </div>
    
</div>
