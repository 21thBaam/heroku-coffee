<?php
require '../logica/sesion_iniciada.php';
require '../logica/conexion.php';

echo '
    <script src="../js/head_content.js" type="text/javascript"></script>
    <script>
        head("Log");
    </script>';

if($_SESSION['id'] == 4){
        $log = consulta("SELECT * FROM log");
        echo '<div class="log">';
        for($i=0;$i < sizeof($log);$i++){
            echo '<p class="logp">'.$log[$i]["fecha"]." ".$log[$i]["tipo"]." ".$log[$i]["usuario"]."<br></p>";
        }
        echo '</div>';
}
?>
