<?php
class Chambre
{
    private int $_numeroChambre;
    private bool $_wifi;
    private bool $_disponibilite;
    private int $_chambresDisponible; 
    private int $_chambresIndisponible;

    public function __construct(int $numeroChambre, bool $wifi, bool $disponibilite, int $chambreDisponible, int $chambresIndisponible)
    {
        $this->_numeroChambre = $numeroChambre;
        $this->_wifi = false;
        $this->_disponibilite = false;
        $this->_chambresDisponible = $chambreDisponible;
        $this->_chambresIndisponible = $chambresIndisponible;
    }
//__________________SETTERS
    public function setNumeroChambre(int $numeroChambre)
    {
        $this->_numeroChambre = $numeroChambre;
    }
    public function setWifi()
    {
        $this->_wifi = true;
    }
    public function setDisponibilité()
    {
        $this->_disponibilite = false;
    }
    public function setChambresDisponible(int $chambreDisponible)
    {
        $this->_chambresDisponible = $chambreDisponible;
    }
    public function setChambresIndisponible(int $chambresIndisponible)
    {
        $this->_chambresIndisponible = $chambresIndisponible;
    }

    // ______________________________GETTERS__________________________
    public function getNumeroChambre() : int
    {
        return $this->_numeroChambre;
    }
    public function getWifi() : bool
    {
        return $this->_wifi;
    }
    public function getDisponibilite() : bool
    {
        return $this->_disponibilite;
    }
    public function getChambresDisponibles() : int
    {
        return $this->_chambresDisponible
    }
    public function getChambresIndisponibles() : int
    {
        return $this->_chambresIndisponible
    }
    
}