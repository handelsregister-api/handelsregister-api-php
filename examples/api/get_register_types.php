<?php
require '../init.php';

try {
    pp($request->registerTypes()->get());
    
} catch (\Exception $e) {
    echo 'Error: '. $e->getMessage();
}
