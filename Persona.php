<?php declare(strict_types = 1);
//por lo general tiene que llamarse igual que el doc
class Persona //
{
    private $nombre;
    private $apellido;
    private $edad;  //variables
    /*CONSTRUCTORES*/ 
    public function __construct($nombre, $apellido, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }
//METODO SET Y GET
    public function setName($nombre){
        //validacion del formulario
        if($nombre != "" && $nombre != 1){
            $this->nombre = $nombre;
        }else{
            echo("Ingrese un nombre valido");
        }
    }
    public function getName(){
        return $this->nombre;
    }
}

class Usuario extends Persona
{
    private $salario;

    public function __construct($nombre, $apellido, $edad, $salario){
        parent::__construct($nombre, $apellido, $edad);

        $this->salario = $salario;   
    }
}




//llamamos a la clase
$Us = new Usuario("ed","d","d",4);
//$person = new Persona; AL UTILIZARLO SOLO CON EL SET Y GET NO HAY NECESIDAD DE ENVIAR LOS DATOS
//le enviamos a traves de los metodos la variable
//$person->setName("d");

echo($Us->getName());    
    