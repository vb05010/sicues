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

/* /websicues/themes/sicues/pages/samples/antonio-vasquez.htm */
class __TwigTemplate_bb7c4752e5716c48619aea96981a4e964281aa0d440149559a3e23e780f4f09f extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"margin\" class=\"container\">
    <div class=\"row clearfix well\">
\t\t<div class=\"col-md-2 column\">
\t\t\t<img class=\"img-responsive\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/miembroscic/antonio-vasquez.png");
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-8 column\">
\t\t\t<blockquote>
\t\t\t\t<p>
\t\t\t\t\tAntonio Vasquez Hidalgo
\t\t\t\t</p> <small>Doctorado Ph.D en Scientific Research certificado por el HAYA</small>
\t\t\t\t</p> <small> <a href=\"http://www.medicina.ues.edu.sv/index.php?option=com_content&view=article&id=360&Itemid=197\" target=\"_blank\">FACULTAD DE MEDICINA</a></small>
\t\t\t\t</p> <small>Idiomas: Español, Ingles avanzado, lectura en Portugués </small>
\t\t\t\t</p> <small>antonio.vasquez@ues.edu.sv</small>
\t\t\t</blockquote> 
\t\t</div>
\t<div class=\"col-md-2 column\">
\t\t 
\t\t\t\t <a href=\"https://sipc.sic.ues.edu.sv/login\" class=\"btn btn-default btn-block\" type=\"button\">Intranet</a>
                 <a href=\"https://sic.ues.edu.sv/storage/app/media/drvasquez/CVDRVASQUEZNOVIEMBRE2017.pdf\" target=\"_blank\" class=\"btn btn-default btn-block\" type=\"button\">Curriculum Vitae</a>
                 <!-- <a href=\"http://investigacionvasquez.webs.com\" target=\"_blank\" class=\"btn btn-default btn-block\" type=\"button\">Sitio Web</a> -->
                 <a href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/directorio-investigadores");
        echo "\" class=\"btn btn-default btn-block\" type=\"button\">+ Investigadores</a>                \t\t 
\t\t</div>
\t</div>
\t
\t\t<div class=\"row clearfix\">
\t\t<div class=\"col-md-12 column\">
\t\t\t<div class=\"tabbable\" id=\"tabs-444468\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"#panel-200304\" data-toggle=\"tab\">Formación</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#panel-567651\" data-toggle=\"tab\">Docencia</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#panel-567649\" data-toggle=\"tab\">Investigación</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#panel-567650\" data-toggle=\"tab\">Proyección social</a>
\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- <li>
\t\t\t\t\t\t<a href=\"#panel-567652\" data-toggle=\"tab\">Reconocimientos</a>
\t\t\t\t\t\t\t\t\t\t\t</li> -->
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"panel-200304\"> <!-- Acerca de mi-->
\t\t\t\t\t\t <div class=\"row clearfix\">
                \t\t\t<div class=\"col-md-8 column\">
            \t\t\t\t\t<p align=\"justify\">
            \t\t\t\t\t\t
<p align=\"justify\"><ul><li>Educación Media  IN. Gral Fco Menéndez Br. Académico en Ciencias</li></p>
<p align=\"justify\"><li>Educación Superior Especialidades:</li></p>
<p align=\"justify\"><li>Doctor en Medicina Universidad de El Salvador.1991</li></p>
<p align=\"justify\"><li>Master en Medicina y Salud Pública UES. /CIES Nicaragua. 1999</li></p>
<p align=\"justify\"><li>Master Class en Investigación. Cooperación proyecto Holanda. Europa/UES .2001</li></p>
<p align=\"justify\"><li>Diplomado en formación Docente.UES El Salvador .2003</li></ul></p>
<p align=\"justify\"><li>Web Master en Informática en salud. En Computing Data Center. El Salvador.2003</li></p>
<p align=\"justify\"><li>Postgrado cursos de Microbiología. Universidad de El Salvador/ Nicaragua/México. 1994-2011</li></p>
<p align=\"justify\"><li>Master en Microbiología. UES/México. Guadalajara. Jalisco. 2008-2010</li></p>
<p align=\"justify\"><li>Doctorate Scientific Research. PhD. USA American A. University. ConapostilladodelaHaya.2014</li></p>

                                
            \t\t\t\t</div>
            \t\t\t\t<div class=\"col-md-4 column\">
            \t\t\t\t\t";
        // line 65
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-vasquez"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "           
            \t\t\t\t</div>
            \t\t\t</div>
