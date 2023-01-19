
<?php

    header("Content-Type: text/css; charset: UTF-8")

?>
/*Google Fonts*/
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,500;1,300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;600&display=swap');
/*Vars*/
:root {
    --Background-Color: #2B2B2B;
    --Background-Color-Light: #454545;
    --Background-Color-Dark: #121212;
    --Font-Color: #161616;
    --Font-Color1: #005216;
    --Font-Color2: rgb(224, 223, 223);
}
/*Content*/

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: var(--Font-Color2);
    font-family: "Titillium Web";
}
body
{
    background-color: var(--Background-Color-Dark);
}

#particles-js
{
  height: 100vh;
  width: 100%;
  position: fixed;
  z-index: -1;
}
.supreme-background
{
    background-color: var(--Background-Color-Light);
}

.header
{
  position: relative;
  padding: 1em;
}

.header:before
{
  content: "";
  position: absolute;
  width: 100%;
  left: 0;
  top: 0;
  height: 100%;
  opacity: 0.4;
  background-image: url("https://imgur.com/jg55WHi.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}

.header-content
{
    position: relative;
    opacity: 2;
}
.site-title-wrapper
{
    margin: 2em 4em;
    
}
.site-title-wrapper h1
{
    font-family: 'Noto Sans', sans-serif;
    font-size: 4em;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 0;
    z-index: 1;
    opacity: 1;
}

.site-title-wrapper div
{
    font-family: 'Rubik', sans-serif;
    font-size: 3.5em;
    font-weight: 300;
    margin-bottom: 0;
    z-index: 1;
}

main{
    max-width: 1080px;
    margin: 0em auto;
    font-size: 16px;
    position: absolute;
    top: 0;
    right: 0;
}

.menu{
    position: relative;
    margin: 0 auto 0 auto;
    background-color: var(--Background-Color);
    width: 10vh;
    border-radius: 3.5vh;
    transition: 0.3s border-radius ease-in-out, 0.3s height ease-in-out;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    overflow: hidden;
 }

.menu--closed{
    height: 10vh;
}

.menu--open{
    height: 200px;
}

.button-submenu{
    transition: 0.3s transform ease-in-out, 0.3s opacity ease-in-out;;
    cursor: pointer;
    position: absolute;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    width: 5.5vh;
    height: 5.5vh;
    left: 23%;
    top: 2.3vh;
    opacity: 1;
}

.button-submenu:hover {
    opacity: 0.6;
}

.button-submenu span{
    width: 100%;
    height: 4px;
    background-color: black;
    border-radius: 20%;
}

.menu--open .button-submenu{
    transform-origin: center;
    transform: rotate(90deg);
}

.tools{
    display: flex;
    flex-wrap: nowrap;
    flex-direction: column;
    align-items: center;
    height: 45%;
    justify-content: space-between;
    transition: 0.3s margin ease-in-out;
}


.tools .icon{
    transition: 0.2s transform ease-in-out;
}

.tools .icon:hover{
    transform: scale(0.8);
}

.tools--hidden{
    margin-top: 400px;
    z-index: -100;
}

.tools--visible{
    margin-top: 40%;
    z-index: 100;
}
.hero
{
    font-family: "Rubik", sans-serif;
    font-size: 4vh;
    margin: 2em;
    padding: 1em;
    display: flex;
    align-items: center;
    justify-content: right;
}

.hero .hero-inner
{
    max-width: 600px;
    height: 100%;
}


.content
{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    font-size: 3vh;
    margin: 5vw 5vw ;
    padding: 3vh;
    background-color: var(--Background-Color-Light);
    opacity: 0.97;
    border-radius: 1vw;
}

.parrafo1
{
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    width: 100%;
}
.parrafo2
{
    display: flex;
    flex-wrap: wrap;
    flex-direction: row-reverse;
    align-items: center;
    justify-content: center;
    width: 100%;
}
.text
{
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: justify;
    max-width: 570px;
    height: auto;
    margin:  1vh;
}
#imagenA .imagen
{
    border-radius: 2em;
    width: 100%;
    height: auto;
}
#imagenA
{
    width: 100%;
    max-width: 26em;
    margin: 1vh;
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
#imagenA .video
{
    width: 100%;
    height: auto;
    margin: 1vh;
}

.btn-wsp{
    position: fixed;
    bottom: 30px;
    right: 30px;
 
}
.btn-wsp:hover{
    transform: scale(1.1);
}
.footer 
{
    width: 100%;
    height: auto;
    padding:  3vh;
    background-color: var(--Background-Color);
}

.footer #contenido1
{
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    justify-content: center;
}

.siguenos
{
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    width: 100%;
    max-width: 500px;  
    height: auto;
    justify-content: left;
    font-family: "Titillium Web", sans-serif;
    font-size: 3vh;
    color: #FFF;
    margin: 2vh;
}
#redes
{
    width: 100%;
    max-width: 2em;    
    margin: 1vh;
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    align-items: center;
    justify-content: center;
}
#redes img
{
    width: 100%;
    height: auto;
    margin: 1vh;
}
.comunicate
{
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    width: 100%;
    max-width: 500px;  
    justify-content: left;
    height: auto;
    font-family: "Titillium Web", sans-serif;
    font-size: 3vh;
    color: #FFF;
    margin: 2vh;
}
.comunicate h3
{
    font-size: 4vh;
    margin-top: 2vh;
    margin-bottom: 2vh;
    text-align: left;
}

#copyright
{
    margin: 5vh;
    font-family: "Rubik", sans-serif;
    font-size: 2vh;
    color: rgba(255, 255, 255, 0.651);
    text-align: center;
}
#imagenGaleria
{
    width: 100%;
    max-width: 100%;
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    justify-content: center;
}
@media screen and (min-width: 768px)
{
    #imagenGaleria
    {
        width: 100%;
        max-width: 500em;
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        padding: 2vh;
    }
    #imagenGaleria .imagen
    {
        border-radius: 3vh;
        width: 45%;
        height: auto;
        margin: 1vh;
    }

    .Iparrafo
    {
        visibility: hidden;
        position:absolute;
    }
}
@media screen and (max-width: 425px)
{
    #imagenGaleria
    {
        width: 100%;
        max-width: 60em;
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        justify-content: center;
    }
    #imagenGaleria .imagen
    {
        border-radius: 3vh;
        width: 100%;
        height: auto;
        margin-bottom: 1vh;
    }
    .Iparrafo
    {
        visibility: visible;
        position: relative;
    }
}

.lista_hero
{
    list-style-position: outside;
    list-style-image: url("https://imgur.com/uJ7E7jJ.png");
    font-size: 3vh;
}

button
{
    padding: 0.9375em 2.5em;
    background: var(--Background-Color);
    border: 0.0625em solid var(--Background-Color);
    color: var(--Background-Color-Dark);
    font-size: 1em;
    font-weight: bold;
    border-radius: 0.5em;
    transition: all 0.5s ease;
    box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.384);
}
button:hover
{
    box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.384);
    color: var(--Font-Color);
}
aside {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: var(--Font-Color2);
    opacity: 0;
    visibility: hidden;
    transition: all 0.5s ease;
    z-index: 2;
    font-family: "Rubik", sans-serif;
    overflow-y: scroll;
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    align-items: center;
    justify-content: center;
}
.open {
    opacity: 1;
    visibility: visible;
  }
.close {
    position: fixed;
    top: 2.5em;
    right: 4.75em;
    color: white;
    z-index: 3;
    cursor: pointer;
    font-family: sans-serif;
}
.close span,
.close span:before,
.close span:after {
    border-radius: 0.25em;
    height: 0.3125em;
    width: 2.1875em;
    background: white;
    position: absolute;
    display: block;
    content: "";
  }
.close span {
    background: transparent;
}
.close span:before {
    transform: rotate(45deg);
}
.close span:after {
    transform: rotate(-45deg);
} 
.outer-close {
    position: absolute;
    right: 0;
    top: 0;
    width: 5.3125em;
    height: 5.3125em;
    cursor: pointer;
}
a
{
    text-decoration: line;
    color: var(--Background-Color-Light);
}

a:visited
{
    color: var(--Background-Color-Dark);
}

.cluster
{
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    padding: 2vh;
    width: 100%;
    justify-content: center;
}

.item
{
    width: 40%;
    margin: 1vh;
    justify-content: center;
    text-align: center;
}