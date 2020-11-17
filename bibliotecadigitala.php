<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/bibliotecadigitala.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/body.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/searchbook.css">
    <link rel="stylesheet" href="./css/mobile_menu.css">

    <title>Biblioteca digitala</title>

    <style>
        @media only screen and (max-width: 1000px) {
            #corp {
                padding-top: 10pc;
            }
        }

    </style>

</head>

<body>
	<header id="header">
        <?php 
        $IPATH = $_SERVER["DOCUMENT_ROOT"]."/Proiect/"; 
        include ($IPATH."requirements/header.php"); 
        ?>
            
    </header>
    <?php
        $IPATH = $_SERVER["DOCUMENT_ROOT"]."/Proiect/"; 
        include ($IPATH."requirements/mobile_menu.php"); 
    ?>

    <div id="corp">
        <div id="continut">
            <input type="text" id="search" placeholder="Cauta o carte">
            <?php
                $IPATH = $_SERVER["DOCUMENT_ROOT"]."/Proiect/"; 
                include ($IPATH."requirements/showbooks.php"); 
            ?>
            
            <br><br>
            <br><br>

            <?php 
                $IPATH = $_SERVER["DOCUMENT_ROOT"]."/Proiect/"; 
                include ($IPATH."requirements/admin_digital_add.php"); 
            ?>

        </div>
    </div>


    <?php 
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/Proiect/"; 
    include ($IPATH."requirements/footer.php"); 
    ?>

    <script src="./js/bibliotecadigitala.js"></script>
    <script src="./js/common.js"></script>
</body>

</html>