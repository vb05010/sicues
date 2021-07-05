<?php

/* /websicues/themes/kenshin-kenshinschool/pages/404.htm */
class __TwigTemplate_d8bc0f6f844fcd8942ca1210ceb3c31545aec06f0e5f0a3d279d4204dabacc0a extends Twig_Template
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
        echo "<!--************************************
\t\t\t\tInner Banner Start
\t\t*************************************-->
<div class=\"tg-innerbanner\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <ol class=\"tg-breadcrumb\">
                    <li><a href=\"\">home</a></li>
                    <li class=\"tg-active\">404</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--************************************
        Inner Banner End
*************************************-->
<!--************************************
        Main Start
*************************************-->
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"tg-404error\">
                <figure class=\"tg-errorimg\">
                    <img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/404-img.jpg");
        echo "\" alt=\"image description\">
                </figure>
                <div class=\"tg-errorcontent\">
                    <div class=\"col-sm-10 col-sm-offset-1\">
                        <h2>Ooops!</h2>
                        <h3>Did you hear the sound of<span>Broken Something?</span></h3>
                        <div class=\"tg-description\">
                            <p>Sorry, we can't find the page you are looking for. Please go to <a href=\"index-2.html\">Home</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/kenshin-kenshinschool/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 27,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--************************************
\t\t\t\tInner Banner Start
\t\t*************************************-->
<div class=\"tg-innerbanner\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <ol class=\"tg-breadcrumb\">
                    <li><a href=\"\">home</a></li>
                    <li class=\"tg-active\">404</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--************************************
        Inner Banner End
*************************************-->
<!--************************************
        Main Start
*************************************-->
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"tg-404error\">
                <figure class=\"tg-errorimg\">
                    <img src=\"{{'assets/images/404-img.jpg'|theme}}\" alt=\"image description\">
                </figure>
                <div class=\"tg-errorcontent\">
                    <div class=\"col-sm-10 col-sm-offset-1\">
                        <h2>Ooops!</h2>
                        <h3>Did you hear the sound of<span>Broken Something?</span></h3>
                        <div class=\"tg-description\">
                            <p>Sorry, we can't find the page you are looking for. Please go to <a href=\"index-2.html\">Home</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->", "/websicues/themes/kenshin-kenshinschool/pages/404.htm", "");
    }
}
