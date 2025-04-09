<?php
class Pokemon{
    protected $nom;
    protected $url;
    protected $hp;
    protected $attackPokemon;
    protected $type= "Normal";

    public function __construct($nom,$url,$hp,$attackPokemon){
        $this->nom=$nom;
        $this->url=$url;
        $this->hp=$hp;
        $this->attackPokemon=$attackPokemon;
    }
    public function isDead(){
        return ($this->hp) <=0 ;
    }
    public function getHp() {
        return $this->hp;
    }

    public function getNom() {
        return $this->nom;
    }
    public function getUrl() {
        return $this->url;
    }
    public function getAttackPokemon() {
        return $this->attackPokemon;
    }
    public function getType() {
        return $this->type;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }
    public function setUrl($url){
        $this->url=$url;
    }
    public function setHp($hp){
        $this->hp=$hp;
    }
    public function setAttackPokemon($attackPokemon) {
        $this->attackPokemon = $attackPokemon;
    }
    
    public function getDamage($damage) {
        $this->hp -= $damage;
        if ($this->hp < 0){
            $this->hp = 0;}
    }
    public function attack(Pokemon $p) {
        $atk = $this->attackPokemon->getAttackValue();
        
        if ($this->attackPokemon->isSpecialAttack()) {
            $atk = $atk * $this->attackPokemon->getSpecialAttack();
        }
    
        $rate = $this->getDamageRate($p);
        $finalDamage = $atk * $rate;
    
        if ($this->attackPokemon->isSpecialAttack()) {
            echo "<strong>{$this->nom}</strong> fait une <em>attaque spéciale</em> et cause $finalDamage dégâts à <strong>{$p->getNom()}</strong>!<br>";
        } else {
            echo "<strong>{$this->nom}</strong> attaque normalement et cause $finalDamage dégâts à <strong>{$p->getNom()}</strong>!<br>";
        }
    
        $p->getDamage($finalDamage);
    }
    protected function getDamageRate(Pokemon $p) {
        return 1;
    }
    public function whoAmI() {
        echo "Nom: $this->nom<br>";
        echo "Type: $this->type<br>";
        echo "HP: $this->hp<br>";
        echo "<img src='$this->url' width='100'><br><br>";
    }
}