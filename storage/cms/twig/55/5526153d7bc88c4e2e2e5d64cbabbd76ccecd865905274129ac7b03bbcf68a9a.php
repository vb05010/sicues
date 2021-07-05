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

/* /websicues/themes/jtherczeg-grill/pages/samples/products.htm */
class __TwigTemplate_1cf37be5613cda3a5238e77f3c90e94998bd2d8385628853ac7efe7439c2dbd4 extends \Twig\Template
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
        echo "<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>Our Products</h2>
                    <span>Home / <a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/products");
        echo "\">Products</a></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"products-post\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"product-heading\">
                    <h2>Hungry ?</h2>
                    <img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
                </div>
\t\t\t</div>
        </div>
        <div class=\"row\">
            <div class=\"filters col-md-12 col-xs-12\">
                <ul id=\"filters\" class=\"clearfix\">
                    <li><span class=\"filter\" data-filter=\"all\">All</span></li>
                    <li><span class=\"filter\" data-filter=\".ginger\">Ginger</span></li>
                    <li><span class=\"filter\" data-filter=\".pizza\">Pizza</span></li>
                    <li><span class=\"filter\" data-filter=\".pasta\">Pasta</span></li>
                    <li><span class=\"filter\" data-filter=\".drink\">Drink</span></li>
                    <li><span class=\"filter\" data-filter=\".hamburger\">Hamburger</span></li>
                </ul>
            </div>
        </div>
        <div class=\"row\" id=\"Container\">
            <div class=\"col-md-3 col-sm-6 mix portfolio-item Pizza\">       
                <div class=\"portfolio-wrapper\">                
                    <div class=\"portfolio-thumb\">
                        <img src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product1.jpg");
        echo "\" alt=\"\">
                            <div class=\"hover\">
                                <div class=\"hover-iner\">
                                    <a class=\"fancybox\" href=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product1_big.jpg");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/open-icon.png");
        echo "\" alt=\"\"></a>
                                    <span>Pizza</span>
                                </div>
                    </div>
                </div>  
                <div class=\"label-text\">
                    <h3><a href=\"'samples/single-post'\">Vege Pizza</a></h3>
                    <span class=\"text-category\">\$16.00</span>
                </div>
            </div>          
        </div>
        <div class=\"col-md-3 col-sm-6 mix portfolio-item ginger\">       
            <div class=\"portfolio-wrapper\">                
                <div class=\"portfolio-thumb\">
                    <img src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product2.jpg");
        echo "\" alt=\"\">
                        <div class=\"hover\">
                            <div class=\"hover-iner\">
                                <a class=\"fancybox\" href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product2_big.jpg");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/open-icon.png");
        echo "\" alt=\"\"></a>
                                <span>Ginger</span>
                            </div>
                        </div>
                </div>  
                <div class=\"label-text\">
                    <h3><a href=\"'samples/single-post'\">Ginger Tea</a></h3>
                    <span class=\"text-category\">\$24.00</span>
                </div>
            </div>          
        </div>
        <div class=\"col-md-3 col-sm-6 mix portfolio-item pizza\">       
            <div class=\"portfolio-wrapper\">                
                <div class=\"portfolio-thumb\">
                    <img src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product3.jpg");
        echo "\" alt=\"\">
                        <div class=\"hover\">
                            <div class=\"hover-iner\">
                                <a class=\"fancybox\" href=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product3_big.jpg");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/open-icon.png");
        echo "\" alt=\"\"></a>
                                <span>Pizza</span>
                            </div>
                        </div>
                </div>  
                <div class=\"label-text\">
                    <h3><a href=\"'samples/single-post'\">Vege Green Salad</a></h3>
                    <span class=\"text-category\">\$12.00</span>
                </div>
            </div>          
        </div>
        <div class=\"col-md-3 col-sm-6 mix portfolio-item pasta\">       
            <div class=\"portfolio-wrapper\">                
                <div class=\"portfolio-thumb\">
                    <img src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product4.jpg");
        echo "\" alt=\"\">
                        <div class=\"hover\">
                            <div class=\"hover-iner\">
                                <a class=\"fancybox\" href=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product4_big.jpg");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/open-icon.png");
        echo "\" alt=\"\"></a>
                                <span>Pasta</span>
                            </div>
                        </div>
                </div>  
                <div class=\"label-text\">
                    <h3><a href=\"'samples/single-post'\">Herbal Hot Tea</a></h3>
                    <span class=\"text-category\">\$8.00</span>
                </div>
            </div>          
        </div>
        <div class=\"col-md-3 col-sm-6 mix portfolio-item drink\">       
            <div class=\"portfolio-wrapper\">                
                <div class=\"portfolio-thumb\">
                    <img src=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product5.jpg");
        echo "\" alt=\"\">
                        <div class=\"hover\">
                            <div class=\"hover-iner\">
                                <a class=\"fancybox\" href=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product5_big.jpg");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/open-icon.png");
        echo "\" alt=\"\"></a>
                            <span>Drink</span>
                        </div>
                </div>
            </div>  
            <div class=\"label-text\">
                <h3><a href=\"'samples/single-post'\">Fruit Salad</a></h3>
                <span class=\"text-category\">\$16.00</span>
            </div>
        </div>          
    </div>
    <div class=\"col-md-3 col-sm-6 mix portfolio-item hamburger\">       
        <div class=\"portfolio-wrapper\">                
            <div class=\"portfolio-thumb\">
                <img src=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product6.jpg");
        echo "\" alt=\"\">
                    <div class=\"hover\">
                        <div class=\"hover-iner\">
                            <a class=\"fancybox\" href=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product6_big.jpg");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/open-icon.png");
        echo "\" alt=\"\"></a>
                            <span>Hamburger</span>
                        </div>
                    </div>
            </div>  
            <div class=\"label-text\">
                <h3><a href=\"'samples/single-post'\">Big Hamburger</a></h3>
                <span class=\"text-category\">\$8.00</span>
            </div>
        </div>          
    </div>
    <div class=\"col-md-3 col-sm-6 mix portfolio-item pizza\">       
        <div class=\"portfolio-wrapper\">                
            <div class=\"portfolio-thumb\">
                <img src=\"";
        // line 142
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product7.jpg");
        echo "\" alt=\"\">
                    <div class=\"hover\">
                        <div class=\"hover-iner\">
                            <a class=\"fancybox\" href=\"";
        // line 145
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product7_big.jpg");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/open-icon.png");
        echo "\" alt=\"\"></a>
                            <span>Pizza</span>
                        </div>
                    </div>
            </div>  
            <div class=\"label-text\">
                <h3><a href=\"'samples/single-post'\">Chocolate Cake</a></h3>
                <span class=\"text-category\">\$14.00</span>
            </div>
         </div>          
    </div>
    <div class=\"col-md-3 col-sm-6 mix portfolio-item pasta\">       
        <div class=\"portfolio-wrapper\">                
            <div class=\"portfolio-thumb\">
                <img src=\"";
        // line 159
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product8.jpg");
        echo "\" alt=\"\">
                    <div class=\"hover\">
                        <div class=\"hover-iner\">
                            <a class=\"fancybox\" href=\"";
        // line 162
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product8_big.jpg");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/open-icon.png");
        echo "\" alt=\"\"></a>
                            <span>Pasta</span>
                        </div>
                    </div>
            </div>  
            <div class=\"label-text\">
                <h3><a href=\"'samples/single-post'\">Pizza Taste</a></h3>
                <span class=\"text-category\">\$15.00</span>
            </div>
        </div>          
    </div>
    <div class=\"col-md-3 col-sm-6 mix portfolio-item hamburger\">       
        <div class=\"portfolio-wrapper\">                
            <div class=\"portfolio-thumb\">
                <img src=\"";
        // line 176
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product3.jpg");
        echo "\" alt=\"\">
                    <div class=\"hover\">
                        <div class=\"hover-iner\">
                            <a class=\"fancybox\" href=\"";
        // line 179
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product3_big.jpg");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/open-icon.png");
        echo "\" alt=\"\"></a>
                            <span>Hamburger</span>
                        </div>
                    </div>
            </div>  
            <div class=\"label-text\">
                <h3><a href=\"'samples/single-post'\">Hot Meat Grilled</a></h3>
                <span class=\"text-category\">\$16.00</span>
            </div>
        </div>          
    </div>
    <div class=\"col-md-3 col-sm-6 mix portfolio-item drink\">       
        <div class=\"portfolio-wrapper\">                
