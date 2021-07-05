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

/* /websicues/themes/sicues/partials/institucion.htm */
class __TwigTemplate_085d7b75600e2d3aa2edea8bd9c163d7156690c2a6f269031714d2b4cce68754 extends \Twig\Template
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
        echo "<div id=\"margin-top\" class=\"container\">
<a data-toggle=\"modal\" href=\"#mision\" class=\"btn btn-primary\">MISIÓN</a>
<a data-toggle=\"modal\" href=\"#vision\" class=\"btn btn-primary\">VISIÓN</a>
<a data-toggle=\"modal\" href=\"#objetivos\" class=\"btn btn-primary\">OBJETIVOS</a>

<div class=\"modal\" id=\"mision\">
\t<div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
          <h4 class=\"modal-title\">MISIÓN</h4>
        </div>
        <div class=\"modal-body\">
          La Secretaría de Investigaciones Científicas de la Universidad de El Salvador (SIC-UES) es la unidad orgánica encargada de coordinar los esfuerzos de la investigación científica que realiza la Universidad de El Salvador, por medio de las actividades de investigación en las Facultades, los Centros, Institutos y Unidades de Investigación, orientadas a la gestión, promoción, avance, seguimiento y divulgación de las investigaciones científicas generadoras de nuevo conocimiento, para contribuir al desarrollo y el bienestar social y económico del país. 
        </div>
        <div class=\"modal-footer\">
          <a href=\"#\" data-dismiss=\"modal\" class=\"btn\">CERRAR</a>
        </div>
      </div>
    </div>
</div>

<div class=\"modal\" id=\"vision\">
\t<div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
          <h4 class=\"modal-title\">VISIÓN</h4>
        </div>
        <div class=\"modal-body\">
          Constituirse en la Unidad que trabaja para hacer de la investigación científica una cultura y una práctica académica relevante en la Universidad de El Salvador, posicionándola como la institución líder a nivel nacional y regional, que realiza investigación pertinente, de actualidad, de calidad y con sentido crítico, de acuerdo a las necesidades del país y de la región centroamericana.
        </div>
        <div class=\"modal-footer\">
          <a href=\"#\" data-dismiss=\"modal\" class=\"btn\">CERRAR</a>
        </div>
      </div>
    </div>
</div>
</div>
<!-- MODAL 3 OBJETIVOS-->
<div class=\"modal\" id=\"objetivos\">
\t<div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
          <h4 class=\"modal-title\">OBJETIVOS</h4>
        </div>
        <div class=\"modal-body\">
        \t<ol type=\"1\">
                <li><p align=\"justify\">Fortalecer la capacidad de investigación científica, tecnológica y la innovación en la Universidad de El Salvador a fin de promover la superación académica institucional e impactar en el desarrollo económico y social del país, en concordancia con la Ley de Desarrollo Científico y Tecnológico de El Salvador;</p></li>
                <li><p align=\"justify\">Integrar la investigación como parte del quehacer académico de la comunidad  universitaria;</p></li>
                <li><p align=\"justify\">Posicionar a la UES como líder, a nivel de la Educación Superior Universitaria,  en el campo de la investigación.</p></li>
                <li><p align=\"justify\">Promover la conformación coordinada del tejido de investigaciones científicas de la Universidad de El Salvador, entre las Unidades de Investigación o su equivalente en las Facultades, así como con los Institutos y Centros de Investigación existentes o futuros;</p></li>
                <li><p align=\"justify\">Facilitar y promover la cultura de la investigación interdisciplinaria;</p></li>
                <li><p align=\"justify\">Incorporar los adelantos tecnológicos creativos e innovadores a las tareas de investigación;</p></li>
                <li><p align=\"justify\">Promover la generación de respuestas científicas a las necesidades de la sociedad en el campo de la investigación;</p></li>
                <li><p align=\"justify\">Garantizar que la transferencia del conocimiento a la sociedad, producto de la labor investigativa de la Universidad de El Salvador, sea pertinente, ágil, oportuna y actualizada;</p></li>
            </ol>
        </div>
        <div class=\"modal-footer\">
          <a href=\"#\" data-dismiss=\"modal\" class=\"btn\">CERRAR</a>
        </div>
      </div>
    </div>
