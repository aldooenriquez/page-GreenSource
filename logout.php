<?php

    session_start();
    session_unset();
    session_destroy();

    echo "<script>alert('Click para cerrar sesión');</script>";
    echo "<script>window.location.href='index.php'</script>";

?>