<?php 
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

class Producto{
    private $id;
    private $nombre;
    private $categoria;
    private $marca;
    private $precio;
    private $cantidad;
    private $descricion;
    /* cosntrutor */
    public function __construct(/* $id,$nombre,$categoria,$marca,$precio,$cantidad,$descricion */){
        /* $this->id = $id;
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->marca = $marca;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->descricion = $descricion; */
    }
    /* get */
    public function getId (){
        return $this->id;
    }
    public function getNombre (){
        return $this->nombre;
    }
    public function getCategoria (){
        return $this->categoria;
    }
    public function getMarca (){
        return $this->marca;
    }
    public function getPrecio (){
        return $this->precio;
    }
    public function getCantidad (){
        return $this->cantidad;
    }
    public function getDescricion (){
        return $this->descricion;
    }
    /* set */
    public function setId($id){
        $this->id =$id;
    }
    public function setNombre($nombre){
        $this->nombre =$nombre;
    }
    public function setCategoria($categoria){
        $this->categoria =$categoria;
    }
    public function setMarca($marca){
        $this->marca =$marca;
    }
    public function setPrecio($precio){
        $this->precio =$precio;
    }
    public function setCantidad($cantidad){
        $this->cantidad =$cantidad;
    }
    public function setDescricion($descricion){
        $this->descricion =$descricion;
    }


}


$producto1 = new Producto();
$producto2 = new Producto();
$producto3 = new Producto();
$producto4 = new Producto();

$producto1->setId(1);
$producto1->setNombre("papa");
$producto1->setCategoria("alimento");
$producto1->setMarca("genertica");
$producto1->setPrecio(2000);
$producto1->setCantidad(500000);
$producto1->setDescricion("Son papas jovne que mas espera ");

$producto2->setId(2);
$producto2->setNombre("tomate");
$producto2->setCategoria("alimento");
$producto2->setMarca("genertica");
$producto2->setPrecio(3000);
$producto2->setCantidad(503000);
$producto2->setDescricion("Son tomates son simples tomates");

$producto3->setId(3);
$producto3->setNombre("cebolla");
$producto3->setCategoria("alimento");
$producto3->setMarca("genertica");
$producto3->setPrecio(2500);
$producto3->setCantidad(543000);
$producto3->setDescricion("Son cebollas de las que hacen llorar");

$producto4->setId(4);
$producto4->setNombre("yuca");
$producto4->setCategoria("alimento");
$producto4->setMarca("genertica");
$producto4->setPrecio(4000);
$producto4->setCantidad(403000);
$producto4->setDescricion("Son yucas son como papas");

echo $producto1->getId()."<br>";
echo $producto1->getNombre()."<br>";
echo $producto1->getCategoria()."<br>";
echo $producto1->getMarca()."<br>";
echo $producto1->getPrecio()."<br>";
echo $producto1->getCantidad()."<br>";
echo $producto1->getDescricion()."<br>";

echo $producto2->getId()."<br>";
echo $producto2->getNombre()."<br>";
echo $producto2->getCategoria()."<br>";
echo $producto2->getMarca()."<br>";
echo $producto2->getPrecio()."<br>";
echo $producto2->getCantidad()."<br>";
echo $producto2->getDescricion()."<br>";

echo $producto3->getId()."<br>";
echo $producto3->getNombre()."<br>";
echo $producto3->getCategoria()."<br>";
echo $producto3->getMarca()."<br>";
echo $producto3->getPrecio()."<br>";
echo $producto3->getCantidad()."<br>";
echo $producto3->getDescricion()."<br>";

echo $producto4->getId()."<br>";
echo $producto4->getNombre()."<br>";
echo $producto4->getCategoria()."<br>";
echo $producto4->getMarca()."<br>";
echo $producto4->getPrecio()."<br>";
echo $producto4->getCantidad()."<br>";
echo $producto4->getDescricion()."<br>";

echo "<br>por alguna razon este uno carga al final pero es del primer producto"
?>
