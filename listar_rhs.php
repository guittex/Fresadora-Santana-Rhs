<?php
include_once("services/rhs.php");
include_once("services/sql_conexao.php");
$rhs = new conexao_rhs();



?>


<!DOCTYPE html>
<html lang="pt-br">

<!--IMPORTACAO DO HEADER-->    
<?php
include_once("header.php");
?>

<!--IMPORTACAO DO BOOTSTRAP-->  
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">    

<body style="font-size: 24px;">

<!--IMPORTACAO DO MENU--> 
<?php
include_once("menu.php");

//Verifica se tem a sessão
if ( isset( $_SESSION["timer"] ) ) { 
	if ($_SESSION["timer"] < time() ) { 
        session_destroy();		
        header('Location: sessao_expirada.php');
	} else {
		//Seta mais tempo para o timer
		$_SESSION["timer"] = time() + 300;
	}
} else { 
    session_destroy();
    header('Location: sessao_expirada.php');	
	//Redireciona para login
}
?>

<!--INICIO DO CONTAINER-->
<div class="container-fluid theme-showcase" role="main">

    <!--TITULO LISTAR RHS-->
    <div class="page-header">
        <h1 style="text-align: center;">RHS</h1>
    </div>

    <!--PESQUISAR RHS POR ID-->
    <div class="row" style="display: inherit; margin-top: 40px">
        <div class="col-12">
            <form method="POST">                
                <!--<label style="font-size: 18px;">Nome:</label>-->
                <input type="text" name="ID_RHS" placeholder="Digite o ID para pesquisar" style="padding: 0%; width: 33%;">
                <input type="text" name="OBS" placeholder="Digite alguma palavra para pesquisar" style="padding: 0%; width: 33%;">
                <button name="SendPesqUser" id="SendPesqUser" class="btn btn-xs btn-dark"  value="Pesquisar"> Pesquisar</button>			 
            </form>
        </div>
    </div>

    <!--TABELA LISTAR RHS-->
    <div class="row" id="tabela_listar_rhs" STYLE="display: inherit;">
        <div class="col-md-12 table-striped table-responsive shadow p-3 mb-5 bg-white rounded">
            <table class="table ">
                <thead class="">
                <tr>
                    <th class="">RHS</th>
                    <th>SERVIÇO</th>
                    <th>DATA</th>
                    <th><a href=cadastrar_rhs.php><button type=button class='btn btn-xs btn-success' style='margin: 0px 6px 0px'>Solicitar</button></a></th>
                    
                    <?php
                        $SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
                        if($SendPesqUser){
                            echo "<th>"; 
                            echo "<a href=listar_rhs.php style='color: inherit'</a><button type=button class='btn btn-xs btn-dark'>Voltar</button>";
                            echo "</th>";
                            
                        }
                        
                    ?>
                    </th>
                </tr>
                </thead>

                <tbody>

                <!--Inicio Loop com pesquisar-->
                <?php
                $SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
                if($SendPesqUser){     
                    $ID_RHS = filter_input(INPUT_POST, 'ID_RHS', FILTER_SANITIZE_NUMBER_INT);
                    $OBS= filter_input(INPUT_POST, 'OBS', FILTER_SANITIZE_STRING);       
                    if($ID_RHS == "" && $OBS == ""){
                        echo
                        "<script>
                            alert('Digite algo para pesquisar');
                            window.location.href=' listar_rhs.php';
                        </script>";
                    } else{
                        $rhs->pesquisar($ID_RHS,$OBS);
                    }
                }

                ?>	                
                <!-- Inicio Loop sem pesquisar-->                 
                <tr>
                    <?php
                        if(!$SendPesqUser){                                   
                            $rhs->pesquisar("","");        
                        }
                    ?>
                </tr>         
                
                </tbody>
            </table>            
        </div>
    </div>

   
</div>

<!-- Inicio Modal CADASTRAR
<div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel" style="text-align: center;">Cadastrar Ramal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="services/cadastro_ramal_banco.php" enctype="multipart/form-data" style="font-size: 13px;">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Nome:</label>
                        <input name="nome" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-departamento" class="control-label">Departamento:</label>
                        <input name="departamento" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-ramal" class="control-label">Ramal:</label>
                        <input name="ramal" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-email" class="control-label">Email:</label>
                        <input name="email" type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-corporativo" class="control-label">Celular:</label>
                        <input name="corporativo" type="text" class="form-control" >
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
Fim Modal -->

<!--INICIO MODAL EDITAR
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel" style="text-align: center;"><?php echo $rows_orcamento['nome']; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="services/editar_ramal_banco.php">

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Nome:</label>
                        <input name="nome" type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-departamento" class="control-label">Departamento:</label>
                        <input name="departamento" type="text" class="form-control" id="recipient-departamento">
                    </div>
                    <div class="form-group">
                        <label for="recipient-ramal" class="control-label">Ramal:</label>
                        <input name="ramal" type="text" class="form-control" id="recipient-ramal">
                    </div>
                    <div class="form-group">
                        <label for="recipient-email" class="control-label">E-mail:</label>
                        <input name="email" type="email" class="form-control" id="recipient-email">
                    </div>
                    <div class="form-group">
                        <label for="recipient-corporativo" class="control-label">Celular:</label>
                        <input name="corporativo" type="text" class="form-control" id="recipient-corporativo">
                    </div>
                    

                    <input name="id" type="hidden" class="form-control" id="id" value="">


                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Alterar</button>

                </form>
            </div>

        </div>
    </div>
</div>
FIM MODAL EDITAR-->

<!--IMPORTACAO FOOTER-->
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="js/modal_apagar.js"></script>

<!--SCRIPT EDITAR MODAL-->
<script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var recipientnome = button.data('whatevernome')
        var recipientdepartamento = button.data('whateverdepartamento')
        var recipientramal = button.data('whateverramal')
        var recipientemail = button.data('whateveremail')
        var recipientcorporativo = button.data('whatevercorporativo')
        
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('ID ' + recipient)
        modal.find('#id').val(recipient)
        modal.find('#recipient-name').val(recipientnome)
        modal.find('#recipient-departamento').val(recipientdepartamento)
        modal.find('#recipient-ramal').val(recipientramal)
        modal.find('#recipient-email').val(recipientemail)
        modal.find('#recipient-corporativo').val(recipientcorporativo)      
    })
</script>
</body>
</html>