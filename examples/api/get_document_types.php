<?php
require '../init.php';

try {
    pp($request->documentTypes()->get());
    
} catch (\Exception $e) {
    echo 'Error: '. $e->getMessage();
}
