<?php
session_start();


?>

<header class="cabecalho">
        <a href="http://192.168.1.214:8086/ramais/listar_ramais_modal.php"><img src="img/logo_fresadora.jpg"></a>           
        <button class="btn-menu"><i class="fa fa-bars fa-lg " aria-hidden="true"></i></button>

        <nav class="menu">
            <a class="btn-close"><i class="fa fa-times"></i></a>

            <ul>

                <?php
                    if(isset($_SESSION["nome"])) {
                        $logado = $_SESSION["nome"]
                        ?>
                            <li style="color: white;"> <?php echo "Bem vindo $logado";  ?></li> 
                            <li><a href="listar_rhs.php">Rhs</a></li>
                            <li><a href="services/logoff.php">Sair</a></li>
                            <button class="btn-close">x</button>
                        <?php
                    }else{ ?>
                            <button class="btn-close">x</button>
                        <?php
                    }
                ?>
            <ul>
        </nav>
</header>