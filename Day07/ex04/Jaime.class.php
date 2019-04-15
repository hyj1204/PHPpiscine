<?PHP
class Jaime {
    function sleepWith($who)
    {
        if ($who instanceof Tyrion)
            echo "Not even if I'm drunk !" . PHP_EOL;
        else if ($who instanceof Stark)
            echo "Let's do this." . PHP_EOL;
        else if ($who instanceof Lannister)
            echo "With pleasure, but only in a tower in Winterfell, then" . PHP_EOL;

    }

} 
?>