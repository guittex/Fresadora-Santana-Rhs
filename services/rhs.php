<?php
include_once("sql_conexao.php");   


class conexao_rhs extends conexao{

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
            echo "<td>" . $this->array['DT_RHS']->format('d-m-Y') . "</td>";
            echo "</tr>";
            }    
    }

    function pesquisar($ID_RHS,$OBS){
        $this->sql_conexao("rhs");
        
        $sql_comparacao = "SELECT  * FROM dbo.RHS   ";        
        
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

        
    }


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

