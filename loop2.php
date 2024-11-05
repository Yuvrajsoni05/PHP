<?php
for ($i= 1; $i <= 5 ; $i++)
{
    $k = 1;
    for ($j = 1; $j <= $i; $j++)
    {
        if($j % 2 == 0)
        {
            echo "* ";
        }
        else{
            echo $k." ";
            $k++;

        }


    }
    echo "<br>";
}

?>