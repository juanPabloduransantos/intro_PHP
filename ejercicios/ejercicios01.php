<?php
function costoLlamada($minutos) {
    if ($minutos <= 3) {
        return 300;
    } else {
        return 300 + (($minutos - 3) * 50);
    }
}
?>