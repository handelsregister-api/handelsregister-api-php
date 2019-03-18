<?php
require '../init.php';

if($_GET){
    try {
        backButton();
        pp($request->requests()->start($_GET));
        
    } catch (\Exception $e) {
        echo 'Error: '. $e->getMessage();
    }
} else {

?>

<form method="get">

    document type: 
    <select name="document_type">
        <option value="AD">AD</option>
        <option value="CD">CD</option>
        <option value="SI">SI</option>
    </select>
    <br>

    return ocr: 
    <input type="checkbox" name="return_ocr">
    <br>

    is test request: 
    <input type="checkbox" name="is_test_request">
    <br>

    <hr>

    company name:<br>
    <input type="text" name="company_name">
    <br>

    register type:<br>
    <input type="text" name="register_type">
    <br>

    company number:<br>
    <input type="text" name="company_number">
    <br>

    registration court id:<br>
    <input type="text" name="registration_court_id">
    <br>

    <input type="submit" value="submit">
</form>

<?php } ?>
