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

/* /websicues/themes/sicues/pages/samples/reconocimientos-investigadores2004.htm */
class __TwigTemplate_decb6ada1a0502359e3ee86dd3133843b1c24312b575fe2864f2438f6e0ef128 extends \Twig\Template
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
        echo "<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2>Reconocimiento a investigadores (as) 2004</h2>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                             <div class=\"col-md-8\">
                             \t<div class=\"well\">
      <div class=\"media\">
      \t<a class=\"pull-left\" href=\"#\">
    \t\t<img class=\"media-object\" src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/julio.png");
        echo "\" class=\"img-circle\" alt=\"\">
  \t\t\t</a>
  \t\t<div class=\"media-body\">
    \t\t<h4 class=\"media-heading\">Julio Grande</h4>
          <p class=\"text-right\">Facultad de Humanidades</p>
          <p>Artículo más destacado “La propiedad intelectual y su importancia en el contexto académico”. Semana Nacional de la Inventiva. </p>
          <ul class=\"list-inline list-unstyled\">
  \t\t\t<li><span><i class=\"glyphicon glyphicon-calendar\"></i> Octubre 2004 </span></li>
            <li>|</li>
            <span><i class=\"glyphicon glyphicon-map-marker\"></i> San Salvador, El Salvador.</span>
            <li>|</li>
            <li>
               <span class=\"glyphicon glyphicon-star\"></span>
                        <span class=\"glyphicon glyphicon-star\"></span>
                        <span class=\"glyphicon glyphicon-star\"></span>
                        <span class=\"glyphicon glyphicon-star\"></span>
                        <span class=\"glyphicon glyphicon-star-empty\"></span>
            </li>
            <li>|</li>
            <li>
            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
              <span><i class=\"fa fa-facebook-square\"></i></span>
              <span><i class=\"fa fa-twitter-square\"></i></span>
              <span><i class=\"fa fa-google-plus-square\"></i></span>
            </li>
\t\t\t</ul>
       </div>
    </div>
  </div>                  
                             \t
                     </div><!--/.col-md-8-->

                <aside class=\"col-md-4\">
                   
    \t\t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                       ";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("produccioncientifica-menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "                       ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("producion-cientifica"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "                    </div><!--/.producción científica-->
    \t\t\t\t<!--/.Seminarios científicos-->
    \t\t\t\t\t    \t\t\t\t\t
    \t\t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/samples/reconocimientos-investigadores2004.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 50,  95 => 49,  91 => 48,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2>Reconocimiento a investigadores (as) 2004</h2>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                             <div class=\"col-md-8\">
                             \t<div class=\"well\">
      <div class=\"media\">
      \t<a class=\"pull-left\" href=\"#\">
    \t\t<img class=\"media-object\" src=\"{{ 'assets/images/blog/julio.png'|theme }}\" class=\"img-circle\" alt=\"\">
  \t\t\t</a>
  \t\t<div class=\"media-body\">
    \t\t<h4 class=\"media-heading\">Julio Grande</h4>
          <p class=\"text-right\">Facultad de Humanidades</p>
          <p>Artículo más destacado “La propiedad intelectual y su importancia en el contexto académico”. Semana Nacional de la Inventiva. </p>
          <ul class=\"list-inline list-unstyled\">
  \t\t\t<li><span><i class=\"glyphicon glyphicon-calendar\"></i> Octubre 2004 </span></li>
            <li>|</li>
            <span><i class=\"glyphicon glyphicon-map-marker\"></i> San Salvador, El Salvador.</span>
            <li>|</li>
            <li>
               <span class=\"glyphicon glyphicon-star\"></span>
                        <span class=\"glyphicon glyphicon-star\"></span>
                        <span class=\"glyphicon glyphicon-star\"></span>
                        <span class=\"glyphicon glyphicon-star\"></span>
                        <span class=\"glyphicon glyphicon-star-empty\"></span>
            </li>
            <li>|</li>
            <li>
            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
              <span><i class=\"fa fa-facebook-square\"></i></span>
              <span><i class=\"fa fa-twitter-square\"></i></span>
              <span><i class=\"fa fa-google-plus-square\"></i></span>
            </li>
\t\t\t</ul>
       </div>
    </div>
  </div>                  
                             \t
                     </div><!--/.col-md-8-->

                <aside class=\"col-md-4\">
                   
    \t\t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                       {% partial 'produccioncientifica-menu' %}
                       {% partial 'producion-cientifica' %}
                    </div><!--/.producción científica-->
    \t\t\t\t<!--/.Seminarios científicos-->
    \t\t\t\t\t    \t\t\t\t\t
    \t\t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->", "/websicues/themes/sicues/pages/samples/reconocimientos-investigadores2004.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 48);
        static $filters = array("theme" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['theme'],
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