\t\t\t\t\t</div> <!-- Fin Acerca de mi-->
\t\t\t\t
\t\t\t\t\t<div class=\"tab-pane\" id=\"panel-567649\"> 
\t\t\t\t\t\t  <div class=\"row clearfix\">
\t\t\t\t\t\t     \t<div class=\"col-md-8 column\">
\t\t\t\t\t\t     \t\t<table id=\"di\" class=\"cell-border\" width=\"100%\" cellspacing=\"0\" data-page-length='10'>
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr class=\"table-active\">
\t\t\t\t\t\t\t\t\t\t    <th>Título</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio (2020) MUYUT:MOSQUITERO ACUATICO contra larvas de mosquitos de importancia médica. EL SALVADOR. CENTRO AMERICA. Documento de Trabajo. Vásquez Hidalgo, Antonio, San Salvador. | <a href=\"http://ri.ues.edu.sv/id/eprint/21002/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Documento </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio (2019) Uso aceite de Pinus sylvestris contra Pityrosporum ovale productora de Dermatitis seborreica en cuero cabelludo por análisis de la curva de ROC. 2020. Documento de Trabajo. Vásquez Hidalgo, Antonio, San Salvador, El Salvador. | <a href=\"http://ri.ues.edu.sv/id/eprint/21018/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Documento </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio (2019), Planta de iones hidrógeno a partir de bacterias grampositivas en eritrocitos productores de biogás por catálisis y electrólisis. Repositorio Universidad de El Salvador. A registrar en CNR. 2019, San Salvador, El Salvador. | <a href=\"http://ri.ues.edu.sv/id/eprint/19644/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Documento </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio, Sensor óptico para la detección de sangramientos ocultos en superficies inanimadas y fluidos corporales como diagnostico precoz y tratamiento oportuno de enfermedades gástricas y renales de importancia médica. 2015. Informe de Proyectot. Universidad de El Salvador, San Salvador, El Salvador. | <a href=\"http://ri.ues.edu.sv/id/eprint/19550/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Articulo </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio (2014) Conversión de cámara hd webcam a cámara de microscopia profesional para uso en microscopio óptico compuesto. 2013/2014. Informe de Proyectot. Universidad de El Salvador, San Salvador, El Salvador. | <a href=\"http://ri.ues.edu.sv/id/eprint/19549/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Articulo </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio (2019) Manual y Programa de Microbiología Ocular | <a href=\"http://ri.ues.edu.sv/id/eprint/19519/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Documento de Trabajo </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio (2015) Uso de semillas de Annona squamosa L contra Periplaneta americana y otros insectos de importancia en salud pública. 2006. | <a href=\"http://ri.ues.edu.sv/id/eprint/19522/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Documento de Trabajo </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio (2019) Xenobióticos en grasa industrial para el control de colonias Formicidae (hormigas) en Plantas Naturales. 2019.| <a href=\"http://ri.ues.edu.sv/id/eprint/19523/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Documento de Trabajo </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio y Vianey, De Abrego (2017) Receptores proteícos en larvas mosquitos de Aedes aegypti de importancia biomédica. Articulo Científico (1). p. 19.| <a href=\"http://ri.ues.edu.sv/18740/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Artículo </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio (2017) Detección de partículas ionizantes en microscopio artesanal con efecto colateral en la salud de las células eucariotas humanas. Documento de Trabajo. Vásquez Hidalgo, Antonio. <a href=\"http://ri.ues.edu.sv/18739/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo., Antonio (2018) Cuento de ciencia ficción: Celeridad inversa de vuelo espacial en objeto volador no identificado por efecto de campos electromagnéticos. Cuento de ciencia ficción:. p. 13. <a href=\"http://ri.ues.edu.sv/18738/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Articulo</a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t    <td>Vásquez Hidalgo, Antonio (2010) Extracto acuoso de colorante negro natural a partir de las semillas de nacazcol (Caesalpinia coriaria). La Universidad (10-11). pp. 113-118. ISSN 0041-8242 | <a href=\"http://ri.ues.edu.sv/9560/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t <td>Vásquez Hidalgo, Antonio (1998) Política institucional de la reforma del sector salud en El Salvador implementada por el Ministerio de Salud Pública y Asistencia Social. 1998. Política institucional de la reforma del sector salud en El Salvador implementada por el Ministerio de Salud Pública y Asistencia Social. 1998. (Inédito) | <a href=\"http://ri.ues.edu.sv/14259/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1998) Sistema nacional de salud. El Salvador. 1998. Sistema nacional de salud. El Salvador. 1998. | <a href=\"http://ri.ues.edu.sv/14258/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1997) Artículo de opinión. Plan de vigilancia y control epidemiológico El Salvador. 1997. Artículo de opinión. Plan de vigilancia y control epidemiológico El Salvador. 1997. | <a href=\"http://ri.ues.edu.sv/14262/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2010) Extracto acuoso de colorante negro natural a partir de las semillas de nacazcol. La Universidad (10--11). pp. 113-118. ISSN 0041-8242 | <a href=\"http://ri.ues.edu.sv/673/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2008) Caracterización biológica del hongo Aspergillus sp y su impacto en la salud. La Universidad (3-4). pp. 5-23. ISSN 0041-8242 | <a href=\"http://ri.ues.edu.sv/674/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2002) Relación médico paciente. La Salud Salvadoreña, 2 (2). pp. 4-12. (Inédito) | <a href=\"http://ri.ues.edu.sv/704/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio y Castillo, Salvador (2008) Uso de Bixa orellana L. (Achiote) como reactivo químico en muestras de heces con parasitismo intestinal de importancia médica. Enero a Abril 2004. La Universidad, 5 (5). pp. 88-97. ISSN 0041-8242 | <a href=\"http://ri.ues.edu.sv/721/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2009) Síndrome diarreico agudo infantil. La Universidad, 7 (7). pp. 9-81. ISSN 0041-8242 | <a href=\"http://ri.ues.edu.sv/742/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2007) Utilización del extracto Azadirachta indica contra bacterias de importancia Médica. Minerva, 1 (1). pp. 1-10. | <a href=\"http://ri.ues.edu.sv/746/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2003) Inmunidad biopsicosocial. Gazeta Universitaria. p. 5. | <a href=\"http://ri.ues.edu.sv/882/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2000) Resistencia bacteriana : un problema de salud pública. La Salud Salvadoreña, 1 (1). pp. 7-15. | <a href=\"http://ri.ues.edu.sv/807/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2013) Syzygium : extracción, toxicidad y caracterización morfológica del cerezo negro como colorante natural para la aplicación de uso industrial y su importancia médica. Bioma, 1 (4). pp. 4-8. | <a href=\"http://ri.ues.edu.sv/2972/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2007) CAPITULO I.Guìa perfil de investigaciòn cientìfica. In: Guìas Pràcticas de investigaciòn Cientìfica. Imprenta Universitaria, Universidad de El Salvador, pp. 6-14. ISBN 978-99923-70-78-0 | <a href=\"http://ri.ues.edu.sv/757/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Libro</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2016) Study of new physiological characteristics as protein receptors (RP55) of light, color, heat, motion, smell, electric, vibration and position located in head, body and abdominal, found in mosquito larvae. Artículo de Discusión. Universidad de El Salvador.Facultad de Medicina, San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/11012/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2016) ANTI PERFIL DOCENTE vs. MODELO CURRICULAR. Artículo de Discusión. Universidad de El Salvador. Facultad de Medicina. (Inédito)| <a href=\"http://ri.ues.edu.sv/8125/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2016) Robot acuático hidrostático espectral de rayos laser, para el control larvario de mosquitos de importancia médica en Salud Pública. Artículo de Discusión. Universidad de El Salvador. Facultad de Medicina. (Inédito) | <a href=\"http://ri.ues.edu.sv/11077/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2013) Structure and molecular characterization Globeno atom isolated on human or animal blood, such as linear conductor of electricity in positively charged ionized particles on inanimate surfaces. Informe Técnico. Universidad de El Salvador, San Salvador. (Inédito)| <a href=\"http://ri.ues.edu.sv/4519/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2013) Manual guías prácticas de investigación científica. Manual. Editorial Antares, San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/4532/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1998) Evaluación práctica de salud en la atención del usuario en clínica de centro de salud universitario de San Salvador, durante el período de Enero a Mayo de 1998. Evaluación calidad en salud: relación entre estructura, proceso y resultado. Informe Técnico. Antonio Vásquez Hidalgo. | <a href=\"http://ri.ues.edu.sv/14260/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio y Torres, Rafael (2003) Paradigma de la regresión involutiva en la disfunción celular programada. Documento de Trabajo. [Editorial no especificada], San Salvador. (En Evaluación) | <a href=\"http://ri.ues.edu.sv/670/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2003) Teoría inmunidad biopsicosocial. Documento de Trabajo. [Editorial no especificada], San Salvador. (En Evaluación) | <a href=\"http://ri.ues.edu.sv/671/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2008) Hidrobombas de infusión para el control larvario de Anopheles albimanus y Aedes aegypti en contenedores de agua. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/675/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio y Guzman, Teddy de (2005) Efecto paradójico de las benzodiacepinas en la bomba de ion calcio de las fibras musculares esqueléticas. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/703/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2003) Estadística biomédica aplicada en las investigaciones científicas. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/705/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2008) Como convertir una cámara Webcam en microscopio estereoscópico de luz digital con software. Informe Técnico. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/713/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2007) Formula de polimerización de piezas anatómicas del cuerpo humano post mortem, para el estudio de anatomía en el proceso enseñanza aprendizaje del estudiante de medicina en El Salvador. Artículo de Discusión. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/714/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1999) Extracto acuoso de propiedades naturales de Mangifera indica L. para el uso en la industria de superficies inanimadas como desinfectante, saponificador, desengrasador, limpiador natural. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/718/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2011) Propuesta Prototipo: MICRO REACTOR ECOLOGICO para el control y prevención de gases emitidos por C02en el medio ambiente VRS efecto invernadero.2011. Informe Técnico. [Editorial no especificada], San Salvador. (En Evaluación) | <a href=\"http://ri.ues.edu.sv/720/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio y Castillo, Salvador (2003) Estudio sobre indigofora sp (añil) como tinción natural para el diagnóstico micológico de enfermedades micóticas de importancia médica. Informe Técnico. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/723/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1996) Estudio correlación consumo de sal y presión arterial en pacientes adultos : Clínica Asistencial Soyapango. Informe Técnico. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/725/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2000) Propiedades Antimicrobianas de la leche materna madura contra enterobacterias en niños menores de 2 años de edad. Pruebas in Vitro : ensayo experimental. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/726/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1998) Eficacia de los medicamentos en las enfermedades infecciosas de difícil control en salud pública, de pacientes adultos que asisten a una clínica asistencial en Soyapango : año 1997. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/733/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1997) Prácticas sanitarias, cultura y salud : creencias sobre el vómito en la comunidad de Comasagua. La Libertad. Informe de Proyectot. [Editorial no especificada], Managua. (Inédito) | <a href=\"http://ri.ues.edu.sv/739/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2011) PROTOCOLO: Genotipificación por RT-PCR/RSS-PCR del virus del dengue en huevos, larvas y hembras adultas como diagnóstico preliminar versus Correlación serotipo circulante en la zona metropolitana de San Salvador. 2011. Informe de Proyectot. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/741/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1999) Recursos humanos en salud. Artículo de Discusión. [Editorial no especificada]. (Inédito) | <a href=\"http://ri.ues.edu.sv/743/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio; Cotez de Marinero, Mercedes y Cardoza, Uri (1998) Diseño de intervención sobre salud ambiental de la Facultad de Medicina, Universidad de El Salvador. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/744/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2010) Utilización de sales minerales para el control larvario de Aedes aegypti en contenedores de agua en zonas endémicas de El Salvador. Documento de Trabajo. [Editorial no especificada], San Salvador. (En Evaluación) | <a href=\"http://ri.ues.edu.sv/747/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1999) Uso de Azadirachta indica como control larvario del Anopheles albimanus : pruebas in vitro. Informe de Proyectot. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/748/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2010) Estudio de conservación y vida útil de estructuras biológicas : carne cruda de res y aves, utilizando la técnica de polimerización. Informe Técnico. [Editorial no especificada], San Salvador . (Inédito) | <a href=\"http://ri.ues.edu.sv/749/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1998) La reforma del sistema de salud en El Salvador. Informe de Proyectot. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/750/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio; Rodriguez, Claribel y Lara, Wigberto (2010) Impacto de los precios en la seguridad alimentaria de El Salvador. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/751/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2006) Jabón casero para infecciones virales y bacterianas en el síndrome diarreico agudo infantil en El Salvador. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2006) Diagnostico precoz y tratamiento oportuno en la detección temparana de sangre oculta en heces, orina y superficies inanimadas utilizando micro-biopartículas de Caeselpinia coriaria (nacascol) en pacientes ambulatorios. Documento de Trabajo. [Editorial no identificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/773/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2005) Propuesta de intervención en la gestión y manejo de residuos sólidos. Documento de Trabajo. [Editorial no especificada], San Salvador. | <a href=\"http://ri.ues.edu.sv/883/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1997) Plan de vigilancia y control epidemiológico [en] El Salvador. Artículo de Discusión. Universidad de El Salvador. Facultad de Medicina, San Salvador. | <a href=\"http://ri.ues.edu.sv/820/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio; Castillo, Salvador y Letuna, Enrique (2002) Propiedades antimicóticas in vitro del extracto Cimaruba glauca contra M. gypseum. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/823/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2012) Construcción de un microscopio de luz digital para mi proyecto escolar. Informe Técnico. Universidad de El Salvador, San salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/2020/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2012) Syzygium sp : extracción, toxicidad y caracterización morfológica del Cerezo negro, como colorante natural para la aplicación de uso industrial y su importancia médica. Documento de Trabajo. Universidad de El Salvador, San Salvador. (En Evaluación) | <a href=\"http://ri.ues.edu.sv/2518/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2006) Utilización del extracto Arrabidaea chica (Mashashte) para el diagnóstico de laboratorio clínico de estructuras morfológicas de microorganismos en Microbiología Médica. Artículo de Discusión. Universidad de El Salvador. Facultad de Medicina. (Inédito) | <a href=\"http://ri.ues.edu.sv/3053/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2005) Presentación de Software para análisis microbiológico. In: I Seminario Cientifico de la Universidad de El Salvador, 11 FEBRERO 2005, CENSALUD. (En Evaluación) | <a href=\"\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Presentación</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2016) Micro diccionario médico popular. Editorial Antares, San Salvador. ISBN 9789992370773 (Inédito) | <a href=\"http://ri.ues.edu.sv/11083/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Libro</a></td></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2011) Validación método de filtración para la detección de protozoarios y helmintos en muestras de hortalizas. Maestría thesis, Universidad de El Salvador : Universidad de Guadalajara (México) | <a href=\"http://ri.ues.edu.sv/627/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Tesis</a></td></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2001) Micosis en El Salvador : un problema de Salud Pública : propiedades antimicóticas In Vitro de una planta natural Allium sativum (XX27). Maestría thesis, Universidad de El Salvador : Universidad de Maastrich . | <a href=\"http://ri.ues.edu.sv/641/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Tesis</a></td></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1999) Resistencia bacteriana en El Salvador. Maestría thesis, Universidad de El Salvador : Universidad Nacional Autonoma de Nicaragua. | <a href=\"http://ri.ues.edu.sv/661/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Tesis</a></td></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t </tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t     \t\t
\t\t\t\t\t\t                 \t\t\t\t\t    \t</div>
\t\t\t\t\t\t  <div class=\"col-md-4 column\">
\t\t\t\t\t\t  \t<div class=\"well\">
\t\t\t\t\t\t  \t\t<h2 align=\"center\">Asociaciones</h2>
\t\t\t\t\t\t  \t\t<ul>
\t\t\t\t\t\t  \t\t\t<li>Asociación de microbiólogos de El Salvador. AMES</li>
\t\t\t\t\t\t  \t\t\t<li>Asociación de Académicos de la Universidad de El Salvador. ASAUES</li>
\t\t\t\t\t\t  \t\t\t<li>Asociación del Sindicato de Trabajadores de UES. SETUES</li>
\t\t\t\t\t\t  \t\t\t<li>Asociación Organización Internacional para la capacitación e investigación Médica. Perú</li>
\t\t\t\t\t\t  \t\t\t<li>Asociación Psicoanalítica Internacional. USA. IPA</li>
\t\t\t\t\t\t  \t\t\t<li>Miembro de investigadores de CSUCA.</li>
\t\t\t\t\t\t  \t\t\t<li>Miembro red investigadores CONACYT EL SALVADOR.</li>
\t\t\t\t\t\t  \t\t\t<li>Miembro de REDISAL de El Salvador.</li>
\t\t\t\t\t\t  \t\t\t<li>Miembro del equipo de revisión de tesis en Facultad de Medicina</li>
\t\t\t\t\t\t  \t\t</ul>
\t\t\t\t\t\t  \t\t<a href=\"http://ri.ues.edu.sv/cgi/stats/report/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Repositorios UES estadisticas</a>
\t\t\t\t\t\t  \t\t<a href=\"http://ri.ues.edu.sv/view/creators/V=E1squez_Hidalgo=3AAntonio=3A=3A.html\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Repositorios UES documentos</a>
\t\t\t\t\t\t  \t\t<a href=\"http://www.redisal.org.sv/listadoDetalle.php?idinv=133\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">REDISAL El Salvador</a>
\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t  \t\t 
\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t      </div>
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"panel-567650\">
\t\t\t\t\t\t                 <div class=\"row clearfix\">
    \t<div class=\"col-md-8 column\">
