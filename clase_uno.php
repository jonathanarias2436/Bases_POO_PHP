<?php

// comentario por linea

/*
comentarios por bloque
*/





// variable de tipo String, pero pesado debido a las comillas dobles (Memoria)
$nombre = "Julian";

// variable de tipo String, pero liviana (memoria)
$apellido = 'Arias';

// variable de tipo Entero = int
$edad = 25;

// variable decimal = double o Float
$saldo = 100.25;

//varible de tipo lógico o Booleano
$estaLloviendo = false;
$siEstaLloviendo = true;


// funciones
function ejemplo(): int{
    return 2+2;
}

function suma($numUno, $numDos): mixed{
    return $numUno+$numDos;
}

//POO
//Crear la clase de vehiculo
//con los atributos: marca, modelo, categoría, color, velocidad
//métodos: acelerar(), frenar().


class Vehiculo {
    public $marca;
    private $modelo;
    public $categoria;
    public $color;
    public $velocidad;

    public function __construct($marca, $modelo, $categoria, $color, $velocidad)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->categoria = $categoria;
        $this->color = $color;
        $this->velocidad = $velocidad;

    }

    public function acelerar($cantidad): void{
        $this->velocidad = $this->velocidad + $cantidad;
        echo "has acelarado $cantidad km/h <br>";
        echo " la velocidad actual ". $this->velocidad. " km/h <br>";
    }


    public function frenar($frenado): void{
    }
}





//crear un objeto de la clase de un vehiculo
$coche = new Vehiculo ("chevrolet", "2024", "publico", "gris", 10);

function mostrarInfo($coche): void {
    echo "marca:".$coche->marca.  "<br>";
    echo "velocidad".$coche->velocidad. "<br>";
}

mostrarInfo(coche: $coche);

$coche->acelerar(cantidad: 50);

mostrarInfo(coche: $coche);


//crear un objeto de la clase de un vehiculo
$coche = new Vehiculo ("Renoult", "2019", "privado", "gris", 10);

