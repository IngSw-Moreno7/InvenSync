<?php

class Usuario{

    public $id_persona;
    public $tipo_de_persona;
    public $nombre_completo;
    public $correo;
    public $telefono;


    public function __construct($id_persona,$tipo_de_persona,$nombre_completo,$correo,$telefono) {
        $this->id_persona=$id_persona;
        $this->tipo_de_persona=$tipo_de_persona;
        $this->nombre_completo=$nombre_completo;
        $this->correo=$correo;
        $this->telefono=$telefono;
    }
    public static function consultar(){
        $Listausuario=[];
        $conexionBD=BD::conexion();
        $sql= $conexionBD->query("SELECT * FROM usuario");

        foreach ($sql->fetchAll() as $usuario){
            
            $Listausuario[]= new Usuario(
                $usuario['id_persona'],
                $usuario['tipo_de_persona'],
                $usuario['nombre_completo'],
                $usuario['correo'],
                $usuario['telefono']
            );
        }
        return $Listausuario;
        
    }
    public static function crear(
        $tipo_de_persona,
        $nombre_completo,
        $correo,
        $telefono){

        $conexionBD=BD::conexion();
        $sql= $conexionBD->prepare("INSERT INTO usuario(tipo_de_persona, nombre_completo, correo, telefono, ROL_id_rol) VALUES(?,?,?,?,?,1)");
        $sql->execute(array(
            $tipo_de_persona,
            $nombre_completo,
            $correo,
            $telefono
        ));

    }
    public static function eliminar($id){

        $conexionBD=BD::conexion();
        $sql= $conexionBD->prepare("DELETE FROM usuario WHERE id_persona=? ");
        $sql->execute(array($id));

    }
    public static function buscar($id){

        $conexionBD=BD::conexion();

        $sql= $conexionBD->prepare("SELECT * FROM usuario WHERE id_persona=? ");
        $sql->execute(array($id));
        $usuario=$sql->fetch();
        return new Usuario(
            $usuario['id_persona'],
            $usuario['tipo_de_persona'],
            $usuario['nombre_completo'],
            $usuario['correo'],
            $usuario['telefono']
        );

    }
    public static function editar(
        $id_persona,
        $tipo_de_persona,
        $nombre_completo,
        $correo,
        $telefono
        )
    {

        $conexionBD=BD::conexion();
        $sql= $conexionBD->prepare("UPDATE usuario SET tipo_de_persona=?,nombre_completo=?,correo=?,telefono=?,ROL_id_rol=1 WHERE id_persona=? ");
        print_r($sql);
        $sql->execute(array(
            $tipo_de_persona,
            $nombre_completo,
            $correo,
            $telefono,
            $id_persona
        ));

    }

}

?>