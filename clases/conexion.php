<?php
class conectar{
    private $severmame = "localhost";
    private $databasename = "ventas";
    private $username = "root";
    private $pass = "";

    public function conexion(){
        $con = mysqli_connect($this-> severmame,
                            $this->username, 
                            $this->pass, 
                            $this->databasename);
        return $con;
    }
}
?>