\t\t\t<ul>
\t\t\t\t<li>Asesoría y construcción de un microscopio escolar a nivel nacional > <a href=\"http://ri.ues.edu.sv/2020/\" target=\"_blank\">http://ri.ues.edu.sv/2020/</a> </li>
\t\t\t\t<li>Visitas a la Facultad de Medicina de las escuelas de AHUACHAPAN, LA PAZ, LA LIBERTAD, SAN SALVADOR, SAN MIGUEL, para la construcción del microscopio escolar</li>
\t\t\t\t<li>Nombres de las escuelas, colegios, institutos y estudiantes: (lo reciente)</li>
\t\t\t\t<dd>- Escuela Mo-nte Blanco</dd>
\t\t\t\t<dd>- Escuela No-rmal de España</dd>
\t\t\t\t<dd>- Complejo Educativo Fray Engel-berto Malissori</dd>
\t\t\t\t<dd>- Centro Escolar Cantón Lo-ma Larga</dd>
\t\t\t\t<dd>- Centro Escolar Municipal Ma-jucla</dd>
\t\t\t\t<dd>- Centro Escolar Jose Sime-on Cañas</dd>
\t\t\t\t<dd>- Centro Escolar cantón El Ma-jahual</dd>
\t\t\t\t<dd>- Centro Escolar Dr. Hermoge-nes Alvarado</dd>
\t\t\t\t<dd>- Centro Cultural Salvadoreño Americano</dd>
\t\t\t\t<dd>- Centro Escolar República Orie-ntal del Uruguay</dd>
\t\t\t\t<dd>- Instituto Nacional de Dulce N-ombre de María</dd>
\t\t\t\t<dd>- Instituto nacional G. Francisc-o Menéndez</dd>
\t\t\t\t<dd>- Colegio Espír-itu Santo San Salvador</dd>
\t\t\t\t<dd>- Centro Escolar República de Cos-ta Rica</dd>
\t\t\t\t<dd>- Centro Escolar Antonio N-ajarro</dd>
\t\t\t\t<dd>- Colegio Academia Europ-ea San Miguel</dd>
\t\t\t\t<dd>- Centro Escolar la Cim-a Dos</dd>
\t\t\t\t<dd>- Complejo Educativo Ing Guillermo Na-than</dd>
\t\t\t\t<dd>- Centro Escolar Alberto Masf-errer</dd>
\t\t\t\t<dd>- Depto de física facult Multidisciplinaria de Occidente</dd>
\t\t\t\t<dd>- Centro Escolar Asociación Salvad-oreña de Sras de Ing Civiles</dd>
\t\t\t\t<dd>- Centro Escolar Pbro Ra-fael Arturo López</dd>
\t\t\t\t<dd>- Centro Escolar Cantón San Ro-que</dd>
\t\t\t\t<dd>- Feria Internacional de Ciencia en Acc-ión España Madrid</dd>
\t\t\t\t<dd>- Facultad Multidisciplinaria parace-ntral San Vicente</dd>
\t\t\t\t<dd>- Liceo Cristiano Reverendo Ju-n Bueno</dd>
\t\t\t\t<dd>- Instituto Albert Ca-mus</dd>
\t\t\t\t<dd>- Colegio Bautista Enmanuel</dd>
\t\t\t\t<dd>- Colegio la Divina Providencia</dd>
\t\t\t\t<dd>- Colegio Isabell All-ende</dd>
\t\t\t\t<dd>- Instituto Nacional Jose Da-mian Villacorta</dd>
\t\t\t\t<dd>- Instituto Nacional de Ap-opa</dd>
\t\t\t\t<dd>- Facultad de Química y Farmacia. UES</dd>
\t\t\t\t<dd>- Estudiante de ingeniería Bio-médica</dd>
\t\t\t\t<dd>- Instituto Tecnológico Centro A-mericano</dd>
\t\t\t\t<dd>- Centro Escolar Ange-la Sole</dd>
\t\t\t\t<dd>- Colegio Monstes-oriano</dd>
\t\t\t\t<dd>- Colegio Extern-ado de San José</dd>
\t\t\t\t<dd>- Facultad Multidiscip-lianria de Occidente</dd>
\t\t\t\t<dd>- Colegio Eucarís-tico</dd>
\t\t\t\t<dd>- Estudiante Universidad Fra-ncisco Gavidia</dd>
\t\t\t\t<dd>- Estudiante Universidad Do-n Bosco</dd>
\t\t\t\t<dd>- Centro Escolar Instituto Nacion-al de Santa Ana</dd>
\t\t\t\t<dd>- Escuela Metropolitana de Sa-nta Ana</dd>
\t\t\t\t<dd>- Profesor de cen-tro escolar</dd>
\t\t\t\t<dd>- Colegio Be-lén</dd>
\t\t\t\t<dd>- Estudiante de ing. Bi-omecánica</dd>
\t\t\t\t<dd>- Instituto Nacional José Da-mián</dd>
\t\t\t\t<dd>- Estudiante Universidad Tecn-ológica.</dd>
\t\t\t\t<dd>- Estudiante Universidad Nac-ional Santa Ana</dd>
\t\t\t\t<dd>- Profesora de Nutric-ión UES</dd>
\t\t\t\t<dd>- Estudiante industrial- de la UCA</dd>
\t\t\t</ul>
</div>

<div class=\"col-md-4 column\">
\t<div class=\"well\">
\t\t\t<h2 align=\"center\">DIFUSIÓN Y RECONOCIMIENTO EN MEDIOS DE COMUNICACIÓN IMPRESO, RADIAL Y TELEVISIVO</h2>
\t\t<ul>
\t\t\t<li>Programa UNED de ciencia y tecnología España. RTVes</li>
\t\t\t<li>Canal 2 TVe Española</li>
\t\t\t<li>TCS noticias</li>
\t\t\t<li>Canal 4 visión</li>
\t\t\t<li>Periódico la Gazeta Universitaria. UES</li>
\t\t\t<li>Periódico Nuevo Enfoque</li>
\t\t\t<li>Campus Universitario. UES</li>
\t\t\t<li>Revista El Universitario. UES</li>
\t\t\t<li>CIC UES. Consejo de Investigaciones Científicas. UES</li>
\t\t\t<li>Boletín de la Red Nacional de Información Documental en Salud. RENIDS</li>
\t\t\t<li>Apoyo local de Autoridades UES.</li>
\t\t\t<li>Boletín NOTI-SALUD de la Facultad de Medicina. UES</li>
\t\t\t<li>Boletín CIC-UES Consejo de Investigaciones Científicas UES</li>
\t\t\t<li>Apoyo Local de Autoridades de la Facultad de Medicina. UES</li>
\t\t\t<li>Apoyo local del CIDE. Facultad de Medicina. UES</li>
\t\t\t<li>Apoyo local de Biblioteca de la Facultad de Medicina. UES</li>
\t\t\t<li>Apoyo local de Librería Universitaria. UES</li>
\t\t\t<li>CONACYT. Red Nacional de Investigadores El Salvador.</li>
\t\t\t<li>Diario Colatino.</li>
\t\t\t<li>El Diario de Hoy</li>
\t\t\t<li>La Prensa Gráfica</li>
\t\t\t<li>Diario el Mundo</li>
\t\t</ul>
\t</div>\t\t\t            
            \t\t\t\t</div>
            \t\t\t</div>
