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

/* /websicues/themes/sicues/pages/samples/sobre-nosotros.htm */
class __TwigTemplate_4f4511e3df1c3b012245360fee0de456be39a0e0598dc813690a72d023ab0e62 extends \Twig\Template
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
        echo "<section id=\"about-us\">
        <div class=\"container\">
\t\t\t<div class=\"center wow fadeInDown\">
\t\t\t\t<h2>Equipo de trabajo</h2>
\t\t\t\t<p class=\"lead\">Estamos comprometidos para alcanzar los objetivos de la Secretaría de Investigación. <br> Bienvenidos (as).</p>
\t\t\t</div>
\t\t\t
\t\t\t<!-- about us slider -->
\t\t\t<div id=\"about-slider\">
\t\t\t\t<div id=\"carousel-slider\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<!-- Indicators -->
\t\t\t\t  \t<ol class=\"carousel-indicators visible-xs\">
\t\t\t\t\t    <li data-target=\"#carousel-slider\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t    <li data-target=\"#carousel-slider\" data-slide-to=\"1\"></li>
\t\t\t\t\t    <li data-target=\"#carousel-slider\" data-slide-to=\"2\"></li>
\t\t\t\t  \t</ol>

\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t\t<img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/equiposicues.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"> 
\t\t\t\t\t   </div>
\t\t\t\t\t   <div class=\"item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/equiposicues.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"> 
\t\t\t\t\t   </div> 
\t\t\t\t\t   <div class=\"item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/equiposicues.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"> 
\t\t\t\t\t   </div> 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<a class=\"left carousel-control hidden-xs\" href=\"#carousel-slider\" data-slide=\"prev\">
\t\t\t\t\t\t<i class=\"fa fa-angle-left\"></i> 
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t\t<a class=\" right carousel-control hidden-xs\"href=\"#carousel-slider\" data-slide=\"next\">
\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 
\t\t\t\t\t</a>
\t\t\t\t</div> <!--/#carousel-slider-->
\t\t\t</div><!--/#about-slider-->
\t\t\t
\t\t\t
\t\t\t<!-- Our Skill -->
\t\t\t<div class=\"skill-wrap clearfix\">
\t\t\t
\t\t\t\t<div class=\"center wow fadeInDown\">
\t\t\t\t\t<!-- <h2>Our Skill</h2> -->
\t\t\t\t\t<p class=\"lead\">SOBRE NOSOTROS</p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- <div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"joomla-skill\">                                   
\t\t\t\t\t\t\t\t<p><em>85%</em></p>
\t\t\t\t\t\t\t\t<p>Joomla</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t <div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"html-skill\">                                  
\t\t\t\t\t\t\t\t<p><em>95%</em></p>
\t\t\t\t\t\t\t\t<p>HTML</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\">
\t\t\t\t\t\t\t<div class=\"css-skill\">                                    
\t\t\t\t\t\t\t\t<p><em>80%</em></p>
\t\t\t\t\t\t\t\t<p>CSS</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t <div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"1200ms\">
\t\t\t\t\t\t\t<div class=\"wp-skill\">
\t\t\t\t\t\t\t\t<p><em>90%</em></p>
\t\t\t\t\t\t\t\t<p>Wordpress</p>                                     
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div> -->
\t\t\t\t
\t\t\t            </div><!--/.our-skill-->
\t\t\t

\t\t\t<!-- our-team -->
\t\t\t<div class=\"team\">
\t\t\t\t<!-- <div class=\"center wow fadeInDown\">
\t\t\t\t\t<h2>Sobre Nosotros</h2>
\t\t\t\t\t<p class=\"lead\">Equipo de trabajo de la Secretaría de Investigaciones Científicas</p>
\t\t\t\t</div> -->
\t\t\t\t
            \t<div class=\"row clearfix\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">\t
\t\t\t\t\t\t<div class=\"single-profile-top wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"";
        // line 104
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/miguels.jpg");
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Miguel Sermeño</h4>
\t\t\t\t\t\t\t\t\t<h5>Secretario de Investigación</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"";
        // line 110
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/miguel-sermeno.htm");
        echo "\">Resumen Profesional</a></li>
