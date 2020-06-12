<?php
require '../logica/sesion_iniciada.php';
require '../logica/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head id="cabeza">
    <?php
    echo '
    <script src="../js/head_content.js" type="text/javascript"></script>
    <script src="../js/body_content.js" type="text/javascript"></script>
    <script>
        head("Log");
    </script>';
    ?>
</head>
<body id="test">
    <?php
    
    
    echo '
    <script>
        body("Granos Campos ",1);
    </script>';
    ?>
</body>
</html>
