<?php
require '../init.php';

try {
    pp($request->countries()->get());
    
} catch (\Exception $e) {
    echo 'Error: '. $e->getMessage();
}
