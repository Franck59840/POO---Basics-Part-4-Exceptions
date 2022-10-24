<?php
require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getcurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake() . '<br>';

require_once 'Cars.php';



$car = new Cars('green', 4, 'electric', 4);

// Test sans le frein à main mis au départ

    try{
        echo $car->start() . '</br>';
    }
    catch (Exception $e)
    {
        echo $e->getMessage() . '</br>';
        echo $car->setParkBrake() . '</br>';
    }
    finally
    {
        echo "Ma voiture roule comme un donut.</br>";
    }

    // Test avec le frein à main mis au départ

    echo '</br>';

    // Mise du frein à main au départ
    echo $car->setParkBrake();

    try{
        echo $car->start() . '</br>';
    }
    catch (Exception $e)
    {
        echo 'Attention: ' . $e->getMessage() . '</br>';
        echo $car->setParkBrake() . '</br>';
    }
    finally
    {
        echo "Ma voiture roule comme un donut.</br>";
    }

require_once 'Trucks.php';
$tanker = new Trucks('white', 3, 'fuel', 34000);
echo  $tanker->forward();
echo '<br> Vitesse du camion : ' . $tanker->getCurrentSpeed() . ' km/h' . '<br>';
echo $tanker->brake();
echo '<br> Vitesse du camion : ' . $tanker->getCurrentSpeed() . ' km/h' . '<br>';
echo $tanker->brake();
echo '<br> Chargement du camion: '. $tanker->getLoading(). ' litres' . '<br>';
echo $tanker->loading(). '<br>';

?>