\t\t\t\t<div class=\"portfolio-thumb\">
\t\t\t\t\t<img src=\"";
        // line 193
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product2.jpg");
        echo "\" alt=\"\">
                    <div class=\"hover\">
                        <div class=\"hover-iner\">
                            <a class=\"fancybox\" href=\"";
        // line 196
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product2_big.jpg");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/open-icon.png");
        echo "\" alt=\"\"></a>
                            <span>Drink</span>
                        </div>
                    </div>
\t\t\t\t</div>  
\t\t\t\t<div class=\"label-text\">
\t\t\t\t\t<h3><a href=\"'samples/single-post'\">New Ginger Taste</a></h3>
\t\t\t\t\t<span class=\"text-category\">\$18.00</span>
\t\t\t\t</div>
\t\t\t</div>          
\t\t</div>
\t\t<div class=\"col-md-3 col-sm-6 mix portfolio-item ginger\">       
\t\t\t<div class=\"portfolio-wrapper\">                
\t\t\t\t<div class=\"portfolio-thumb\">
\t\t\t\t\t<img src=\"";
        // line 210
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product1.jpg");
        echo "\" alt=\"\">
                    <div class=\"hover\">
                        <div class=\"hover-iner\">
                            <a class=\"fancybox\" href=\"";
        // line 213
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product1_big.jpg");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/open-icon.png");
        echo "\" alt=\"\"></a>
                            <span>Ginger</span>
                        </div>
                    </div>
