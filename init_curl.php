<?php

/**
 * DO NOT CHECK THIS INTO SOURCE CODE CONTROL IF IT CONTAINS AN ACCESS TOKEN - SEE README FOR MORE DETAILS
 */
$headers = [
    "User-Agent: Example REST API Client",
    "Authorization: token YOUR_ACCESS_TOKEN"
];

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => true
]);

return $ch;
