<?php

require 'Vehicle.php';

$Car = new Car('red', 2, 1);

echo 'Try n°1 : Park Brake unlock !';
echo '<br/>';

try 
{
    $Car->start(true);
} 
catch(Exception $e)
{
    $Car->setHasParkBrake(true);
}
finally
{
    echo '<br/>';
    echo 'Ma voiture roule comme un donut';
    echo '<br/>';
}

echo '<br/>';
echo 'Try n°2 : Park Brake lock !';
echo '<br/>';


try 
{
    $Car->start(false);
} 
catch(Exception $e)
{
    $Car->setHasParkBrake(true);
    echo 'Park Brake Unlock ! <br/>';
}
finally
{
    echo 'Ma voiture roule comme un donut';
}