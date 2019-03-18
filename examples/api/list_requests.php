<?php
require '../init.php';

if($_GET){
    try {
        backButton();
        pp($request->requests()->list($_GET));
        
    } catch (\Exception $e) {
        echo 'Error: '. $e->getMessage();
    }
} else {

?>

<form method="get">

    status: 
    <select name="status">
        <option value="New">New</option>
        <option value="Error">Error</option>
        <option value="Processed">Processed</option>
        <option value="Archived">Archived</option>
    </select>
    <br>

    from date time (format: YYYY-MM-DDTHH:MM):<br>
    <input type="text" name="from_date_time">
    <br>

    to date time (format: YYYY-MM-DDTHH:MM):<br>
    <input type="text" name="to_date_time">
    <br>

    <input type="submit" value="submit">
</form>

<?php } ?>
