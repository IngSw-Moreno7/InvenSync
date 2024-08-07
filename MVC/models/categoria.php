<?php
class Categoria{

    public $id_categoria;
    public $nombre_categoria;
  
    public function __construct($id_categoria,$nombre_categoria) {
        $this->id_categoria=$id_categoria;
        $this->nombre_categoria=$nombre_categoria;
    }
    public static function consultar() {
        $Listacategoria=[];
        $conexionBD=BD::conexion();
        $sql= $conexionBD->query("SELECT * FROM categoria");

        foreach ($sql->fetchAll() as $categoria){
            
            $Listacategoria[]= new Categoria(
                $categoria['id_categoria'],
                $categoria['nombre_categoria']
            );
        }
        return $Listacategoria;
    }
    public static function crear($nombre_categoria) {

        $conexionBD=BD::conexion();
        $sql= $conexionBD->prepare("INSERT INTO categoria(nombre_categoria) VALUES(?)");
        $sql->execute(array($nombre_categoria));

    }
    public static function eliminar($id) {

        $conexionBD=BD::conexion();
        $sql= $conexionBD->prepare("DELETE FROM categoria WHERE id_categoria=? ");
        $sql->execute(array($id));

    }
    public static function buscar($id) {

        $conexionBD=BD::conexion();

        $sql= $conexionBD->prepare("SELECT * FROM categoria WHERE id_categoria=? ");
        $sql->execute(array($id));
        $categoria=$sql->fetch();
        return new Categoria(
            $categoria['id_categoria'],
            $categoria['nombre_categoria']
        );

    }
    public static function editar($id_categoria,$nombre_categoria) {

        $conexionBD=BD::conexion();
        $sql= $conexionBD->prepare("UPDATE categoria SET nombre_categoria=? WHERE id_categoria=? ");
        print_r($sql);
        $sql->execute(array(
            $nombre_categoria,
            $id_categoria
        ));
    }

}

?>