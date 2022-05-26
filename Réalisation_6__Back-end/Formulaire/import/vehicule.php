<?php
    class Vehicule {
        //attributs
        public $nomVehicule;
        public $nbrRoue;
        public $vitesse;

        // Fonctions
        public function demarrer() {
            echo "<p>Démarrage de la $this->nomVehicule ... !!!!!!!</p>";
        }

        public function detect(){
            if ($this->nbrRoue == 4) {
                return 'Je suis une voiture';
            } else if ($this->nbrRoue == 2) {
                return 'et moi une moto';
            } else {
                return 'potentiellement un triporteur';
            }
        }

        public function boost() {
            return $this->vitesse + 50;
        }

        public function plusRapide($toCompare) {
            if($this->vitesse < $toCompare->vitesse) {
                return "$toCompare->nomVehicule est plus rapide";
            } else if ($this->vitesse > $toCompare->vitesse) {
                return "$this->nomVehicule est plus rapide";
            } else {
                return "".$this->nomVehicule." est aussi rapide que ".$toCompare->nomVehicule."";
            }
        }

        public function plusRapideVersTab($toCompare) {
            $toReturn = $this;
            for($i = 0; $i < sizeof($toCompare); $i++){
                if($toReturn->vitesse < $toCompare[$i]->vitesse){
                    $toReturn = $toCompare[$i];
                } else {
                    $toReturn = $toReturn;
                }
            }
            return $toReturn;
        }
    }
?>