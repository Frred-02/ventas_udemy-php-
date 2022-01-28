<!DOCTYPE html>
<html>


<head>
 <title>paggina</title>
</head>
 <body>
    <?php
    include "modulos/cabezera.php";
    include "modulos/menu.php";

    include "modulos/footer.php";

    if (isset($_GET["ruta"])) {
        if ($_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "perfil" ||
            $_GET["ruta"] == "productos"){
            include "modulos/" . $_GET["ruta"] . ".php";

        }
    }


    ?>
 </body>
</html>

