<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /websicues/themes/sicues/partials/slider2.htm */
class __TwigTemplate_1662e7a1afac0576fad7d8f8d510f8b3b24078cd169733456bda1ca57e8265da extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!--
Inspired by http://dribbble.com/shots/890759-Ui-Kit-Metro/attachments/97174
-->
<div class=\"container\">
    <div class=\"row main\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<!-- Carousel
\t\t\t\t================================================== -->
\t\t\t\t<div id=\"myCarousel\" class=\"carousel slide slide-carousel\" data-ride=\"carousel\">
\t\t\t\t  <!-- Indicators -->
\t\t\t\t  <ol class=\"carousel-indicators\">
\t\t\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
\t\t\t\t  </ol>
\t\t    \t<div class=\"container\">
\t\t        <div class=\"carousel-caption\">
\t\t          <h3><span class=\"glyphicon glyphicon-home\"></span>      SIC-UES</h3>
\t\t          <hr>
\t\t          <!-- <h1>SIC-UES</h1> -->
\t\t          <p align=\"center\">Secretaría de Investigaciones Científicas de la Universidad de El Salvador</p>
\t\t          <!-- <a href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/unicaes-censalud");
        echo "\" class=\"btn btn-success\" role=\"button\">Ver Proyecto UNICAES-CENSALUD</a> -->
\t\t        </div>
\t\t      </div>
\t\t\t\t  <div class=\"carousel-inner\">
\t\t\t\t    <div class=\"item active\">
\t\t\t\t      <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/sliderfront1.png");
        echo "\" class=\"img-responsive\">
\t\t\t\t    </div>
\t\t\t\t    <div class=\"item\">
\t\t\t\t      <img src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/sliderfront8.png");
        echo "\" class=\"img-responsive\">
\t\t\t\t    </div>
\t\t\t\t    <div class=\"item\">
\t\t\t\t      <img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/sliderfront2.png");
        echo "\" class=\"img-responsive\">
\t\t\t\t    </div>
                    <div class=\"item\">
\t\t\t\t      <img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/sliderfront3.png");
        echo "\" class=\"img-responsive\">
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <!-- Controls 
\t\t\t\t  <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
\t\t\t\t    <span class=\"icon-prev\"></span>
\t\t\t\t  </a>
\t\t\t\t  <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
\t\t\t\t    <span class=\"icon-next\"></span>
\t\t\t\t  </a>-->  
\t\t\t\t</div>
\t\t\t\t<!-- /.carousel -->
\t\t\t</div>

\t\t\t<div class=\"col-md-4 main-right\">
\t\t\t\t<div class=\"subscribe\">
\t\t\t\t\t<h1>SIPC</h1>
\t\t\t\t\t<h4>Sistema de Información de la Producción Cientifica de la Universidad de El Salvador</h4>
\t\t\t\t\t<p align=\"center\"> <a class=\"btn btn-success\" href=\"https://sipc.sic.ues.edu.sv\" target=\"_blank\">Registrar Proyecto de Investigación</br>Convocatoria 19 2020</a></p>
\t\t\t\t\t<a href=\"#\">¿Cómo lo hago?</a>
\t\t\t\t\t<!-- <p align=\"left\"><a href=\"\">Más información</a></p>
\t\t\t\t\t<!--<p><a href=\"https://goo.gl/forms/Hs6Rs57WBJo8xGZS2\" target=\"_blank\" class=\"btn btn-success btn-xs\" role=\"button\">Inscribete</a></p>-->
\t\t\t\t\t
\t\t\t\t\t<!-- <div class=\"input-group\">
\t\t\t\t\t\t\t      \t<form accept-charset=\"UTF-8\" role=\"form\">
\t\t\t\t\t\t\t      \t\t\t\t\t                    <div class=\"form-group\">
\t\t\t\t\t\t\t      \t\t\t\t\t                    \t<input class=\"form-control\" placeholder=\"Usuario\" name=\"email\" type=\"text\">
\t\t\t\t\t\t\t      \t\t\t\t\t                    </div>
\t\t\t\t\t\t\t      \t\t\t\t\t                    <div class=\"form-group\">
\t\t\t\t\t\t\t      \t\t\t\t\t                        <input class=\"form-control\" placeholder=\"Contraseña\" name=\"password\" type=\"password\" value=\"\">
\t\t\t\t\t\t\t      \t\t\t\t\t                    </div>
\t\t\t\t\t\t\t      \t\t\t\t\t                    <button type=\"submit\" class=\"btn btn-success\">Iniciar sesión</button>
\t\t\t\t\t\t\t      \t\t\t\t\t                </form>
\t\t\t\t\t\t\t      \t<input type=\"text\" class=\"form-control\" placeholder=\"Your email\">
\t\t\t\t\t\t\t      \t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t      \t  <button class=\"btn btn-default\" type=\"button\"><span class=\"glyphicon glyphicon-save-file\"></span></button>
\t\t\t\t\t\t\t      \t</span>
\t\t\t\t\t\t\t    \t</div> -->
\t\t\t\t</div>
\t\t\t\t<div class=\"subscribe\"> <!--class=\"best\"-->
\t\t\t\t<h2>Consultar Estado Proyecto</h2>
\t\t\t\t\t<h4>Consulta el estado actual del Proyecto de Investigación</h4>
\t\t\t\t\t<a href=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/estado-proyecto");
        echo "\"> <button type=\"button\" class=\"btn btn-info\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> Consultar Estado Proyecto </button></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row main-nav\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-circle\"><i class=\"fa fa-users fa-2x\" aria-hidden=\"true\"></i></a>\t
