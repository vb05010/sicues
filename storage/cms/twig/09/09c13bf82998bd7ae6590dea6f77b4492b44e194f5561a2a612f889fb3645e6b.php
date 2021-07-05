<?php

/* /websicues/themes/sicues/partials/menu-social.htm */
class __TwigTemplate_a8df00788ec31c164556cfc1b3ed9c11720340cedcc6d40fb62c1842fcb21a14 extends Twig_Template
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
        echo "<div class=\"sticky-container\">
    <ul class=\"sticky\">
        <li>
            <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social-icons/facebook_circle.png");
        echo "\" width=\"32\" height=\"32\">
            <p><a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\">Siguenos en<br>Facebook</a></p>
        </li>
        <li>
            <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social-icons/youtube_circle.png");
        echo "\" width=\"32\" height=\"32\">
            <p><a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\">Suscribete en<br>Youtube</a></p>
        </li>
        <li>
            <a href=\"https://sipc.sic.ues.edu.sv\" target=\"blank\"><img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social-icons/sipc_circle.png");
        echo "\" width=\"32\" height=\"32\"></a>
            <p><a href=\"https://sipc.sic.ues.edu.sv\" target=\"_blank\">Sistema<br>SIPC</a></p>
        </li>
        <!-- <li>
            <img src=\"images/gplus-circle.png\" width=\"32\" height=\"32\">
            <p><a href=\"https://plus.google.com/programacionnet\" target=\"_blank\">Follow Us on<br>Google+</a></p>
        </li> -->
        <!-- <li>
            <img src=\"images/linkedin-circle.png\" width=\"32\" height=\"32\">
            <p><a href=\"https://www.linkedin.com/company/programacionnet\" target=\"_blank\">Follow Us on<br>LinkedIn</a></p>
        </li> -->
        
        <!-- <li>
            <img src=\"images/pin-circle.png\" width=\"32\" height=\"32\">
            <p><a href=\"https://www.pinterest.com/programacionnet\" target=\"_blank\">Follow Us on<br>Pinterest</a></p>
        </li> -->
    </ul>
</div>

<style>
\t.sticky-container{
    padding:0px;
    margin:0px;
    position:fixed;
    right:-130px;
    top:230px;
    width:210px;
    z-index: 1100;
}
.sticky li{
    list-style-type:none;
    background-color:#fff;
    color:#efefef;
    height:43px;
    padding:0px;
    margin:0px 0px 1px 0px;
    -webkit-transition:all 0.25s ease-in-out;
    -moz-transition:all 0.25s ease-in-out;
    -o-transition:all 0.25s ease-in-out;
    transition:all 0.25s ease-in-out;
    cursor:pointer;
}
.sticky li:hover{
    margin-left:-115px;
    background: #000;
}
.sticky li img{
    float:left;
    margin:5px 4px;
    margin-right:5px;
}
.sticky li p{
    padding-top:5px;
    margin:0px;
    line-height:16px;
    font-size:11px;
}
.sticky li p a{
    text-decoration:none;
    color:#fff;
}
.sticky li p a:hover{
    text-decoration:underline;
</style>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/menu-social.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  35 => 8,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sticky-container\">
    <ul class=\"sticky\">
        <li>
            <img src=\"{{'assets/images/social-icons/facebook_circle.png'|theme}}\" width=\"32\" height=\"32\">
            <p><a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\">Siguenos en<br>Facebook</a></p>
        </li>
        <li>
            <img src=\"{{ 'assets/images/social-icons/youtube_circle.png'|theme }}\" width=\"32\" height=\"32\">
            <p><a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\">Suscribete en<br>Youtube</a></p>
        </li>
        <li>
            <a href=\"https://sipc.sic.ues.edu.sv\" target=\"blank\"><img src=\"{{ 'assets/images/social-icons/sipc_circle.png'|theme }}\" width=\"32\" height=\"32\"></a>
            <p><a href=\"https://sipc.sic.ues.edu.sv\" target=\"_blank\">Sistema<br>SIPC</a></p>
        </li>
        <!-- <li>
            <img src=\"images/gplus-circle.png\" width=\"32\" height=\"32\">
            <p><a href=\"https://plus.google.com/programacionnet\" target=\"_blank\">Follow Us on<br>Google+</a></p>
        </li> -->
        <!-- <li>
            <img src=\"images/linkedin-circle.png\" width=\"32\" height=\"32\">
            <p><a href=\"https://www.linkedin.com/company/programacionnet\" target=\"_blank\">Follow Us on<br>LinkedIn</a></p>
        </li> -->
        
        <!-- <li>
            <img src=\"images/pin-circle.png\" width=\"32\" height=\"32\">
            <p><a href=\"https://www.pinterest.com/programacionnet\" target=\"_blank\">Follow Us on<br>Pinterest</a></p>
        </li> -->
    </ul>
</div>

<style>
\t.sticky-container{
    padding:0px;
    margin:0px;
    position:fixed;
    right:-130px;
    top:230px;
    width:210px;
    z-index: 1100;
}
.sticky li{
    list-style-type:none;
    background-color:#fff;
    color:#efefef;
    height:43px;
    padding:0px;
    margin:0px 0px 1px 0px;
    -webkit-transition:all 0.25s ease-in-out;
    -moz-transition:all 0.25s ease-in-out;
    -o-transition:all 0.25s ease-in-out;
    transition:all 0.25s ease-in-out;
    cursor:pointer;
}
.sticky li:hover{
    margin-left:-115px;
    background: #000;
}
.sticky li img{
    float:left;
    margin:5px 4px;
    margin-right:5px;
}
.sticky li p{
    padding-top:5px;
    margin:0px;
    line-height:16px;
    font-size:11px;
}
.sticky li p a{
    text-decoration:none;
    color:#fff;
}
.sticky li p a:hover{
    text-decoration:underline;
</style>", "/websicues/themes/sicues/partials/menu-social.htm", "");
    }
}
