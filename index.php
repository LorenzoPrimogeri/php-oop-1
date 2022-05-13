<?php
/* consegna
 è definita una classe ‘Movie’
 => all'interno della classe sono dichiarate delle variabili d'istanza
 => all'interno della classe è definito un costruttore
 => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/
class movie
{
    public $name;
    public $year;
    public $actor;

    function __construct($_name)
    {
        $this->name = $_name;
    }

    public function set($_year, $_actor)
    {
        $this->year = $_year;
        $this->actor = $_actor;
    }
    public function stampa()
    {
        echo ("<p>il nome è:" . $this->name . "</p>");
        echo ("<p>il year è:" . $this->year . "</p>");
        echo ("<p>il actor è:" . $this->actor . "</p>");
    }
}

$miglioVerde = new movie("miglioverde");
$ilClassico = new movie("ilClassico");

$miglioVerde->set(1990, "augustin lopez");
$ilClassico->set(2001, "jenifer lopez");

$miglioVerde->stampa();
$ilClassico->stampa();
echo ("<pre>");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>