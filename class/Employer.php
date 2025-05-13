<?php
class Employer
{
    public string $nom;
    public string $prenom;
    public int $age;
    //la fonction __construct est  appeler automatiquement lorsque l'on instancie la classe
    // elle permet d'initialiser les attributs de la classe
    public function __construct(string $nom, string $prenom, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
    public function presentation()
    {
        echo "<pre>";
        print_r("Bonjour! je me nome {$this->nom} {$this->prenom} et j'ai $this->age ans");
        echo "</pre>";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer</title>     
</head>
<body>

</body>
</html>