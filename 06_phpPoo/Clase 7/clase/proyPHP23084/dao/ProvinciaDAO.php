<?php 
/**
 * Clase que concentra todas las consultas, modificaciones y creaciones
 * en la tabla ProvinciaDAO de la DB cacproyecto
 */
class ProvinciaDAO {


    public function listarProvincias() {
        //traigo la clase Usuario para trabajar con POO
        require_once("../model/Provincia.php");

        //me conecto a la db
        $conn=new mysqli("localhost", "root","","cacproyecto");         

        //traigo todos los usuarios y los pongo en $result
        $result=$conn->query("SELECT * FROM provincias");

        //recorro la lista de usuarios que está en $result y creo un objeto Usuario x cada fila
        while ($prov=$result->fetch_assoc()) {
            //creo un objeto Usuario x cada fila de la tabla
            $provObj=new Provincia($prov["idprovincia"],$prov["nombre"]);

            //lista de usuarios donde cada uno es un objeto
            $listProvObj[]=$provObj;
        }

        return $listProvObj;
    }

}

?>