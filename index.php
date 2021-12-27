<?php

use core\interfaces\IGadget;
use app\{BookProduct, NotebookProduct, a, b};

error_reporting(-1);

require_once __DIR__ . '/vendor/autoload.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

function offerCase(IGadget $product){
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new BookProduct('Три мушкетера', 20, 1000);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');

offerCase($notebook);

debug($book);
///////////////////////////////////////////////
$classA = new A();
$classA::VALUES;

echo a::VALUES;

$classB = new b();
$classB::doubleColon();

b::doubleColon();

