<!DOCTYPE html>
<html>
<?php
    $logic = `gpio read 27`;
    if($logic = "1") {
        echo "The motors are currently stopped";
    }
        else {
        echo "The motors are currently running";
    }
?>
</html>