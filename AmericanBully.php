<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="Media/Logo-min.png">
    <title>American Bully</title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/dogieStyle.css">
    <style>
        .header:before
        {
            background-image: url(./Media/headerImage2-min.jpeg);
        }
        @media screen and (max-width: 425px) {
    .header:before
{
    background-size: cover;
    background-position: -250px;
}
}
    </style>
</head>
<body>
    <div id="particles-js"></div>

    <?php include("Contenido/header.php") ?>

    <div class="content">
    <h1>Venta de American bullies</h1>
        <h2>Nuestros cachorros disponibles</h2>
        <div class="dogiecontent">
            <h2>¡Lo sentimos!, en este momento no tenemos ningun cachorro american bully disponible</h2>
        </div>
        <!--
        <div id="imagenGaleria">
            <img class="imagen" src="https://imgur.com/cq4FcOY.png" alt="venta de cachorros bully_1" title="venta de cachorros bully_1">
            <img class="imagen" src="https://imgur.com/5mjQD1j.png" alt="venta de cachorros bully_2" title="venta de cachorros bully_2">
            <img class="imagen" src="https://imgur.com/EM4kwl5.png" alt="venta de cachorros bully_3" title="venta de cachorros bully_3">
            <img class="imagen" src="https://imgur.com/WMehEgl.png" alt="venta de cachorros bully_4" title="venta de cachorros bully_4">
        </div>
   
        <button class="toggle-overlay">Galeria de fotos</button><br>
         -->
         <h2>Información de la raza</h2>
        <div class="parrafo">
        <p class="text">
        El American Bully es una raza de perro que ha ganado mucha popularidad en los &uacute;ltimos a&ntilde;os. Este perro es conocido por su personalidad amigable y juguetona, lo que lo hace ideal para familias y due&ntilde;os de perros. Adem&aacute;s, el American Bully es muy inteligente y f&aacute;cil de entrenar, lo que lo convierte en un compa&ntilde;ero leal y obediente. 
        </p>
        <p class="text">
        A pesar de su apariencia imponente, el American Bully es un perro amigable y protector con su familia. Son  excelentes perros de guardia y defensores de su hogar y familia. Esta raza tambi&eacute;n es muy vers&aacute;til y se puede utilizar como perro de compa&ntilde;&iacute;a, perro de trabajo o perro de competici&oacute;n. 
        </p>
        <p class="text">
        El American Bully es un perro de tama&ntilde;o mediano a grande con un cuerpo musculoso y una cabeza grande. Son conocidos por tener una variedad de colores y patrones de pelaje, lo que los hace &uacute;nicos y atractivos. Esta raza requiere una buena cantidad de ejercicio diario para mantenerse en forma y saludable, y tambi&eacute;n requiere una dieta equilibrada y un cuidado adecuado de la piel y el pelaje.
        </p>
        <p class="text"> 
        En resumen, el American Bully es un perro ideal para aquellos que buscan un compa&ntilde;ero leal y amigable que tambi&eacute;n sea fuerte y protectora. Con su inteligencia y facilidad de entrenamiento, este perro se adapta f&aacute;cilmente a diferentes situaciones y entornos, y es un compa&ntilde;ero ideal para cualquier familia o due&ntilde;o de perro.
        </p>
        </div>
    </div>

    <?php include("Contenido/footer.php")?>
    <!--Galeria
    <aside>
        <div class="outer-close toggle-overlay">
          <a class="close"><span></span></a>
        </div>
        <div id="imagenGaleria">
            <img class="imagen" src="https://imgur.com/ZaXHWKs.png" alt="perros american bully en venta_5" title="perros american bully en venta_5">
            <img class="imagen" src="https://imgur.com/LGq8drV.png" alt="venta de american bully_1" title="venta de american bully_1">
            <img class="imagen" src="https://imgur.com/KMcN4qQ.png" alt="venta de american bully_2" title="venta de american bully_2">
            <img class="imagen" src="https://imgur.com/R4IB4Kd.jpeg" alt="venta de american bully_3" title="venta de american bully_3">
            <img class="imagen" src="https://imgur.com/olNgN6P.png" alt="venta de american bully_4" title="venta de american bully_4">
            <img class="imagen" src="https://imgur.com/xWZUdGB.png" alt="venta de american bully_5" title="venta de american bully_5">
            <img class="imagen" src="https://imgur.com/axNRSUW.jpeg" alt="venta de perros bully_1" title="venta de perros bully_1">
            <img class="imagen" src="https://imgur.com/VEjqGPq.png" alt="venta de perros bully_2" title="venta de perros bully_2">
            <img class="imagen" src="https://imgur.com/s6plQBT.png" alt="venta de perros bully_3" title="venta de perros bully_3">
            <img class="imagen" src="https://imgur.com/y2QO9mN.png" alt="venta de perros bully_4" title="venta de perros bully_4">
            <img class="imagen" src="https://imgur.com/wekpqnn.png" alt="venta de perros bully_5" title="venta de perros bully_5">
            <img class="imagen" src="https://imgur.com/qo8QGF0.png" alt="american bully en venta_1" title="american bully en venta_1">
            <img class="imagen" src="https://imgur.com/tVTpg9i.png" alt="american bully en venta_2" title="american bully en venta_2">
            <img class="imagen" src="https://imgur.com/oxFgRE6.png" alt="american bully en venta_3" title="american bully en venta_3">
            <img class="imagen" src="https://imgur.com/yfT1uhM.png" alt="american bully en venta_4" title="american bully en venta_4">
            <img class="imagen" src="https://imgur.com/OiQyzsl.png" alt="american bully en venta_5" title="american bully en venta_5">
        </div>
    </aside>
    -->
    <a href="https://wa.me/573162756671?text=Hola!%20estoy%20interesado%20en%20conocer%20más%20información%20sobre%20los%20cachorros%20bulldog%20frances%20fluffy" class="btn-wsp" target="_blank"><img src="https://imgur.com/01DuuRa.png" width="55px"alt=""></a>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="js/particles.min.php"></script>
    <script type="text/javascript" src="js/script.php"></script>
</body>
</html>