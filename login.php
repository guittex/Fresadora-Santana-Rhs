<?php
include_once("services/usuario.php");
$usuario = new usuario(); 
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

        //Verifica se tem a sessão
        if (isset($_SESSION["Nome"]) ) { 
            header('Location: listar_rhs.php');
            } 
        
        ?>       
            
	
	<h1 class="titulo-obrigado">Entrar</h1>
	<div class="C-base">
		    
            <form method="POST">
                <?php
                if(!empty($_GET['error'])){
                    if($_GET['error'] == 1){
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" style=padding:10px;>
                            USUÁRIO OU SENHA ESTÃO INCORRETAS!
                        </div>
                        <?php
                    }
                }
                ?>
                <input type="hidden" name="cod_post" id="cod_post" value="2"></br>
	            <label>Login:</label><input class="form-control form-control-lg" type="text" name="Login" id="Login" required></br>
	            <label>Senha:</label><input class="form-control form-control-lg" type="password" name="Senha" id="Senha" required>
	            <input class="btn-C" type="submit" name="enviar" value="Entrar" style="cursor: pointer;margin-top: 20px;">
	            
            </form>

            <?php
                $enviar = filter_input(INPUT_POST, 'enviar', FILTER_SANITIZE_STRING);
                if($enviar){                      
                    $usuario->login($Login, $Senha);                  

                }

            ?>


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