\t\t\t\t\t</div> <!-- Fin Producción Científica -->
\t\t\t\t\t
\t\t\t\t\t<div class=\"tab-pane\" id=\"panel-567651\"> <!--Premiación mundial e internacional locales -->
\t\t\t\t\t\t\t<div class=\"row clearfix\">
\t\t\t\t\t    \t\t\t<div class=\"col-md-8 column\">
\t\t\t\t\t\t\t\t\t  <table class=\"table table-condensed\">
\t\t\t\t\t\t\t\t\t    <thead>
\t\t\t\t\t\t\t\t\t      <tr>
\t\t\t\t\t\t\t\t\t        <th>Cargo</th>
\t\t\t\t\t\t\t\t\t        <th>Lugar</th>
\t\t\t\t\t\t\t\t\t        <th>Desde</th>
\t\t\t\t\t\t\t\t\t        <th>Hasta</th>
\t\t\t\t\t\t\t\t\t      </tr>
\t\t\t\t\t\t\t\t\t    </thead>
\t\t\t\t\t\t\t\t\t    <tbody>
\t\t\t\t\t\t\t\t\t      <tr>
\t\t\t\t\t\t\t\t\t        <td>Catedrático de la Facultad de Medicina. Universidad de El Salvador</td>
\t\t\t\t\t\t\t\t\t        <td><a href=\"http://www.medicina.ues.edu.sv/index.php?option=com_content&view=article&id=360&Itemid=197\" target=\"_blank\">UES</a></td>
\t\t\t\t\t\t\t\t\t        <td>1993</td>
\t\t\t\t\t\t\t\t\t        <td>Activo</td>
\t\t\t\t\t\t\t\t\t      </tr>
\t\t\t\t\t\t\t\t\t      <tr>
\t\t\t\t\t\t\t\t\t        <td>Atención de estudiantes de doctorado en medicina y licenciatura en laboratorio clínico.</td>
\t\t\t\t\t\t\t\t\t        <td></td>
\t\t\t\t\t\t\t\t\t        <td></td>
\t\t\t\t\t\t\t\t\t        <td></td>
\t\t\t\t\t\t\t\t\t      </tr>
\t\t\t\t\t\t\t\t\t      <tr>
\t\t\t\t\t\t\t\t\t        <td>Docente de la Escuela de Medicina del departamento de Microbiología. Facultad de Medicina. </td>
\t\t\t\t\t\t\t\t\t        <td><a href=\"http://www.medicina.ues.edu.sv/index.php?option=com_content&view=article&id=360&Itemid=197\" target=\"_blank\">UES</a></td>
\t\t\t\t\t\t\t\t\t        <td>1994</td>
\t\t\t\t\t\t\t\t\t        <td>Activo</td>
\t\t\t\t\t\t\t\t\t      </tr>
\t\t\t\t\t\t\t\t\t      <tr>
\t\t\t\t\t\t\t\t\t        <td>Docente del Tronco Común de la Escuela de Tecnología Médica. Facultad de Medicina. </td>
\t\t\t\t\t\t\t\t\t        <td><a href=\"http://www.medicina.ues.edu.sv/index.php?option=com_content&view=article&id=360&Itemid=197\" target=\"_blank\">UES</a></td>
\t\t\t\t\t\t\t\t\t        <td>1993</td>
\t\t\t\t\t\t\t\t\t        <td>1993</td>
\t\t\t\t\t\t\t\t\t      </tr>
\t\t\t\t\t\t\t\t\t       <tr>
\t\t\t\t\t\t\t\t\t        <td>Profesor Privado (hora-clase)</td>
\t\t\t\t\t\t\t\t\t        <td>Domicilio</td>
\t\t\t\t\t\t\t\t\t        <td>1980</td>
\t\t\t\t\t\t\t\t\t        <td>1989</td>
\t\t\t\t\t\t\t\t\t      </tr>
\t\t\t\t\t\t\t\t\t      <tr>
\t\t\t\t\t\t\t\t\t      <td>Presentaciones en Línea</td>
\t\t\t\t\t\t\t\t\t        <td><a href=\"https://es.slideshare.net/search/slideshow?searchfrom=header&q=antonio+vasquez+hidalgo\" target=\"_blank\" class=\"btn btn-info\" role=\"button\">Slideshare</a></td>
\t\t\t\t\t\t\t\t\t        <td><a href=\"http://www.authorstream.com/antares7/1\" target=\"_blank\" class=\"btn btn-info\" role=\"button\">AuthorStream</a></td>
\t\t\t\t\t\t\t\t\t        <td><a href=\"https://es.scribd.com/user/13327332/Ph-D-Antonio-Vasquez-Hidalgo\" target=\"_blank\" class=\"btn btn-info\" role=\"button\">Scribd</a></td>
\t\t\t\t\t\t\t\t\t      </tr>
\t\t\t\t\t\t\t\t\t    </tbody>
\t\t\t\t\t\t\t\t\t  </table>
\t\t\t\t\t\t\t\t\t  <h3>EVALUACIÓN CACPA AGOSTO 2017, PUNTAJE: 423.50</h3>
\t\t\t\t\t    \t\t</div>
\t\t    \t\t\t\t<div class=\"col-md-4 column\">
\t\t\t\t\t \t\t\t<div class=\"well\">
\t\t\t\t\t \t\t\t\t<h2 align=\"center\">ACTIVIDADES DESEMPEÑADAS EN LA UES</h2>
\t\t\t\t\t \t\t\t\t<ul type=\"1\">
\t\t\t\t\t \t\t\t\t\t<li>Miembro del comité Instituto Nacional de Salud para la creación de la POLITICA NACIONAL DE INVESTIGACION.</li>
\t\t\t\t\t \t\t\t\t\t<li>Nombramiento CONSEJO EJECUTIVO DE INVESTIGACIÓN por CONSEJO SUPERIOR UNIVERSITARIO. 2014.</li>
\t\t\t\t\t \t\t\t\t\t<li>Coordinador director de la REVISTA MINERVA DE LA UNIVERSIDAD DE EL SALVADOR. 2014-2017</li>
\t\t\t\t\t \t\t\t\t\t<li>Web master II congreso Internacional de Microbiología e inocuidad de alimentos 2014.</li>
\t\t\t\t\t \t\t\t\t\t<li>Comité científico del I congreso Internacional de Microbiología e inocuidad de alimentos 2012</li>
\t\t\t\t\t \t\t\t\t\t<li>Director de la Revista Facultad de Medicina. FM. UES  1999-2003.</li>
\t\t\t\t\t \t\t\t\t\t<li>Director de la Revista Electrónica. F.M. U.E.S. 1999-2003.</li>
\t\t\t\t\t \t\t\t\t\t<li>Asesor trabajos de Investigación 2000-</li>
\t\t\t\t\t \t\t\t\t\t<li>Asesor de trabajos de Graduación Año Social a estudiantes de Medicina.1996 -</li>
\t\t\t\t\t \t\t\t\t</ul>
\t\t\t\t\t \t\t\t</div>
\t\t            \t\t</div>
\t\t            \t</div>
\t\t            </div> <!--Premiación mundial e internacional locales -->
\t\t\t\t\t
\t\t\t\t\t<!-- <div class=\"tab-pane\" id=\"panel-567652\"> -->
\t\t\t\t\t\t                 <!-- <div class=\"row clearfix\"> -->
    \t<!-- <div class=\"col-md-8 column\"> -->
\t\t<!-- <p>Vásquez Hidalgo, Antonio (2020) Premios Internacionales de Suiza,México,Perú, España y Korea. | <a href=\"http://ri.ues.edu.sv/21033/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Premios </a></p>
    \t</div> -->
    \t\t<!-- <div class=\"col-md-4 column\">
    \t\t\t\t";
        // line 476
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-vasquez"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 477
        echo "    \t\t            \t\t\t\t</div> -->
            \t\t\t\t
            \t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t</div>
\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
</div>

<style>
\t#margin {
\t\tmargin-top:5px;
\t}
</style>

";
        // line 498
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 499
        echo "  <script>
    \$(document).ready(function() {
    \$('#di').DataTable({
    \tlanguage:{
    \"decimal\":        \"\",
    \"emptyTable\":     \"No hay datos disponibles en la tabla\",
    \"info\":           \"Mostrando _START_ de _END_ de _TOTAL_ entradas\",
    \"infoEmpty\":      \"Mostrando 0 to 0 of 0 entradas\",
    \"infoFiltered\":   \"(filtrado de _MAX_ total entradas)\",
    \"infoPostFix\":    \"\",
    \"thousands\":      \",\",
    \"lengthMenu\":     \"Mostrar _MENU_ entradas\",
    \"loadingRecords\": \"Cargando...\",
    \"processing\":     \"Procesando...\",
    \"search\":         \"Buscar:\",
    \"zeroRecords\":    \"No se encontraron registros coincidentes\",
    \"paginate\": {
        \"first\":      \"Primero\",
        \"last\":       \"Último\",
        \"next\":       \"Siguiente\",
        \"previous\":   \"Anterior\"
    },
    \"aria\": {
        \"sortAscending\":  \": Activar para ordenar la columna ascendente\",
        \"sortDescending\": \": Activar para ordenar la columna descendente\"
    }
}
    });
} );
</script>
";
        // line 498
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/samples/antonio-vasquez.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 498,  556 => 499,  554 => 498,  531 => 477,  527 => 476,  111 => 65,  64 => 21,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"margin\" class=\"container\">
    <div class=\"row clearfix well\">
