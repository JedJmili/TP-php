<?php
class PokemonEau extends Pokemon {
    protected $type ="Eau";
    protected function getDamageRate(Pokemon $p){
        if($p->getType()=="Feu"){
            return 2;
        }
        elseif($p->getType()=="Normal"){
            return 1;
        }
        else{return 0.5;}
    }
}
?>