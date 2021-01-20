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
            <div align="right" uk-countdown="date: 2021-01-26T23:15:09+00:00">
    <span class="uk-countdown-number uk-countdown-minutes"></span>
    <span class="uk-countdown-separator">:</span>
    <span class="uk-countdown-number uk-countdown-seconds"></span>
</div>
            <h6>C U E S T I O N A R I O</h6>



             <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">1. El queso se fabrica de:</label>
                <div class="uk-form-controls">                           
                        <select class="uk-select" id="p1">
                        <option>las flores</option><br>
                        <option>la harina</option><br>
                        <option>la leche</option><br>
                        <option>las uvas</option><br>
                        <option>el azucar</option><br>
                        </select>
                </div>
            </div>                       

 
             <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">2. Lo contrario de abierto es:</label>
                <div class="uk-form-controls">   
                        <select class="uk-select" id="p2">
                        <option>Liso</option><br>
                        <option>Cerrado</option><br>
                        <option>Delante</option><br>
                        <option>Claro</option><br>
                        <option>Despejado</option><br>
                        </select>
                </div>
            </div>  

             <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">3. De estas cinco palabras una pertenece a una clase diferente:</label>
                <div class="uk-form-controls">  
                        <select class="uk-select" id="p3">
                        <option>Rojo</option><br>
                        <option>Amarillo</option><br>
                        <option>Morado</option><br>
                        <option>Bandera</option><br>
                        <option>Verde</option><br>
                        </select>
                </div>
            </div>  

            <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">4. El pájaro canta y el perro:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p4">
                        <option>Habla</option><br>
                        <option>Rebuzna</option><br>
                        <option>Cacarea</option><br>
                        <option>Maúlla</option><br>
                        <option>Ladra</option><br>
                        </select>
                </div>
            </div> 


              <div class="uk-margin" >
                     <label class="uk-form-label" for="form-stacked-text">5. Escriba los dos números que faltan a esta serie</label>

                     <div class="uk-form-controls">
                        <label>10  15  20  25  </label>
                        <input class="uk-input" id="p5" style="display: inline-block; width: 60px; border: 0px;"   type="text" required="required" placeholder="__" >  

                        <label>35  40  45  </label>
                        <input class="uk-input" id="p6" style="display: inline-block; width: 60px; border: 0px;"  type="text" required="required" placeholder="__" >
                        <label>55</label>
                     </div> 
            </div> 

            <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">6. Para medir la temperatura se emplea el:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p7">
                        <option>litro</option><br>
                        <option>gramo</option><br>
                        <option>termómetro</option><br>
                        <option>metro</option><br>
                        <option>kilovatio</option><br>
                        </select>
                </div>
            </div> 

            <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">7. Lo contrario de dormido es:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p8">
                        <option>noche</option><br>
                        <option>luz</option><br>
                        <option>amanecer</option><br>
                        <option>despierto</option><br>
                        <option>claridad</option><br>
                        </select>
                </div>
            </div> 


            <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">8. De estas cinco palabras una pertenece a una clase diferente. ¿Cuál es?</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p9">
                        <option>agua</option><br>
                        <option>platino</option><br>
                        <option>café</option><br>
                        <option>té</option><br>
                        <option>cerveza</option><br>
                        </select>
                </div>
            </div> 

            <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">9. El zapato protege al pie, y el sombrero protege a:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p10">
                        <option>la cabeza</option><br>
                        <option>la mano</option><br>
                        <option>el dedo</option><br>
                        <option>el brazo</option><br>
                        <option>la rodilla</option><br>
                        </select>
                </div>
            </div>

              <div class="uk-margin" >
                     <label class="uk-form-label" for="form-stacked-text">10. Escriba los dos números que faltan a esta serie</label>

                     <div class="uk-form-controls">
                        <label>6  9  12 </label><input class="uk-input" id="p11" style="display: inline-block; width: 35px; border: 0px; size: 8;"   type="text" required="required" placeholder="__" ><label>18  21  24</label>
                        <input class="uk-input" id="p12" style="display: inline-block; width: 35px; border: 0px; size: 28;"  type="text" required="required" placeholder="__" ><label>30</label>
                     </div> 
            </div> 

            <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">11. El triangulo es una figura formada por:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p13">
                        <option>4 lados</option><br>
                        <option>6 lados</option><br>
                        <option>5 lados</option><br>
                        <option>3 lados</option><br>
                        <option>9 lados</option><br>
                        </select>
                </div>
            </div>

            <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">12. lo contrario de negro es:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p14">
                        <option>oscuro</option><br>
                        <option>sombra</option><br>
                        <option>opaco</option><br>
                        <option>sucio</option><br>
                        <option>blanco</option><br>
                        </select>
                </div>
            </div> 

            <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">13. De estas cinco palabras una pertenece a una clase diferente. ¿Cuál es?</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p15">
                        <option>Pedro</option><br>
                        <option>Enrique</option><br>
                        <option>Ana</option><br>
                        <option>José</option><br>
                        <option>Carlos</option><br>
                        </select>
                </div>
            </div>

            <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">14. El naranjo es un árbol, y el perro es:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p16">
                        <option>un objeto</option><br>
                        <option>un animal</option><br>
                        <option>una cosa</option><br>
                        <option>un mineral</option><br>
                        <option>un vegetal</option><br>
                        </select>
                </div>
            </div>                             

              <div class="uk-margin" >
                     <label class="uk-form-label" for="form-stacked-text">15. Escriba los dos números que faltan a esta serie</label>

                     <div class="uk-form-controls">
                        <label>7 9 11 13 </label>
                        <input class="uk-input" id="p17" style="display: inline-block; width: 60px; border: 0px;"   type="text" required="required" placeholder="__" >  

                        <label>17</label>
                        <input class="uk-input" id="p18" style="display: inline-block; width: 60px; border: 0px;"  type="text" required="required" placeholder="__" >
                        <label>21 23</label>
                     </div> 
            </div>

            <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">16. El gato es un:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p19">
                        <option>insecto</option><br>
                        <option>mamifero</option><br>
                        <option>ave</option><br>
                        <option>pez</option><br>
                        <option>reptil</option><br>
                        </select>
                </div>
            </div>

            <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">17. lo contrario de triste es:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p20">
                        <option>alegre</option><br>
                        <option>preocupado</option><br>
                        <option>dolorido</option><br>
                        <option>desgraciado</option><br>
                        <option>enfermo</option><br>
                        </select>
                </div>
            </div> 

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">18. De estas cinco palabras una pertenece a una clase diferente. ¿Cuál es?</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p21">
                        <option>Bogotá</option><br>
                        <option>Lima</option><br>
                        <option>Alpes</option><br>
                        <option>Caracas</option><br>
                        <option>Quito</option><br>
                        </select>
                </div>
            </div>   

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">19. La piel cubre al hombre, y las plumas cubren a:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p22">
                        <option>la vaca</option><br>
                        <option>el perro</option><br>
                        <option>el gato</option><br>
                        <option>la gallina</option><br>
                        <option>el caballo</option><br>
                        </select>
                </div>
            </div>

              <div class="uk-margin" >
                     <label class="uk-form-label" for="form-stacked-text">20. Escriba los dos números que faltan a esta serie</label>

                     <div class="uk-form-controls">
                        <label>7  14  21  28 </label>
                        <input class="uk-input" id="p23" style="display: inline-block; width: 60px; border: 0px;"   type="text" required="required" placeholder="__" >  

                        <label>42  49</label>
                        <input class="uk-input" id="p24" style="display: inline-block; width: 60px; border: 0px;"  type="text" required="required" placeholder="__" >
                        <label>63  70</label>
                     </div> 
            </div>

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">21. Treinta es el triple de:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p25">
                        <option>quince</option><br>
                        <option>tres</option><br>
                        <option>diez</option><br>
                        <option>doce</option><br>
                        <option>cinco</option><br>
                        </select>
                </div>
            </div>

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">22. lo contrario de calor es:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p26">
                        <option>sudor</option><br>
                        <option>fatiga</option><br>
                        <option>blanco</option><br>
                        <option>frío</option><br>
                        <option>luz</option><br>
                        </select>
                </div>
            </div>

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">23. De estas cinco palabras una pertenece a una clase diferente. ¿Cuál es?</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p27">
                        <option>cuchara</option><br>
                        <option>plato</option><br>
                        <option>tenedor</option><br>
                        <option>cuchillo</option><br>
                        <option>cucharita</option><br>
                        </select>
                </div>
            </div>

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">24. Para coser se emplea la aguja, y para dibujar se emplea el:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p28">
                        <option>lapiz</option><br>
                        <option>bastón</option><br>
                        <option>pie</option><br>
                        <option>ojo</option><br>
                        <option>tintero</option><br>
                        </select>
                </div>
            </div>

              <div class="uk-margin" >
                     <label class="uk-form-label" for="form-stacked-text">25. Escriba los dos números que faltan a esta serie</label>

                     <div class="uk-form-controls">
                        <label>40  36  32  28</label>
                        <input class="uk-input" id="p29" style="display: inline-block; width: 60px; border: 0px;"   type="text" required="required" placeholder="__" >  

                        <label>20  16  12</label>
                        <input class="uk-input" id="p30" style="display: inline-block; width: 60px; border: 0px;"  type="text" required="required" placeholder="__" >
                        <label>4</label>
                     </div> 
            </div>

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">26. La cordillera de los andes está en:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p31">
                        <option>Europa</option><br>
                        <option>Asia</option><br>
                        <option>América</option><br>
                        <option>Australia</option><br>
                        <option>África</option><br>
                        </select>
                </div>
            </div>

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">27. Lo contario de arriba es:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p32">
                        <option>dentro</option><br>
                        <option>abajo</option><br>
                        <option>cerca</option><br>
                        <option>completo</option><br>
                        <option>lejos</option><br>
                        </select>
                </div>
            </div>

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">28. De estas cinco palabras una pertenece a una clase diferente. ¿Cuál es?</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p33">
                        <option>General</option><br>
                        <option>Teniente</option><br>
                        <option>Capitán</option><br>
                        <option>Presidente</option><br>
                        <option>Coronel</option><br>
                        </select>
                </div>
            </div>

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">29. Con el cuero se fabrica el calzado, y con la tela:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p34">
                        <option>piel</option><br>
                        <option>lana</option><br>
                        <option>algodón</option><br>
                        <option>seda</option><br>
                        <option>vestidos</option><br>
                        </select>
                </div>
            </div>

              <div class="uk-margin" >
                     <label class="uk-form-label" for="form-stacked-text">30. Escriba los dos números que faltan a esta serie</label>

                     <div class="uk-form-controls">
                        <label>64  58  52  46</label>
                        <input class="uk-input" id="p35" style="display: inline-block; width: 60px; border: 0px;"   type="text" required="required" placeholder="__" >  

                        <label>34  28</label>
                        <input class="uk-input" id="p36" style="display: inline-block; width: 60px; border: 0px;"  type="text" required="required" placeholder="__" >
                        <label>16  10  4</label>
                     </div> 
            </div>              

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">31. Roma es la capital de:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p37">
                        <option>Nicaragua</option><br>
                        <option>España</option><br>
                        <option>Grecia</option><br>
                        <option>Italia</option><br>
                        <option>Paraguay</option><br>
                        </select>
                </div>
            </div>

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">32. Lo contrario de sí es:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p38">
                        <option>antes</option><br>
                        <option>afirmar</option><br>
                        <option>duda</option><br>
                        <option>luego</option><br>
                        <option>no</option><br>
                        </select>
                </div>
            </div>

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">33. De estas cinco palabras una pertenece a una clase diferente. ¿Cuál es?</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p39">
                        <option>vaso</option><br>
                        <option>copa</option><br>
                        <option>agua</option><br>
                        <option>jarra</option><br>
                        <option>taza</option><br>
                        </select>
                </div>
            </div>

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">34. La nariz sirve para oler, y los ojos para:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p40">
                        <option>oír</option><br>
                        <option>ver</option><br>
                        <option>gustar</option><br>
                        <option>tocar</option><br>
                        <option>andar</option><br>
                        </select>
                </div>
            </div>            

              <div class="uk-margin" >
                     <label class="uk-form-label" for="form-stacked-text">35. Escriba los dos números que faltan a esta serie</label>

                     <div class="uk-form-controls">
                        <label>5  10  20</label>
                        <input class="uk-input" id="p41" style="display: inline-block; width: 60px; border: 0px;"   type="text" required="required" placeholder="__" >  

                        <label>80  160</label>
                        <input class="uk-input" id="p42" style="display: inline-block; width: 60px; border: 0px;"  type="text" required="required" placeholder="__" >
                        <label>640  1280</label>
                     </div> 
            </div>

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">36. El idioma oficial de Haití es el:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p43">
                        <option>inglés</option><br>
                        <option>francés</option><br>
                        <option>español</option><br>
                        <option>holandés</option><br>
                        <option>portugués</option><br>
                        </select>
                </div>
            </div>

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">37. Lo contrario de despacio es:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p44">
                        <option>de prisa</option><br>
                        <option>lento</option><br>
                        <option>pausado</option><br>
                        <option>débil</option><br>
                        <option>grueso</option><br>
                        </select>
                </div>
            </div> 

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">38. De estas cinco palabras una pertenece a una clase diferente. ¿Cuál es?</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p45">
                        <option>carpintero</option><br>
                        <option>herrero</option><br>
                        <option>médico</option><br>
                        <option>albañil</option><br>
                        <option>zapatero</option><br>
                        </select>
                </div>
            </div> 


                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">39. Al lunes sigue el martes, y a enero sigue:</label>
                <div class="uk-form-controls">                             
                        <select class="uk-select" id="p46">
                        <option>junio</option><br>
                        <option>viernes</option><br>
                        <option>mes</option><br>
                        <option>febrero</option><br>
                        <option>año</option><br>
                        </select>
                </div>
            </div>

              <div class="uk-margin" >
                     <label class="uk-form-label" for="form-stacked-text">40. Escriba los dos números que faltan a esta serie</label>

                     <div class="uk-form-controls">
                        <label>2  4</label>
                        <input class="uk-input" id="p47" style="display: inline-block; width: 60px; border: 0px;"   type="text" required="required" placeholder="__" >  

                        <label>16  32</label>
                        <input class="uk-input" id="p48" style="display: inline-block; width: 60px; border: 0px;"  type="text" required="required" placeholder="__" >
                        <label>128  256</label>
                     </div> 
            </div>

            <div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none">
                test
            </div>
            <div class="uk-margin" style="position: relative;  top:50px; ">
                <button class="uk-button uk-button-default" type="submit">Continuar</button>
            </div>



        </form>
    </div>



</div>
 <!--Uikit JS -->
 <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/js/uikit.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/js/uikit-icons.min.js"></script>

<!--jQuery required -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script src="//geodata.solutions/includes/countrystatecity.js"></script> -->


<script src="/examen_psicometrico/assets/js/barsit.js"></script>
<script src="/examen_psicometrico/assets/js/jquery.js"></script>
</body>
</html>