\t\t\t\t</div>  
\t\t\t\t<div class=\"label-text\">
\t\t\t\t\t<h3><a href=\"'samples/single-post'\">Hot Coffee</a></h3>
\t\t\t\t\t<span class=\"text-category\">\$16.00</span>
\t\t\t\t</div>
\t\t\t</div>          
\t\t</div>
\t\t<div class=\"col-md-3 col-sm-6 mix portfolio-item pasta\">       
\t\t\t<div class=\"portfolio-wrapper\">                
\t\t\t\t<div class=\"portfolio-thumb\">
                <img src=\"";
        // line 227
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product6.jpg");
        echo "\" alt=\"\">
                    <div class=\"hover\">
                        <div class=\"hover-iner\">
                            <a class=\"fancybox\" href=\"";
        // line 230
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product6_big.jpg");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/open-icon.png");
        echo "\" alt=\"\"></a>
                            <span>Pasta</span>
                        </div>
                    </div>
\t\t\t\t</div>  
\t\t\t\t<div class=\"label-text\">
\t\t\t\t\t<h3><a href=\"'samples/single-post'\">SUMMER FRUIT SALADE</a></h3>
\t\t\t\t\t<span class=\"text-category\">\$16.00</span>
\t\t\t\t</div>
\t\t\t</div>          
\t\t</div>
\t</div>
\t\t<div class=\"pagination\">
\t\t\t<div class=\"row\">   
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">1</a></li>
\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t<li><a href=\"#\">>></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>     
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jtherczeg-grill/pages/samples/products.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 230,  357 => 227,  338 => 213,  332 => 210,  313 => 196,  307 => 193,  288 => 179,  282 => 176,  263 => 162,  257 => 159,  238 => 145,  232 => 142,  213 => 128,  207 => 125,  188 => 111,  182 => 108,  163 => 94,  157 => 91,  138 => 77,  132 => 74,  113 => 60,  107 => 57,  88 => 43,  82 => 40,  59 => 20,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>Our Products</h2>
                    <span>Home / <a href=\"{{ 'samples/products'|page }}\">Products</a></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"products-post\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"product-heading\">
                    <h2>Hungry ?</h2>
                    <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
                </div>
