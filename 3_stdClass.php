<?php

function toStd(array $arr): object
{

    $obj = new \stdClass();
    foreach ($arr as $key => $value) {
        $obj->$key = $value;
    }
    return $obj;
}

$data = [
    'key' => 'value',
    'key2' => 'value2',
];

$config = toStd($data);
print_r($config->key); // value
print_r($config->key2); // value2