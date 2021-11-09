
<?php
        require "funcoesLogin.php";
        require "configPTCC.php";

        cabecalho("Login");

        echo "<h1>Login do Sistema</h1>
        
        <form method=\"POST\" action=\"loginEntrar.php\">
            <label>E-MAIL
                <input type=\"text\" name=\"txtUSU_EMAIL\" size=\"50\" maxlength=\"100\" class=\"form-control\">
            </label><p>
            <label>SENHA
                <input type=\"password\" name=\"txtUSU_SENHA\" size=\"50\" maxlength=\"100\" class=\"form-control\">
            </label><p>
            <input type=\"submit\" value=\"Entrar\" id=\"entrar\" name=\"entrar\">
                <a href=\"frmCadLogin.php\">Cadastre-se</a>
        </form>";
    rodape();
?>

