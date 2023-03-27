<?php
require_once('Client.php');
require_once('Hotel.php');
require_once('Chambre.php');
require_once('Reservation.php');
$result = "";
$Ibis = new Hotel("Ibis", "Rue de la Fonderie", "9", "67540", "Oswtald");
$marieGeorges = new Client("Georges","Marie","50", "Femme",$Ibis);
$cantalCharleot = new Client("Cantal","Charlot","43","Homme",$Ibis);
$chambre1 = new Chambre($Ibis, 1, false, true, 200.99, 2);
$chambre2 = new Chambre($Ibis, 2, true, true, 50, 1);
$chambre3 = new Chambre($Ibis, 3, false, true, 200.99, 2);
$chambre4 = new Chambre($Ibis, 4, true, true, 50, 1);
$chambre5 = new Chambre($Ibis, 5, false, true, 200.99, 2);
$chambre6 = new Chambre($Ibis, 6, true, true, 50, 1);
$chambre7 = new Chambre($Ibis, 7, false, false, 50, 1);
$reservation1 = new Reservation("02 mai 2023", "05 mai 2023", $Ibis, $marieGeorges, $chambre1);
$reservation2 = new Reservation("09 mai 2023", "13 mai 2023", $Ibis, $marieGeorges, $chambre1);
$reservation3 = new Reservation("16 mai 2023", "19 mai 2023", $Ibis, $marieGeorges, $chambre5);
$reservation4 = new Reservation("25 juin 2020", "30 juin 2020", $Ibis,$cantalCharleot,$chambre7);
echo $marieGeorges ->getNomClient();
echo $Ibis->getVille();
echo $chambre1->afficherWifi();
echo $chambre1->afficherDisponibilite();
echo $Ibis->afficherChambres();
echo $chambre1->infosChambre();
echo $chambre2->infosChambre();
echo $Ibis->infosHotel();
echo $marieGeorges->afficherReservationDuClient();
echo $Ibis->infosReservation();