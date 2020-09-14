<?php

function orderPizza($pizzaType, $customer)
{
    $price = getPrice($pizzaType);
    $address = getAddress($customer);

    echo "Creating new order... <br>";
    echo "A {$pizzaType} pizza should be sent to {$customer}.<br>";
    echo "The address: {$address}.<br>";
    echo "The bill is €{$price}.<br>";
    echo "Order finished.<br><br>";
}

function getAddress($customer)
{
    switch ($customer) {
        case 'koen':
            return 'a yacht in Antwerp';
        case 'manuele':
            return 'somewhere in Belgium';
        case 'students':
            return 'BeCode office';
        default:
            return 'unknown';
    }
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
