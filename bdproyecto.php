<?php

class base {
    
    private $con;
    
    public function __construct()
    {
        $this->con= new PDO("mysql:host=localhost;dbname=imss","root", "");
    }
    public function todo($id)
    {
        $accion=  $this->con->prepare("select * from usuario where id='$id'");
        $accion->execute();
        return $accion;
    }
    public function todo2($id)
    {
        $accion=  $this->con->prepare("select * from cita where id='$id'");
        $accion->execute();
        return $accion;
    }
    public function agregarcita($fecha,$id,$hora)
    {
       $insert=$this->con->prepare("insert into cita(id,fecha,hora) values('$id','$fecha','$hora')");
       $insert->execute();
       return $insert;
    }
    public function agregarus($nom,$apepat,$apemat,$usr,$pass,$afiliacion)
    {
       $insert=$this->con->prepare("insert into usuario(nombres,apepat,apemat,correo,contra,afiliacion) values('$nom','$apepat','$apemat','$usr','$pass','$afiliacion')");
       $insert->execute();
       return $insert;
    }
    public function Auth($usr,$pass){
        $accion5 = $this->con->prepare ("select * from usuario where correo='$usr' and contra='$pass' ");
        $accion5->execute();        
        return $accion5;
    }
    public function borrarcita($id)
    {
       $insert=$this->con->prepare("delete from cita where id='$id'");
       $insert->execute();
       return $insert;
    }
}