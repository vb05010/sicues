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

/* /websicues/themes/radiantweb-travu/partials/footer.htm */
class __TwigTemplate_0cec64a1b954c58e004f3d5b6ed38d14d2c0ab14008278ee95c8ae320cf93af7 extends \Twig\Template
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
        echo "<footer id=\"footer\">
        <div class=\"footer1\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 widget\">
                        <h3 class=\"widget-title\">Contact</h3>
                        <div class=\"widget-body\">
                            <p>+234 23 9873237<br>
                                <a href=\"mailto:#\">some.email@somewhere.com</a><br>
                                <br>
                                234 Hidden Pond Road, Ashland City, TN 37015
                            </p>    
                        </div>
                    </div>

                    <div class=\"col-md-3 widget\">
                        <h3 class=\"widget-title\">Follow me</h3>
                        <div class=\"widget-body\">
                            <p class=\"follow-me-icons\">
                                <a href=\"https://twitter.com/goradiantweb\"><i class=\"fa fa-twitter fa-2\"></i></a>
                                <a href=\"\"><i class=\"fa fa-dribbble fa-2\"></i></a>
                                <a href=\"\"><i class=\"fa fa-github fa-2\"></i></a>
                                <a href=\"https://www.facebook.com/radiantweb\"><i class=\"fa fa-facebook fa-2\"></i></a>
                            </p>    
                        </div>
                    </div>

                    <div class=\"col-md-6 widget\">
                        <h3 class=\"widget-title\">Text widget</h3>
                        <div class=\"widget-body\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
                            <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

        <div class=\"footer2\">
            <div class=\"container\">
                <div class=\"row\">
                    
                    <div class=\"col-md-6 widget\">
                        <div class=\"widget-body\">
                            <p class=\"simplenav\">
                                <a href=\"#\">Home</a> | 
                                <a href=\"about.html\">About</a> |
                                <a href=\"sidebar-right.html\">Sidebar</a> |
                                <a href=\"contact.html\">Contact</a> |
                                <b><a href=\"signup.html\">Download</a></b>
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 widget\">
                        <div class=\"widget-body\">
                            <p class=\"text-right\">
                                Copyright &copy; 2014, Your name. Designed by <a href=\"http://goradiantweb.com/\" rel=\"designer\">//:radiantweb</a> made with <a href=\"http://octobercms.com\">October CMS</a>
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>
    </footer>   
        




    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/headroom.min.js");
        echo "\"></script>
    <script src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jQuery.headroom.min.js");
        echo "\"></script>
    <script src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/template.js");
        echo "\"></script>
    ";
        // line 78
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 79
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 80
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/radiantweb-travu/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 80,  138 => 79,  123 => 78,  119 => 77,  115 => 76,  111 => 75,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"footer\">
        <div class=\"footer1\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 widget\">
                        <h3 class=\"widget-title\">Contact</h3>
                        <div class=\"widget-body\">
                            <p>+234 23 9873237<br>
                                <a href=\"mailto:#\">some.email@somewhere.com</a><br>
                                <br>
                                234 Hidden Pond Road, Ashland City, TN 37015
                            </p>    
                        </div>
                    </div>

                    <div class=\"col-md-3 widget\">
                        <h3 class=\"widget-title\">Follow me</h3>
                        <div class=\"widget-body\">
                            <p class=\"follow-me-icons\">
                                <a href=\"https://twitter.com/goradiantweb\"><i class=\"fa fa-twitter fa-2\"></i></a>
                                <a href=\"\"><i class=\"fa fa-dribbble fa-2\"></i></a>
                                <a href=\"\"><i class=\"fa fa-github fa-2\"></i></a>
                                <a href=\"https://www.facebook.com/radiantweb\"><i class=\"fa fa-facebook fa-2\"></i></a>
                            </p>    
                        </div>
                    </div>

                    <div class=\"col-md-6 widget\">
                        <h3 class=\"widget-title\">Text widget</h3>
                        <div class=\"widget-body\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
                            <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

        <div class=\"footer2\">
            <div class=\"container\">
                <div class=\"row\">
                    
                    <div class=\"col-md-6 widget\">
                        <div class=\"widget-body\">
                            <p class=\"simplenav\">
                                <a href=\"#\">Home</a> | 
                                <a href=\"about.html\">About</a> |
                                <a href=\"sidebar-right.html\">Sidebar</a> |
                                <a href=\"contact.html\">Contact</a> |
                                <b><a href=\"signup.html\">Download</a></b>
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-6 widget\">
                        <div class=\"widget-body\">
                            <p class=\"text-right\">
                                Copyright &copy; 2014, Your name. Designed by <a href=\"http://goradiantweb.com/\" rel=\"designer\">//:radiantweb</a> made with <a href=\"http://octobercms.com\">October CMS</a>
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>
    </footer>   
        




    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
    <script src=\"{{ 'assets/js/headroom.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jQuery.headroom.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/template.js'|theme }}\"></script>
    {% framework extras %}
    {% scripts %}
</body>
</html>", "/websicues/themes/radiantweb-travu/partials/footer.htm", "");
    }
}
