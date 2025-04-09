<?php
class PokemonFeu extends Pokemon {
    protected $type ="feu";
    protected function getDamageRate(Pokemon $p){
        if($p->getType()=="plante"){
            return 2;
        }
        elseif($p->getType()=="Normal"){
            return 1;
        }
        else{return 0.5;}
    }
}
?>