\t\t<div class=\"col-md-2 column\">
\t\t\t<img class=\"img-responsive\" src=\"{{ 'assets/images/miembroscic/antonio-vasquez.png'|theme }}\">
\t\t</div>
\t\t<div class=\"col-md-8 column\">
\t\t\t<blockquote>
\t\t\t\t<p>
\t\t\t\t\tAntonio Vasquez Hidalgo
\t\t\t\t</p> <small>Doctorado Ph.D en Scientific Research certificado por el HAYA</small>
\t\t\t\t</p> <small> <a href=\"http://www.medicina.ues.edu.sv/index.php?option=com_content&view=article&id=360&Itemid=197\" target=\"_blank\">FACULTAD DE MEDICINA</a></small>
\t\t\t\t</p> <small>Idiomas: Español, Ingles avanzado, lectura en Portugués </small>
\t\t\t\t</p> <small>antonio.vasquez@ues.edu.sv</small>
\t\t\t</blockquote> 
\t\t</div>
\t<div class=\"col-md-2 column\">
\t\t 
\t\t\t\t <a href=\"https://sipc.sic.ues.edu.sv/login\" class=\"btn btn-default btn-block\" type=\"button\">Intranet</a>
                 <a href=\"https://sic.ues.edu.sv/storage/app/media/drvasquez/CVDRVASQUEZNOVIEMBRE2017.pdf\" target=\"_blank\" class=\"btn btn-default btn-block\" type=\"button\">Curriculum Vitae</a>
                 <!-- <a href=\"http://investigacionvasquez.webs.com\" target=\"_blank\" class=\"btn btn-default btn-block\" type=\"button\">Sitio Web</a> -->
                 <a href=\"{{ 'samples/directorio-investigadores'|page }}\" class=\"btn btn-default btn-block\" type=\"button\">+ Investigadores</a>                \t\t 
\t\t</div>
\t</div>
\t
\t\t<div class=\"row clearfix\">
\t\t<div class=\"col-md-12 column\">
\t\t\t<div class=\"tabbable\" id=\"tabs-444468\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"#panel-200304\" data-toggle=\"tab\">Formación</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#panel-567651\" data-toggle=\"tab\">Docencia</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#panel-567649\" data-toggle=\"tab\">Investigación</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#panel-567650\" data-toggle=\"tab\">Proyección social</a>
\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- <li>
\t\t\t\t\t\t<a href=\"#panel-567652\" data-toggle=\"tab\">Reconocimientos</a>
\t\t\t\t\t\t\t\t\t\t\t</li> -->
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"panel-200304\"> <!-- Acerca de mi-->
\t\t\t\t\t\t <div class=\"row clearfix\">
                \t\t\t<div class=\"col-md-8 column\">
            \t\t\t\t\t<p align=\"justify\">
            \t\t\t\t\t\t
<p align=\"justify\"><ul><li>Educación Media  IN. Gral Fco Menéndez Br. Académico en Ciencias</li></p>
<p align=\"justify\"><li>Educación Superior Especialidades:</li></p>
<p align=\"justify\"><li>Doctor en Medicina Universidad de El Salvador.1991</li></p>
<p align=\"justify\"><li>Master en Medicina y Salud Pública UES. /CIES Nicaragua. 1999</li></p>
<p align=\"justify\"><li>Master Class en Investigación. Cooperación proyecto Holanda. Europa/UES .2001</li></p>
<p align=\"justify\"><li>Diplomado en formación Docente.UES El Salvador .2003</li></ul></p>
<p align=\"justify\"><li>Web Master en Informática en salud. En Computing Data Center. El Salvador.2003</li></p>
<p align=\"justify\"><li>Postgrado cursos de Microbiología. Universidad de El Salvador/ Nicaragua/México. 1994-2011</li></p>
<p align=\"justify\"><li>Master en Microbiología. UES/México. Guadalajara. Jalisco. 2008-2010</li></p>
<p align=\"justify\"><li>Doctorate Scientific Research. PhD. USA American A. University. ConapostilladodelaHaya.2014</li></p>

                                
            \t\t\t\t</div>
            \t\t\t\t<div class=\"col-md-4 column\">
            \t\t\t\t\t{% partial 'menu-vasquez' %}           
            \t\t\t\t</div>
            \t\t\t</div>
