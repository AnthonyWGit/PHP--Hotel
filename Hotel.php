<?php
class Hotel
{
    private string $_nomHotel;
    private string $_nomRue;
    private string $_numeroRue;
    private string $_codePostal;
    private string $_ville;
    // un hotel a plusieurs chambres
    private array $_chambres;
    private array $_chambresDispo;
    public function __construct(string $nomHotel, string $nomRue, string $numeroRue, string $codePostal, string $ville)
    {
        $this->_nomHotel = $nomHotel;
        $this->_nomRue = $nomRue;
        $this->_numeroRue = $numeroRue;
        $this->_codePostal = $codePostal;
        $this->_ville = $ville;
        $this->_chambres = [];
        $this->_chambresDispo = [];
    }
    //SETTERS
    public function setNomHotel(string $nomHotel)
    {
        $this->_nomHotel = $nomHotel;
    }
    public function setNomRue(string $nomRue)
    {
        $this->_nomRue = $nomRue;
    }
    public function setNumeroRue(string $numeroRue)
    {
        $this->_numeroRue = $numeroRue;        
    }
    public function setCodePostal(string $codePostal)
    {
        $this->_codePostal = $codePostal;        
    }
    public function setVille(string $ville)
    {
        $this->_ville = $ville;
    }

    // __________________GETTERS_________________________
    public function getNomHotel() : string
    {
        return $this->_nomHotel ;
    }
    public function getNumeroRue() : string
    {
        return $this->_numeroRue ;
    }
    public function getNomRue() : string
    {
        return $this->_nomRue ;
    }
    public function getCodePostal() : string
    {
        return $this->_codePostal ;
    }
    public function getVille() : string
    {
        return $this->_ville ;
    }
    public function getChambresDispo() : array
    {
        return $this->_chambresDispo;
    }
    //____________________________________________________

    public function ajouterChambre(Chambre $chambre)
    {
        $this->_chambres[] = $chambre;
    }
    /* Chambres disponibles = création d'un array associatif constitué uniquement de 
    $_chambresDispo [] = $chambre => $disponibilité OU
    compter le nombre de chambres totales - le nombre de réservations*/
    public function ajouterChambreDispo(Chambre $chambreDispo)
    {
        $this->_chambresDispo[] = $chambreDispo;
    }
 
    public function afficherChambres() : string
    {
        $result = "Chambres de l'hôtel".$this->_nomHotel."<br>";
        foreach ($this->_chambres as $chambre)
        {
            $result .="Chambre numéro ".$chambre." <br>";
        }
        return $result;
    }
    public function infosHotel() : string
    {
        $result = "<h3>Hotel ".$this->_nomHotel ."</h3><br>";
        $result .= $this->_numeroRue. " ".$this->_nomRue." ".$this->_ville. " ".$this->_codePostal." <br>";
        $result .= "Nombre de chambres : ".count($this->_chambres)." <br>"; //count pour compter les éléments dans un array
        $result .= "Nombre de chambres dispo : ".count($this->_chambresDispo) ."<br>";

        return $result;
    }
    public function __toString()
    {
        $result = $this->_nomHotel. " ".$this->_ville;
        return $result;
    }
}