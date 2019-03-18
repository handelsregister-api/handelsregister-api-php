<?php
require '../init.php';

try {
    pp($request->registrationCourts()->get());
    
} catch (\Exception $e) {
    echo 'Error: '. $e->getMessage();
}
