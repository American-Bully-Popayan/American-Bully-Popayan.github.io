<?php 
    require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="Media/Logo-min.png">
    <title>Bulldog Frances</title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/dogieStyle.css">
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
            background-image: url(./Media/headerImage1-min.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div id="particles-js"></div>

    <?php include("Contenido/header.php"); ?>

    <div class="content">
        <h2>Nuestros cachorros disponibles</h2>
        <!-- Cachorro1 !-->
        <div class="dogiecontent">
            <div id="slider">
            <div class="slider">
            <?php
    
                $ids = array(1,2,3,4,);
                $alt = array(
                    "Slide 1",
                    "Slide 2",
                    "Slide 3",
                    "Slide 4"
                );
                $max = count($ids);
                for($s=0;$s<$max;$s++){ ?>
                    <input type="radio" id="<?= $ids[$s]; ?>" name="image-slide" hidden />
                <?php }
            ?>
            <div class="slideshow">
                <?php for($s=0;$s<$max;$s++){ ?>
                <div class="item-slide">
                    <img src="./Media/sliders/blue-merle/ejemplo<?= $ids[$s]; ?>.jpeg" alt="<?= $alt[$s]; ?>" />
                </div>
                <?php } ?>
            </div>
            <div class="pagination">
                <?php for($s=0;$s<$max;$s++){ ?>
                <label class="pag-item" for="<?= $ids[$s]; ?>">
                    <img src="./Media/sliders/Botones/1.png" alt="<?= $alt[$s]; ?>" />
                </label>
                <?php } ?>
            </div>
    </div>

            </div>
            <div id="text">
                <h2>Cachorro Blue-merle</h2>
                <p>- Nacido 1 de octubre del 2022</p>
                <br>
                <p>- Portador de Cocoa, Blue y AT</p>
                <br>
                <p>- Desparasitado</p>
                <br>
                <p>- Completamente vacunado</p>
                <br>
                <p>- Viene de una línea de Bulldog Francés esponjosos y peludos</p>
                <br>
                <p>- Excelente estructura</p>
                <br>
                <p>- &Ntilde;ato y sin cola</p>
            </div>
        </div>
        <!-- Cachorro2 !-->
        <div class="dogiecontent">
            <div id="slider">
            <div class="slider">
            <?php
    
                $ids = array(1,2,3,4,);
                $alt = array(
                    "Slide 1",
                    "Slide 2",
                    "Slide 3",
                    "Slide 4"
                );
                $max = count($ids);
                for($s=0;$s<$max;$s++){ ?>
                    <input type="radio" id="<?= $ids[$s]; ?>" name="image-slide" hidden />
                <?php }
            ?>
            <div class="slideshow">
                <?php for($s=0;$s<$max;$s++){ ?>
                <div class="item-slide">
                    <img src="./Media/sliders/fawn-merle/fawn-merle<?= $ids[$s]; ?>.jpeg" alt="<?= $alt[$s]; ?>" />
                </div>
                <?php } ?>
            </div>
            <div class="pagination">
                <?php for($s=0;$s<$max;$s++){ ?>
                <label class="pag-item" for="<?= $ids[$s]; ?>">
                    <img src="./Media/sliders/Botones/1.png" alt="<?= $alt[$s]; ?>" />
                </label>
                <?php } ?>
            </div>
    </div>

            </div>
            <div id="text">
                <h2>Cachorro Fawn-merle</h2>
                <p>- Nacido 1 de octubre del 2022</p>
                <br>
                <p>- Portador de Cocoa, Blue y AT</p>
                <br>
                <p>- Desparasitado</p>
                <br>
                <p>- Completamente vacunado</p>
                <br>
                <p>- Viene de una línea de Bulldog Francés esponjosos y peludos</p>
                <br>
                <p>- Excelente estructura</p>
                <br>
                <p>- &Ntilde;ato y sin cola</p>
            </div>
        </div>
        

        <h2>Información de la raza</h2>
    <div class="parrafo">
    <p class="text">Los bulldogs franceses son perros adorables y cari&ntilde;osos que har&aacute;n las delicias de cualquier familia. Con su tama&ntilde;o compacto y su personalidad amigable, son ideales para vivir en apartamentos o casas de tama&ntilde;o reducido. Adem&aacute;s, son perros muy activos y juguetones, por lo que no se aburrir&aacute;n y siempre estar&aacute;n dispuestos a jugar.
    </p>
    <p class="text">Su pelaje suave y sedoso los hace ideales para acariciar y su inteligencia les permite aprender trucos y habilidades con facilidad. Son perros muy leales y afectuosos con sus due&ntilde;os, por lo que se convertir&aacute;n en el mejor amigo de cualquier persona.
    </p>
    <p class="text">Los bulldogs franceses son perros muy saludables y requieren poco mantenimiento, lo que los hace ideales para aquellos que buscan un compa&ntilde;ero de vida f&aacute;cil de cuidar. Adem&aacute;s, son perros muy divertidos y alegres, por lo que siempre aportar&aacute;n un toque de diversi&oacute;n a la vida de su due&ntilde;o.
    </p>
    <p class="text">En resumen, si est&aacute;s buscando un perro cari&ntilde;oso, divertido y f&aacute;cil de cuidar, los bulldogs franceses son la mejor opci&oacute;n. No te lo pienses m&aacute;s y hazte hoy mismo con uno de estos maravillosos perros. Te aseguramos que no te arrepentir&aacute;s.
    </p>
    </div>

    </div>

    <?php include("Contenido/footer.php");?>
    <a href="https://api.whatsapp.com/send?phone=573162756671" class="btn-wsp" target="_blank"><img src="https://imgur.com/01DuuRa.png" width="55px"alt=""></a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/particles.min.php"></script>
    <script type="text/javascript" src="js/script.php"></script>
</body>
</html>