<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/estilo.css" media="all" type="text/css">
    </head>
    <body>
        <div id="container">
            <div id="header">
                <img src="img/SA.jpg"/>

            </div>
            <div id="menu">
                <ul>
                    <li><a class="<?= ($_GET["pg"] == "home" || empty($_GET["pg"])) ? "active" : "" ?>" href="?pg=home">Home</a></li>
                    <li><a class="<?= ($_GET["pg"] == "produtos") ? "active" : "" ?>" href="?pg=produtos">Produtos</a></li>
                    <li><a class="<?= ($_GET["pg"] == "servicos") ? "active" : "" ?>" href="?pg=servicos">Serviços</a></li>
                    <li><a class="<?= ($_GET["pg"] == "descarte") ? "active" : "" ?>" href="?pg=descarte">Descarte</a></li>
                    <li><a class="<?= ($_GET["pg"] == "faq") ? "active" : "" ?>" href="?pg=faq">FAQ</a></li>
                    <li><a class="<?= ($_GET["pg"] == "limpeza") ? "active" : "" ?>" href="?pg=limpeza">Limpeza</a></li>
                    <li><a class="<?= ($_GET["pg"] == "consultoria") ? "active" : "" ?>" href="?pg=consultoria">Consultoria</a></li>
                    <li><a class="<?= ($_GET["pg"] == "planta") ? "active" : "" ?>" href="?pg=planta">Planta</a></li>
                    <li><a class="<?= ($_GET["pg"] == "contato") ? "active" : "" ?>" href="?pg=contato">Contato</a></li>
                </ul>
            </div>
            <div id="content">
                <?php
                $pg = $_GET["pg"];
                if (!empty($pg) && isset($pg)) {
                    include_once $pg . '.php';
                } else {
                    include_once 'home.php';
                }
                ?>
            </div>
            <div id="footer">
                <p>2016 &copy; - Todos os direitos reservados.</p>
            </div>
        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>