\t\t\t</div>
        </div>
        <div class=\"row\">
            <div class=\"filters col-md-12 col-xs-12\">
                <ul id=\"filters\" class=\"clearfix\">
                    <li><span class=\"filter\" data-filter=\"all\">All</span></li>
                    <li><span class=\"filter\" data-filter=\".ginger\">Ginger</span></li>
                    <li><span class=\"filter\" data-filter=\".pizza\">Pizza</span></li>
                    <li><span class=\"filter\" data-filter=\".pasta\">Pasta</span></li>
                    <li><span class=\"filter\" data-filter=\".drink\">Drink</span></li>
                    <li><span class=\"filter\" data-filter=\".hamburger\">Hamburger</span></li>
                </ul>
            </div>
        </div>
        <div class=\"row\" id=\"Container\">
            <div class=\"col-md-3 col-sm-6 mix portfolio-item Pizza\">       
                <div class=\"portfolio-wrapper\">                
                    <div class=\"portfolio-thumb\">
                        <img src=\"{{ 'assets/images/product1.jpg'|theme }}\" alt=\"\">
                            <div class=\"hover\">
                                <div class=\"hover-iner\">
                                    <a class=\"fancybox\" href=\"{{ 'assets/images/product1_big.jpg'|theme }}\"><img src=\"{{ 'assets/images/open-icon.png'|theme }}\" alt=\"\"></a>
                                    <span>Pizza</span>
                                </div>
                    </div>
                </div>  
                <div class=\"label-text\">
                    <h3><a href=\"'samples/single-post'\">Vege Pizza</a></h3>
                    <span class=\"text-category\">\$16.00</span>
                </div>
            </div>          
        </div>
        <div class=\"col-md-3 col-sm-6 mix portfolio-item ginger\">       
            <div class=\"portfolio-wrapper\">                
                <div class=\"portfolio-thumb\">
                    <img src=\"{{ 'assets/images/product2.jpg'|theme }}\" alt=\"\">
                        <div class=\"hover\">
                            <div class=\"hover-iner\">
                                <a class=\"fancybox\" href=\"{{ 'assets/images/product2_big.jpg'|theme }}\"><img src=\"{{ 'assets/images/open-icon.png'|theme }}\" alt=\"\"></a>
                                <span>Ginger</span>
                            </div>
                        </div>
                </div>  
                <div class=\"label-text\">
                    <h3><a href=\"'samples/single-post'\">Ginger Tea</a></h3>
                    <span class=\"text-category\">\$24.00</span>
                </div>
            </div>          
        </div>
        <div class=\"col-md-3 col-sm-6 mix portfolio-item pizza\">       
            <div class=\"portfolio-wrapper\">                
                <div class=\"portfolio-thumb\">
                    <img src=\"{{ 'assets/images/product3.jpg'|theme }}\" alt=\"\">
                        <div class=\"hover\">
                            <div class=\"hover-iner\">
                                <a class=\"fancybox\" href=\"{{ 'assets/images/product3_big.jpg'|theme }}\"><img src=\"{{ 'assets/images/open-icon.png'|theme }}\" alt=\"\"></a>
                                <span>Pizza</span>
                            </div>
                        </div>
                </div>  
                <div class=\"label-text\">
                    <h3><a href=\"'samples/single-post'\">Vege Green Salad</a></h3>
                    <span class=\"text-category\">\$12.00</span>
                </div>
            </div>          
        </div>
        <div class=\"col-md-3 col-sm-6 mix portfolio-item pasta\">       
            <div class=\"portfolio-wrapper\">                
                <div class=\"portfolio-thumb\">
                    <img src=\"{{ 'assets/images/product4.jpg'|theme }}\" alt=\"\">
                        <div class=\"hover\">
                            <div class=\"hover-iner\">
                                <a class=\"fancybox\" href=\"{{ 'assets/images/product4_big.jpg'|theme }}\"><img src=\"{{ 'assets/images/open-icon.png'|theme }}\" alt=\"\"></a>
                                <span>Pasta</span>
                            </div>
                        </div>
                </div>  
                <div class=\"label-text\">
                    <h3><a href=\"'samples/single-post'\">Herbal Hot Tea</a></h3>
                    <span class=\"text-category\">\$8.00</span>
                </div>
            </div>          
        </div>
        <div class=\"col-md-3 col-sm-6 mix portfolio-item drink\">       
            <div class=\"portfolio-wrapper\">                
                <div class=\"portfolio-thumb\">
                    <img src=\"{{ 'assets/images/product5.jpg'|theme }}\" alt=\"\">
                        <div class=\"hover\">
                            <div class=\"hover-iner\">
                                <a class=\"fancybox\" href=\"{{ 'assets/images/product5_big.jpg'|theme }}\"><img src=\"{{ 'assets/images/open-icon.png'|theme }}\" alt=\"\"></a>
                            <span>Drink</span>
                        </div>
                </div>
            </div>  
            <div class=\"label-text\">
                <h3><a href=\"'samples/single-post'\">Fruit Salad</a></h3>
                <span class=\"text-category\">\$16.00</span>
            </div>
        </div>          
    </div>
    <div class=\"col-md-3 col-sm-6 mix portfolio-item hamburger\">       
        <div class=\"portfolio-wrapper\">                
            <div class=\"portfolio-thumb\">
                <img src=\"{{ 'assets/images/product6.jpg'|theme }}\" alt=\"\">
                    <div class=\"hover\">
                        <div class=\"hover-iner\">
                            <a class=\"fancybox\" href=\"{{ 'assets/images/product6_big.jpg'|theme }}\"><img src=\"{{ 'assets/images/open-icon.png'|theme }}\" alt=\"\"></a>
                            <span>Hamburger</span>
                        </div>
                    </div>
            </div>  
            <div class=\"label-text\">
                <h3><a href=\"'samples/single-post'\">Big Hamburger</a></h3>
                <span class=\"text-category\">\$8.00</span>
            </div>
        </div>          
    </div>
    <div class=\"col-md-3 col-sm-6 mix portfolio-item pizza\">       
        <div class=\"portfolio-wrapper\">                
            <div class=\"portfolio-thumb\">
                <img src=\"{{ 'assets/images/product7.jpg'|theme }}\" alt=\"\">
                    <div class=\"hover\">
                        <div class=\"hover-iner\">
                            <a class=\"fancybox\" href=\"{{ 'assets/images/product7_big.jpg'|theme }}\"><img src=\"{{ 'assets/images/open-icon.png'|theme }}\" alt=\"\"></a>
                            <span>Pizza</span>
                        </div>
                    </div>
            </div>  
            <div class=\"label-text\">
                <h3><a href=\"'samples/single-post'\">Chocolate Cake</a></h3>
                <span class=\"text-category\">\$14.00</span>
            </div>
         </div>          
    </div>
    <div class=\"col-md-3 col-sm-6 mix portfolio-item pasta\">       
        <div class=\"portfolio-wrapper\">                
            <div class=\"portfolio-thumb\">
                <img src=\"{{ 'assets/images/product8.jpg'|theme }}\" alt=\"\">
                    <div class=\"hover\">
                        <div class=\"hover-iner\">
                            <a class=\"fancybox\" href=\"{{ 'assets/images/product8_big.jpg'|theme }}\"><img src=\"{{ 'assets/images/open-icon.png'|theme }}\" alt=\"\"></a>
                            <span>Pasta</span>
                        </div>
                    </div>
            </div>  
            <div class=\"label-text\">
                <h3><a href=\"'samples/single-post'\">Pizza Taste</a></h3>
                <span class=\"text-category\">\$15.00</span>
            </div>
        </div>          
    </div>
    <div class=\"col-md-3 col-sm-6 mix portfolio-item hamburger\">       
        <div class=\"portfolio-wrapper\">                
            <div class=\"portfolio-thumb\">
                <img src=\"{{ 'assets/images/product3.jpg'|theme }}\" alt=\"\">
                    <div class=\"hover\">
                        <div class=\"hover-iner\">
                            <a class=\"fancybox\" href=\"{{ 'assets/images/product3_big.jpg'|theme }}\"><img src=\"{{ 'assets/images/open-icon.png'|theme }}\" alt=\"\"></a>
                            <span>Hamburger</span>
                        </div>
                    </div>
            </div>  
            <div class=\"label-text\">
                <h3><a href=\"'samples/single-post'\">Hot Meat Grilled</a></h3>
                <span class=\"text-category\">\$16.00</span>
            </div>
        </div>          
    </div>
    <div class=\"col-md-3 col-sm-6 mix portfolio-item drink\">       
        <div class=\"portfolio-wrapper\">                