\t\t\t\t<a class=\"a\" href=\"https://sic.ues.edu.sv/miembros-del-consejo/\">Consejo de Investigaciones</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a href=\"http://minerva.sic.ues.edu.sv\" target=\"_blank\" class=\"btn btn-default btn-circle\"><i class=\"fa fa-bars fa-2x\" aria-hidden=\"true\"></i></a> 
\t\t\t\t<a class=\"a\" href=\"https://minerva.sic.ues.edu.sv/index.php/Minerva\" target=\"_blank\">Revista Científica Minerva</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a href=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/memoria-labores");
        echo "\" class=\"btn btn-default btn-circle\"><i class=\"fa fa-bug fa-2x\" aria-hidden=\"true\"></i></a> 
\t\t\t\t<a class=\"a\" href=\"https://sic.ues.edu.sv/portalminerva/#/home\" target=\"_blank\"> Portal Minerva </a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<style>
\t
\t/*
Inspired by http://dribbble.com/shots/890759-Ui-Kit-Metro/attachments/97174
*/

.main {
    /*background-color: #fff; */
\tmargin-top: 20px;
}
.a {
\tcolor:#fff;
\ttext-decoration:none;
}
.main-nav {
\tbackground: url(https://sic.ues.edu.sv/themes/sicues/assets/images/fondoslider2.png); /* http://habrastorage.org/files/f75/559/b17/f75559b1771b4a4d943730257b2b2a6d.png*/
\ttext-transform: uppercase;
\tcolor: #fff;
\tfont-weight: 800;
}

.main-nav .col-md-4,
.main-nav .col-md-8,
.main .col-md-4,
.main .col-md-8 {
\tborder: 1px solid #fff;
\tborder-right: none;
\tmargin-bottom: -1px;
}


.main .col-md-8,
.main .main-right {
\tpadding: 0;
}

.main-right {
\tmin-height: 400px;
}

.main .col-md-8 {
\tcolor: #aa0000; /*antes #e92d00*/
\tmargin-top: -6px;
\tborder-top: 6px solid #aa0000; /*color de la barra #e92d00*/
}

.main .col-md-8:before {
\tcontent: '';
\tposition: absolute;
\tborder-style: solid;
\tborder-width: 6px 6px 0;
\tborder-color: #aa0000 transparent; /*antes #e92d00 esta es la flechita de la barra*/
\tdisplay: block;
\twidth: 0;
\tz-index: 1;
\tmargin-left: -6px;
\ttop: 0;
\tleft: 75px;
}

.subscribe {
\tbackground: /*#fff;*/ url(https://sic.ues.edu.sv/themes/sicues/assets/images/sliderfront6.png);
\tbackground-size: cover;
\twidth: 100%;
\tmin-height: 232px;/*262px*/
\tmax-height: 262px;
\tmargin-top: -7px;
\tborder-top: 6px solid #aa0000;/*#c86c00;*/
\tcolor: #fff;
\ttext-align: center;
}
.subscribe:before {
\tcontent: '';
\tposition: absolute;
\tborder-style: solid;
\tborder-width: 6px 6px 0;
\tborder-color: #aa0000 transparent;/*#c86c00;*/
\tdisplay: block;
\twidth: 0;
\tz-index: 1;
\tmargin-left: -6px;
\tleft: 75px;
}

.subscribe h1 {
\ttext-transform: uppercase;
}

.subscribe h4:before,
.subscribe h4:after {
\tcontent: \"–––\";
\tpadding: 10px; 
}

.subscribe .input-group {
\tmargin: 0 50px;
\tpadding: 10px;
}

.subscribe input {
\tpadding: 22px 10px 22px 10px;
}

.subscribe .btn {
\tpadding: 12px 10px 12px 10px;\t
}

.best {
\tbackground: #A0A0A0;/*url(https://sic.ues.edu.sv/themes/sicues/assets/images/equipo-sic.png);*/
\tbackground-size: cover;
\twidth: 100%;
\tmin-height: 202px;
\tmax-height: 202px;
\tmargin-top: -7px;
\tborder-top: 6px solid #aa0000; /* esta es la barrita de separación de las imagen lev antes #5da22d*/
\ttext-align: center;
\tcolor: #fff;
\t
}

.best:before {
\tcontent: '';
\tposition: absolute;
\tborder-style: solid;
\tborder-width: 6px 6px 0;
\tborder-color: #aa0000 transparent; /*esta es la flechita de la imagen lev*/
\tdisplay: block;
\twidth: 0;
\tz-index: 1;
\tmargin-left: -6px;
\tleft: 75px;
}
.best h1 {
\ttext-transform: uppercase;
}

.best h4:before,
.best h4:after {
\tcontent: \"–––\";
\tpadding: 10px; 
}
.best .input-group {
\tmargin: 0 50px;
\tpadding: 10px;
}

.best input {
\tpadding: 22px 10px 22px 10px;
}

.best .btn {
\tpadding: 12px 10px 10px 10px;
\tmargin-top: 150px;
}

.main-nav .glyphicon {
\tfont-size: 25px;
\tcolor: #abab9f;
\tpadding: 0;
}
.main-nav .btn-circle {
\tborder: 3px solid #abab9f;
\twidth: 45px;
\theight: 45px;
\ttext-align: center;
\tpadding: 7px 0;
\tfont-size: 12px;
\tborder-radius: 50%;
\tmargin: 20px 5px 20px 40px;
}

.main-nav {
\tborder-radius: 0 0 5px 5px;
}

.main-nav .col-md-4 {
\tborder-bottom: none;
}
.main-nav .col-md-4:first-child {
\tborder-left: none;
}
.main-nav .col-md-4:last-child {
\tborder-right: none;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 0px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel .item {
\theight: 100%;
\tmin-height: 450px;
\tpadding: 0;
\tfloat: right;
\twidth: 50%;
}

.carousel-indicators li {
\twidth: 20px;
\theight: 20px;
\tbackground-color: rgba(0, 0, 0, .1);
\tborder: 1px solid #aeafa0;
}

.carousel-indicators .active {
\twidth: 20px;
\theight: 20px;
\tmargin: 0;
\tbackground-color: #71af42;
}

.carousel-indicators {
\tleft: 25%;
}

.carousel img {
  position: absolute;
  top: 0;
  left: 0;
  min-height: 450px;
  width: 100%;
}

.carousel-caption {
\tfloat: left;
\tmargin-right: 50%;
\ttop: 30px;
\ttext-align: left;
}

.carousel-caption h3 {
\tcolor: #ec4720; 
\ttext-transform: uppercase;
}

.carousel-caption h1 {
\tcolor: #aa0000;  /*color de las letras del titulo antes #ec4720*/
\tfont-size: 30pt;
\ttext-transform: uppercase;
}

.carousel-caption p {
\tcolor: #000;
\tfont-size: 12pt;
\tfont-weight: 100;
}

@media screen and (min-width: 768px) {
\t.carousel-caption {
\t\tright: 5%;
\t\tleft: 10%;
\t\tpadding-bottom: 30px;\t\t
\t}
}
</style>

<script>
\twindow.onload=function (){\$('.carousel .vertical .item').each(function(){
  var next = \$(this).next();
  if (!next.length) {
    next = \$(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo(\$(this));
  
  for (var i=1;i<2;i++) {
    next=next.next();
    if (!next.length) {
    \tnext = \$(this).siblings(':first');
  \t}
    
    next.children(':first-child').clone().appendTo(\$(this));
  }
});}
</script>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/slider2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 94,  132 => 79,  87 => 37,  81 => 34,  75 => 31,  69 => 28,  61 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--
Inspired by http://dribbble.com/shots/890759-Ui-Kit-Metro/attachments/97174
-->
<div class=\"container\">
    <div class=\"row main\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<!-- Carousel
\t\t\t\t================================================== -->
\t\t\t\t<div id=\"myCarousel\" class=\"carousel slide slide-carousel\" data-ride=\"carousel\">
\t\t\t\t  <!-- Indicators -->
\t\t\t\t  <ol class=\"carousel-indicators\">
\t\t\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
\t\t\t\t  </ol>
\t\t    \t<div class=\"container\">
\t\t        <div class=\"carousel-caption\">
\t\t          <h3><span class=\"glyphicon glyphicon-home\"></span>      SIC-UES</h3>
\t\t          <hr>
\t\t          <!-- <h1>SIC-UES</h1> -->
\t\t          <p align=\"center\">Secretaría de Investigaciones Científicas de la Universidad de El Salvador</p>
\t\t          <!-- <a href=\"{{'samples/unicaes-censalud'|page}}\" class=\"btn btn-success\" role=\"button\">Ver Proyecto UNICAES-CENSALUD</a> -->
\t\t        </div>
\t\t      </div>
\t\t\t\t  <div class=\"carousel-inner\">
\t\t\t\t    <div class=\"item active\">
\t\t\t\t      <img src=\"{{'/assets/images/sliderfront1.png'|theme}}\" class=\"img-responsive\">
\t\t\t\t    </div>
\t\t\t\t    <div class=\"item\">
\t\t\t\t      <img src=\"{{'/assets/images/sliderfront8.png'|theme}}\" class=\"img-responsive\">
\t\t\t\t    </div>
\t\t\t\t    <div class=\"item\">
\t\t\t\t      <img src=\"{{'/assets/images/sliderfront2.png'|theme}}\" class=\"img-responsive\">
\t\t\t\t    </div>
                    <div class=\"item\">
\t\t\t\t      <img src=\"{{'/assets/images/sliderfront3.png'|theme}}\" class=\"img-responsive\">
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t  <!-- Controls 
\t\t\t\t  <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
\t\t\t\t    <span class=\"icon-prev\"></span>
\t\t\t\t  </a>
\t\t\t\t  <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
\t\t\t\t    <span class=\"icon-next\"></span>
\t\t\t\t  </a>-->  
\t\t\t\t</div>
\t\t\t\t<!-- /.carousel -->
\t\t\t</div>

\t\t\t<div class=\"col-md-4 main-right\">
\t\t\t\t<div class=\"subscribe\">
\t\t\t\t\t<h1>SIPC</h1>
\t\t\t\t\t<h4>Sistema de Información de la Producción Cientifica de la Universidad de El Salvador</h4>
\t\t\t\t\t<p align=\"center\"> <a class=\"btn btn-success\" href=\"https://sipc.sic.ues.edu.sv\" target=\"_blank\">Registrar Proyecto de Investigación</br>Convocatoria 19 2020</a></p>
\t\t\t\t\t<a href=\"#\">¿Cómo lo hago?</a>
\t\t\t\t\t<!-- <p align=\"left\"><a href=\"\">Más información</a></p>
\t\t\t\t\t<!--<p><a href=\"https://goo.gl/forms/Hs6Rs57WBJo8xGZS2\" target=\"_blank\" class=\"btn btn-success btn-xs\" role=\"button\">Inscribete</a></p>-->
\t\t\t\t\t
\t\t\t\t\t<!-- <div class=\"input-group\">
\t\t\t\t\t\t\t      \t<form accept-charset=\"UTF-8\" role=\"form\">
\t\t\t\t\t\t\t      \t\t\t\t\t                    <div class=\"form-group\">
\t\t\t\t\t\t\t      \t\t\t\t\t                    \t<input class=\"form-control\" placeholder=\"Usuario\" name=\"email\" type=\"text\">
\t\t\t\t\t\t\t      \t\t\t\t\t                    </div>
\t\t\t\t\t\t\t      \t\t\t\t\t                    <div class=\"form-group\">
\t\t\t\t\t\t\t      \t\t\t\t\t                        <input class=\"form-control\" placeholder=\"Contraseña\" name=\"password\" type=\"password\" value=\"\">
\t\t\t\t\t\t\t      \t\t\t\t\t                    </div>
\t\t\t\t\t\t\t      \t\t\t\t\t                    <button type=\"submit\" class=\"btn btn-success\">Iniciar sesión</button>
\t\t\t\t\t\t\t      \t\t\t\t\t                </form>
\t\t\t\t\t\t\t      \t<input type=\"text\" class=\"form-control\" placeholder=\"Your email\">
\t\t\t\t\t\t\t      \t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t      \t  <button class=\"btn btn-default\" type=\"button\"><span class=\"glyphicon glyphicon-save-file\"></span></button>
\t\t\t\t\t\t\t      \t</span>
\t\t\t\t\t\t\t    \t</div> -->
\t\t\t\t</div>
\t\t\t\t<div class=\"subscribe\"> <!--class=\"best\"-->
\t\t\t\t<h2>Consultar Estado Proyecto</h2>
\t\t\t\t\t<h4>Consulta el estado actual del Proyecto de Investigación</h4>
\t\t\t\t\t<a href=\"{{'samples/estado-proyecto'|page}}\"> <button type=\"button\" class=\"btn btn-info\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> Consultar Estado Proyecto </button></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row main-nav\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-circle\"><i class=\"fa fa-users fa-2x\" aria-hidden=\"true\"></i></a>\t
\t\t\t\t<a class=\"a\" href=\"https://sic.ues.edu.sv/miembros-del-consejo/\">Consejo de Investigaciones</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a href=\"http://minerva.sic.ues.edu.sv\" target=\"_blank\" class=\"btn btn-default btn-circle\"><i class=\"fa fa-bars fa-2x\" aria-hidden=\"true\"></i></a> 
\t\t\t\t<a class=\"a\" href=\"https://minerva.sic.ues.edu.sv/index.php/Minerva\" target=\"_blank\">Revista Científica Minerva</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a href=\"{{'samples/memoria-labores'|page}}\" class=\"btn btn-default btn-circle\"><i class=\"fa fa-bug fa-2x\" aria-hidden=\"true\"></i></a> 
\t\t\t\t<a class=\"a\" href=\"https://sic.ues.edu.sv/portalminerva/#/home\" target=\"_blank\"> Portal Minerva </a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<style>
\t
\t/*
Inspired by http://dribbble.com/shots/890759-Ui-Kit-Metro/attachments/97174
*/

.main {
    /*background-color: #fff; */
\tmargin-top: 20px;
}
.a {
\tcolor:#fff;
\ttext-decoration:none;
}
.main-nav {
\tbackground: url(https://sic.ues.edu.sv/themes/sicues/assets/images/fondoslider2.png); /* http://habrastorage.org/files/f75/559/b17/f75559b1771b4a4d943730257b2b2a6d.png*/
\ttext-transform: uppercase;
\tcolor: #fff;
\tfont-weight: 800;
}

.main-nav .col-md-4,
.main-nav .col-md-8,
.main .col-md-4,
.main .col-md-8 {
\tborder: 1px solid #fff;
\tborder-right: none;
\tmargin-bottom: -1px;
}


.main .col-md-8,
.main .main-right {
\tpadding: 0;
}

.main-right {
\tmin-height: 400px;
}

.main .col-md-8 {
\tcolor: #aa0000; /*antes #e92d00*/
\tmargin-top: -6px;
\tborder-top: 6px solid #aa0000; /*color de la barra #e92d00*/
}

.main .col-md-8:before {
\tcontent: '';
\tposition: absolute;
\tborder-style: solid;
\tborder-width: 6px 6px 0;
\tborder-color: #aa0000 transparent; /*antes #e92d00 esta es la flechita de la barra*/
\tdisplay: block;
\twidth: 0;
\tz-index: 1;
\tmargin-left: -6px;
\ttop: 0;
\tleft: 75px;
}

.subscribe {
\tbackground: /*#fff;*/ url(https://sic.ues.edu.sv/themes/sicues/assets/images/sliderfront6.png);
\tbackground-size: cover;
\twidth: 100%;
\tmin-height: 232px;/*262px*/
\tmax-height: 262px;
\tmargin-top: -7px;
\tborder-top: 6px solid #aa0000;/*#c86c00;*/
\tcolor: #fff;
\ttext-align: center;
}
.subscribe:before {
\tcontent: '';
\tposition: absolute;
\tborder-style: solid;
\tborder-width: 6px 6px 0;
\tborder-color: #aa0000 transparent;/*#c86c00;*/
\tdisplay: block;
\twidth: 0;
\tz-index: 1;
\tmargin-left: -6px;
\tleft: 75px;
}

.subscribe h1 {
\ttext-transform: uppercase;
}

.subscribe h4:before,
.subscribe h4:after {
\tcontent: \"–––\";
\tpadding: 10px; 
}

.subscribe .input-group {
\tmargin: 0 50px;
\tpadding: 10px;
}

.subscribe input {
\tpadding: 22px 10px 22px 10px;
}

.subscribe .btn {
\tpadding: 12px 10px 12px 10px;\t
}

.best {
\tbackground: #A0A0A0;/*url(https://sic.ues.edu.sv/themes/sicues/assets/images/equipo-sic.png);*/
\tbackground-size: cover;
\twidth: 100%;
\tmin-height: 202px;
\tmax-height: 202px;
\tmargin-top: -7px;
\tborder-top: 6px solid #aa0000; /* esta es la barrita de separación de las imagen lev antes #5da22d*/
\ttext-align: center;
\tcolor: #fff;
\t
}

.best:before {
\tcontent: '';
\tposition: absolute;
\tborder-style: solid;
\tborder-width: 6px 6px 0;
\tborder-color: #aa0000 transparent; /*esta es la flechita de la imagen lev*/
\tdisplay: block;
\twidth: 0;
\tz-index: 1;
\tmargin-left: -6px;
\tleft: 75px;
}
.best h1 {
\ttext-transform: uppercase;
}

.best h4:before,
.best h4:after {
\tcontent: \"–––\";
\tpadding: 10px; 
}
.best .input-group {
\tmargin: 0 50px;
\tpadding: 10px;
}

.best input {
\tpadding: 22px 10px 22px 10px;
}

.best .btn {
\tpadding: 12px 10px 10px 10px;
\tmargin-top: 150px;
}

.main-nav .glyphicon {
\tfont-size: 25px;
\tcolor: #abab9f;
\tpadding: 0;
}
.main-nav .btn-circle {
\tborder: 3px solid #abab9f;
\twidth: 45px;
\theight: 45px;
\ttext-align: center;
\tpadding: 7px 0;
\tfont-size: 12px;
\tborder-radius: 50%;
\tmargin: 20px 5px 20px 40px;
}

.main-nav {
\tborder-radius: 0 0 5px 5px;
}

.main-nav .col-md-4 {
\tborder-bottom: none;
}
.main-nav .col-md-4:first-child {
\tborder-left: none;
}
.main-nav .col-md-4:last-child {
\tborder-right: none;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 0px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel .item {
\theight: 100%;
\tmin-height: 450px;
\tpadding: 0;
\tfloat: right;
\twidth: 50%;
}

.carousel-indicators li {
\twidth: 20px;
\theight: 20px;
\tbackground-color: rgba(0, 0, 0, .1);
\tborder: 1px solid #aeafa0;
}

.carousel-indicators .active {
\twidth: 20px;
\theight: 20px;
\tmargin: 0;
\tbackground-color: #71af42;
}

.carousel-indicators {
\tleft: 25%;
}

.carousel img {
  position: absolute;
  top: 0;
  left: 0;
  min-height: 450px;
  width: 100%;
}

.carousel-caption {
\tfloat: left;
\tmargin-right: 50%;
\ttop: 30px;
\ttext-align: left;
}

.carousel-caption h3 {
\tcolor: #ec4720; 
\ttext-transform: uppercase;
}

.carousel-caption h1 {
\tcolor: #aa0000;  /*color de las letras del titulo antes #ec4720*/
\tfont-size: 30pt;
\ttext-transform: uppercase;
}

.carousel-caption p {
\tcolor: #000;
\tfont-size: 12pt;
\tfont-weight: 100;
}

@media screen and (min-width: 768px) {
\t.carousel-caption {
\t\tright: 5%;
\t\tleft: 10%;
\t\tpadding-bottom: 30px;\t\t
\t}
}
</style>

<script>
\twindow.onload=function (){\$('.carousel .vertical .item').each(function(){
  var next = \$(this).next();
  if (!next.length) {
    next = \$(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo(\$(this));
  
  for (var i=1;i<2;i++) {
    next=next.next();
    if (!next.length) {
    \tnext = \$(this).siblings(':first');
  \t}
    
    next.children(':first-child').clone().appendTo(\$(this));
  }
});}
</script>", "/websicues/themes/sicues/partials/slider2.htm", "");
    }
}
