<?php
    include_once("conexao_rhs.php");
    $rhs = $_POST['rhs'];
    $rhs1 = $_POST['rhs1'];
    $rhs2 = $_POST['rhs2'];
    $concatenacao = $rhs . ' PARA ' . $rhs1 . ' - ' . $rhs2;
        
    $sql = "INSERT INTO dbo.RHS (OBS,DT_RHS) VALUES ('$concatenacao', GETDATE())";
    $result = sqlsrv_query($con, $sql);
    header('Location: ../listar_rhs.php');




?>