\t\t\t\t\t</div> <!-- Fin Acerca de mi-->
\t\t\t\t
\t\t\t\t\t<div class=\"tab-pane\" id=\"panel-567649\"> 
\t\t\t\t\t\t  <div class=\"row clearfix\">
\t\t\t\t\t\t     \t<div class=\"col-md-8 column\">
\t\t\t\t\t\t     \t\t<table id=\"di\" class=\"cell-border\" width=\"100%\" cellspacing=\"0\" data-page-length='10'>
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr class=\"table-active\">
\t\t\t\t\t\t\t\t\t\t    <th>Título</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio (2020) MUYUT:MOSQUITERO ACUATICO contra larvas de mosquitos de importancia médica. EL SALVADOR. CENTRO AMERICA. Documento de Trabajo. Vásquez Hidalgo, Antonio, San Salvador. | <a href=\"http://ri.ues.edu.sv/id/eprint/21002/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Documento </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio (2019) Uso aceite de Pinus sylvestris contra Pityrosporum ovale productora de Dermatitis seborreica en cuero cabelludo por análisis de la curva de ROC. 2020. Documento de Trabajo. Vásquez Hidalgo, Antonio, San Salvador, El Salvador. | <a href=\"http://ri.ues.edu.sv/id/eprint/21018/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Documento </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio (2019), Planta de iones hidrógeno a partir de bacterias grampositivas en eritrocitos productores de biogás por catálisis y electrólisis. Repositorio Universidad de El Salvador. A registrar en CNR. 2019, San Salvador, El Salvador. | <a href=\"http://ri.ues.edu.sv/id/eprint/19644/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Documento </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio, Sensor óptico para la detección de sangramientos ocultos en superficies inanimadas y fluidos corporales como diagnostico precoz y tratamiento oportuno de enfermedades gástricas y renales de importancia médica. 2015. Informe de Proyectot. Universidad de El Salvador, San Salvador, El Salvador. | <a href=\"http://ri.ues.edu.sv/id/eprint/19550/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Articulo </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio (2014) Conversión de cámara hd webcam a cámara de microscopia profesional para uso en microscopio óptico compuesto. 2013/2014. Informe de Proyectot. Universidad de El Salvador, San Salvador, El Salvador. | <a href=\"http://ri.ues.edu.sv/id/eprint/19549/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Articulo </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio (2019) Manual y Programa de Microbiología Ocular | <a href=\"http://ri.ues.edu.sv/id/eprint/19519/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Documento de Trabajo </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio (2015) Uso de semillas de Annona squamosa L contra Periplaneta americana y otros insectos de importancia en salud pública. 2006. | <a href=\"http://ri.ues.edu.sv/id/eprint/19522/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Documento de Trabajo </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio (2019) Xenobióticos en grasa industrial para el control de colonias Formicidae (hormigas) en Plantas Naturales. 2019.| <a href=\"http://ri.ues.edu.sv/id/eprint/19523/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Documento de Trabajo </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio y Vianey, De Abrego (2017) Receptores proteícos en larvas mosquitos de Aedes aegypti de importancia biomédica. Articulo Científico (1). p. 19.| <a href=\"http://ri.ues.edu.sv/18740/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Artículo </a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo, Antonio (2017) Detección de partículas ionizantes en microscopio artesanal con efecto colateral en la salud de las células eucariotas humanas. Documento de Trabajo. Vásquez Hidalgo, Antonio. <a href=\"http://ri.ues.edu.sv/18739/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>Vásquez Hidalgo., Antonio (2018) Cuento de ciencia ficción: Celeridad inversa de vuelo espacial en objeto volador no identificado por efecto de campos electromagnéticos. Cuento de ciencia ficción:. p. 13. <a href=\"http://ri.ues.edu.sv/18738/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Articulo</a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t    <td>Vásquez Hidalgo, Antonio (2010) Extracto acuoso de colorante negro natural a partir de las semillas de nacazcol (Caesalpinia coriaria). La Universidad (10-11). pp. 113-118. ISSN 0041-8242 | <a href=\"http://ri.ues.edu.sv/9560/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t <td>Vásquez Hidalgo, Antonio (1998) Política institucional de la reforma del sector salud en El Salvador implementada por el Ministerio de Salud Pública y Asistencia Social. 1998. Política institucional de la reforma del sector salud en El Salvador implementada por el Ministerio de Salud Pública y Asistencia Social. 1998. (Inédito) | <a href=\"http://ri.ues.edu.sv/14259/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1998) Sistema nacional de salud. El Salvador. 1998. Sistema nacional de salud. El Salvador. 1998. | <a href=\"http://ri.ues.edu.sv/14258/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1997) Artículo de opinión. Plan de vigilancia y control epidemiológico El Salvador. 1997. Artículo de opinión. Plan de vigilancia y control epidemiológico El Salvador. 1997. | <a href=\"http://ri.ues.edu.sv/14262/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2010) Extracto acuoso de colorante negro natural a partir de las semillas de nacazcol. La Universidad (10--11). pp. 113-118. ISSN 0041-8242 | <a href=\"http://ri.ues.edu.sv/673/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2008) Caracterización biológica del hongo Aspergillus sp y su impacto en la salud. La Universidad (3-4). pp. 5-23. ISSN 0041-8242 | <a href=\"http://ri.ues.edu.sv/674/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2002) Relación médico paciente. La Salud Salvadoreña, 2 (2). pp. 4-12. (Inédito) | <a href=\"http://ri.ues.edu.sv/704/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio y Castillo, Salvador (2008) Uso de Bixa orellana L. (Achiote) como reactivo químico en muestras de heces con parasitismo intestinal de importancia médica. Enero a Abril 2004. La Universidad, 5 (5). pp. 88-97. ISSN 0041-8242 | <a href=\"http://ri.ues.edu.sv/721/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2009) Síndrome diarreico agudo infantil. La Universidad, 7 (7). pp. 9-81. ISSN 0041-8242 | <a href=\"http://ri.ues.edu.sv/742/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2007) Utilización del extracto Azadirachta indica contra bacterias de importancia Médica. Minerva, 1 (1). pp. 1-10. | <a href=\"http://ri.ues.edu.sv/746/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2003) Inmunidad biopsicosocial. Gazeta Universitaria. p. 5. | <a href=\"http://ri.ues.edu.sv/882/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2000) Resistencia bacteriana : un problema de salud pública. La Salud Salvadoreña, 1 (1). pp. 7-15. | <a href=\"http://ri.ues.edu.sv/807/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2013) Syzygium : extracción, toxicidad y caracterización morfológica del cerezo negro como colorante natural para la aplicación de uso industrial y su importancia médica. Bioma, 1 (4). pp. 4-8. | <a href=\"http://ri.ues.edu.sv/2972/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Artículo</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2007) CAPITULO I.Guìa perfil de investigaciòn cientìfica. In: Guìas Pràcticas de investigaciòn Cientìfica. Imprenta Universitaria, Universidad de El Salvador, pp. 6-14. ISBN 978-99923-70-78-0 | <a href=\"http://ri.ues.edu.sv/757/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Libro</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2016) Study of new physiological characteristics as protein receptors (RP55) of light, color, heat, motion, smell, electric, vibration and position located in head, body and abdominal, found in mosquito larvae. Artículo de Discusión. Universidad de El Salvador.Facultad de Medicina, San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/11012/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2016) ANTI PERFIL DOCENTE vs. MODELO CURRICULAR. Artículo de Discusión. Universidad de El Salvador. Facultad de Medicina. (Inédito)| <a href=\"http://ri.ues.edu.sv/8125/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2016) Robot acuático hidrostático espectral de rayos laser, para el control larvario de mosquitos de importancia médica en Salud Pública. Artículo de Discusión. Universidad de El Salvador. Facultad de Medicina. (Inédito) | <a href=\"http://ri.ues.edu.sv/11077/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2013) Structure and molecular characterization Globeno atom isolated on human or animal blood, such as linear conductor of electricity in positively charged ionized particles on inanimate surfaces. Informe Técnico. Universidad de El Salvador, San Salvador. (Inédito)| <a href=\"http://ri.ues.edu.sv/4519/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2013) Manual guías prácticas de investigación científica. Manual. Editorial Antares, San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/4532/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1998) Evaluación práctica de salud en la atención del usuario en clínica de centro de salud universitario de San Salvador, durante el período de Enero a Mayo de 1998. Evaluación calidad en salud: relación entre estructura, proceso y resultado. Informe Técnico. Antonio Vásquez Hidalgo. | <a href=\"http://ri.ues.edu.sv/14260/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio y Torres, Rafael (2003) Paradigma de la regresión involutiva en la disfunción celular programada. Documento de Trabajo. [Editorial no especificada], San Salvador. (En Evaluación) | <a href=\"http://ri.ues.edu.sv/670/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2003) Teoría inmunidad biopsicosocial. Documento de Trabajo. [Editorial no especificada], San Salvador. (En Evaluación) | <a href=\"http://ri.ues.edu.sv/671/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2008) Hidrobombas de infusión para el control larvario de Anopheles albimanus y Aedes aegypti en contenedores de agua. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/675/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio y Guzman, Teddy de (2005) Efecto paradójico de las benzodiacepinas en la bomba de ion calcio de las fibras musculares esqueléticas. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/703/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2003) Estadística biomédica aplicada en las investigaciones científicas. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/705/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2008) Como convertir una cámara Webcam en microscopio estereoscópico de luz digital con software. Informe Técnico. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/713/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2007) Formula de polimerización de piezas anatómicas del cuerpo humano post mortem, para el estudio de anatomía en el proceso enseñanza aprendizaje del estudiante de medicina en El Salvador. Artículo de Discusión. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/714/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1999) Extracto acuoso de propiedades naturales de Mangifera indica L. para el uso en la industria de superficies inanimadas como desinfectante, saponificador, desengrasador, limpiador natural. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/718/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2011) Propuesta Prototipo: MICRO REACTOR ECOLOGICO para el control y prevención de gases emitidos por C02en el medio ambiente VRS efecto invernadero.2011. Informe Técnico. [Editorial no especificada], San Salvador. (En Evaluación) | <a href=\"http://ri.ues.edu.sv/720/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio y Castillo, Salvador (2003) Estudio sobre indigofora sp (añil) como tinción natural para el diagnóstico micológico de enfermedades micóticas de importancia médica. Informe Técnico. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/723/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1996) Estudio correlación consumo de sal y presión arterial en pacientes adultos : Clínica Asistencial Soyapango. Informe Técnico. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/725/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2000) Propiedades Antimicrobianas de la leche materna madura contra enterobacterias en niños menores de 2 años de edad. Pruebas in Vitro : ensayo experimental. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/726/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1998) Eficacia de los medicamentos en las enfermedades infecciosas de difícil control en salud pública, de pacientes adultos que asisten a una clínica asistencial en Soyapango : año 1997. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/733/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1997) Prácticas sanitarias, cultura y salud : creencias sobre el vómito en la comunidad de Comasagua. La Libertad. Informe de Proyectot. [Editorial no especificada], Managua. (Inédito) | <a href=\"http://ri.ues.edu.sv/739/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2011) PROTOCOLO: Genotipificación por RT-PCR/RSS-PCR del virus del dengue en huevos, larvas y hembras adultas como diagnóstico preliminar versus Correlación serotipo circulante en la zona metropolitana de San Salvador. 2011. Informe de Proyectot. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/741/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1999) Recursos humanos en salud. Artículo de Discusión. [Editorial no especificada]. (Inédito) | <a href=\"http://ri.ues.edu.sv/743/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio; Cotez de Marinero, Mercedes y Cardoza, Uri (1998) Diseño de intervención sobre salud ambiental de la Facultad de Medicina, Universidad de El Salvador. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/744/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2010) Utilización de sales minerales para el control larvario de Aedes aegypti en contenedores de agua en zonas endémicas de El Salvador. Documento de Trabajo. [Editorial no especificada], San Salvador. (En Evaluación) | <a href=\"http://ri.ues.edu.sv/747/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1999) Uso de Azadirachta indica como control larvario del Anopheles albimanus : pruebas in vitro. Informe de Proyectot. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/748/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2010) Estudio de conservación y vida útil de estructuras biológicas : carne cruda de res y aves, utilizando la técnica de polimerización. Informe Técnico. [Editorial no especificada], San Salvador . (Inédito) | <a href=\"http://ri.ues.edu.sv/749/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1998) La reforma del sistema de salud en El Salvador. Informe de Proyectot. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/750/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio; Rodriguez, Claribel y Lara, Wigberto (2010) Impacto de los precios en la seguridad alimentaria de El Salvador. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/751/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2006) Jabón casero para infecciones virales y bacterianas en el síndrome diarreico agudo infantil en El Salvador. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2006) Diagnostico precoz y tratamiento oportuno en la detección temparana de sangre oculta en heces, orina y superficies inanimadas utilizando micro-biopartículas de Caeselpinia coriaria (nacascol) en pacientes ambulatorios. Documento de Trabajo. [Editorial no identificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/773/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2005) Propuesta de intervención en la gestión y manejo de residuos sólidos. Documento de Trabajo. [Editorial no especificada], San Salvador. | <a href=\"http://ri.ues.edu.sv/883/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1997) Plan de vigilancia y control epidemiológico [en] El Salvador. Artículo de Discusión. Universidad de El Salvador. Facultad de Medicina, San Salvador. | <a href=\"http://ri.ues.edu.sv/820/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio; Castillo, Salvador y Letuna, Enrique (2002) Propiedades antimicóticas in vitro del extracto Cimaruba glauca contra M. gypseum. Documento de Trabajo. [Editorial no especificada], San Salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/823/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2012) Construcción de un microscopio de luz digital para mi proyecto escolar. Informe Técnico. Universidad de El Salvador, San salvador. (Inédito) | <a href=\"http://ri.ues.edu.sv/2020/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2012) Syzygium sp : extracción, toxicidad y caracterización morfológica del Cerezo negro, como colorante natural para la aplicación de uso industrial y su importancia médica. Documento de Trabajo. Universidad de El Salvador, San Salvador. (En Evaluación) | <a href=\"http://ri.ues.edu.sv/2518/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2006) Utilización del extracto Arrabidaea chica (Mashashte) para el diagnóstico de laboratorio clínico de estructuras morfológicas de microorganismos en Microbiología Médica. Artículo de Discusión. Universidad de El Salvador. Facultad de Medicina. (Inédito) | <a href=\"http://ri.ues.edu.sv/3053/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Monografía</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2005) Presentación de Software para análisis microbiológico. In: I Seminario Cientifico de la Universidad de El Salvador, 11 FEBRERO 2005, CENSALUD. (En Evaluación) | <a href=\"\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Presentación</a></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2016) Micro diccionario médico popular. Editorial Antares, San Salvador. ISBN 9789992370773 (Inédito) | <a href=\"http://ri.ues.edu.sv/11083/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Libro</a></td></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2011) Validación método de filtración para la detección de protozoarios y helmintos en muestras de hortalizas. Maestría thesis, Universidad de El Salvador : Universidad de Guadalajara (México) | <a href=\"http://ri.ues.edu.sv/627/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Tesis</a></td></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (2001) Micosis en El Salvador : un problema de Salud Pública : propiedades antimicóticas In Vitro de una planta natural Allium sativum (XX27). Maestría thesis, Universidad de El Salvador : Universidad de Maastrich . | <a href=\"http://ri.ues.edu.sv/641/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Tesis</a></td></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t  \t<td>Vásquez Hidalgo, Antonio (1999) Resistencia bacteriana en El Salvador. Maestría thesis, Universidad de El Salvador : Universidad Nacional Autonoma de Nicaragua. | <a href=\"http://ri.ues.edu.sv/661/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Tesis</a></td></td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t </tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t     \t\t
\t\t\t\t\t\t                 \t\t\t\t\t    \t</div>
\t\t\t\t\t\t  <div class=\"col-md-4 column\">
\t\t\t\t\t\t  \t<div class=\"well\">
\t\t\t\t\t\t  \t\t<h2 align=\"center\">Asociaciones</h2>
\t\t\t\t\t\t  \t\t<ul>
\t\t\t\t\t\t  \t\t\t<li>Asociación de microbiólogos de El Salvador. AMES</li>
\t\t\t\t\t\t  \t\t\t<li>Asociación de Académicos de la Universidad de El Salvador. ASAUES</li>
\t\t\t\t\t\t  \t\t\t<li>Asociación del Sindicato de Trabajadores de UES. SETUES</li>
\t\t\t\t\t\t  \t\t\t<li>Asociación Organización Internacional para la capacitación e investigación Médica. Perú</li>
\t\t\t\t\t\t  \t\t\t<li>Asociación Psicoanalítica Internacional. USA. IPA</li>
\t\t\t\t\t\t  \t\t\t<li>Miembro de investigadores de CSUCA.</li>
\t\t\t\t\t\t  \t\t\t<li>Miembro red investigadores CONACYT EL SALVADOR.</li>
\t\t\t\t\t\t  \t\t\t<li>Miembro de REDISAL de El Salvador.</li>
\t\t\t\t\t\t  \t\t\t<li>Miembro del equipo de revisión de tesis en Facultad de Medicina</li>
\t\t\t\t\t\t  \t\t</ul>
\t\t\t\t\t\t  \t\t<a href=\"http://ri.ues.edu.sv/cgi/stats/report/\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Repositorios UES estadisticas</a>
\t\t\t\t\t\t  \t\t<a href=\"http://ri.ues.edu.sv/view/creators/V=E1squez_Hidalgo=3AAntonio=3A=3A.html\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">Repositorios UES documentos</a>
\t\t\t\t\t\t  \t\t<a href=\"http://www.redisal.org.sv/listadoDetalle.php?idinv=133\" target=\"_blank\" class=\"btn btn-info btn-xs\" role=\"button\">REDISAL El Salvador</a>
\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t  \t\t 
\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t      </div>
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"panel-567650\">
\t\t\t\t\t\t                 <div class=\"row clearfix\">
    \t<div class=\"col-md-8 column\">
