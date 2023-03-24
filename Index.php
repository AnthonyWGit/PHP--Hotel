<?php
require_once('Client.php');
require_once('Hotel.php');
require_once('Chambre.php');
$result = "";
$marieGeorges = new Client("Georges","Marie","50", "Femme");
$Ibis = new Hotel("Ibis", "Rue de la Fonderie", "9", "67540", "Oswtald",$marieGeorges);
$chambre1 = new Chambre($Ibis, 1, false, true, 200.99, 2);
$chambre2 = new Chambre($Ibis, 2, true, true, 50, 1);
echo $marieGeorges ->getNomClient();
echo $Ibis->getVille();
echo $chambre1->afficherWifi();
echo $chambre1->afficherDisponibilite();
$Ibis->ajouterChambre($chambre1);
$Ibis->ajouterChambre($chambre2);
echo $Ibis->afficherChambres();