\t\t\t\t\t\t\t\t\t\t<!-- <li class=\"btn\"><a href=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/miembros-consejo.htm");
        echo "\">Miembros del CIC-UES</a></li> -->
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<!-- <ul class=\"social_icons\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t<p>Responsable de la administración, promoción y difusión de la investigación científica y tecnológica de la Universidad de El Salvador.</p>
\t\t\t\t\t\t</div>  
\t\t\t\t\t</div><!--/.col-lg-4 -->
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">\t
\t\t\t\t\t\t<div class=\"single-profile-top wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"";
        // line 129
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/miguels.jpg");
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Miguel Sermeño</h4>
\t\t\t\t\t\t\t\t\t<h5>Director Ejecutivo</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"";
        // line 135
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/miguel-sermeno.htm");
        echo "\">Resumen Profesional</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"";
        // line 136
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/miembros-consejo.htm");
        echo "\">Miembros del CIC-UES</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"";
        // line 137
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/miembros-consejo.htm");
        echo "\">Gestores seguimiento</br> de proyectos</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<!-- <ul class=\"social_icons\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>Director Ejecutivo del Consejo de Investigaciones Científicas CIC-UES. Responsable de dar seguimiento a los proyectos de investigación</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!--/.col-lg-4 -->\t\t\t\t\t
\t\t\t\t</div> <!--/.row -->
\t\t\t\t<div class=\"row team-bar\">
\t\t\t\t\t<div class=\"first-one-arrow hidden-xs\">
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"first-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"second-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"third-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"fourth-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div> <!--skill_border-->       

\t\t\t\t<div class=\"row clearfix\">   
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">\t
\t\t\t\t\t\t<div class=\"single-profile-bottom wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"";
        // line 173
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/entorno.jpg");
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>OTRIVE</h4>
\t\t\t\t\t\t\t\t\t<h5>Oficina de Transferencia de Resultados de Investigación y Vinculación Externa</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\">Sobre Nosotros</li>
\t\t\t\t\t\t\t\t\t\t<!-- <li class=\"btn\">Observatorio </br>Técnologico</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\">Educación Continua</li> -->
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<!-- <ul>
\t\t\t\t\t\t\t    <li class=\"btn\">Oferta Científica y Técnologica</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul> -->
\t\t\t\t\t\t\t<p>La relación UES – Entorno Productivo nace como un proyecto financiado por la AECID (Agencia Española de Cooperación Internacional para el Desarrollo), con el apoyo de la Universidad de Alicante.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"single-profile-bottom wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"";
        // line 196
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/epi.jpg");
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>EPI-CIC</h4>
\t\t\t\t\t\t\t\t\t<h5>Enlace y Promoción de la Investigación</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\">Facebook</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\">Youtube</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"";
        // line 204
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/epi-sic.htm");
        echo "\">Sobre Nosotros</a></li>
