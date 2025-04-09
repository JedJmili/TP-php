<?php
class AttackPokemon{
    private $attackMinimal;
    private $attackMaximal;
    private $specialAttack;
    private $probabilitySpecialAttack;

    public function __construct($min,$max,$special,$probability){
        $this->attackMinimal = $min;
        $this->attackMaximal = $max;
        $this->specialAttack = $special;
        $this->probabilitySpecialAttack = $probability;

    }
    public function getAttackMaximal(){
        return $this->attackMaximal;
    }
    public function getAttackMinimal(){
        return $this->attackMinimal;
    }
    public function getSpecialAttack(){
        return $this->specialAttack;
    }
    public function getProbabiltySpecialAttack(){
        return $this->probabilitySpecialAttack;
    }
    public function getAttackValue() {
        return rand($this->attackMinimal, $this->attackMaximal);
    }

    public function setAttackMaximal($attackMaximal){
         $this->attackMaximal=$attackMaximal;
    }
    public function setAttackMinimal($attackMinimal){
         $this->attackMinimal=$attackMinimal;
    }
    public function setSpecialAttack($specialAttack){
         $this->specialAttack=$specialAttack;
    }
    public function setProbabiltySpecialAttack($probabilitySpecialAttack){
         $this->probabilitySpecialAttack=$probabilitySpecialAttack;
    }
    public function isSpecialAttack() {
        return  rand(1, 100) <= $this->probabilitySpecialAttack;
    }
   
}
?>