<?php require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="Media/Logo-min.png">
    <!--Core theme CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Inicio</title>
    <style>
        .header:before
        {
            content: "";
            position: absolute;
            width: 100%;
            left: 0;
            top: 0;
            height: 100%;
            opacity: 0.4;
            background-image: url(./Media/headerImage2-min.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div id="particles-js"></div>
    
    <?php include("Contenido/header.php") ?>

    <div class= "content">

    <h2>Con&oacute;ce nuestras razas</h2>
        <div class="cluster">
            <div class="item">
                <a href="AmericanBully" target="_blank">
                <img class="imagen" src="Media/AmericanBully-min.jpeg" alt="American Bully" width="100%">
                <p>American Bully</p>
                </a>
            </div>
            <div class="item">
                <a href="BulldogFrances" target="_blank">
                    <img class="imagen" src="Media/BulldogFrances-min.jpeg" alt="Bulldog France Fluffy" width="100%">
                <p>Bulldog Frances</p>
                </a>
            </div>
        </div>
    <h2>Nuestra ubicaci&oacute;n</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.6985504074239!2d-76.5060119708487!3d3.4003273385893076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a12bb52df763%3A0x52b18adf6cfd2ef7!2sCra.%2042d%20%26%20Cl.%2054a%2C%20Morichal%20de%20Comfandi%2C%20Cali%2C%20Valle%20del%20Cauca%2C%20Colombia!5e0!3m2!1sen!2sus!4v1675367769705!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
        <h2>Con&oacute;cenos</h2>
        <div class="parrafo">
            <p class="text">Somos una empresa dedicada a la crianza selectiva de ejemplares American Bully y Bulldog Franc&eacute;s con sus respectivos est&aacute;ndares para dar alegr&iacute;a a hogares de distintas regiones y pa&iacute;ses; llevamos 11 años en el mercado y ofrecemos tips acerca de alimentaci&oacute;n y cuidados de mascotas</p>
        </div>   
    </div>
    
    <?php include("Contenido/footer.php"); ?>

    <a href="https://api.whatsapp.com/send?phone=573162756671" class="btn-wsp" target="_blank"><img src="https://imgur.com/01DuuRa.png" width="55px"alt=""></a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/particles.min.php"></script>
    <script type="text/javascript" src="js/script.php"></script>
</body>
</html>
