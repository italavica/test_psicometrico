<?php 
define('__CONFIG__',true);
//DEFINE THE CONFIG
require_once 'inc/config.php';
//ALLOW THE CONFIG ?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="robots" content="follow">

    <!--Uikit JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/css/uikit.min.css" />
    <title>Barsit</title>
</head>

<body>

<div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
        <form class="uk-form-stacked js-barsit1">

            <h1>MEDICIÓN RÁPIDA DE HABILIDAD INTELECTUAL</h1>
            <h3>BA R S I T</h3>
            <h6>C U E S T I O N A R I O</h6>
<p align="justify"><b>Usted tendrá que ir resolviendo cuestiones parecidas a éstas. Seleccionando una palabra que mejor conteste a la pregunta o escribiendo los números como se le ordena.</b></p>

<p>EJEMPLOS: <br>
1. ¿Qué palabra nos dice lo que es una manzana?<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsplibro,&nbsp&nbsp&nbsp&nbsppiedra,&nbsp&nbsp&nbsp&nbspcasa,&nbsp&nbsp&nbsp&nbsp<u>fruto</u>,&nbsp&nbsp&nbsp&nbspanimal<br>
2. Escriba los dos números que faltan a esta serie <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2&nbsp&nbsp4&nbsp&nbsp6&nbsp&nbsp8&nbsp&nbsp10&nbsp&nbsp.....&nbsp&nbsp14&nbsp&nbsp.....&nbsp&nbsp18&nbsp&nbsp20 <br><br>
Ejemplo 1: Debió subrayar la palabra <b>fruto</b>.<br>
Ejemplo 2: Debió escribir los números <b>12</b> y <b>16</b>.</p>

            
     <!--      <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Password</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text-pass" type="password" required="required" placeholder="Your Password">
                </div>
            </div> -->
            <div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none">
                test
            </div>
            <div class="uk-margin" style="position: relative;  top:50px; ">
                <button class="uk-button uk-button-default" type="submit">Continuar</button>
            </div>

        </form>
    </div>
 

</div>
 <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/js/uikit.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/js/uikit-icons.min.js"></script>

<!--jQuery required -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script src="//geodata.solutions/includes/countrystatecity.js"></script> -->


<script src="/examen_psicometrico/assets/js/Prueba1_intro.js"></script>
<script src="/examen_psicometrico/assets/js/jquery.js"></script>
</body>
</html>