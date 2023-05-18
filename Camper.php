<?php 
class Camper
{
    /* 1. Declaracion de propiedades con modificacodr de acceso */
    private $nombre;
    private $email;
    private $telefono ;
    /* 2. Metodo constructor(metodo magico)  */
    /* alternativament puedo inicializar con valores parametrisados al construtor */
    public function __construct($nombre,$email,$telefono){
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono; 
    }

    /* 3. Metodos (getters and Setter) */
    public function getNombre (){
        return $this->nombre;
    }
    public function getEmail (){
        return $this->email;
    }
    public function getTelefono (){
        return $this->telefono;
    }
    public function saludo ($saludo){
        return $saludo." campus";
    }

    /* metodo settter */
    public function setNombre($nombre){
        $this->nombre =$nombre;
    }
    public function setEmail($email){
        $this->email =$email;
    }
    public function setTelefono($telefono){
        $this->telefono =$telefono;
    }
}

/* Instaciar clase  Variables de instancia */
$camper = new Camper('Ronald',"","telefono");
$camper->setNombre("david");
$camper->setemail("davicorreo@correo.cod");
$camper->setNombre("telefono");
echo $camper->getNombre() ."<br>";
echo $camper->getEmail() ."<br>";
echo $camper->getTelefono() ."<br>";
echo $camper->saludo('saludo');
?>