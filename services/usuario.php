<?php
include_once("sql_conexao.php"); 
    

    class usuario extends conexao{ 

        private $query;
        private $registro;
        Public $Nome;
        Public $Sobrenome;
        Public $Nivel;
        public $Acessos;       

        public function login($Login, $Senha){            
            $this->sql_conexao("USUARIO");           
            $Login = $_POST['Login'];
            $Senha = $_POST['Senha']; 
            $sql = "SELECT * FROM dbo.TB_Usuario WHERE Login = '$Login' and Senha = '$Senha' "; 
            //Query da consulta sql            
            $this->query = sqlsrv_query($this->con, $sql);
            //Array da query
            $this->registro = sqlsrv_fetch_array($this->query);

            //Verificar se a query tem uma linha afetada
            if (sqlsrv_has_rows($this->query) >= 1){                
                
                header('Location: listar_rhs.php');
                session_start();
                $_SESSION["Nome"] = " Sr. " . $this->registro['Nome'];
                $_SESSION["timer"]= time() + 300;
                }else {
                    header('Location: login.php?error=1');
            }      
            
        }
        
        public function getNome(){
            //Retornando o nome
            $this->Nome = " Sr. " . $this->registro['Nome'];
            return $this->Nome;

        }

        public function setNome(){

        } 

        public function logoff(){
            session_start();
            session_destroy();
            header('Location: login.php');

        }
        
        
        
    }



?>


