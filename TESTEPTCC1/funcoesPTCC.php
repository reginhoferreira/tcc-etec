
<?php
   function cabecalho($titulo)
   {
       echo "<!DOCTYPE html>
       <html lang=\"pt-br\">
       <head>


       <title>Menu Horizontal</title>
       <style type=\"text/css\">
       <!--
           body {
               padding:0px;
               margin:0px;
           }
    
           #menu ul {
               padding:0px;
               margin:0px;
               float: left;
               width: 100%;
               background-color:#EDEDED;
               list-style:none;
               font:80% Tahoma;
           }
    
           #menu ul li { display: inline; }
    
           #menu ul li a {
               background-color:#EDEDED;
               color: #333;
               text-decoration: none;
               border-bottom:3px solid #EDEDED;
               padding: 2px 10px;
               float:left;
           }
    
           #menu ul li a:hover {
               background-color:#D6D6D6;
               color: #6D6D6D;
               border-bottom:3px solid #EA0000;
           }
       -->
       </style>



       <meta charset=\"UTF-8\">
       <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
       <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
       <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">

       <title>$titulo</title>
       </head>
     <body>
     <div class=\"container\">
     <div class=\"jumbotron\">



     <div id=\"menu\">
     <ul>
         <li><a href=\"frmCadProduto.php\">Produto</a></li>
         <li><a href=\"frmEntradaProduto.php\">Entrada Produto</a></li>
         <li><a href=\"frmSaidaProduto.php\">Saída Produto</a></li>
         <li><a href=\"frmEstoque.php\">Estoque</a></li>
         <li><a href=\"frmCadUsuario.php\">Usuário</a></li>
         <li><a href=\"index.php\">Sair</a></li>
     </ul>
 </div>

 ";
    }
    function rodape()
    {
        echo "
        </div>
        </div>
        </body>
        </html> ";
    }

    function verificacampo($campo,$valor)
    {
        if($valor == '') {
            echo "<h2 Atenção, o $campo deve ser preenchido!</h2><p>";
            echo "<input type=\"button\"value=\"Voltar\" onClick=\"javascript:history.back()\">";
            rodape();
            exit;
        }
    }




function getAllProdutos() 
    {
        $sql = "select * from TB_PRODUTO c order by c.PRO_DESCRICAO";
        $sql = $this->pdo->query($sql);
    
        //if para verificar se tem algum produto e caso tenha o return fetchAll() apresenta todos os produtos
        if($sql->rowCount() > 0 ) {
            return $sql->fetchAll();
        //caso não tenh nenhum produto ele retorna um array() vazio 
        } else {
            return array();
        }
    
    }
    
    



?>