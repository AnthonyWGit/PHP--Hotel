<?php
require_once('Client.php');
require_once('Hotel.php');
$result = "";
$marieGeorges = new Client("Georges","Marie","50", "Femme");
$Ibis = new Hotel("Ibis", "Rue de la Fonderie", "9", "67540", "Oswtald",$marieGeorges);
echo $marieGeorges ->getNomClient();
echo $Ibis->getVille();