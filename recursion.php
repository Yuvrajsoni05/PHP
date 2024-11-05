<?php

function d($number){
    if ($number <= 20){
        echo "$number <br>";
        d($number+1);
    }
}
d(2);

?>