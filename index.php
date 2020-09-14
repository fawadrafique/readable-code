<?php

function orderPizza($pizzaType, $customer)
{
    $price = getPrice($pizzaType);

    $address = 'unknown';
    if ($customer == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($customer == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($customer == 'students') {
        $address = 'BeCode office';
    }

    echo 'Creating new order... <br>';
    echo 'A ' . $pizzaType . ' pizza should be sent to ' . $customer . ". <br>The address: {$address}.";
    echo '<br>';
    echo 'The bill is €' . $price . '.<br>';
    echo "Order finished.<br><br>";
}


function getPrice($pizzaType)
{
    switch ($pizzaType) {
        case 'marguerita':
            return 5;
        case 'golden':
            return 100;
        case 'calzone':
            return 10;
        case 'hawai':
            throw new Exception('Computer says no');
        default:
            return 'unknown';
    }
}

function order()
{
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

order();
