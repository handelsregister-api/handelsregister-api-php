<?php
require_once '../../vendor/autoload.php';

// This is the default Handelsregister API Test-Key. Please replace it with your own API key that you received from the customer center.
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