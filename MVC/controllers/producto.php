<?php

include_once("models/producto.php");
include_once("database/connectBD_I.php");

BD::conexion();

class ControladorProducto{

    public function inicio(){

    $productos=Producto::consultar();

    include_once("views/producto/home.php");
    }
    public function crear(){

        if($_POST){
            print_r($_POST);
            $nombre_producto=$_POST['nombre_producto'];
            $descripcion_producto=$_POST['descripcion_producto'];
            $stock_producto=$_POST['stock_producto'];
            $valor_unitario=$_POST['valor_unitario'];
            $valor_compra=$_POST['valor_compra'];
            
            Producto::crear($nombre_producto,$descripcion_producto,$stock_producto,$valor_unitario,
            $valor_compra);
            header("Location:./?controlador=producto&accion=inicio");
        }
        include_once("views/producto/create.php");

    }

    public function editar(){

        $id_producto=$_GET['id'];
        if($_POST){
            $nombre_producto=$_POST['nombre_producto'];
            $descripcion_producto=$_POST['descripcion_producto'];
            $stock_producto=$_POST['stock_producto'];
            $nombres_completos=$_POST['nombres_completos'];
            $valor_unitario=$_POST['valor_unitario'];
            $valor_compra=$_POST['valor_compra'];

            Producto::editar(
                $id_producto,
                $id_categoria,
                $nombre_producto,
                $descripcion_producto,
                $stock_producto,
                $nombres_completos,
                $valor_unitario,
                $valor_compra,
            );
            header("Location:./?controlador=producto&accion=inicio");
                        
        }

        $producto=(Producto::buscar($id_producto));

        include_once("views/producto/edit.php");
    }

    public function eliminar(){
        print_r($_GET);

        $id=$_GET['id'];

        Producto::eliminar($id);
        header("Location:./?controlador=producto&accion=inicio");
    }
}

?>