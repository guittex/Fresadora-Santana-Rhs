<?php
include_once("services/conexao_rhs.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<!--IMPORTAÇÃO DO HEADER-->
<?php
    include_once("header.php");    
?>

<body>

<!--IMPORTAÇÃO DO MENU-->      
<?php
    include_once("menu.php");
?>

<!--IMPORTAÇÃO DO BOOTSTRAP-->    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!--VALIDAÇÃO DE SESSAO-->    
<?php
if (isset( $_SESSION["timer"] ) ) { 
    if ($_SESSION["timer"] < time() ) { 
        session_destroy();		
        header('Location: sessao_expirada.php');
    } else {
        //Seta mais tempo 60 segundos
        $_SESSION["timer"] = time() + 300;
    }
} else { 
    session_destroy();
    header('Location: sessao_expirada.php');	
    //Redireciona para login
}
?>
            
<!--TITULO-->	
<h1 class="titulo-obrigado">Solicitação de RHS</h1>
	
<div class="C-base" style="margin-left:0 auto;"> 
    
    <!--FORMULARIO DE SOLICITACAO RHS-->
    <form method="POST" action="services/cadastro_RHS.php">
        
        <div class="row"> 
            
            <div  role="main" class="col-md-6"> 
                <p><label for="rhs">Setor Solicitante:</label>
                    <input type="text" name="rhs" id="rhs" onkeyup="this.value = this.value.toUpperCase();" required/></p>
            
                <p><label for="rhs">Destinatario:</label>
                    <input type="text" name="rhs1" id="rhs" onkeyup="this.value = this.value.toUpperCase();" required/></p>
            </div>
            
            <aside role="complementary" class="col-md-6">   
                <p><label for="obs">Serviço:</label>
                    <textarea type="text" name="rhs2" id="rhs" onkeyup="this.value = this.value.toUpperCase();" required></textarea>
            </aside>
            
        </div>
        
        <input class="btn-C" type="submit" value="Salvar" style="cursor: pointer; width: 93px; padding:6px;">
    </form>


</div>

<!--INCLUSAO DO FOOTER-->    
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