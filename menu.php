<?php
session_start();
include_once("services/usuario.php");
$usuario = new usuario();


?>

<header class="cabecalho">
        <a href="http://192.168.1.214:8086/ramais/listar_ramais_modal.php"><img src="public/img/logo_fresadora.jpg"></a>           
        <button class="btn-menu"><i class="fa fa-bars fa-lg " aria-hidden="true"></i></button>

        <nav class="menu">
            <a class="btn-close"><i class="fa fa-times"></i></a>

            <ul>
            
                <?php                  
                    if(isset($_SESSION["Nome"])) {
                        $logado = $_SESSION["Nome"];
                        ?>
                            <<?php echo "Bem vindo $logado";  ?></li>                           
                            <div class="dropdown">
								<i class="fa fa-user"></i><span style="margin-left:10px;">Bem vindo <?php echo $logado ?> <i class="fas fa-angle-down"></i></span>
								<div class="dropdown-content">
                                    <a href="listar_rhs.php">Rhs</a> <br>
									<a href="services/logoff.php" name="sair">sair</a>                                                                   
								</div>                                
							</div>
                        <?php
                    }else{ ?>
                            <button class="btn-close">x</button>                           
                        <?php
                    }
                ?>
            <ul>
        </nav>
</header>