\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>Enlace y Promoción de la Investigación es el responsable de divulgar a traves de los medios de comunicación el que hacer de los proyectos de investigación inscritos en la Secretaría de Investigación de la Universidad de El Salvador.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t<!--/.row-->
\t\t\t\t\t<div class=\"row team-bar\">
\t\t\t\t\t<div class=\"first-one-arrow hidden-xs\">
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"first-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"second-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"third-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"fourth-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div> <!--skill_border--> 
\t\t\t\t
\t\t\t\t<div class=\"row clearfix\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">\t
\t\t\t\t\t\t<div class=\"single-profile-top wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"";
        // line 236
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/entorno.jpg");
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Revista Minerva</h4>
\t\t\t\t\t\t\t\t\t<!-- <h5>Secretario de Investigación</h5> -->
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\">Sobre Nosotros</li>
\t\t\t\t\t\t\t\t\t\t<!-- <li class=\"btn\">Observatorio </br>Técnologico</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\">Educación Continua</li> -->
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<!-- <ul>
\t\t\t\t\t\t\t    <li class=\"btn\">Oferta Científica y Técnologica</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul> -->
\t\t\t\t\t\t\t<p>La relación UES – Entorno Productivo nace como un proyecto financiado por la AECID (Agencia Española de Cooperación Internacional para el Desarrollo), con el apoyo de la Universidad de Alicante.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!--/.col-lg-4 -->
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">\t
\t\t\t\t\t\t<div class=\"single-profile-top wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"";
        // line 261
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/informatica-sic.jpg");
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Informatica</h4>
\t\t\t\t\t\t\t\t\t<!--<h5>Director Ejecutivo</h5>-->
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Sobre Nosotros</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>Son los responsables de administrar y monitorizar el correcto funcionamiento de los sistemas informáticos de la Secretaría de Investigación.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!--/.col-lg-4 -->\t\t\t\t\t
\t\t\t\t</div> <!--/.row -->
\t\t\t\t
\t\t\t\t<div class=\"row team-bar\">
\t\t\t\t\t<div class=\"first-one-arrow hidden-xs\">
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"first-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"second-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"third-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"fourth-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div> <!--skill_border-->
\t\t\t\t
\t\t\t\t<div class=\"row clearfix\">   
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">\t
\t\t\t\t\t\t<div class=\"single-profile-bottom wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"";
        // line 299
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arely.jpg");
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Administración Financiera</h4>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Sobre Nosotros</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>Son los responsables de administrar y cuidar con eficiencia los recursos financieros destinados a la Secretaría de Investigaciones Cientificas de la Universidad de El Salvador.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"single-profile-bottom wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"";
        // line 317
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/epi.jpg");
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>EPI-CIC</h4>
\t\t\t\t\t\t\t\t\t<h5>Enlace y Promoción de la Investigación</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\">Facebook</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\">Youtube</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"";
        // line 325
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/epi-sic.htm");
        echo "\">Sobre Nosotros</a></li>
\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>Enlace y Promoción de la Investigación es el responsable de divulgar a traves de los medios de comunicación el que hacer de los proyectos de investigación inscritos en la Secretaría de Investigación de la Universidad de El Salvador.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t<!--/.row-->
\t\t\t</div><!--section-->
\t\t</div><!--/.container-->
    </section><!--/sobre-nosotros-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/samples/sobre-nosotros.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 325,  403 => 317,  382 => 299,  341 => 261,  313 => 236,  278 => 204,  267 => 196,  241 => 173,  202 => 137,  198 => 136,  194 => 135,  185 => 129,  164 => 111,  160 => 110,  151 => 104,  70 => 26,  64 => 23,  58 => 20,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"about-us\">
        <div class=\"container\">
\t\t\t<div class=\"center wow fadeInDown\">
\t\t\t\t<h2>Equipo de trabajo</h2>
\t\t\t\t<p class=\"lead\">Estamos comprometidos para alcanzar los objetivos de la Secretaría de Investigación. <br> Bienvenidos (as).</p>
\t\t\t</div>
\t\t\t
\t\t\t<!-- about us slider -->
\t\t\t<div id=\"about-slider\">
\t\t\t\t<div id=\"carousel-slider\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<!-- Indicators -->
\t\t\t\t  \t<ol class=\"carousel-indicators visible-xs\">
\t\t\t\t\t    <li data-target=\"#carousel-slider\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t    <li data-target=\"#carousel-slider\" data-slide-to=\"1\"></li>
\t\t\t\t\t    <li data-target=\"#carousel-slider\" data-slide-to=\"2\"></li>
\t\t\t\t  \t</ol>

