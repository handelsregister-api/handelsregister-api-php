<?php
require_once '../../vendor/autoload.php';

// Put your own API key here. Request your API Key on https://www.handelsregister-api.de by submitting the contact form.
$api_key = 'XXXX-XXXX-XXXX-XXXX-XXXX-XXXX-XXXX-XXXX';

try {
    $request  = new \handelsregister\Client($api_key);
        
} catch (\Exception $e) {
    die('Error: '. $e->getMessage());
}

function pp($arr){
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";
}

function backButton(){
    print '<input type="button" onclick="history.back()" value="back"><br><hr>';
}