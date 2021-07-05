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

/* /websicues/themes/sicues/pages/samples/proyectos-aprobados.htm */
class __TwigTemplate_867c2cc020565695becab487aae2a4561d5637ebf2833965d50e676e89c07733 extends \Twig\Template
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
        echo "<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2><i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>  Documentos SIC-UES.</h2>
            <p class=\"lead\">\"Proyectos Aprobados 2002 - 2015\"</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                  
<table class=\"table table-bordered table-hover results\">

<thead>
  <tr>
    <th>Nombre del Archivo</th>
    <!-- <th>Tipo</th> -->
    <!-- <th>Tamaño</th> -->
    <th>Acciones</th>
  </tr>
</thead>
<tbody>
\t <tr>
\t     <td>Proyecto 2015</td>
\t     <!-- <td>.pdf</td> -->
\t     <!-- <td>0.00 MB</td> -->
\t      <td><a class=\"fa fa-eye\" href=";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2015");
        echo ">  Ver Proyecto</a></td>
\t   </tr>
  <tr>
    <td>Proyecto 2014</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
     <td><a class=\"fa fa-eye\" href=";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2014");
        echo ">  Ver Proyecto</a></td>
  </tr>
  <!-- <tr> -->
    <!-- <td>Proyecto 2013</td> -->
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<!-- <td><a class=\"fa fa-eye\" href=\"#\">  Ver Proyecto</a></td> -->
<!-- </tr> -->
  <tr>
    <td>Proyecto 2012</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href=";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2012");
        echo ">  Ver Proyecto</a></td>
  </tr>
  <tr>
    <td>Proyecto 2011</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href=";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2011");
        echo ">  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2010</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href=";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2010");
        echo ">  Ver Proyecto </a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2009</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href=";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2009");
        echo ">  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2008</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href=";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2008");
        echo ">  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2007</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href=";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2007");
        echo ">  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2006</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href=";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2006");
        echo ">  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2005</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href=";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2005");
        echo ">  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2004</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href=";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2004");
        echo ">  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2003</td>
    <!-- <th>.pdf</th> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href=";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2003");
        echo ">  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2002</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href=";
        // line 113
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2002");
        echo ">  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  </tbody>
</table>
          </div><!--/.col-md-8-->
                <aside class=\"col-md-4\">
                    <div class=\"widget search\">
                        <form role=\"form\">
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Proyectos Aprobados Aquí\">
                        </form>
                    </div><!--/.search-->
    \t\t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                                ";
        // line 127
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menudescargas"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 128
        echo "                                ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("tagsproyectos"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 129
        echo "                    </div><!--/.producción científica-->
                    <!-- <div class=\"widget tags\">
                       \t % partial 'tagsproyectos' %}
                    </div> --><!--/.tags-->\t
    \t\t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/samples/proyectos-aprobados.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 129,  208 => 128,  204 => 127,  187 => 113,  177 => 106,  167 => 99,  157 => 92,  147 => 85,  137 => 78,  127 => 71,  117 => 64,  107 => 57,  97 => 50,  88 => 44,  73 => 32,  64 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2><i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>  Documentos SIC-UES.</h2>
            <p class=\"lead\">\"Proyectos Aprobados 2002 - 2015\"</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                  
<table class=\"table table-bordered table-hover results\">

<thead>
  <tr>
    <th>Nombre del Archivo</th>
    <!-- <th>Tipo</th> -->
    <!-- <th>Tamaño</th> -->
    <th>Acciones</th>
  </tr>
</thead>
<tbody>
\t <tr>
\t     <td>Proyecto 2015</td>
\t     <!-- <td>.pdf</td> -->
\t     <!-- <td>0.00 MB</td> -->
\t      <td><a class=\"fa fa-eye\" href={{\"samples/proyectos2015\"| page }}>  Ver Proyecto</a></td>
\t   </tr>
  <tr>
    <td>Proyecto 2014</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
     <td><a class=\"fa fa-eye\" href={{\"samples/proyectos2014\"| page }}>  Ver Proyecto</a></td>
  </tr>
  <!-- <tr> -->
    <!-- <td>Proyecto 2013</td> -->
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<!-- <td><a class=\"fa fa-eye\" href=\"#\">  Ver Proyecto</a></td> -->
<!-- </tr> -->
  <tr>
    <td>Proyecto 2012</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href={{\"samples/proyectos2012\"| page }}>  Ver Proyecto</a></td>
  </tr>
  <tr>
    <td>Proyecto 2011</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href={{\"samples/proyectos2011\"| page }}>  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2010</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href={{\"samples/proyectos2010\"| page }}>  Ver Proyecto </a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2009</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href={{\"samples/proyectos2009\"| page }}>  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2008</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href={{\"samples/proyectos2008\"| page }}>  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2007</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href={{\"samples/proyectos2007\"| page }}>  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2006</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href={{\"samples/proyectos2006\"| page }}>  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2005</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href={{\"samples/proyectos2005\"| page }}>  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2004</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href={{\"samples/proyectos2004\"| page }}>  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2003</td>
    <!-- <th>.pdf</th> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href={{\"samples/proyectos2003\"| page }}>  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  <tr>
    <td>Proyecto 2002</td>
    <!-- <td>.pdf</td> -->
    <!-- <td>0.00 MB</td> -->
<td><a class=\"fa fa-eye\" href={{\"samples/proyectos2002\"| page }}>  Ver Proyecto</a></td>
<!-- <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td> -->
  </tr>
  </tbody>
</table>
          </div><!--/.col-md-8-->
                <aside class=\"col-md-4\">
                    <div class=\"widget search\">
                        <form role=\"form\">
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Proyectos Aprobados Aquí\">
                        </form>
                    </div><!--/.search-->
    \t\t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                                {% partial 'menudescargas' %}
                                {% partial 'tagsproyectos' %}
                    </div><!--/.producción científica-->
                    <!-- <div class=\"widget tags\">
                       \t % partial 'tagsproyectos' %}
                    </div> --><!--/.tags-->\t
    \t\t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->", "/websicues/themes/sicues/pages/samples/proyectos-aprobados.htm", "");
    }
}
