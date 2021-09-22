<?php

class Nombrep{

    private $nomvar;
    private $nomvar2;
    private $nomvar3;

    // CONSTRUCTOR (ASIGNA VALOR A TODAS LAS VARABLES CUANDO SE CREA EL OBJ)
    public function __construct($nomvar, $nomvar2)
    {
        $this->nomvar = $nomvar;
        $this->nomvar = $nomvar2;
    }

    public function nomfun(){

    }

    public function SetNomvar($nomvar){
        $this->nomvar = $nomvar;
    }

    public function GetNomvar(){
        return $this->nomvar;
    }

}

////// OBJETO SIN CONSTRUCTOR
//$obj = new NombreP;

// OBJETO CON CONSTRUCTOR
$obj = new Nombrep("valor1","valor2");

// PARA USAR UNA FUNCION SE OCUPA ->
// INGRESA VALOR
$obj->SetNomvar("valor");

// OBTIENE EL VALOR
echo $obj->GetNomvar();


///////////////////////////////////////////////////////////////////

// CLASE HIJA HEREDA DE CLASE PADRE
class Nombreh extends Nombrep {

    private $nomvar4;
    private $nomvar5;

    // COMO TAMBIEN HEREDA EL CONSTRUCTOR SE COLOCA DE LA SIGUIENTE MANERA
    public function __construct($nomvar, $nomvar2, $nomvar4)
    {
        // OBTIENE LA ESTRUCTURA DEL CONTRUSCTOR ANTERIOR
    	parent:: __construct($nomvar, $nomvar2);
        // CREA LA ESTRUCTURA DE LA NUEVA VARIABLE
        $this->salary = $nomvar4;
    
    }

}

////// OBJETO SIN CONSTRUCTOR
//$objh = new Nombreh2;

// OBJETO CON CONSTRUCTOR
$objh = new Nombreh("valor1","valor2","valor2");

// PARA USAR UNA FUNCION SE OCUPA ->
// INGRESA VALOR
$objh->SetNomvar("valor hijo");

// OBTIENE EL VALOR
echo $objh->GetNomvar();