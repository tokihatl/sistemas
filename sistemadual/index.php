<?php
    session_start();
    require 'con_db.php';
    if(isset($_SESSION['nombre'])){
        header('Location: inicio.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>Modelo de Educación Dual - Inicio</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/index.css"/>
        <link rel="stylesheet" type="text/css" href="fonts.css"/>
    </head>
    <body background="img/fondotesi.png" class="grid-container">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
            <header class="header">
                <img src="img/tecnm.png" alt="">
                <img src="img/tesi.png" alt="">   
                    SISTEMA DE MODELO DE EDUCACIÓN DUAL
                <nav>     
                     <ul class="navegacion">
                        <li><a>Registrarse</a>
                            <ul>
                                <li><a href=registroalumno.php>Alumno</a></li>
                                <li><a href=registrotutor.php>Tutor / Mentor</a></li>
                                <li><a href=registroempresa.php>Empresa</a></li>
                            </ul>
                        </li> 
                        <li><a>Iniciar sesión</a>
                            <ul>
                                <li><a href=loginalumno.php>Alumno</a></li>
                                <li><a href=logintutor.php>Tutor / Mentor</a></li>
                                <li><a href=loginempresa.php>Empresa</a></li>
                                <li><a href=loginvinculacion.php>Vinculación</a></li>
                                <li><a href=loginjefatura.php>Jefatura</a></li>
                            </ul>
                        </li> 
                        <li><a href="callto:(101)13148150">Teléfono</a></li>            
                     </ul>
                </nav>
            </header>
            <div class="navbar">
                <ul>
                    <li><a href="https://www.facebook.com/TESIOficial/" target="_blank" class="icon-facebook"></a></li>
                    <li><a href="https://www.instagram.com/tesioficial/" target="_blank" class="icon-instagram"></a></li>
                    <li><a href="https://twitter.com/TESIOficial/" target="_blank" class="icon-twitter"></a></li>
                    <li><a href="https://www.youtube.com/channel/UCBRZpGRpPlmOqv2c-OehMmA" target="_blank" class="icon-youtube"></a></li>
                    <li><a href="https://www.linkedin.com/school/tesi-ixtapaluca/" target="_blank" class="icon-linkedin2"></a></li>
                    <li><a href="mailto:dir_dixtapaluca@tesi.edu.mx" target="_blank" class="icon-mail2"></a></li>
                </ul>
            </div>
            <div class="sidebar">
                <ul class="boton">
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <li><a href=”#”>Descargar manual</a></li>
                </ul>
            </div>
            <div class="main">¿QUÉ ES LA EDUCACIÓN DUAL?<br><br>
                    Es la alternativa innovadora en que se alinean la necesidad, áreas de oportunidad de desarrollo económico, industrial, tecnológico, social y nodos educativos productivos en los perfiles de las instituciones educativas, mediante una colaboración de beneficio mutuo en donde se conjuntan las competencias adquiridas en los espacios educativos con la práctica laboral o profesional lo cual permite fortalecer y desarrollar aptitudes de los estudiantes dual propiciando mejores condiciones para su inserción laboral o profesional.<br><br><br>
                    REQUISITOS PARA INCORPORARSE AL SISTEMA:<br><br>
                    - Estar inscrito en la institución educativa (TESI).<br>
                    - Haber aprobado la totalidad de asignaturas (Estatus regular).<br>
                    - Cursar o haber cursado tu 6° semestre.<br>
                    - Presentar la Carta de Exposición de Motivos.<br>
                    - Contar con el Carnet Vigente de Servicios Médicos.<br>
                    - Contar con el Seguro Contra Accidentes.<br>
                    - Carta Compromiso aceptando cumplir su función como estudiante dual<br>
                    - Ser propuesto por la institución educativa.<br>
                    - Disponibilidad de tiempo.<br>
                    - Presentar las pruebas psicométricas.
            </div>
           <br>
<footer>
<div class="container">
<div id="detallefooter" class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
  <div class="region region-footer">
    <div id="block-views-footer-block" class="block block-views">
  <div class="content">
    <div class="view view-footer view-id-footer view-display-id-block view-dom-id-1f179f872573f7970b6b8f13a5c37723">
      <div class="view-content">
        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
  <div class="views-field views-field-body">        <div class="field-content"><div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
    <br><br><br><br>
<h4>Conoce el estado</h4>
<div>
<ul class="lista">
<li><a href="http://edomex.gob.mx/" target="_blank">Portal del Gobierno del Estado de México</a></li>
<li><a href="http://www.secogem.gob.mx/SAM/sit_atn_mex.asp" target="_blank">Quejas y Denuncias</a></li>
<li><a href="http://cemer.edomex.gob.mx/" target="_blank">Comisión Estatal de Mejora Regulatoria</a></li>
<li><a href="http://www.ipomex.org.mx/ipo/lgt/indice/sgg.web" target="_blank">Información Pública de Oficio Mexiquense</a></li>
<li><a href="http://www.saimex.org.mx/saimex/ciudadano/login.page" target="_blank">Solicitud de Información</a></li>
</ul></div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
    <br><br><br><br>
 <h4>Acerca del Sitio</h4>
<div>
<ul class="lista">
<li><a href="contacto.html" target="_self">Contáctanos</a></li>
<li><a href="mapa.html" target="_self">Mapa del Sitio</a></li>
<li><a href="legales.html" target="_self">Avisos Legales</a></li>
<li><a href="sitio.html" target="_self">Acerca del Sitio</a></li>
</ul></div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
    <br><br><br><br>
<h4>Contacto</h4>
<div>
<ul class="lista"><li>Secretaría de Educación Pública</li>
<li>Km. 7 de la Carretera Ixtapaluca-Coatepec s/n San Juan, Distrito de Coatepec, Ixtapaluca, Estado de México, C.P.56580</li>
<li><a href="callto:13148150">( 55 ) 13148150 </a><br></li>
</ul></div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
    <br><br><br><br>
<h4>Enlaces de Interés</h4>
<div>
<ul class="lista"><li><a href="http://datos.edomex.gob.mx/">Datos Abiertos en el Estado</a></li>
<li><a href="http://ccg.edomex.gob.mx/">Centro de Colaboración Geoespacial</a></li>
<li><a href="estadisticas.html">Estadísticas</a></li>
<li><a href="https://datos.gob.mx/">Datos Abiertos en México</a></li>
<li><a href="http://www.opendatafoundation.org/" target="_blank">Fundación de Datos Abiertos</a></li>
<li><a class="none-a-style" href="http://www.edomex.gob.mx/edictos" target="_blank">Edictos</a></li>
</ul></div>
</div>
</div>  
</div>  
</div>
</div>
</div>  
</div>
</div>
  </div>
</div>
<div id="identidad" class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
<div id="logofooter">
    <br><br><br><br>
</div> 
<img src="img/h1_tesi.png"  align="left" alt="">  
</div>
<div id="footerbottom" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="row">
</div>  
</div>  
</footer>
            </div>
    </body>
</html>