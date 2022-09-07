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

/* /websicues/themes/vojtasvoboda-vega/pages/samples/eshop.htm */
class __TwigTemplate_974ca6c7a4755792db714ce209ac6f51c59f4b62eb9eb827414ebf2389e5a34d extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 2
        echo "<link rel='stylesheet' href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/woocommerce/woocommerce-layout.css");
        echo "\" type=\"text/css\" media=\"all\" />
<link rel='stylesheet' href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/woocommerce/woocommerce-smallscreen.css");
        echo "\" type=\"text/css\" media=\"only screen and (max-width: 768px)\" />
<link rel='stylesheet' href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/woocommerce/woocommerce.css");
        echo "\" type=\"text/css\" media=\"all\" />
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('bodyclass'        );
        // line 8
        echo "woocommerce
";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 10
        echo "
<div class=\"jumbotron image-banner banner-custom-header\" style=\"background:url('";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/cropped-country-road-1149667_1920.jpg");
        echo "') no-repeat 0 0 #ffffff;background-size:cover;background-position:center center\">
    <div class=\"container\">
        <h1 class=\"block-title wow zoomIn\">Shop</h1>
    </div>
</div>

<div class=\"section page-content bg-white\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"page-woocommerce\" class=\"clearfix product type-product status-publish has-post-thumbnail product_cat-posters first instock sale shipping-taxable purchasable product-type-simple\">

                    <h1 class=\"page-title\"></h1>

                    <p class=\"woocommerce-result-count\">
                        Showing 1&ndash;10 of 23 results
                    </p>

                    <form class=\"woocommerce-ordering\" method=\"get\">
                        <select name=\"orderby\" class=\"orderby\">
                            <option value=\"menu_order\"  selected='selected'>Default sorting</option>
                            <option value=\"popularity\" >Sort by popularity</option>
                            <option value=\"rating\" >Sort by average rating</option>
                            <option value=\"date\" >Sort by newness</option>
                            <option value=\"price\" >Sort by price: low to high</option>
                            <option value=\"price-desc\" >Sort by price: high to low</option>
                        </select>
                    </form>

                    <ul class=\"products\">

                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 16));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 43
            echo "                        <li class=\"";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 43) % 4) == 0)) {
                echo "last ";
            }
            echo "product type-product status-publish has-post-thumbnail product_cat-clothing product_cat-t-shirts instock shipping-taxable purchasable product-type-simple\">
                            <a href=\"#\" class=\"woocommerce-LoopProduct-link\">
                                <img width=\"300\" height=\"300\" src=\"";
            // line 45
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/poster_2_up-300x300.jpg");
            echo "\" />
                                <h3>Happy Ninja</h3>
                                <span class=\"price\"><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">&pound;</span>18.00</span></span>
                            </a><a rel=\"nofollow\" href=\"#\" class=\"button product_type_simple add_to_cart_button ajax_add_to_cart\">Add to cart</a>
                        </li>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
                    </ul>

                    <nav class=\"woocommerce-pagination\">
                        <ul class='page-numbers'>
                            <li><span class='page-numbers current'>1</span></li>
                            <li><a class='page-numbers' href='#'>2</a></li>
                            <li><a class='page-numbers' href='#'>3</a></li>
                            <li><a class=\"next page-numbers\" href=\"#\">&rarr;</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/pages/samples/eshop.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 51,  128 => 45,  120 => 43,  103 => 42,  69 => 11,  66 => 10,  64 => 7,  61 => 8,  59 => 7,  56 => 6,  54 => 1,  50 => 4,  46 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/pages/samples/eshop.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("put" => 1, "for" => 42, "if" => 43);
        static $filters = array("theme" => 2);
        static $functions = array("range" => 42);

        try {
            $this->sandbox->checkSecurity(
                ['put', 'for', 'if'],
                ['theme'],
                ['range']
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
