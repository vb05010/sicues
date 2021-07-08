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

/* /websicues/themes/sicues/partials/menu-vasquez.htm */
class __TwigTemplate_0e37112cd5bbc120b17951715a8ef728f29ecf12bcfbfa00d1462d05ff85071f extends \Twig\Template
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
        echo "<div class=\"well\">
<table class=\"table\">
<thead>
  <tr>
    <th>RECONOCIMIENTOS</th>
    <th><i class=\"fa fa-list\" aria-hidden=\"true\"></i></th>
  </tr>
</thead>
<tbody>
\t<tr>
    <td>Premios Internacionales de Suiza, México, Perú, España y Korea</td>
    <td><span><a href=\"http://ri.ues.edu.sv/21033/\" target=\"_blank\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i></a></span></td>
  </tr>
  <tr>
    <td>ESTÍMULOS RECIBIDOS POR ORGANISMOS MUNDIALES</td>
    <td><span><a href=\"storage/app/media/drvasquez/estimulos-dr-vasquez.pdf\" download=\"estimulos-dr-vasquez.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tr>
  <tr>
    <td>EL SALVADOR Ponencia congreso internacional añil 2004</td>
    <td><span><a href=\"storage/app/media/drvasquez/ponencias/el-salvador-ponencia-congreso-internacional-anil-2004.pdf\" download=\"el-salvador-ponencia-congreso-internacional-anil-2004.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tr>
  <tr>
    <td>EL SALVADOR PONENCIA CIC UES 2009</td>
    <td><span><a href=\"storage/app/media/drvasquez/ponencias/EL SALVADOR PONENCIA CIC UES 2009.pdf\" download=\"EL SALVADOR PONENCIA CIC UES 2009.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tr>
  <tr>
    <td>EL SALVADOR Presentacion  NACIONAL DE POLIMERO dr vasquez Enfoques 2008</td>
    <td><span><a href=\"storage/app/media/drvasquez/ponencias/EL SALVADOR Presentacion  NACIONAL DE POLIMERO dr vasquez Enfoques 2008.pdf\" download=\"EL SALVADOR Presentacion  NACIONAL DE POLIMERO dr vasquez Enfoques 2008.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tr>
  <tr>
    <td>MEXICO presentacion validacion</td>
    <td><span><a href=\"storage/app/media/drvasquez/ponencias/MEXICO presentacion validacion.pdf\" download=\"MEXICO presentacion validacion.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tr>
  <tr>
    <td>LIMA PERU PONENCIA INTERNACIONAL</td>
    <td><span><a href=\"storage/app/media/drvasquez/ponencias/LIMA PERU PONENCIA INTERNACIONAL.pdf\" download=\"LIMA PERU PONENCIA INTERNACIONAL.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tr>
  <tr>
    <td>CONCURSO LIMA PERU DE INVESTIGACION</td>
    <td><span><a href=\"storage/app/media/drvasquez/ponencias/CONCURSO LIMA PERU DE INVESTIGACION.pdf\" download=\"CONCURSO LIMA PERU DE INVESTIGACION.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tr>
   <tr>
    <td>Concurso ESPAÑA MADRID</td>
    <td><span><a href=\"storage/app/media/drvasquez/ponencias/concurso-espana-madrid.pdf\" download=\"concurso-espana-madrid.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tr>
  <tr>
    <td>Publicaciones</td>
    <td><span><a href=\"storage/app/media/drvasquez/PUBLICACIONES EN.pdf\" download=\"PUBLICACIONES EN.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tbody>
</table>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/menu-vasquez.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"well\">
<table class=\"table\">
<thead>
  <tr>
    <th>RECONOCIMIENTOS</th>
    <th><i class=\"fa fa-list\" aria-hidden=\"true\"></i></th>
  </tr>
</thead>
<tbody>
\t<tr>
    <td>Premios Internacionales de Suiza, México, Perú, España y Korea</td>
    <td><span><a href=\"http://ri.ues.edu.sv/21033/\" target=\"_blank\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i></a></span></td>
  </tr>
  <tr>
    <td>ESTÍMULOS RECIBIDOS POR ORGANISMOS MUNDIALES</td>
    <td><span><a href=\"storage/app/media/drvasquez/estimulos-dr-vasquez.pdf\" download=\"estimulos-dr-vasquez.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tr>
  <tr>
    <td>EL SALVADOR Ponencia congreso internacional añil 2004</td>
    <td><span><a href=\"storage/app/media/drvasquez/ponencias/el-salvador-ponencia-congreso-internacional-anil-2004.pdf\" download=\"el-salvador-ponencia-congreso-internacional-anil-2004.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tr>
  <tr>
    <td>EL SALVADOR PONENCIA CIC UES 2009</td>
    <td><span><a href=\"storage/app/media/drvasquez/ponencias/EL SALVADOR PONENCIA CIC UES 2009.pdf\" download=\"EL SALVADOR PONENCIA CIC UES 2009.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tr>
  <tr>
    <td>EL SALVADOR Presentacion  NACIONAL DE POLIMERO dr vasquez Enfoques 2008</td>
    <td><span><a href=\"storage/app/media/drvasquez/ponencias/EL SALVADOR Presentacion  NACIONAL DE POLIMERO dr vasquez Enfoques 2008.pdf\" download=\"EL SALVADOR Presentacion  NACIONAL DE POLIMERO dr vasquez Enfoques 2008.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tr>
  <tr>
    <td>MEXICO presentacion validacion</td>
    <td><span><a href=\"storage/app/media/drvasquez/ponencias/MEXICO presentacion validacion.pdf\" download=\"MEXICO presentacion validacion.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tr>
  <tr>
    <td>LIMA PERU PONENCIA INTERNACIONAL</td>
    <td><span><a href=\"storage/app/media/drvasquez/ponencias/LIMA PERU PONENCIA INTERNACIONAL.pdf\" download=\"LIMA PERU PONENCIA INTERNACIONAL.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tr>
  <tr>
    <td>CONCURSO LIMA PERU DE INVESTIGACION</td>
    <td><span><a href=\"storage/app/media/drvasquez/ponencias/CONCURSO LIMA PERU DE INVESTIGACION.pdf\" download=\"CONCURSO LIMA PERU DE INVESTIGACION.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tr>
   <tr>
    <td>Concurso ESPAÑA MADRID</td>
    <td><span><a href=\"storage/app/media/drvasquez/ponencias/concurso-espana-madrid.pdf\" download=\"concurso-espana-madrid.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tr>
  <tr>
    <td>Publicaciones</td>
    <td><span><a href=\"storage/app/media/drvasquez/PUBLICACIONES EN.pdf\" download=\"PUBLICACIONES EN.pdf\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> </a></span></td>
  </tbody>
</table>
</div>", "/websicues/themes/sicues/partials/menu-vasquez.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
