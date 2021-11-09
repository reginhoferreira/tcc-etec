<?php
        require "funcoesLoginEntrar.php";
        require "configPTCC.php";

        cabecalho("Consulta");

     
        $USU_EMAIL = $_POST['txtUSU_EMAIL'];
        $USU_SENHA = MD5($_POST['txtUSU_SENHA']);
  
        $consulta = $pdo->prepare("Select * from TB_USUARIO where USU_EMAIL = :USU_EMAIL");
        $consulta->bindValue(':USU_EMAIL',"$USU_EMAIL"); 
       // $consulta->bindValue(':USU_SENHA',"$USU_SENHA");
        $consulta->execute();
        

        if ($consulta->rowCount() > 0)
        {     
            $dado = $consulta->fetch();
     
            if ($dado[4]==$USU_SENHA) {
               echo "<h1> Login efetuado com sucesso!</h1>";
               echo "<h1> Usuário: $dado[1]";
               header("Refresh:5;URL=frmEstoque.php");
            }
            else
            {
                echo "<h1>Senha Incorreta!</h1>";
                header("Refresh:5;URL=index.php");
            }
        }
        else
        {
            echo "<h1>E-mail Incorreto ou Não Cadastrado!</h1>";
            header("Refresh:5;URL=index.php");
        }
rodape();
?>



