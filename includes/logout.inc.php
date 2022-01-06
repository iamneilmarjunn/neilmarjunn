<?php

session_start();
session_unset();
session_destroy();

header("location: ../index.php");
exit();

?>

<script type = "text/javascript" >
    function preventBack(){window.history.forward();}
    setTimeout("preventBack()", -100);
    window.onunload=function(){null};
</script>