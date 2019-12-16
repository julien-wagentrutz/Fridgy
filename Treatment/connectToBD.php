<?php
// On met en variables les informations de connexion
$hote = '2k9zi.myd.infomaniak.com'; // Adresse du serveur
$login = '2k9zi_julienW'; // Login
$pass = 'Ventagio68'; // Mot de passe
$base = '2k9zi_fridgy'; // Base de données à utiliser

$mysqli = new mysqli($hote, $login, $pass, $base);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else
    {
    }

//echo $mysqli->host_info . "\n";
