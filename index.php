<?php
//inclusion du fichier contenant la classe Employer
require_once "class/Employer.php";

//creation de 3 objets de la classe Employer
$employer1 = new Employer("clara", "cloe", 19);
$employer2 = new Employer("charnelle", "maiva", 20);
$employer3 = new Employer("archange", "laelle", 22);

//appel de la mathode presentation de chaque objet
$employer1->presentation();
$employer2->presentation();
$employer3->presentation();



$nom1 = "clara";
$prenom1 = "cloe";
$age1 = 19;

$nom2 = 'charnelle';
$prenom2 = "maiva ";
$age2 = 20;

function presentation($nom, $prenom, $age)
{
    echo "<pre>";
    print_r("Bonjour! je me nome  $nom $prenom et j'ai $age ans");
    echo "</pre>";
    
}

presentation($nom2, $prenom2, $age2);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>presentation</title>
</head>
<body>
    
</body>
</html>