\t\t\t\t<div class=\"portfolio-thumb\">
\t\t\t\t\t<img src=\"{{ 'assets/images/product2.jpg'|theme }}\" alt=\"\">
                    <div class=\"hover\">
                        <div class=\"hover-iner\">
                            <a class=\"fancybox\" href=\"{{ 'assets/images/product2_big.jpg'|theme }}\"><img src=\"{{ 'assets/images/open-icon.png'|theme }}\" alt=\"\"></a>
                            <span>Drink</span>
                        </div>
                    </div>
\t\t\t\t</div>  
\t\t\t\t<div class=\"label-text\">
\t\t\t\t\t<h3><a href=\"'samples/single-post'\">New Ginger Taste</a></h3>
\t\t\t\t\t<span class=\"text-category\">\$18.00</span>
\t\t\t\t</div>
\t\t\t</div>          
\t\t</div>
\t\t<div class=\"col-md-3 col-sm-6 mix portfolio-item ginger\">       
\t\t\t<div class=\"portfolio-wrapper\">                
\t\t\t\t<div class=\"portfolio-thumb\">
\t\t\t\t\t<img src=\"{{ 'assets/images/product1.jpg'|theme }}\" alt=\"\">
                    <div class=\"hover\">
                        <div class=\"hover-iner\">
                            <a class=\"fancybox\" href=\"{{ 'assets/images/product1_big.jpg'|theme }}\"><img src=\"{{ 'assets/images/open-icon.png'|theme }}\" alt=\"\"></a>
                            <span>Ginger</span>
                        </div>
                    </div>
