<?php
require '../init.php';

if($_GET){
    try {
        backButton();
        pp($request->announcements()->get($_GET));
        
    } catch (\Exception $e) {
        echo 'Error: '. $e->getMessage();
    }
} else {

?>

<form method="get">

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

    from date time (format: YYYY-MM-DDTHH:MM):<br>
    <input type="text" name="from_date_time">
    <br>

    <input type="submit" value="submit">
</form>

<?php } ?>
