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

/* /websicues/themes/sicues/pages/samples/inversion.htm */
class __TwigTemplate_85d33ac24740f15eed2615149ab5716245221c838703b3b2a31d358bd171216b extends \Twig\Template
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
            <h2><i class=\"fa fa-download\" aria-hidden=\"true\"></i>  Documentos SIC-UES.</h2>
            <p class=\"lead\">Sección de Descargas \"Inversión proyectos de investigación\"</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                  
<table class=\"table table-bordered table-hover results\">

<thead>
  <tr>
    <th>Nombre del Archivo</th>
    <th>Tipo</th>
    <th>Tamaño</th>
    <th><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> Ver PDF</th>
    <th><i class=\"fa fa-download\" aria-hidden=\"true\"></i>  Descargar</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Inversión 2003</td>
    <td>.pdf</td>
   <td>0.00 MB</td>
     <td><a class=\"btn btn-primary view-pdf\" href=\"href=\"http://www.bodossaki.gr/userfiles/file/dummy.pdf\"\">Ver PDF</a> </td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td>
  </tr>
  <tr>
    <td>Inversión 2002</td>
    <td>.pdf</td>
    <td>0.00 MB</td>
     <td><a class=\"btn btn-primary view-pdf\" href=\"href=\"http://www.bodossaki.gr/userfiles/file/dummy.pdf\"\">Ver PDF</a> </td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td>
  </tr>
  </tbody>
</table>
          </div><!--/.col-md-8-->

                <aside class=\"col-md-4\">
                    <div class=\"widget search\">
                        <form role=\"form\">
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Inversión Proyectos Aquí\">
                        </form>
                    </div><!--/.search-->
    \t\t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                        ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menudescargas"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "           
                    </div><!--/.producción científica-->
    \t\t\t\t<!--/.Seminarios científicos-->
    \t\t\t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/samples/inversion.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 49,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2><i class=\"fa fa-download\" aria-hidden=\"true\"></i>  Documentos SIC-UES.</h2>
            <p class=\"lead\">Sección de Descargas \"Inversión proyectos de investigación\"</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                  
<table class=\"table table-bordered table-hover results\">

<thead>
  <tr>
    <th>Nombre del Archivo</th>
    <th>Tipo</th>
    <th>Tamaño</th>
    <th><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> Ver PDF</th>
    <th><i class=\"fa fa-download\" aria-hidden=\"true\"></i>  Descargar</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Inversión 2003</td>
    <td>.pdf</td>
   <td>0.00 MB</td>
     <td><a class=\"btn btn-primary view-pdf\" href=\"href=\"http://www.bodossaki.gr/userfiles/file/dummy.pdf\"\">Ver PDF</a> </td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td>
  </tr>
  <tr>
    <td>Inversión 2002</td>
    <td>.pdf</td>
    <td>0.00 MB</td>
     <td><a class=\"btn btn-primary view-pdf\" href=\"href=\"http://www.bodossaki.gr/userfiles/file/dummy.pdf\"\">Ver PDF</a> </td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td>
  </tr>
  </tbody>
</table>
          </div><!--/.col-md-8-->

                <aside class=\"col-md-4\">
                    <div class=\"widget search\">
                        <form role=\"form\">
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Inversión Proyectos Aquí\">
                        </form>
                    </div><!--/.search-->
    \t\t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                        {% partial 'menudescargas' %}           
                    </div><!--/.producción científica-->
    \t\t\t\t<!--/.Seminarios científicos-->
    \t\t\t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->", "/websicues/themes/sicues/pages/samples/inversion.htm", "");
    }
}
