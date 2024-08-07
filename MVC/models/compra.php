<?php

class Compra{

    public $id_compra;
    public $codigo_cliente;
    public $tipo_cliente;
    public $nombre_completo;
    public $fecha_de_compra;
    public $valor_total;

    public function __construct($id_compra,$codigo_cliente,$tipo_cliente,$nombre_completo,$fecha_de_compra,$valor_total) {
        $this->id_compra=$id_compra;
        $this->codigo_cliente=$codigo_cliente;
        $this->tipo_cliente=$tipo_cliente;
        $this->nombre_completo=$nombre_completo;
        $this->fecha_de_compra=$fecha_de_compra;
        $this->valor_total=$valor_total;
    
    }
    public static function consultar(){
        $Listacompra=[];
        $conexionBD=BD::conexion();
        $sql= $conexionBD->query("SELECT * FROM compra");

        foreach ($sql->fetchAll() as $compra){
            
            $Listacompra[]= new Compra(
                $compra['id_compra'],
                $compra['codigo_cliente'],
                $compra['tipo_cliente'],
                $compra['nombre_completo'],
                $compra['fecha_de_compra'],
                $compra['valor_total'],
            );
        }
        return $Listacompra;
        
    }
    public static function crear(
        $codigo_cliente,
        $tipo_cliente,
        $nombre_completo,
        $fecha_de_compra,
        $valor_total){

        $conexionBD=BD::conexion();
        $sql= $conexionBD->prepare("INSERT INTO compra(codigo_cliente,tipo_cliente,nombre_completo,fecha_de_compra,valor_total) VALUES(?,?,?,?,?,?,?)" );
        $sql->execute(array(
            $codigo_cliente,
            $tipo_cliente,
            $nombre_completo,
            $fecha_de_compra,
            $valor_total,
        ));

    }
    public static function eliminar($id){

        $conexionBD=BD::conexion();
        $sql= $conexionBD->prepare("DELETE FROM compra WHERE id_compra=? ");
        $sql->execute(array($id));

    }
    public static function buscar($id){

        $conexionBD=BD::conexion();

        $sql= $conexionBD->prepare("SELECT * FROM compra WHERE id_compra=? ");
        $sql->execute(array($id));
        $compra=$sql->fetch();
        return new Compra (
            $compra['id_compra'],
            $compra['codigo_cliente'],
            $compra['tipo_cliente'],
            $compra['nombre_completo'],
            $compra['fecha_de_compra'],
            $compra['valor_total'],
        );

    }
    public static function editar(
        $id_compra,
        $codigo_cliente,
        $tipo_cliente,
        $nombre_completo,
        $fecha_de_compra,
        $valor_total)
    {

        $conexionBD=BD::conexion();
        $sql= $conexionBD->prepare("UPDATE compra SET codigo_cliente=?,tipo_cliente=?,nombre_completo=?,fecha_de_compra=?,valor_total=? WHERE id_compra=? ");
        print_r($sql);
        $sql->execute(array(
            $codigo_cliente,
            $tipo_cliente,
            $nombre_completo,
            $fecha_de_compra,
            $valor_total,
            $id_compra
        ));

    }

}

?>