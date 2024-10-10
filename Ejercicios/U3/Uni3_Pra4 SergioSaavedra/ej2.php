<?php
    class Vehiculo {
        private $color;
        private $peso;

        public function circula() {

        }

        public function añadir_persona($peso_persona) {

        }
    }

    class Cuatro_ruedas extends Vehiculo {
        private $numero_puertas;

        public function repintar($color) {

        }
    } 

    class Dos_ruedas extends Vehiculo {
        private $cilindrada;

        public function poner_gasolina() {

        }
    }

    class Coche extends Cuatro_ruedas {
        private $numero_cadenas_nieve;

        public function añadir_cadenas_nieve($num) {

        }

        public function quitar_cadenas_nieve($num) {
            
        }
    }

    class Camion extends Cuatro_ruedas {
        private $longitud;

        public function añadir_remolque($longitud_remolque) {
            
        }
    }

?>