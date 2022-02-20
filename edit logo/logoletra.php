<!DOCTYPE html>
<html>
<head>
    <?PHP
    $txt = isset($_GET["t"]) ?$_GET["t"]:"Texto Generico";
    $tam = isset($_GET["tam"])?$_GET["tam"]: "12pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]: "#000000";
    $imo = isset($_GET["imo"])?$_GET["imo"]: "000000";
    $collor = isset($_GET["icor"])?$_GET["icor"]: "#000000";
    $sm = isset($_GET["som"])?$_GET["som"]: "####";
    $font = isset($_GET["itro"])?$_GET["itro"]: "#######";
	$img = isset($_GET["img"])?$_GET["img"]:"no img"
    ?>

    <meta charset="UTF-8">
    <title>LogoLetra</title>
	<link rel="icon" href="icon/icon.gif">
    <style>
        *{
            margin: 0;
        }

        span.texto{
           font-size:<?php echo $tam; ?>;
           color:<?php echo $cor; ?>;
            font-family: <?php echo $font; ?>;
            text-shadow: <?php echo $sm; ?>;
			place-items:center;
            position:relative;
			left:0px;
			top:120px;

        }

        #corpo{
            width: 700px;
            height: 500px;
            background: <?php echo $collor;  ?>;

            margin: 0;
            margin-left: 150px;
            margin-top: 75px;
        }

    </style>
</head>
<body>
   <?php
       echo "<div id='corpo'><span class='texto' ><h1  align='center'>$txt</h1></span></div>";
   ?>
   <br color:="" rgb(0,="" 102,="" 255);"=""><a href="baixar
.php?arquivo=arquivos/imagem.jpg">Baixar Arquivo</a>
</body>
</html>
 