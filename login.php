﻿<?php


?>

<!DOCTYPE html>
<html lang="pt-br">
<?php
include_once("header.php");
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">


<body class="fundo3">
        <?php
            include_once("menu.php");
        ?>
            
	
	<h1 class="titulo-obrigado">Entrar</h1>
	<div class="C-base">
		    
            <form method="POST" action="services/login_adm_banco.php">
                <?php
                if(!empty($_GET['error'])){
                    if($_GET['error'] == 1){
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            USUÁRIO OU SENHA ESTÃO INCORRETAS!
                        </div>
                        <?php
                    }
                }
                ?>

	            <label>Login:</label><input class="form-control form-control-lg" type="text" name="Login" id="Login" required></br>
	            <label>Senha:</label><input class="form-control form-control-lg" type="password" name="Senha" id="Senha" required>
	            <input class="btn-C" type="submit" name="enviar" value="Entrar" style="cursor: pointer;margin-top: 20px;">
	            
            </form>

    </div>
    </div>
            <?php
                include_once("footer.php");
            ?>
			<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>

        	<script>
            	$(".btn-menu").click(function(){
                	$(".menu").show();
            	});

            	$(".btn-close").click(function(){
                	$(".menu").hide();
            	});
        </script>
</body>
</html>