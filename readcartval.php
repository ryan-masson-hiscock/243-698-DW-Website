<!DOCTYPE html>
<html>
<?php
    $logic = `gpio read 27`;
    if($logic = "1")
        echo "The motors are currently in brake mode"; 
    if($logic = "0")
        echo "The motors are currently in running mode";
?>
</html>