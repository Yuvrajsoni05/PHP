<?php
for ($i = 1; $i <= 8; $i++ )
{
    for($j = 1; $j <= $i; $j++)
    {
        echo $j." ";
    }
    echo "</br>";
}
?>

<?php 
$num = 1;
for ($i = 1; $i <= 5; $i++)
{
    for($j =1; $j <= $i; $j++)
    {
        echo $num++." ";
    }
    echo "<br>";
}