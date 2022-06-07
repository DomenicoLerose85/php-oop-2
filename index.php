<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/PremiumUser.php';
require_once __DIR__ . '/classes/Products.php';
require_once __DIR__ . '/classes/Accessories.php';

$User1 = new User('Antonio', 'Surano');
echo $User1->getName();
echo $User1->getSurnaName();


$kibbles = new Products('SuperKibbles', 'Meat-Kibbles', 20);
echo $kibbles->getName();
echo '<br>';
echo $kibbles->getType();
echo '<br>';
echo $kibbles->getPrice();



// $kennel = new Accessories('Antonio', 'Surano');
// $kennel = getType('Kennel');

// var_dump($kennel);
