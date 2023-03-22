<?php require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="Media/Logo-min.png">
    <!--Core theme CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Inicio</title>
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

    <div class= "content">
    <h1>Venta de cachorros American bully y Bulldog franc&eacute;s Fluffy</h1>
    <h2>Nuestras razas</h2>
        <div class="cluster">
            <div class="item">
                <a href="AmericanBully" target="_blank">
                <img class="imagen" src="Media/AmericanBully-min.jpeg" alt="American Bully" width="100%">
                <p>Venta de American Bully</p>
                </a>
            </div>
            <div class="item">
                <a href="BulldogFrances" target="_blank">
                    <img class="imagen" src="Media/BulldogFrances-min.jpeg" alt="Bulldog France Fluffy" width="100%">
                <p>Venta de Bulldog Frances Fluffy</p>
                </a>
            </div>
        </div>
        <h2>Ubicaci&oacute;n</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.6985504074239!2d-76.5060119708487!3d3.4003273385893076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a12bb52df763%3A0x52b18adf6cfd2ef7!2sCra.%2042d%20%26%20Cl.%2054a%2C%20Morichal%20de%20Comfandi%2C%20Cali%2C%20Valle%20del%20Cauca%2C%20Colombia!5e0!3m2!1sen!2sus!4v1675367769705!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
        <h2>Con&oacute;cenos</h2>
        <div class="parrafo">
            <p class="text">Somos una empresa dedicada a la crianza selectiva de ejemplares American Bully y Bulldog Franc&eacute;s ex&oacute;ticos con sus respectivos est&aacute;ndares para dar alegr&iacute;a a hogares de distintas regiones y pa&iacute;ses; llevamos 11 años en el mercado y ofrecemos tips acerca de alimentaci&oacute;n y cuidados de mascotas</p>
        </div>   
    </div>
    
    <?php include("Contenido/footer.php"); ?>

    <a href="https://wa.me/573162756671?text=Hola!%20estoy%20interesado%20en%20conocer%20más%20información%20sobre%20los%20cachorros%20bulldog%20frances%20fluffy" class="btn-wsp" target="_blank"><img src="https://imgur.com/01DuuRa.png" width="55px"alt=""></a>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="js/particles.min.php"></script>
    <script type="text/javascript" src="js/script.php"></script>
</body>
</html>
