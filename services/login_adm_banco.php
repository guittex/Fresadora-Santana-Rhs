<?php
    include_once("conexao.php");
    if(!empty($_POST)){
        $login = $_POST['Login'];
        $senha = $_POST['Senha'];
        $sql = "SELECT * FROM dbo.TB_Usuario WHERE Login = '$login' and Senha = '$senha' ";
        $result = sqlsrv_query($con, $sql);
        while ($row = sqlsrv_fetch_array($result)){
            $nome = $row['Nome'];
        }           
        
        //VERIFICA SE A QUERY É TRUE
        if ($result) {
            $rows = sqlsrv_has_rows( $result );
            if ($rows === true){
                header('Location: ../listar_rhs.php');
                session_start();
                $_SESSION["nome"]=$nome;
                $_SESSION["timer"]=time() + 300;
            }else {
                header('Location: ../login.php?error=1');
            }
        }        
    }	



?>


