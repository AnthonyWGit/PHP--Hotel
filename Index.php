<?php
//Fichiers classe
require_once('Client.php');
require_once('Hotel.php');
require_once('Chambre.php');
require_once('Reservation.php');
$result = "";
//Instancier des hotels
$ibisStbg = new Hotel("Ibis", "Rue de la Fonderie", "9", "67540", "Oswtald");
$paxHotelParis = new Hotel("Pax Hotel Paris","Rue Simart", "7", "75018", "Paris");
//Instancier des client(e)s
$marieGeorges = new Client("Georges","Marie","50", "Femme",$ibisStbg);
$cantalCharleot = new Client("Cantal","Charlot","43","Homme",$ibisStbg);
//Instancier des chambres 
$chambre1 = new Chambre($ibisStbg, 1, false, true, 200.99, 2);
$chambre2 = new Chambre($ibisStbg, 2, true, true, 50, 1);
$chambre3 = new Chambre($ibisStbg, 3, false, true, 200.99, 2);
$chambre4 = new Chambre($ibisStbg, 4, true, true, 50, 1);
$chambre5 = new Chambre($ibisStbg, 5, false, true, 200.99, 2);
$chambre6 = new Chambre($ibisStbg, 6, true, true, 50, 1);
$chambre7 = new Chambre($ibisStbg, 7, false, false, 50, 1);
//Instancier des réservations
$reservation1 = new Reservation("02 mai 2023", "05 mai 2023", $ibisStbg, $marieGeorges, $chambre1);
$reservation2 = new Reservation("09 mai 2023", "13 mai 2023", $ibisStbg, $marieGeorges, $chambre1);
$reservation3 = new Reservation("16 mai 2023", "19 mai 2023", $ibisStbg, $marieGeorges, $chambre5);
$reservation4 = new Reservation("25 juin 2020", "30 juin 2020", $ibisStbg,$cantalCharleot,$chambre7);
/*
echo $marieGeorges ->getNomClient();
echo $ibisStbg->getVille();
echo $chambre1->afficherWifi();                      TESTS USELESS
echo $chambre1->afficherDisponibilite();
*/
echo $ibisStbg->afficherChambres();
/* echo $chambre1->infosChambre();
echo $chambre2->infosChambre();
*/
echo $ibisStbg->infosHotel();
echo $marieGeorges->afficherReservationDuClient();
echo $ibisStbg->infosReservation();
