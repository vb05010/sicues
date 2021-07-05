<?php

/* /websicues/themes/sicues/pages/samples/memoria-labores.htm */
class __TwigTemplate_7beda1f5a46f6b6c8b283c27bf8d72578bc7d4d02b5690c5c56cae97a9a458bb extends Twig_Template
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
            <h2><i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i> Documentos SIC-UES.</h2>
            <p class=\"lead\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> \"Memoria de Labores\"</p>
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
  <tr>
    <td>Memoria de Labores 2001 - 2002</td>
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
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Memorias de Labores Aquí\">
                        </form>
                    </div><!--/.search-->
    \t\t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                         ";
        // line 43
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
        return "/websicues/themes/sicues/pages/samples/memoria-labores.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 43,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2><i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i> Documentos SIC-UES.</h2>
            <p class=\"lead\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> \"Memoria de Labores\"</p>
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
  <tr>
    <td>Memoria de Labores 2001 - 2002</td>
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
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Memorias de Labores Aquí\">
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

    </section><!--/#blog-->", "/websicues/themes/sicues/pages/samples/memoria-labores.htm", "");
    }
}
