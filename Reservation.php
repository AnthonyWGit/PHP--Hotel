<?php
class Reservation
{
    //Regarder booking.com pour mieux visualiser
    private string $_dateArrivee;
    private string $_dateDepart;
    private string $_ville;
    //Un client fait UNE réservation
    private Client $_client;
    private Hotel $_nomHotel;

    public function __construct(string $dateArrivee, string $dateDepart, Hotel $nomHotel, Client $client)
    {
        $this->_dateArrivee = $dateArrivee;
        $this->_dateDepart = $dateDepart;
        $this->_nomHotel = $nomHotel;
        $this->_client = $client;
        $this->_client->ajouterReservation($this);
    }
    //______________________SETTERS_________________________________
    public function setDepart(string $dateDepart) 
    {
        $this->_dateDepart = $dateDepart;
    }
    public function setArrivee(string $dateArrivee)
    {
        $this->_dateArrivee = $dateArrivee;
    }
    public function setVille(string $ville)
    {
        $this->_ville = $ville;
    }
    public function setClient(Client $client)
    {
        $this->_client = $client;
    }
//________________________________GETTERS_____________________

    public function getDepart() : string
    {
        return $this->_dateDepart;
    }
    public function getArrivee() : string
    {
        return $this->_dateArrivee;
    }
    public function getVille() : string
    {
        return $this->_ville;
    }
    public function getClient() : Client
    {
        return $this->_client;
    }
    public function afficherReservation()
    {
        $result = "<h1>".$this->_nomHotel. " </h1>".$this->_dateArrivee. " au ".$this->_dateDepart. "<br>";
        return $result;
    }
    public function __toString()
    {
        $result =$this->afficherReservation();
        return $result;
    }

}