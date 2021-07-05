<?php

/* /websicues/themes/sicues/pages/samples/eventos.htm */
class __TwigTemplate_f64d1e3a21e74ca98cf118d9e09aafd5876d6a6ca66b8b778d39710050ec8450 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2><i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>  Documentos SIC-UES.</h2>
            <p class=\"lead\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> \"EVENTOS\"</p>
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
    <!-- <th><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> Ver PDF</th> -->
    <th><i class=\"fa fa-download\" aria-hidden=\"true\"></i>  Descargar</th>
  </tr>
</thead>
<tbody>
\t\t<tr>
\t\t<td scope=\"colgroup\" colspan=\"5\" class=\"success\"><p align=\"center\"><strong>Taller Urban Health</strong></p></td>
\t</tr>
  <tr>
    <td>ICSU ROLAC El Salvador 101116</td>
    <td>.pdf</td>
    <td>2.03 MB</td>
    <!-- <td><a class=\"btn btn-primary view-pdf\" href=\"'storage/app/media/ICSU-ROLAC-El-Salvador-101116.pdf'}}\">Ver PDF</a> </td> -->
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"";
        // line 29
        echo "storage/app/media/ICSU-ROLAC-El-Salvador-101116.pdf";
        echo "\" download=\"ICSU-ROLAC-El-Salvador-101116.pdf\">Descargar</a></span></td>
  </tr>
  <tr>
    <td>SIRI LAC Urban Health El Salvador 100716</td>
    <td>.pdf</td>
    <td>2.0 MB</td>
    <!-- <td><a class=\"btn btn-primary view-pdf\" href=\"'storage/app/media/SIRI-LAC-Urban-Health-El-Salvador-100716.pdf'}}\">Ver PDF</a> </td> -->
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"";
        // line 36
        echo "storage/app/media/SIRI-LAC-Urban-Health-El-Salvador-100716.pdf";
        echo "\" download=\"SIRI-LAC-Urban-Health-El-Salvador-100716.pdf\">Descargar</a></span></td>
  </tr>
  <tr>
    <td>UHWB-rolac-san salvador-FG</td>
    <td>.pdf</td>
    <td>5.46 MB</td>
    <!-- <td><a class=\"btn btn-primary view-pdf\" href=\"";
        // line 42
        echo "storage/app/media/UHWB-rolac-san-salvador-FG.pdf";
        echo "\">Ver PDF</a></td> -->
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"";
        // line 43
        echo "storage/app/media/UHWB-rolac-san-salvador-FG.pdf";
        echo "\" download=\"UHWB-rolac-san-salvador-FG.pdf\" >Descargar</a></span></td>
  </tr>
  <tr>
  \t<td scope=\"colgroup\" colspan=\"5\" class=\"success\"><p align=\"center\"><strong>Conferencia Dr. Salvador Moncada</strong></p></td>
  </tr>
  <tr>
    <td>Sin documentos</td>
    <td>.pdf</td>
    <td>0.00 MB</td>
    <!-- <td><a class=\"btn btn-primary view-pdf\" href=\"#\">Ver PDF</a> </td> -->
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td>
  </tr>
  <tr>
  \t<td scope=\"colgroup\" colspan=\"5\" class=\"success\"><p align=\"center\"><strong>Segundo Seminario Científico</strong></p></td>
  </tr>
  <tr>
    <td>Sin documentos</td>
    <td>.pdf</td>
    <td>0.00 MB</td>
    <!-- <td><a class=\"btn btn-primary view-pdf\" href=\"#\">Ver PDF</a> </td> -->
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td>
  </tr>
  <tr>
  \t<td scope=\"colgroup\" colspan=\"5\" class=\"success\"><p align=\"center\"><strong>Primer Seminario Científico</strong></p></td>
  </tr>
  <tr>
    <td>Sin documentos</td>
    <td>.pdf</td>
    <td>0.00 MB</td>
    <!-- <td><a class=\"btn btn-primary view-pdf\" href=\"#\">Ver PDF</a> </td> -->
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td>
  </tr>
  </tbody>
