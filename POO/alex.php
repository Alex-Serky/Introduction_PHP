<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    /**
     *
     */
    class Etudiant
    {
      public $etudie = true;
      public $nom;
      public $age;
      public $notes;

      function __construct($nom, $age, $notes)
      {
        // Création d'une nouvelle instance d'étudiant
        $this->nom = $nom;
        $this->age = $age;
        $this->notes = $notes;
      }

      public function sePresente()
      {
        if ($this->etudie) {
          echo "Je m'appelle $this->nom et j'ai $this->age ans.<br>";
          foreach ($this->notes as $matiere => $note) {
            echo "En $matiere, j'ai obtenu $note/20.<br>";
          }
        }
      }
    }

    //Nouvel étudiant

    $notesAlexis = array("Maths"=> 17, "Français"=>9, "Physiques"=>15);
    $alexis = new Etudiant("Alexis", "45", $notesAlexis);
    $alexis->sePresente();

?>

</body>
</html>
