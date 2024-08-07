<?php

include_once("models/categoria.php");
include_once("database/connectBD_I.php");

BD::conexion();

class ControladorCategoria{

    public function inicio(){
    
    $categorias=Categoria::consultar();
    
    include_once("views/categoria/home.php");
        
    }

    public function crear(){
        
        if($_POST){
            print_r($_POST);
            $nombre_categoria=$_POST['nombre_categoria'];
                               
            Categoria::crear($nombre_categoria);
            header("Location:./?controlador=categoria&accion=inicio");
        }
        include_once("views/categoria/create.php");
    }
    
    public function editar(){
        $id_categoria=$_GET['id'];
        if($_POST){
            $nombre_categoria=$_POST['nombre_categoria'];
            Categoria::editar(
                $id_categoria,
                $nombre_categoria,
            );
            header("Location:./?controlador=categoria&accion=inicio");
        }
        $categoria=(Categoria::buscar($id_categoria));
        include_once("views/categoria/edit.php");
    }

    public function eliminar(){
        print_r($_GET);
        $id=$_GET['id_categoria'];
        Categoria::eliminar($id);
        header("Location:./?controlador=categoria&accion=inicio");
    }
}

?>