\t\t\t<ul>
\t\t\t\t<li>Asesoría y construcción de un microscopio escolar a nivel nacional > <a href=\"http://ri.ues.edu.sv/2020/\" target=\"_blank\">http://ri.ues.edu.sv/2020/</a> </li>
\t\t\t\t<li>Visitas a la Facultad de Medicina de las escuelas de AHUACHAPAN, LA PAZ, LA LIBERTAD, SAN SALVADOR, SAN MIGUEL, para la construcción del microscopio escolar</li>
\t\t\t\t<li>Nombres de las escuelas, colegios, institutos y estudiantes: (lo reciente)</li>
\t\t\t\t<dd>- Escuela Mo-nte Blanco</dd>
\t\t\t\t<dd>- Escuela No-rmal de España</dd>
\t\t\t\t<dd>- Complejo Educativo Fray Engel-berto Malissori</dd>
\t\t\t\t<dd>- Centro Escolar Cantón Lo-ma Larga</dd>
\t\t\t\t<dd>- Centro Escolar Municipal Ma-jucla</dd>
\t\t\t\t<dd>- Centro Escolar Jose Sime-on Cañas</dd>
\t\t\t\t<dd>- Centro Escolar cantón El Ma-jahual</dd>
\t\t\t\t<dd>- Centro Escolar Dr. Hermoge-nes Alvarado</dd>
\t\t\t\t<dd>- Centro Cultural Salvadoreño Americano</dd>
\t\t\t\t<dd>- Centro Escolar República Orie-ntal del Uruguay</dd>
\t\t\t\t<dd>- Instituto Nacional de Dulce N-ombre de María</dd>
\t\t\t\t<dd>- Instituto nacional G. Francisc-o Menéndez</dd>
\t\t\t\t<dd>- Colegio Espír-itu Santo San Salvador</dd>
\t\t\t\t<dd>- Centro Escolar República de Cos-ta Rica</dd>
\t\t\t\t<dd>- Centro Escolar Antonio N-ajarro</dd>
\t\t\t\t<dd>- Colegio Academia Europ-ea San Miguel</dd>
\t\t\t\t<dd>- Centro Escolar la Cim-a Dos</dd>
\t\t\t\t<dd>- Complejo Educativo Ing Guillermo Na-than</dd>
\t\t\t\t<dd>- Centro Escolar Alberto Masf-errer</dd>
\t\t\t\t<dd>- Depto de física facult Multidisciplinaria de Occidente</dd>
\t\t\t\t<dd>- Centro Escolar Asociación Salvad-oreña de Sras de Ing Civiles</dd>
\t\t\t\t<dd>- Centro Escolar Pbro Ra-fael Arturo López</dd>
\t\t\t\t<dd>- Centro Escolar Cantón San Ro-que</dd>
\t\t\t\t<dd>- Feria Internacional de Ciencia en Acc-ión España Madrid</dd>
\t\t\t\t<dd>- Facultad Multidisciplinaria parace-ntral San Vicente</dd>
\t\t\t\t<dd>- Liceo Cristiano Reverendo Ju-n Bueno</dd>
\t\t\t\t<dd>- Instituto Albert Ca-mus</dd>
\t\t\t\t<dd>- Colegio Bautista Enmanuel</dd>
\t\t\t\t<dd>- Colegio la Divina Providencia</dd>
\t\t\t\t<dd>- Colegio Isabell All-ende</dd>
\t\t\t\t<dd>- Instituto Nacional Jose Da-mian Villacorta</dd>
\t\t\t\t<dd>- Instituto Nacional de Ap-opa</dd>
\t\t\t\t<dd>- Facultad de Química y Farmacia. UES</dd>
\t\t\t\t<dd>- Estudiante de ingeniería Bio-médica</dd>
\t\t\t\t<dd>- Instituto Tecnológico Centro A-mericano</dd>
\t\t\t\t<dd>- Centro Escolar Ange-la Sole</dd>
\t\t\t\t<dd>- Colegio Monstes-oriano</dd>
\t\t\t\t<dd>- Colegio Extern-ado de San José</dd>
\t\t\t\t<dd>- Facultad Multidiscip-lianria de Occidente</dd>
\t\t\t\t<dd>- Colegio Eucarís-tico</dd>
\t\t\t\t<dd>- Estudiante Universidad Fra-ncisco Gavidia</dd>
\t\t\t\t<dd>- Estudiante Universidad Do-n Bosco</dd>
\t\t\t\t<dd>- Centro Escolar Instituto Nacion-al de Santa Ana</dd>
\t\t\t\t<dd>- Escuela Metropolitana de Sa-nta Ana</dd>
\t\t\t\t<dd>- Profesor de cen-tro escolar</dd>
\t\t\t\t<dd>- Colegio Be-lén</dd>
\t\t\t\t<dd>- Estudiante de ing. Bi-omecánica</dd>
\t\t\t\t<dd>- Instituto Nacional José Da-mián</dd>
\t\t\t\t<dd>- Estudiante Universidad Tecn-ológica.</dd>
\t\t\t\t<dd>- Estudiante Universidad Nac-ional Santa Ana</dd>
\t\t\t\t<dd>- Profesora de Nutric-ión UES</dd>
\t\t\t\t<dd>- Estudiante industrial- de la UCA</dd>
\t\t\t</ul>
</div>

<div class=\"col-md-4 column\">
\t<div class=\"well\">
\t\t\t<h2 align=\"center\">DIFUSIÓN Y RECONOCIMIENTO EN MEDIOS DE COMUNICACIÓN IMPRESO, RADIAL Y TELEVISIVO</h2>
\t\t<ul>
\t\t\t<li>Programa UNED de ciencia y tecnología España. RTVes</li>
\t\t\t<li>Canal 2 TVe Española</li>
\t\t\t<li>TCS noticias</li>
\t\t\t<li>Canal 4 visión</li>
\t\t\t<li>Periódico la Gazeta Universitaria. UES</li>
\t\t\t<li>Periódico Nuevo Enfoque</li>
\t\t\t<li>Campus Universitario. UES</li>
\t\t\t<li>Revista El Universitario. UES</li>
\t\t\t<li>CIC UES. Consejo de Investigaciones Científicas. UES</li>
\t\t\t<li>Boletín de la Red Nacional de Información Documental en Salud. RENIDS</li>
\t\t\t<li>Apoyo local de Autoridades UES.</li>
\t\t\t<li>Boletín NOTI-SALUD de la Facultad de Medicina. UES</li>
\t\t\t<li>Boletín CIC-UES Consejo de Investigaciones Científicas UES</li>
\t\t\t<li>Apoyo Local de Autoridades de la Facultad de Medicina. UES</li>
\t\t\t<li>Apoyo local del CIDE. Facultad de Medicina. UES</li>
\t\t\t<li>Apoyo local de Biblioteca de la Facultad de Medicina. UES</li>
\t\t\t<li>Apoyo local de Librería Universitaria. UES</li>
\t\t\t<li>CONACYT. Red Nacional de Investigadores El Salvador.</li>
\t\t\t<li>Diario Colatino.</li>
\t\t\t<li>El Diario de Hoy</li>
\t\t\t<li>La Prensa Gráfica</li>
\t\t\t<li>Diario el Mundo</li>
\t\t</ul>
\t</div>\t\t\t            
            \t\t\t\t</div>
            \t\t\t</div>
