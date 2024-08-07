<?php
class ControladorPaginas{

        public function home(){
            include_once("views/paginas/home.php");
        }

        public function error(){
            include_once("views/paginas/error.php");
        }
}

?>