</table>

          </div><!--/.col-md-8-->

                <aside class=\"col-md-4\">
                    <div class=\"widget search\">
                        <form role=\"form\">
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar documentos de eventos AQUÍ\">
                        </form>
                    </div><!--/.search-->
    \t\t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                        ";
        // line 88
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
        return "/websicues/themes/sicues/pages/samples/eventos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 88,  76 => 43,  72 => 42,  63 => 36,  53 => 29,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2><i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>  Documentos SIC-UES.</h2>
            <p class=\"lead\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> \"EVENTOS\"</p>
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
    <!-- <th><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> Ver PDF</th> -->
    <th><i class=\"fa fa-download\" aria-hidden=\"true\"></i>  Descargar</th>
  </tr>
</thead>
<tbody>
\t\t<tr>
\t\t<td scope=\"colgroup\" colspan=\"5\" class=\"success\"><p align=\"center\"><strong>Taller Urban Health</strong></p></td>
\t</tr>
  <tr>
    <td>ICSU ROLAC El Salvador 101116</td>
    <td>.pdf</td>
    <td>2.03 MB</td>
    <!-- <td><a class=\"btn btn-primary view-pdf\" href=\"'storage/app/media/ICSU-ROLAC-El-Salvador-101116.pdf'}}\">Ver PDF</a> </td> -->
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"{{ 'storage/app/media/ICSU-ROLAC-El-Salvador-101116.pdf' }}\" download=\"ICSU-ROLAC-El-Salvador-101116.pdf\">Descargar</a></span></td>
  </tr>
  <tr>
    <td>SIRI LAC Urban Health El Salvador 100716</td>
    <td>.pdf</td>
    <td>2.0 MB</td>
    <!-- <td><a class=\"btn btn-primary view-pdf\" href=\"'storage/app/media/SIRI-LAC-Urban-Health-El-Salvador-100716.pdf'}}\">Ver PDF</a> </td> -->
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"{{ 'storage/app/media/SIRI-LAC-Urban-Health-El-Salvador-100716.pdf' }}\" download=\"SIRI-LAC-Urban-Health-El-Salvador-100716.pdf\">Descargar</a></span></td>
  </tr>
  <tr>
    <td>UHWB-rolac-san salvador-FG</td>
    <td>.pdf</td>
    <td>5.46 MB</td>
    <!-- <td><a class=\"btn btn-primary view-pdf\" href=\"{{'storage/app/media/UHWB-rolac-san-salvador-FG.pdf'}}\">Ver PDF</a></td> -->
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"{{ 'storage/app/media/UHWB-rolac-san-salvador-FG.pdf' }}\" download=\"UHWB-rolac-san-salvador-FG.pdf\" >Descargar</a></span></td>
  </tr>
  <tr>
  \t<td scope=\"colgroup\" colspan=\"5\" class=\"success\"><p align=\"center\"><strong>Conferencia Dr. Salvador Moncada</strong></p></td>
  </tr>
  <tr>
    <td>Sin documentos</td>
    <td>.pdf</td>
    <td>0.00 MB</td>
    <!-- <td><a class=\"btn btn-primary view-pdf\" href=\"#\">Ver PDF</a> </td> -->
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td>
  </tr>
  <tr>
  \t<td scope=\"colgroup\" colspan=\"5\" class=\"success\"><p align=\"center\"><strong>Segundo Seminario Científico</strong></p></td>
  </tr>
  <tr>
    <td>Sin documentos</td>
    <td>.pdf</td>
    <td>0.00 MB</td>
    <!-- <td><a class=\"btn btn-primary view-pdf\" href=\"#\">Ver PDF</a> </td> -->
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td>
  </tr>
  <tr>
  \t<td scope=\"colgroup\" colspan=\"5\" class=\"success\"><p align=\"center\"><strong>Primer Seminario Científico</strong></p></td>
  </tr>
  <tr>
    <td>Sin documentos</td>
    <td>.pdf</td>
    <td>0.00 MB</td>
    <!-- <td><a class=\"btn btn-primary view-pdf\" href=\"#\">Ver PDF</a> </td> -->
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"#\">Descargar</a></span></td>
  </tr>
  </tbody>
</table>

          </div><!--/.col-md-8-->

                <aside class=\"col-md-4\">
                    <div class=\"widget search\">
                        <form role=\"form\">
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar documentos de eventos AQUÍ\">
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

    </section><!--/#blog-->", "/websicues/themes/sicues/pages/samples/eventos.htm", "");
    }
}
