<?php
class Client
{
    private string $_nomClient;
    private string $_prenomClient;
    private string $_age;
    private string $_sexe;
    private array $_clients;

    public function __construct(string $nomClient, string $prenomClient, string $age, string $sexe)
    {
        $this->_nomClient = $nomClient;
        $this->_prenomClient = $prenomClient;
        $this->_age = $age;
        $this->_sexe = $sexe;
        $this->_clients = [];
    }

    // SETTERS
    public function setNomClient(string $nomClient)
    {
        $this->_nomClient = $nomClient;
    }
    public function setPrenomClient(string $prenomClient)
    {
        $this->_prenomClient = $prenomClient;
    }
    public function setAge(string $age)
    {
        $this->_age = $age;
    }
    public function setSexe(string $sexe)
    {
        $this->_sexe = $sexe;
    }

    // GETTERS
    public function getNomClient() : string
    {
        return $this->_nomClient;
    }
    public function getPrenomClient() : string
    {
        return $this->_prenomClient;
    }
    public function getAge() : string
    {
        return $this->_age;
    }
    public function getSexe() : string
    {
        return $this->_sexe;
    }
    // _______________________

    public function ajouterClient(Client $client)
    {
        $this->_clients[] = $client;
    }

}