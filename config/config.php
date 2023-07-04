<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'protocol' => env('SAP_PROTOCOL', 'rfc'),
    'bapi' => [
        'host' => env('SAP_RFC_HOST', 'http://192.168.60.7'),
        'port' => env('SAP_RFC_PORT', '8002'),
        'username' => env('SAP_RFC_USERNAME', 'basis1'),
        'password' => env('SAP_RFC_PASSWORD', 'Bvg@2022'),
        'client_number' => env('SAP_RFC_CLIENT_NUMBER', 120),
        'language' => env('SAP_BAPI_LANGUAGE', null),
        // Other specific BAPI connection parameters
    ],
    'rfc' => [
        'host' => env('SAP_RFC_HOST', 'http://192.168.60.7'),
        'port' => env('SAP_RFC_PORT', '8002'),
        'username' => env('SAP_RFC_USERNAME', 'basis1'),
        'password' => env('SAP_RFC_PASSWORD', 'Bvg@2022'),
        'client_number' => env('SAP_RFC_CLIENT_NUMBER', 120),
        'language' => env('SAP_RFC_LANGUAGE', null),
        // Other specific RFC connection parameters
    ],
    'odata' => [
        'service_url' => env('SAP_ODATA_SERVICE_URL', 'your-odata-service-url'),
        'username' => env('SAP_ODATA_USERNAME', 'your-odata-username'),
        'password' => env('SAP_ODATA_PASSWORD', 'your-odata-password'),
        // Other specific OData connection parameters
    ],
];
