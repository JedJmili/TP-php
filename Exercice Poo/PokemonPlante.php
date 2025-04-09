<?php
class PokemonPlante extends Pokemon {
    protected $type ="Plante";
    protected function getDamageRate(Pokemon $p){
        if($p->getType()=="Eau"){
            return 2;
        }
        elseif($p->getType()=="Normal"){
            return 1;
        }
        else{return 0.5;}
    }
}
?>