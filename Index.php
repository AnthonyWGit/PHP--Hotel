<?php
require_once('Client.php');
require_once('Hotel.php');
$result = "";
$marieGeorges = new Client("Georges","Marie","50", "Femme");
echo $marieGeorges ->getNomClient();