<?php
//teste2

// esta  sintaxe  de array  somente para  php5.4+
$array = [
    'Apple',
    'Microsoft',
    'HP'
];

$iterator = new ArrayIterator($array);

//echo $iterator->current();
$iterator->next();
echo $iterator->current();
//
echo $iterator->count();
