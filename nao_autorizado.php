<?php

?>

<!DOCTYPE html>
<html lang="pt-br">


<?php
    include_once("header.php");    
?>
   
<body>
    
<?php
    include_once("menu.php");
?>
            
<div class="C-base" style=margin:0 auto;>

    <h1 class="titulo-obrigado">Acesso negado!</h1>
    <h1 class="titulo-obrigado">Solicite ajuda ao departamento de TI</h1>
    <a href="login.php"><input class="btn-C" value="Voltar" style="cursor: pointer;width: 93px;padding:6px; text-align:center;"></a>

</div>

<!--IMPORTACAO DO FOOTER-->    
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