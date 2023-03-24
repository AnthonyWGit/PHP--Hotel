<?php
class Hotel
{
    private string $_nomHotel;
    private string $_nomRue;
    private string $_numeroRue;
    private string $_codePostal;
    private string $_ville;
    private Client $_client;
    public function __construct(string $nomHotel, string $nomRue, string $numeroRue, string $codePostal, string $ville, Client $client)
    {
        $this->_nomHotel = $nomHotel;
        $this->_nomRue = $nomRue;
        $this->_numeroRue = $numeroRue;
        $this->_codePostal = $codePostal;
        $this->_ville = $ville;
        $this->_client = $client;
        $this->_client->AjouterClient($this);
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
    public function setClient(Client $client)
    {
        $this->_client = $client;
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
        return $this->_nomHotel ;
    }
    public function getClient() : Client
    {
        return var_dump($this->_client);
    }
}