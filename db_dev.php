<!-- 
/*
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
} */
-->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerichte</title>
    <style>
        body {
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
        }
        .table {
            border-collapse:collapse;

    }
    .table tr:nth-child(odd) {
        background-color: #c1dce8;
    }
    .table td {
        padding: 3em;
        border-bottom-width: 1px;
    }
    </style>
</head>

<?php
$mysqli = new mysqli('localhost', 'root' , "", 'ms_user');
if($mysqli->connect_error){
    echo "Fehler bei der Datenbankverbindung: " .mysqli_connect_error();
    exit();
}
if(!$mysqli->set_charset('utf8mb4')) {
    echo "Fehler beim Zeichensatz" .$mysqli->error;
}
$sql = 'SELECT gerichte.name as gericht,
       gerichte.beschreibung as beschreibung,
       kategorien.name as gang
    FROM gerichte, kategorien
    WHERE kategorien.kategorie_id = gerichte.kategorie_id';
    $ergebnis = $mysqli->query($sql);
    ?>
    <body>
    <table class="table">
        <?php
        while($zeile = $ergebnis->fetch_array(MYSQLI_ASSOC)) {
         ?>
         <tr>
             <td><?= htmlspecialchars($zeile['gericht']); ?></td>
             <td><?= htmlspecialchars($zeile['beschreibung']); ?></td>
             <td><?= htmlspecialchars($zeile['gang']); ?></td>

         </tr>   
      <?php
        }
      ?>

    </table>
    </body>