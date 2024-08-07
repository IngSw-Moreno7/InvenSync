<?php

include_once("models/compra.php");
include_once("database/connectBD_I.php");

BD::conexion();

class ControladorCompra{

    public function inicio(){

    $compras=Compra::consultar();

    include_once("views/compra/home.php");
        
    }
    public function crear(){

        if($_POST){
            print_r($_POST);
            $codigo_cliente=$_POST['codigo_cliente'];
            $tipo_cliente=$_POST ['tipo_cliente'];
            $nombre_completo=$_POST['nombre_completo'];
            $fecha_de_compra=$_POST['fecha_de_compra'];
            $valor_total=$_POST['valor_total'];
            
            Compra::crear($codigo_cliente,$tipo_cliente,$nombre_completo,$fecha_de_compra,$valor_total);
            header("Location:./?controlador=compra&accion=inicio");
        }
        include_once("views/compra/create.php");
    }

    public function editar(){

        $id_compra=$_GET['id'];
        if($_POST){
            $codigo_cliente=$_POST['codigo_cliente'];
            $tipo_cliente=$_POST ['tipo_cliente'];
            $nombre_completo=$_POST['nombre_completo'];
            $fecha_de_compra=$_POST['fecha_de_compra'];
            $valor_total=$_POST['valor_total'];
            
            Compra::editar(
                $id_compra,
                $codigo_cliente,
                $tipo_cliente,
                $nombre_completo,
                $fecha_de_compra,
                $valor_total,
            );
            header("Location:./?controlador=compra&accion=inicio");
        }
        $compra=(Compra::buscar($id_compra));

        include_once("views/compra/edit.php");
    }
    
    public function eliminar(){
        print_r($_GET);

        $id=$_GET['id'];

        Compra::eliminar($id);
        header("Location:./?controlador=compra&accion=inicio");
    }

}

?>