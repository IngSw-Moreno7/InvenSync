<?php
class Producto{

    public $id_producto;
    public $id_categoria;
    public $nombre_producto;
    public $descripcion_producto;
    public $stock_producto;
    public $valor_unitario;
    public $valor_compra;

    public function __construct($id_producto,$id_categoria,$nombre_producto,$descripcion_producto,$stock_producto,$valor_unitario,$valor_compra) {
        $this->id_producto=$id_producto;
        $this->id_categoria=$id_categoria;
        $this->nombre_producto=$nombre_producto;
        $this->descripcion_producto=$descripcion_producto;
        $this->stock_producto=$stock_producto;
        $this->valor_unitario=$valor_unitario;
        $this->valor_compra=$valor_compra;
    }
    public static function consultar(){
        $Listaproducto=[];
        $conexionBD=BD::conexion();
        $sql= $conexionBD->query("SELECT * FROM producto");

        foreach ($sql->fetchAll() as $producto){
            
            $Listaproducto[]= new Producto(
                $producto['id_producto'],
                $producto['id_categoria'],
                $producto['nombre_producto'],
                $producto['descripcion_producto'],
                $producto['stock_producto'],
                $producto['valor_unitario'],
                $producto['valor_compra']
            );
        }
        return $Listaproducto;
        
    }
    public static function crear(
        $nombre_producto,
        $descripcion_producto,
        $stock_producto,
        $valor_unitario,
        $valor_total){

        $conexionBD=BD::conexion();
        $sql= $conexionBD->prepare("INSERT INTO producto(nombre_producto,descripcion_producto,stock_producto,valor_unitario,
        valor_total,FACTURA_Codigo_venta,categoria_id_categoria,usuario_id_persona,usuario_ROL_id_rol,factura_id_venta) VALUES(?,?,?,?,?,?,?,?,1)");
        $sql->execute(array(
            $nombre_producto,
            $descripcion_producto,
            $stock_producto,
            $valor_unitario,
            $valor_total
        ));

    }
    public static function eliminar($id){

        $conexionBD=BD::conexion();
        $sql= $conexionBD->prepare("DELETE FROM producto WHERE id_producto=? ");
        $sql->execute(array($id));

    }
    public static function buscar($id){

        $conexionBD=BD::conexion();

        $sql= $conexionBD->prepare("SELECT * FROM producto WHERE id_producto=? ");
        $sql->execute(array($id));
        $producto=$sql->fetch();
        return new Producto(
            $producto['id_producto'],
            $producto['id_categoria'],
            $producto['nombre_categoria'],
            $producto['descripcion_producto'],
            $producto['stock_producto'],
            $producto['valor_untario'],
            $producto['valor_total'],
            $producto['correo_electronico'],
            $producto['telefono_contacto']
        );

    }
    public static function editar(
        $id_producto  ,
        $id_categoria,
        $nombre_categoria,
        $descripcion_producto,
        $stock_producto,
        $valor_untario,
        $valor_total
        )
    {

        $conexionBD=BD::conexion();
        $sql= $conexionBD->prepare("UPDATE producto SET nombre_producto=?,descripcion_producto=?,stock_producto=?,valor_unitario=?,
        valor_total=?,FACTURA_Codigo_venta=?,categoria_id_categoria=?,usuario_id_persona=?,usuario_ROL_id_rol=?,factura_id_venta=? WHERE id_producto=? ");
        print_r($sql);
        $sql->execute(array(
            $nombre_categoria,
            $descripcion_producto,
            $stock_producto,
            $valor_unitario,
            $valor_total,
            $id_producto,
            $id_categoria
        ));

    }

}

?>