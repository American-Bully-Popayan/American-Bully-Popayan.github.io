<?php
    header("Content-Type: text/css; charset: UTF-8")
?>

@import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,500;1,300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;600&display=swap');

*
{
    margin-bottom: 0;
    padding: 0;
    box-sizing: border-box;
    color: rgb(224, 223, 223);
}

footer
{
    background-color: #2B2B2B;
    font-family: "Titillium Web";
    display: flex;
    flex-wrap:wrap;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}

#content{
    display: flex;
    flex-wrap:wrap;
    text-align: left;
    margin: 2vh;
    justify-content: space-between;
}

#content div{
    width: 48vw;
}