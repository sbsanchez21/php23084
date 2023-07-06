<?php 
/**
 * Clase que concentra todas las consultas, modificaciones y creaciones
 * en la tabla Usuarios de la DB cacproyecto
 */
class UsuarioDAO {

    /**
     * Se conecta a la db, consulta todos los usuario utilizando sql
     * y devuelve una lista de objetos usuario
     */
    public function listarUsuarios() {
        //traigo la clase Usuario para trabajar con POO
        require_once("../model/Usuario.php");

        //me conecto a la db
        $conn=new mysqli("localhost", "root","","cacproyecto");         

        //traigo todos los usuarios y los pongo en $result
        $result=$conn->query("SELECT * FROM usuarios");

        //recorro la lista de usuarios que está en $result y creo un objeto Usuario x cada fila
        while ($usuario=$result->fetch_assoc()) {
            //creo un objeto Usuario x cada fila de la tabla
            $usuObj=new Usuario($usuario["idusuario"],$usuario["usuario"],$usuario["clave"]);

            //lista de usuarios donde cada uno es un objeto
            $listUsuObj[]=$usuObj;
        }

        return $listUsuObj;
    }

    /**
     * Valida si existe el usuario y su contraseña
     * Devuelve true si existe y false sino existe
     */
    public function validarUsuYPass($user,$pass) {
        try {
            $conn=new mysqli("localhost","root","","cacproyecto");
            $result=$conn->query("SELECT * FROM usuarios WHERE usuario='$user' AND clave='$pass'");
            
            if ($result->fetch_assoc()) {
                return true;
            } else {
                return false;
            }

        } catch (\Throwable $th) {
            return false;
        }

    }

    public function addUsuario($user,$pass) {
        try {
            $conexion=new mysqli("localhost","root","","cacproyecto");
            if ($conexion->query("INSERT INTO usuarios (usuario, clave) VALUES ('$user','$pass')")) {
                return true;
            } else {
                return false;
            }

        } catch (\Throwable $th) {
            return false;
        }
    }
}

?>