\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/equiposicues.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"> 
\t\t\t\t\t   </div>
\t\t\t\t\t   <div class=\"item\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/equiposicues.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"> 
\t\t\t\t\t   </div> 
\t\t\t\t\t   <div class=\"item\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/equiposicues.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"> 
\t\t\t\t\t   </div> 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<a class=\"left carousel-control hidden-xs\" href=\"#carousel-slider\" data-slide=\"prev\">
\t\t\t\t\t\t<i class=\"fa fa-angle-left\"></i> 
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t\t<a class=\" right carousel-control hidden-xs\"href=\"#carousel-slider\" data-slide=\"next\">
\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 
\t\t\t\t\t</a>
\t\t\t\t</div> <!--/#carousel-slider-->
\t\t\t</div><!--/#about-slider-->
\t\t\t
\t\t\t
\t\t\t<!-- Our Skill -->
\t\t\t<div class=\"skill-wrap clearfix\">
\t\t\t
\t\t\t\t<div class=\"center wow fadeInDown\">
\t\t\t\t\t<!-- <h2>Our Skill</h2> -->
\t\t\t\t\t<p class=\"lead\">SOBRE NOSOTROS</p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- <div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"joomla-skill\">                                   
\t\t\t\t\t\t\t\t<p><em>85%</em></p>
\t\t\t\t\t\t\t\t<p>Joomla</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t <div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"html-skill\">                                  
\t\t\t\t\t\t\t\t<p><em>95%</em></p>
\t\t\t\t\t\t\t\t<p>HTML</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\">
\t\t\t\t\t\t\t<div class=\"css-skill\">                                    
\t\t\t\t\t\t\t\t<p><em>80%</em></p>
\t\t\t\t\t\t\t\t<p>CSS</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t <div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"1200ms\">
\t\t\t\t\t\t\t<div class=\"wp-skill\">
\t\t\t\t\t\t\t\t<p><em>90%</em></p>
\t\t\t\t\t\t\t\t<p>Wordpress</p>                                     
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div> -->
\t\t\t\t
\t\t\t            </div><!--/.our-skill-->
\t\t\t

\t\t\t<!-- our-team -->
\t\t\t<div class=\"team\">
\t\t\t\t<!-- <div class=\"center wow fadeInDown\">
\t\t\t\t\t<h2>Sobre Nosotros</h2>
\t\t\t\t\t<p class=\"lead\">Equipo de trabajo de la Secretaría de Investigaciones Científicas</p>
\t\t\t\t</div> -->
\t\t\t\t
            \t<div class=\"row clearfix\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">\t
