<?php
require_once("Object.php");

class Auteur extends Object {

    protected $nom;
    protected $prenom;
    protected $mail;
    protected $pseudo;
    protected $mdp;
    protected $desc;

    public function __construct($_id, $_actif, $_nom, $_prenom, $_mail, $_pseudo, $_mdp, $_desc) {
        $this->setId($_id);
        $this->setActif($_actif);
        $this->setNom($_nom);
        $this->setPrenom($_prenom);
        $this->setMail($_mail);
        $this->setPseudo($_pseudo);
        $this->setMdp($_mdp);
        $this->setDesc($_desc);
    }

    /*public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);
            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }*/

    public function setNom($_nom) { $this->nom = $_nom; }
    public function setPrenom($_prenom) { $this->prenom = $_prenom; }
    public function setMail($_mail) { $this->mail = $_mail; }
    public function setPseudo($_pseudo) { $this->pseudo = $_pseudo; }
    public function setMdp($_mdp) { $this->mdp = $_mdp; }
    public function setDesc($_desc) { $this->desc = $_desc; }

    public function getNom() { return $this->nom; }
    public function getPrenom() {  return $this->prenom; }
    public function getMail() {  return $this->mail; }
    public function getPseudo() {  return $this->pseudo; }
    public function getMdp() {  return $this->mdp; }
    public function getDesc() {  return $this->desc; }
}
?>
