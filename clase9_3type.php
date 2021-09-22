<?php declare(strict_types = 1);

//declare(strict_types = 1); HACE QUE SOLO SE PUEDEA ENVIAR DEL TIPO QUE SE ESPERA RECIBIR

class Nombrep3
{

    private $nomvar;

    public function SetNomvar(string $nomvar){
        $this->nomvar = $nomvar;
    }

    public function GetNomvar(){
        return $this->nomvar;
    }

}

class Nombre2 extends Nombrep3{

}

class Nombre3 extends Nombrep3{

}



// CLASE HIJA HEREDA DE CLASE PADRE
class Nombreh3
{

    private $nomvar4;
    public $type;
    
    // FUNCION PARA OBTENER LOS METODOS DE LA CLASE PADRE
    public function SetType(Nombrep3 $type)
    {
    	$this->type = $type;
    }
    
    public function GetType()
    {
    	return $this->type;
    }

}

// OBJETO
$objh = new Nombreh3;

// SE ENVIA A QUE CLASE SE LE HEREDARA LOS METODOS
$objh->SetType(new Nombrep3);

// PARA USAR UNA FUNCION SE OCUPA ->
// INGRESA VALOR
$objh->GetType()->SetNomvar("valor hijo");

// OBTIENE EL VALOR
echo $objh->GetType()->GetNomvar();