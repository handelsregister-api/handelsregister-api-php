<?php
require '../init.php';

if($_GET){
    try {
        backButton();
        pp($request->requests()->updateStatus($_GET));
        
    } catch (\Exception $e) {
        echo 'Error: '. $e->getMessage();
    }
} else {

?>

<form method="get">

    prim uid:<br>
    <input type="text" name="prim_uid">
    <br>

    <input type="submit" value="submit">
</form>

<?php } ?>
