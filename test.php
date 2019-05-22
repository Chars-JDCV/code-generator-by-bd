<?php
$vector = array('x'=>array(),'y'=>array());

for ($i=0; $i <120 ; $i++) { 
    $suma = rand(5, 15);
    if ($i%2==0) {
        array_push($vector['x'],$suma);
        echo $suma.'<->';
    }
    else {
        array_push($vector['y'],$suma);
        echo $suma;
        echo '<br>';
    }
}
print_r($vector);