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

/* /websicues/themes/radiantweb-travu/layouts/home.htm */
class __TwigTemplate_b445db7bf10507dcc893adafffe92413a3e043e48e0ca90b163a35f55a88932b extends \Twig\Template
{
    private $source;

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
        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<!-- Header -->
    <header id=\"head\">
        <div class=\"container\">
            <div class=\"row\">
                <h1 class=\"lead\">AWESOME, CUSTOMIZABLE, FREE</h1>
                <p class=\"tagline\">simple bootstrap design for <a href=\"http://octobercms.com\">October CMS</a></p>
                <p><a class=\"btn btn-default btn-lg\" role=\"button\">MORE INFO</a> <a class=\"btn btn-action btn-lg\" role=\"button\">DOWNLOAD NOW</a></p>
            </div>
        </div>
    </header>
    <!-- /Header -->

    <!-- Intro -->
    <div class=\"container text-center\">
        ";
        // line 17
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("introtext"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 18
        echo "    </div>
    <!-- /Intro-->
        
    <!-- Highlights - jumbotron -->
    <div class=\"jumbotron top-space\">
        <div class=\"container\">
            
            <h3 class=\"text-center thin\">Reasons to use this template</h3>
            
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-cogs fa-5\"></i>Bootstrap-powered</h4></div>
                    <div class=\"h-body text-center\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-flash fa-5\"></i>Fat-free</h4></div>
                    <div class=\"h-body text-center\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-heart fa-5\"></i>Creative Commons</h4></div>
                    <div class=\"h-body text-center\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-smile-o fa-5\"></i>Author's support</h4></div>
                    <div class=\"h-body text-center\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
                    </div>
                </div>
            </div> <!-- /row  -->
        
        </div>
    </div>
    <!-- /Highlights -->

    <!-- container -->
    <div class=\"container\">
        ";
        // line 60
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 61
        echo "    </div>  <!-- /container -->
    
    <section class=\"container-full top-space\"></section>
";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/websicues/themes/radiantweb-travu/layouts/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 64,  106 => 61,  104 => 60,  60 => 18,  56 => 17,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}

<!-- Header -->
    <header id=\"head\">
        <div class=\"container\">
            <div class=\"row\">
                <h1 class=\"lead\">AWESOME, CUSTOMIZABLE, FREE</h1>
                <p class=\"tagline\">simple bootstrap design for <a href=\"http://octobercms.com\">October CMS</a></p>
                <p><a class=\"btn btn-default btn-lg\" role=\"button\">MORE INFO</a> <a class=\"btn btn-action btn-lg\" role=\"button\">DOWNLOAD NOW</a></p>
            </div>
        </div>
    </header>
    <!-- /Header -->

    <!-- Intro -->
    <div class=\"container text-center\">
        {% content 'introtext' %}
    </div>
    <!-- /Intro-->
        
    <!-- Highlights - jumbotron -->
    <div class=\"jumbotron top-space\">
        <div class=\"container\">
            
            <h3 class=\"text-center thin\">Reasons to use this template</h3>
            
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-cogs fa-5\"></i>Bootstrap-powered</h4></div>
                    <div class=\"h-body text-center\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-flash fa-5\"></i>Fat-free</h4></div>
                    <div class=\"h-body text-center\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-heart fa-5\"></i>Creative Commons</h4></div>
                    <div class=\"h-body text-center\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-smile-o fa-5\"></i>Author's support</h4></div>
                    <div class=\"h-body text-center\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
                    </div>
                </div>
            </div> <!-- /row  -->
        
        </div>
    </div>
    <!-- /Highlights -->

    <!-- container -->
    <div class=\"container\">
        {% page %}
    </div>  <!-- /container -->
    
    <section class=\"container-full top-space\"></section>
{% partial 'footer' %}", "/websicues/themes/radiantweb-travu/layouts/home.htm", "");
    }
}
