<?php
include_once("sql_conexao.php");   
include_once("usuario.php");
include_once("acessos.php");
$retorno = new acesso();


class conexao_rhs extends usuario{

    public $query;
    public $rhs_setor;
    public $rhs_destinatario;
    public $rhs_serviço;
    public $array;


    public function listar(){

        while($this->array = sqlsrv_fetch_array($this->query)){                                               
            
            echo "<tr>";
            echo "<td class=''>" . $this->array['ID_RHS'] . "</td>";
            echo "<td>" . $this->array['OBS'] . "</td>";
            echo "<td colspan='3'>" . $this->array['DT_RHS']->format('d-m-Y') . "</td>";
            $SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
            if ($SendPesqUser){
                echo "<th><i class='fas fa-print'  onClick='window.print()' style=cursor:pointer></i>";

            }
            echo "</tr>";
            }    
    }

    function pesquisar($ID_RHS,$OBS){    

        $this->sql_conexao("rhs");

        
        
        $sql_comparacao = "SELECT top 20 * FROM dbo.RHS   ";        
        
        $SqlCondicao = "";
        if ($OBS > "") {
            $SqlCondicao= " OBS LIKE '%$OBS%'  ";
        }
        if($ID_RHS > ""){
            $SqlCondicao= " ID_RHS = $ID_RHS  ";
        }
        if ( $SqlCondicao>""){
            $sql_comparacao .= " Where " . $SqlCondicao;
        }
        $sql_comparacao .= "order by ID_RHS desc";
        
        $this->query = sqlsrv_query($this->con, $sql_comparacao);

        
        
        $this->listar();
        
        //$retorno = $this->getReqHoras();
        //print_r($retorno);

        
    }

   /* public function vizualizar_modal(){
    echo "<div class='modal fade' id='myModal?' . $this->array['ID_RHS']; .  tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
        echo  "<div class='modal-dialog' role='document'>";
        echo   "<div class='modal-content'>";
        echo        "<div class='modal-header'>";
        echo           "<h4 class='modal-title' id='myModalLabel' style='text-align: center;'> . $this->array['OBS'] . </h4>";
        echo       "</div>";
        echo       "<div class='modal-body'>";
        echo           "<p><b style='font-weight:bold'>Nome</b> . $this->array['OBS'] . </p>";
            echo           "<p><b style='font-weight: bold'>Departamento:</b> . $this->array['DT_RHS']; </p>";
            echo      "</div>";
            echo   "</div>";
            echo  "</div>";
    echo  "</div>";
    }*/


    public function cadastrar(){
        $this->sql_conexao("RHS");
        $this->rhs_setor = $_POST['rhs'];
        $this->rhs_destinatario = $_POST['rhs1'];
        $this->rhs_serviço = $_POST['rhs2'];   
        $concatenacao = $this->rhs_setor . ' PARA ' . $this->rhs_destinatario . ' - ' . $this->rhs_serviço;
        $sql = "INSERT INTO dbo.RHS (OBS,DT_RHS) VALUES ('$concatenacao', GETDATE())";
        $result = sqlsrv_query($this->con, $sql);
        return header('Location: listar_rhs.php');
        
        }

}



?>