\t\t\t\t\t</div> <!-- Fin Producción Científica -->
\t\t\t\t\t
\t\t\t\t\t<div class=\"tab-pane\" id=\"panel-567651\"> <!--Premiación mundial e internacional locales -->
\t\t\t\t\t\t\t<div class=\"row clearfix\">
\t\t\t\t\t    \t\t\t<div class=\"col-md-8 column\">
\t\t\t\t\t\t\t\t\t  <table class=\"table table-condensed\">
\t\t\t\t\t\t\t\t\t    <thead>
\t\t\t\t\t\t\t\t\t      <tr>
\t\t\t\t\t\t\t\t\t        <th>Cargo</th>
\t\t\t\t\t\t\t\t\t        <th>Lugar</th>
\t\t\t\t\t\t\t\t\t        <th>Desde</th>
\t\t\t\t\t\t\t\t\t        <th>Hasta</th>
\t\t\t\t\t\t\t\t\t      </tr>
\t\t\t\t\t\t\t\t\t    </thead>
\t\t\t\t\t\t\t\t\t    <tbody>
\t\t\t\t\t\t\t\t\t      <tr>
\t\t\t\t\t\t\t\t\t        <td>Catedrático de la Facultad de Medicina. Universidad de El Salvador</td>
\t\t\t\t\t\t\t\t\t        <td><a href=\"http://www.medicina.ues.edu.sv/index.php?option=com_content&view=article&id=360&Itemid=197\" target=\"_blank\">UES</a></td>
\t\t\t\t\t\t\t\t\t        <td>1993</td>
\t\t\t\t\t\t\t\t\t        <td>Activo</td>
\t\t\t\t\t\t\t\t\t      </tr>
\t\t\t\t\t\t\t\t\t      <tr>
\t\t\t\t\t\t\t\t\t        <td>Atención de estudiantes de doctorado en medicina y licenciatura en laboratorio clínico.</td>
\t\t\t\t\t\t\t\t\t        <td></td>
\t\t\t\t\t\t\t\t\t        <td></td>
\t\t\t\t\t\t\t\t\t        <td></td>
\t\t\t\t\t\t\t\t\t      </tr>
\t\t\t\t\t\t\t\t\t      <tr>
\t\t\t\t\t\t\t\t\t        <td>Docente de la Escuela de Medicina del departamento de Microbiología. Facultad de Medicina. </td>
\t\t\t\t\t\t\t\t\t        <td><a href=\"http://www.medicina.ues.edu.sv/index.php?option=com_content&view=article&id=360&Itemid=197\" target=\"_blank\">UES</a></td>
\t\t\t\t\t\t\t\t\t        <td>1994</td>
\t\t\t\t\t\t\t\t\t        <td>Activo</td>
\t\t\t\t\t\t\t\t\t      </tr>
\t\t\t\t\t\t\t\t\t      <tr>
\t\t\t\t\t\t\t\t\t        <td>Docente del Tronco Común de la Escuela de Tecnología Médica. Facultad de Medicina. </td>
\t\t\t\t\t\t\t\t\t        <td><a href=\"http://www.medicina.ues.edu.sv/index.php?option=com_content&view=article&id=360&Itemid=197\" target=\"_blank\">UES</a></td>
\t\t\t\t\t\t\t\t\t        <td>1993</td>
\t\t\t\t\t\t\t\t\t        <td>1993</td>
\t\t\t\t\t\t\t\t\t      </tr>
\t\t\t\t\t\t\t\t\t       <tr>
\t\t\t\t\t\t\t\t\t        <td>Profesor Privado (hora-clase)</td>
\t\t\t\t\t\t\t\t\t        <td>Domicilio</td>
\t\t\t\t\t\t\t\t\t        <td>1980</td>
\t\t\t\t\t\t\t\t\t        <td>1989</td>
\t\t\t\t\t\t\t\t\t      </tr>
\t\t\t\t\t\t\t\t\t      <tr>
\t\t\t\t\t\t\t\t\t      <td>Presentaciones en Línea</td>
\t\t\t\t\t\t\t\t\t        <td><a href=\"https://es.slideshare.net/search/slideshow?searchfrom=header&q=antonio+vasquez+hidalgo\" target=\"_blank\" class=\"btn btn-info\" role=\"button\">Slideshare</a></td>
\t\t\t\t\t\t\t\t\t        <td><a href=\"http://www.authorstream.com/antares7/1\" target=\"_blank\" class=\"btn btn-info\" role=\"button\">AuthorStream</a></td>
\t\t\t\t\t\t\t\t\t        <td><a href=\"https://es.scribd.com/user/13327332/Ph-D-Antonio-Vasquez-Hidalgo\" target=\"_blank\" class=\"btn btn-info\" role=\"button\">Scribd</a></td>
\t\t\t\t\t\t\t\t\t      </tr>
\t\t\t\t\t\t\t\t\t    </tbody>
\t\t\t\t\t\t\t\t\t  </table>
\t\t\t\t\t\t\t\t\t  <h3>EVALUACIÓN CACPA AGOSTO 2017, PUNTAJE: 423.50</h3>
\t\t\t\t\t    \t\t</div>
\t\t    \t\t\t\t<div class=\"col-md-4 column\">
\t\t\t\t\t \t\t\t<div class=\"well\">
\t\t\t\t\t \t\t\t\t<h2 align=\"center\">ACTIVIDADES DESEMPEÑADAS EN LA UES</h2>
\t\t\t\t\t \t\t\t\t<ul type=\"1\">
\t\t\t\t\t \t\t\t\t\t<li>Miembro del comité Instituto Nacional de Salud para la creación de la POLITICA NACIONAL DE INVESTIGACION.</li>
\t\t\t\t\t \t\t\t\t\t<li>Nombramiento CONSEJO EJECUTIVO DE INVESTIGACIÓN por CONSEJO SUPERIOR UNIVERSITARIO. 2014.</li>
\t\t\t\t\t \t\t\t\t\t<li>Coordinador director de la REVISTA MINERVA DE LA UNIVERSIDAD DE EL SALVADOR. 2014-2017</li>
\t\t\t\t\t \t\t\t\t\t<li>Web master II congreso Internacional de Microbiología e inocuidad de alimentos 2014.</li>
\t\t\t\t\t \t\t\t\t\t<li>Comité científico del I congreso Internacional de Microbiología e inocuidad de alimentos 2012</li>
\t\t\t\t\t \t\t\t\t\t<li>Director de la Revista Facultad de Medicina. FM. UES  1999-2003.</li>
\t\t\t\t\t \t\t\t\t\t<li>Director de la Revista Electrónica. F.M. U.E.S. 1999-2003.</li>
\t\t\t\t\t \t\t\t\t\t<li>Asesor trabajos de Investigación 2000-</li>
\t\t\t\t\t \t\t\t\t\t<li>Asesor de trabajos de Graduación Año Social a estudiantes de Medicina.1996 -</li>
\t\t\t\t\t \t\t\t\t</ul>
\t\t\t\t\t \t\t\t</div>
\t\t            \t\t</div>
\t\t            \t</div>
\t\t            </div> <!--Premiación mundial e internacional locales -->
\t\t\t\t\t
\t\t\t\t\t<!-- <div class=\"tab-pane\" id=\"panel-567652\"> -->
\t\t\t\t\t\t                 <!-- <div class=\"row clearfix\"> -->
    \t<!-- <div class=\"col-md-8 column\"> -->
\t\t<!-- <p>Vásquez Hidalgo, Antonio (2020) Premios Internacionales de Suiza,México,Perú, España y Korea. | <a href=\"http://ri.ues.edu.sv/21033/\" target=\"_blank\"class=\"btn btn-info btn-xs\" role=\"button\">Premios </a></p>
    \t</div> -->
    \t\t<!-- <div class=\"col-md-4 column\">
    \t\t\t\t{% partial 'menu-vasquez' %}
    \t\t            \t\t\t\t</div> -->
            \t\t\t\t
            \t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t</div>
\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
</div>

<style>
\t#margin {
\t\tmargin-top:5px;
\t}
</style>

{% put scripts %}
  <script>
    \$(document).ready(function() {
    \$('#di').DataTable({
    \tlanguage:{
    \"decimal\":        \"\",
    \"emptyTable\":     \"No hay datos disponibles en la tabla\",
    \"info\":           \"Mostrando _START_ de _END_ de _TOTAL_ entradas\",
    \"infoEmpty\":      \"Mostrando 0 to 0 of 0 entradas\",
    \"infoFiltered\":   \"(filtrado de _MAX_ total entradas)\",
    \"infoPostFix\":    \"\",
    \"thousands\":      \",\",
    \"lengthMenu\":     \"Mostrar _MENU_ entradas\",
    \"loadingRecords\": \"Cargando...\",
    \"processing\":     \"Procesando...\",
    \"search\":         \"Buscar:\",
    \"zeroRecords\":    \"No se encontraron registros coincidentes\",
    \"paginate\": {
        \"first\":      \"Primero\",
        \"last\":       \"Último\",
        \"next\":       \"Siguiente\",
        \"previous\":   \"Anterior\"
    },
    \"aria\": {
        \"sortAscending\":  \": Activar para ordenar la columna ascendente\",
        \"sortDescending\": \": Activar para ordenar la columna descendente\"
    }
}
    });
} );
</script>
{% endput %}", "/websicues/themes/sicues/pages/samples/antonio-vasquez.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 65, "put" => 498);
        static $filters = array("theme" => 4, "page" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'put'],
                ['theme', 'page'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
