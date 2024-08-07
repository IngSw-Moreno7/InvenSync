<?php

include_once("models/detalle_de_compra.php");
include_once("database/connectBD_I.php");

BD::conexion();

class ControladorDetalle_de_compra{

    public function inicio(){

       $detalle_de_compras=detalle_de_compra::consultar();

       include_once("views/detalle_de_compra/home.php");
    }

    public function crear(){

        if($_POST){
            print_r($_POST);
            $cantidad=$_POST['cantidad'];
            $fecha_de_compra=$_POST['fecha_de_compra'];
            $valor_unitario=$_POST['valor_unitario'];
            $valor_subtotal=$_POST['valor_subtotal'];
                    
            Usuario::crear($cantidad,$fecha_de_compra,$valor_unitario,$valor_subtotal,
            $nombre_completo,$correo,$telefono);
            header("Location:./?controlador=detalle_de_compra&accion=inicio");
        }
        include_once("views/detalle_de_compra/create.php");
    }

    public function editar(){

        $id_persona=$_GET['id'];
        if($_POST){
            $cantidad=$_POST['cantidad'];
            $fecha_de_compra=$_POST['fecha_de_compra'];
            $valor_unitario=$_POST['valor_unitario'];
            $valor_subtotal=$_POST['valor_subtotal'];
            $correo=$_POST['correo'];
            $telefono=$_POST['telefono'];

            Usuario::editar(
                $id_persona,
                $tipo_de_persona,
                $nombre_completo,
                $correo,
                $telefono
            );
            header("Location:./?controlador=usuario&accion=inicio");
                        
        }
        $array_tipo_persona=[
            'CLTE'=> 'CLIENTE',
            'EMP'=> 'EMPLEADO', 
            'PRV'=> 'PROVEEDOR',   

        ];
        $usuario=(Usuario::buscar($id_persona));

        include_once("views/usuario/edit.php");
    }

    public function eliminar(){
        print_r($_GET);

        $id=$_GET['id'];

        Usuario::eliminar($id);
        header("Location:./?controlador=usuario&accion=inicio");
    }
}

?>