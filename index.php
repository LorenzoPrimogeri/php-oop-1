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


    function __construct($_name, $_year, $_actor)
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->actor = $_actor;
    }
}
$miglioVerde = new movie("miglioverde", 2002, "tom Cruise");
echo ($miglioVerde);

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