\t\t\t\t\t\t<div class=\"single-profile-top wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"{{ 'assets/images/miguels.jpg'|theme }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Miguel Sermeño</h4>
\t\t\t\t\t\t\t\t\t<h5>Secretario de Investigación</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"{{'samples/miguel-sermeno.htm'|page}}\">Resumen Profesional</a></li>
\t\t\t\t\t\t\t\t\t\t<!-- <li class=\"btn\"><a href=\"{{'samples/miembros-consejo.htm'|page}}\">Miembros del CIC-UES</a></li> -->
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<!-- <ul class=\"social_icons\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t<p>Responsable de la administración, promoción y difusión de la investigación científica y tecnológica de la Universidad de El Salvador.</p>
\t\t\t\t\t\t</div>  
\t\t\t\t\t</div><!--/.col-lg-4 -->
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">\t
\t\t\t\t\t\t<div class=\"single-profile-top wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"{{ 'assets/images/miguels.jpg'|theme }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Miguel Sermeño</h4>
\t\t\t\t\t\t\t\t\t<h5>Director Ejecutivo</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"{{'samples/miguel-sermeno.htm'|page}}\">Resumen Profesional</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"{{'samples/miembros-consejo.htm'|page}}\">Miembros del CIC-UES</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"{{'samples/miembros-consejo.htm'|page}}\">Gestores seguimiento</br> de proyectos</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<!-- <ul class=\"social_icons\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>Director Ejecutivo del Consejo de Investigaciones Científicas CIC-UES. Responsable de dar seguimiento a los proyectos de investigación</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!--/.col-lg-4 -->\t\t\t\t\t
\t\t\t\t</div> <!--/.row -->
\t\t\t\t<div class=\"row team-bar\">
\t\t\t\t\t<div class=\"first-one-arrow hidden-xs\">
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"first-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"second-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"third-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"fourth-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div> <!--skill_border-->       

\t\t\t\t<div class=\"row clearfix\">   
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">\t
\t\t\t\t\t\t<div class=\"single-profile-bottom wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"{{ 'assets/images/entorno.jpg'|theme }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>OTRIVE</h4>
\t\t\t\t\t\t\t\t\t<h5>Oficina de Transferencia de Resultados de Investigación y Vinculación Externa</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\">Sobre Nosotros</li>
\t\t\t\t\t\t\t\t\t\t<!-- <li class=\"btn\">Observatorio </br>Técnologico</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\">Educación Continua</li> -->
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<!-- <ul>
\t\t\t\t\t\t\t    <li class=\"btn\">Oferta Científica y Técnologica</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul> -->
\t\t\t\t\t\t\t<p>La relación UES – Entorno Productivo nace como un proyecto financiado por la AECID (Agencia Española de Cooperación Internacional para el Desarrollo), con el apoyo de la Universidad de Alicante.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"single-profile-bottom wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"{{ 'assets/images/epi.jpg'|theme }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>EPI-CIC</h4>
\t\t\t\t\t\t\t\t\t<h5>Enlace y Promoción de la Investigación</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\">Facebook</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\">Youtube</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"{{'samples/epi-sic.htm'|page}}\">Sobre Nosotros</a></li>
\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>Enlace y Promoción de la Investigación es el responsable de divulgar a traves de los medios de comunicación el que hacer de los proyectos de investigación inscritos en la Secretaría de Investigación de la Universidad de El Salvador.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t<!--/.row-->
\t\t\t\t\t<div class=\"row team-bar\">
\t\t\t\t\t<div class=\"first-one-arrow hidden-xs\">
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"first-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"second-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"third-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"fourth-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div> <!--skill_border--> 
\t\t\t\t
\t\t\t\t<div class=\"row clearfix\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">\t
\t\t\t\t\t\t<div class=\"single-profile-top wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"{{ 'assets/images/entorno.jpg'|theme }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Revista Minerva</h4>
\t\t\t\t\t\t\t\t\t<!-- <h5>Secretario de Investigación</h5> -->
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\">Sobre Nosotros</li>
\t\t\t\t\t\t\t\t\t\t<!-- <li class=\"btn\">Observatorio </br>Técnologico</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\">Educación Continua</li> -->
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<!-- <ul>
\t\t\t\t\t\t\t    <li class=\"btn\">Oferta Científica y Técnologica</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul> -->
\t\t\t\t\t\t\t<p>La relación UES – Entorno Productivo nace como un proyecto financiado por la AECID (Agencia Española de Cooperación Internacional para el Desarrollo), con el apoyo de la Universidad de Alicante.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!--/.col-lg-4 -->
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">\t
\t\t\t\t\t\t<div class=\"single-profile-top wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"{{ 'assets/images/informatica-sic.jpg'|theme }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Informatica</h4>
\t\t\t\t\t\t\t\t\t<!--<h5>Director Ejecutivo</h5>-->
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Sobre Nosotros</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>Son los responsables de administrar y monitorizar el correcto funcionamiento de los sistemas informáticos de la Secretaría de Investigación.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!--/.col-lg-4 -->\t\t\t\t\t
\t\t\t\t</div> <!--/.row -->
\t\t\t\t
\t\t\t\t<div class=\"row team-bar\">
\t\t\t\t\t<div class=\"first-one-arrow hidden-xs\">
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"first-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"second-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"third-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"fourth-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div> <!--skill_border-->
\t\t\t\t
\t\t\t\t<div class=\"row clearfix\">   
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">\t
\t\t\t\t\t\t<div class=\"single-profile-bottom wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"{{ 'assets/images/arely.jpg'|theme }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Administración Financiera</h4>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Sobre Nosotros</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>Son los responsables de administrar y cuidar con eficiencia los recursos financieros destinados a la Secretaría de Investigaciones Cientificas de la Universidad de El Salvador.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"single-profile-bottom wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"{{ 'assets/images/epi.jpg'|theme }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>EPI-CIC</h4>
\t\t\t\t\t\t\t\t\t<h5>Enlace y Promoción de la Investigación</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\">Facebook</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\">Youtube</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"{{'samples/epi-sic.htm'|page}}\">Sobre Nosotros</a></li>
\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>Enlace y Promoción de la Investigación es el responsable de divulgar a traves de los medios de comunicación el que hacer de los proyectos de investigación inscritos en la Secretaría de Investigación de la Universidad de El Salvador.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t<!--/.row-->
\t\t\t</div><!--section-->
\t\t</div><!--/.container-->
    </section><!--/sobre-nosotros-->", "/websicues/themes/sicues/pages/samples/sobre-nosotros.htm", "");
    }
}
