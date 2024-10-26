<?php

//POO
//Con base en la clase vehiculo, vas a crear 3 vehiculos y los vas a agregar a una lista
//luego va a recorrer la lista para mosta los datos de cada vehiculo

class Vehiculo {
    public $marca;
    public $modelo;
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
$cocheUno = new Vehiculo ("Renoult", "2019", "privado", "gris", 25);
$cocheDos = new Vehiculo ("Nissan", "2014", "público", "verde", 30);
$cocheTres = new Vehiculo ("Toyota", "2023", "privado", "negro", 80);
$cocheCuarto = new Vehiculo ("Kia", "2024", "publico", "Amarillo", 50);
$cocheQuinto = new Vehiculo ("Chevrolet", "2022", "publico", "Naranja", 40);
$cocheSexto = new Vehiculo ("Maserati", "2026", "privado", "gris", 100);
$cocheSeptimo = new Vehiculo ("Jaguar", "2025", "privado", "negro", 80);

//crear una lista de coches
$listasCoches = [$cocheUno, $cocheDos, $cocheTres, $cocheCuarto, $cocheQuinto, $cocheSexto, $cocheSeptimo];

function mostrarInfo($coches): void {
    foreach($coches as $coche) {
        echo "_______________ <br>";
        echo "marca: ".$coche->marca.  "<br>";
        echo "modelo: ".$coche->modelo.  "<br>";
        echo "velocidad: ".$coche->velocidad. "<br>";
        echo "color: ".$coche->color. "<br>";
        echo "categoría: ".$coche->categoria. "<br>";
        echo "_______________ <br>";
    }
}

mostrarInfo($listasCoches);






