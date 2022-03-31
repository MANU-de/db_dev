<?php 
//PDO
//Verbindung zur Datenbank aufbauen
//PHP Fehlermeldungen anzeigen
error_reporting(E_ALL);
ini_set('display errors', true);

//Zugangsdaten zur Datenbank
$DB_HOST = "localhost"; //Host-Adresse
$DB_NAME = "ms_user"; //Datenbankname
$DB_BENUTZER = "root"; //Benutzername
$DB_PASSWORT = ""; //Passwort

//Zeichenkodierung UTF-8 (utf8mb4) bei der Verbindung setzen
//Eine PDOException bei einem Fehler auslösen
$OPTION = [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    //Verbindung zur Datenbank aufbauen
    $db = new PDO ("mysql:host=" . $DB_HOST . ";dbname=" . $DB_NAME,
    $DB_BENUTZER, $DB_PASSWORT, $OPTION);
} 
catch(PDOException $e) {
    //Bei einer Fehlerhaften Verbindung eine Nachricht ausgeben
    exit("Verbindung fehlgeschlagen! " . $e->getMessage());
}


//mysqli
$mysqli = new mysqli('localhost', 'root' , "", 'ms_user');
if($mysqli->connect_error){
    die("Fehler bei der Datenbankverbindung: " .mysqli_connect_error());
}
echo "Verbindung hergestellt";
$mysqli->close();
?>