</div>
</div>
<style>
\t#margin-top {
\t\tmargin-top:7px;
\t}
</style>
<script>
\t\$('#openBtn').click(function(){
\t\$('#myModal').modal({show:true})
});
</script>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/institucion.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"margin-top\" class=\"container\">
<a data-toggle=\"modal\" href=\"#mision\" class=\"btn btn-primary\">MISIÓN</a>
<a data-toggle=\"modal\" href=\"#vision\" class=\"btn btn-primary\">VISIÓN</a>
<a data-toggle=\"modal\" href=\"#objetivos\" class=\"btn btn-primary\">OBJETIVOS</a>

<div class=\"modal\" id=\"mision\">
\t<div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
          <h4 class=\"modal-title\">MISIÓN</h4>
        </div>
        <div class=\"modal-body\">
          La Secretaría de Investigaciones Científicas de la Universidad de El Salvador (SIC-UES) es la unidad orgánica encargada de coordinar los esfuerzos de la investigación científica que realiza la Universidad de El Salvador, por medio de las actividades de investigación en las Facultades, los Centros, Institutos y Unidades de Investigación, orientadas a la gestión, promoción, avance, seguimiento y divulgación de las investigaciones científicas generadoras de nuevo conocimiento, para contribuir al desarrollo y el bienestar social y económico del país. 
        </div>
        <div class=\"modal-footer\">
          <a href=\"#\" data-dismiss=\"modal\" class=\"btn\">CERRAR</a>
        </div>
      </div>
    </div>
</div>

<div class=\"modal\" id=\"vision\">
\t<div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
          <h4 class=\"modal-title\">VISIÓN</h4>
        </div>
        <div class=\"modal-body\">
          Constituirse en la Unidad que trabaja para hacer de la investigación científica una cultura y una práctica académica relevante en la Universidad de El Salvador, posicionándola como la institución líder a nivel nacional y regional, que realiza investigación pertinente, de actualidad, de calidad y con sentido crítico, de acuerdo a las necesidades del país y de la región centroamericana.
        </div>
        <div class=\"modal-footer\">
          <a href=\"#\" data-dismiss=\"modal\" class=\"btn\">CERRAR</a>
        </div>
      </div>
    </div>
</div>
</div>
<!-- MODAL 3 OBJETIVOS-->
<div class=\"modal\" id=\"objetivos\">
\t<div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
          <h4 class=\"modal-title\">OBJETIVOS</h4>
        </div>
        <div class=\"modal-body\">
        \t<ol type=\"1\">
                <li><p align=\"justify\">Fortalecer la capacidad de investigación científica, tecnológica y la innovación en la Universidad de El Salvador a fin de promover la superación académica institucional e impactar en el desarrollo económico y social del país, en concordancia con la Ley de Desarrollo Científico y Tecnológico de El Salvador;</p></li>
                <li><p align=\"justify\">Integrar la investigación como parte del quehacer académico de la comunidad  universitaria;</p></li>
                <li><p align=\"justify\">Posicionar a la UES como líder, a nivel de la Educación Superior Universitaria,  en el campo de la investigación.</p></li>
                <li><p align=\"justify\">Promover la conformación coordinada del tejido de investigaciones científicas de la Universidad de El Salvador, entre las Unidades de Investigación o su equivalente en las Facultades, así como con los Institutos y Centros de Investigación existentes o futuros;</p></li>
                <li><p align=\"justify\">Facilitar y promover la cultura de la investigación interdisciplinaria;</p></li>
                <li><p align=\"justify\">Incorporar los adelantos tecnológicos creativos e innovadores a las tareas de investigación;</p></li>
                <li><p align=\"justify\">Promover la generación de respuestas científicas a las necesidades de la sociedad en el campo de la investigación;</p></li>
                <li><p align=\"justify\">Garantizar que la transferencia del conocimiento a la sociedad, producto de la labor investigativa de la Universidad de El Salvador, sea pertinente, ágil, oportuna y actualizada;</p></li>
            </ol>
        </div>
        <div class=\"modal-footer\">
          <a href=\"#\" data-dismiss=\"modal\" class=\"btn\">CERRAR</a>
        </div>
      </div>
    </div>
</div>
</div>
<style>
\t#margin-top {
\t\tmargin-top:7px;
\t}
</style>
<script>
\t\$('#openBtn').click(function(){
\t\$('#myModal').modal({show:true})
});
</script>", "/websicues/themes/sicues/partials/institucion.htm", "");
    }
}