\t\t\t\t</div>  
\t\t\t\t<div class=\"label-text\">
\t\t\t\t\t<h3><a href=\"'samples/single-post'\">Hot Coffee</a></h3>
\t\t\t\t\t<span class=\"text-category\">\$16.00</span>
\t\t\t\t</div>
\t\t\t</div>          
\t\t</div>
\t\t<div class=\"col-md-3 col-sm-6 mix portfolio-item pasta\">       
\t\t\t<div class=\"portfolio-wrapper\">                
\t\t\t\t<div class=\"portfolio-thumb\">
                <img src=\"{{ 'assets/images/product6.jpg'|theme }}\" alt=\"\">
                    <div class=\"hover\">
                        <div class=\"hover-iner\">
                            <a class=\"fancybox\" href=\"{{ 'assets/images/product6_big.jpg'|theme }}\"><img src=\"{{ 'assets/images/open-icon.png'|theme }}\" alt=\"\"></a>
                            <span>Pasta</span>
                        </div>
                    </div>
\t\t\t\t</div>  
\t\t\t\t<div class=\"label-text\">
\t\t\t\t\t<h3><a href=\"'samples/single-post'\">SUMMER FRUIT SALADE</a></h3>
\t\t\t\t\t<span class=\"text-category\">\$16.00</span>
\t\t\t\t</div>
\t\t\t</div>          
\t\t</div>
\t</div>
\t\t<div class=\"pagination\">
\t\t\t<div class=\"row\">   
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">1</a></li>
\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t<li><a href=\"#\">>></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>     
    </div>
</div>", "/websicues/themes/jtherczeg-grill/pages/samples/products.htm", "");
    }
}
