<?php
require '../init.php';

try {
    pp($request->accountLimits()->get());
    
} catch (\Exception $e) {
    echo 'Error: '. $e->getMessage();
}
