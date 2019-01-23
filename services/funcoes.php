<?php

function loop($resultado_usuario){
    while($row_usuario = sqlsrv_fetch_array($resultado_usuario)){
        echo "<tr>";
        echo "<td>" . $row_usuario['ID_RHS'] . "</td>";
        echo "<td>" . $row_usuario['OBS'] . "</td>";
        echo "<td>" . $row_usuario['DT_RHS']->format('d-m-Y') . "</td>";
        echo "<td>";
        echo "</td>";
        echo "</tr>";
    }
}

?>