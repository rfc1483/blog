<?php

require_once 'model.php';
require_once 'controllers.php';
require_once 'vendor/symfony/src/Symfony/Component/ClassLoader/UniversalClassLoader.php';


$loader = new Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony' => __DIR__ . '/vendor/symfony/src',    
));

$loader->register();
