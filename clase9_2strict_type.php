<?php declare(strict_types = 1);
//declare(strict_types = 1); HACE QUE SOLO SE PUEDEA ENVIAR DEL TIPO QUE SE ESPERA RECIBIR

class Nombrep2{

    private $nomvar;
    private $nomvar2;
    private $nomvar3;

    // CONSTRUCTOR (ASIGNA VALOR A TODAS LAS VARABLES CUANDO SE CREA EL OBJ)
    public function __construct(string $nomvar, string $nomvar2)
    {
        $this->nomvar = $nomvar;
        $this->nomvar = $nomvar2;
    }

    public function SetNomvar(string $nomvar){
        $this->nomvar = $nomvar;
    }

    public function GetNomvar(){
        return $this->nomvar;
    }

}


///////////////////////////////////////////////////////////////////

// CLASE HIJA HEREDA DE CLASE PADRE
class Nombreh2 extends Nombrep2 {

    private $nomvar4;
    private $nomvar5;

    // COMO TAMBIEN HEREDA EL CONSTRUCTOR SE COLOCA DE LA SIGUIENTE MANERA
    public function __construct(string $nomvar, string $nomvar2, string $nomvar4)
    {
        // OBTIENE LA ESTRUCTURA DEL CONTRUSCTOR ANTERIOR
    	parent:: __construct($nomvar, $nomvar2);
        // CREA LA ESTRUCTURA DE LA NUEVA VARIABLE
        $this->salary = $nomvar4;
    
    }

    // SE ESPERA UN TIPO String O NULL
    public function GetData() : ?string
    {
        // COMPARA SI LA VARIABLE ES MAYOR QUE 5 DIGITOS
        if (strlen($this->nomvar) > 5){
            return "valor ingresado es ".$this->nomvar;
        }
        else{
            return null;
        }

    }

}

////// OBJETO SIN CONSTRUCTOR
//$objh = new Nombreh2;

// OBJETO CON CONSTRUCTOR
$objh = new Nombreh2("valor1","valor2","valor2");

// PARA USAR UNA FUNCION SE OCUPA ->
// INGRESA VALOR
$objh->SetNomvar("valor hijo");

// OBTIENE EL VALOR
echo $objh->GetNomvar();