<?php

require __DIR__ . '/../../vendor/autoload.php';

use \GuzzleHttp\Exception\ClientException as GuzzleClientException;

$args = array(
    'PRIVATE_TOKEN' => 'YOUR_PRIVATE_TOKEN',
    'CLIENT_ID' => 'CLIENT_ID',
    'CLIENT_SECRET' => 'CLIENT_SECRET'
);

try {
    $dataService = new \TamoJuno\Data($args);
    $business = $dataService->getBusinessAreas();
    print_r($business);
} catch (GuzzleClientException $e) {
    print_r($e->getResponse()->getBody()->getContents());

}
