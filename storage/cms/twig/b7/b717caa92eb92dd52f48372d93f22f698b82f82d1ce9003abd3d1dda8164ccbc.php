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

/* /websicues/themes/sicues/partials/portadaweb.htm */
class __TwigTemplate_b1691131e1a1e64e7483c9714ea8773a52bc3cc0202f827c475a01f9ac75b0ac extends \Twig\Template
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
        echo "<div id=\"margin\" class=\"container \">
    <div class=\"row\">
            <div class=\"col-lg-8 col-md-12\">
        <h2 class=\"titulo\">Bienvenidos a la Secretaría de Investigación</h2>
        <div class=\"\">
                <div class=\"col-lg-6 card\">
            <div class=\"card\"> <img class=\"img-fluid\" src=\"http://grafreez.com/wp-content/temp_demos/river/img/war.jpg\" alt=\"\">
                    <div class=\"card-body\">
                <div class=\"news-title\"><a href=\"https://sic.ues.edu.sv/post/eventos\">
                  <h2 class=\" title-small\">Minorities Suffer From Unequal Pain Treatment</h2>
                  </a></div>
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class=\"card-text\"><small class=\"text-time\"><em>3 mins ago</em></small></p>
              </div>
                  </div>
          </div>
                <div class=\"col-lg-6 card\">
            <div class=\"card\"> <img class=\"img-fluid\" src=\"http://grafreez.com/wp-content/temp_demos/river/img/politics.jpg\" alt=\"\">
                    <div class=\"card-body\">
                <div class=\"news-title\"><a href=\"https://sic.ues.edu.sv/post/noticias\">
                  <h2 class=\" title-small\">Minorities Suffer From Unequal Pain Treatment</h2>
                  </a></div>
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class=\"card-text\"><small class=\"text-time\"><em>3 mins ago</em></small></p>
              </div>
                  </div>
          </div>
                <div class=\"col-lg-6 card\">
            <div class=\"card\"> <img class=\"img-fluid\" src=\"http://grafreez.com/wp-content/temp_demos/river/img/movie.jpg\" alt=\"\">
                    <div class=\"card-body\">
                <div class=\"news-title\"><a href=\"#\">
                  <h2 class=\" title-small\">Minorities Suffer From Unequal Pain Treatment</h2>
                  </a></div>
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class=\"card-text\"><small class=\"text-time\"><em>3 mins ago</em></small></p>
              </div>
                  </div>
          </div>
                <div class=\"col-lg-6 card\">
            <div class=\"card\"> <img class=\"img-fluid\" src=\"http://grafreez.com/wp-content/temp_demos/river/img/travel1.jpg\" alt=\"\">
                    <div class=\"card-body\">
                <div class=\"news-title\"><a href=\"#\">
                  <h2 class=\" title-small\">Minorities Suffer From Unequal Pain Treatment</h2>
                  </a></div>
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class=\"card-text\"><small class=\"text-time\"><em>3 mins ago</em></small></p>
              </div>
                  </div>
          </div>
              </div>
      </div>
            <aside class=\"col-lg-4 side-bar col-md-12\">
        <ul class=\"nav nav-tabs\" role=\"tablist\" id=\"myTab\">
                <li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#sic-ues\" role=\"tab\">SIC-UES</a> </li>
                <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#plataformas\" role=\"tab\">PLATAFORMAS</a> </li>
                <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#repositorios\" role=\"tab\">REPOSITORIOS</a> </li>
              </ul>
        
        <!-- Tab panes -->
        <div class=\"tab-content sidebar-tabing\" id=\"nav-tabContent\">
                <div class=\"tab-pane active\" id=\"sic-ues\" role=\"tabpanel\">
                    <div class=\"media\"> <a href=\"#\"> <img class=\"d-flex mr-3\" src=\"https://sic.ues.edu.sv/themes/sicues/assets/images/equipo-sic.png\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                        <div class=\"news-title\">
                            <h2 class=\"title-small\"><a href=\"#\">Equipo de trabajo de la Secretaría de Investigaciones Científicas</a></h2>
                        </div>
                        <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
                    </div>
                  </div>
            <div class=\"media\"> <a href=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/calendario");
        echo "\"> <img class=\"d-flex mr-3\" src=\"https://sic.ues.edu.sv/themes/sicues/assets/images/calendario.png\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                <div class=\"news-title\">
                        <h2 class=\"title-small\"><a href=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/calendario");
        echo "\">Consultar calendario de actividades</a></h2>
                      </div>
                <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
              </div>
                  </div>
            <div class=\"media\"> <a href=\"https://sic.ues.edu.sv/noticias/:slug\"> <img class=\"d-flex mr-3\" src=\"https://sic.ues.edu.sv/themes/sicues/assets/images/noticiaseventos.png\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                <div class=\"news-title\">
                        <h2 class=\"title-small\"><a href=\"https://sic.ues.edu.sv/noticias/:slug\">Todas las noticias y eventos de la secretaría</a></h2>
                      </div>
                <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
              </div>
                  </div>
          </div>
                <div class=\"tab-pane\" id=\"plataformas\" role=\"tabpanel\">
            <div class=\"media\"> <a href=\"http://www.minerva.sic.ues.edu.sv\" target=\"_blank\"> <img class=\"d-flex mr-3\" src=\"http://minerva.sic.ues.edu.sv/themes/revista-minerva/assets/images/slider/portada-minerva.jpg\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                <div class=\"news-title\">
                        <h2 class=\"title-small\"><a href=\"http://www.minerva.sic.ues.edu.sv\" target=\"_blank\">Revista Minerva</a></h2>
                      </div>
                <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
              </div>
                  </div>
            <div class=\"media\"> <a href=\"http://www.vinculacion.sic.ues.edu.sv\" target=\"_blank\"> <img class=\"d-flex mr-3\" src=\"https://sic.ues.edu.sv/themes/sicues/assets/images/logo-otrive.png\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                <div class=\"news-title\">
                        <h2 class=\"title-small\"><a href=\"http://www.vinculacion.sic.ues.edu.sv\" target=\"_blank\">Oficina de Transferencia de Resultados de Investigación y Vinculación Externa.</a></h2>
                      </div>
                <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
              </div>
                  </div>
            <div class=\"media\"> <a href=\"https://sipc.sic.ues.edu.sv\" target=\"_blank\"> <img class=\"d-flex mr-3\" src=\"https://sipc.sic.ues.edu.sv/img/fondo.min.jpg\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                <div class=\"news-title\">
                        <h2 class=\"title-small\"><a href=\"https://sipc.sic.ues.edu.sv\" target=\"_blank\">Sistema de Información de la Producción Científica de la UES</a></h2>
                      </div>
                <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
              </div>
                  </div>
          </div>
                <div class=\"tab-pane\" id=\"repositorios\" role=\"tabpanel\">
            <div class=\"media\"> <a href=\"http://ri.ues.edu.sv\" target=\"_blank\"> <img class=\"d-flex mr-3\" src=\"http://ri.ues.edu.sv/style/images/repo_.png\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                <div class=\"news-title\">
                        <h2 class=\"title-small\"><a href=\"http://ri.ues.edu.sv\" target=\"_blank\">Repositorio institucional de la Universidad de El Salvador</a></h2>
                      </div>
                <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
              </div>
                  </div>
            <div class=\"media\"> <a href=\"http://revistas.ues.edu.sv\" target=\"blank\"> <img class=\"d-flex mr-3\" src=\"https://botw-pd.s3.amazonaws.com/styles/logo-thumbnail/s3/102015/ues.png?itok=Y8qnl3dz\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                <div class=\"news-title\">
                        <h2 class=\"title-small\"><a href=\"http://revistas.ues.edu.sv\" target=\"blank\">Portal de revistas de la Universidad de El Salvador</a></h2>
                      </div>
                <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
              </div>
                  </div>
            <div class=\"media\"> <a href=\"http://biblioteca.ues.edu.sv/portal/\" target=\"blank\"> <img class=\"d-flex mr-3\" src=\"http://www.ues.edu.sv/consejobecas/images/morfeoshow/estudiantes_-9901/big/BIBLIOTECAUES.JPG\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                <div class=\"news-title\">
                        <h2 class=\"title-small\"><a href=\"http://biblioteca.ues.edu.sv/portal/\" target=\"_blank\">Biblioteca de la Universidad de El Salvador</a></h2>
                      </div>
                <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
              </div>
                  </div>
          </div>
              </div>
        <div class=\"video-sec\">
                <h4 class=\"heading-small\">La investigación científica</h4>
                <div class=\"video-block\">
            <div class=\"embed-container\">
                    <iframe width=\"300\" height=\"410\" src=\"https://www.youtube.com/embed/videoseries?list=PL09RA5tZK7yoV2oGyUIdI7olM3R37cfuk\" frameborder=\"0\" allowfullscreen></iframe>
                  </div>
          </div>
              </div>
      </aside>
          </div>
  </div>
  
  <style>
  #margin {
  \tMargin-top:6px;
  }
  .titulo {
    border-bottom: 2px solid #222;
    color: #222;
    float: left;
    width: 100%;
    padding: 0 0 6px;
    margin: 0 0 18px;
    text-align: left;
  }
  
  .img-fluid {
    max-width: 100%;
    height: auto;
  }
  
  .card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
  }
  .media-body{
  flex: 1;
  }
  .news-title {
  box-sizing: border-box;
  }
  .title-small {
    /*color: #141517;*/
    font-size: 16px;
    font-weight: 400;
    line-height: 23px;
    margin: 6px 0 0;
    margin-top: 6px;
    margin-bottom: 0px;
  }
  
  .side-bar .nav-tabs{border-bottom:none;}
  .side-bar .nav-tabs .nav-link {
  \tcolor: #aeaeae; 
  \ttext-transform: uppercase; 
  \tborder: none;
  \tdisplay: block;
  \t
  }
  
  .mr-3, .mx-3 {
    margin-right: 1rem !important;
  }
  
  .media {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
  }
  .media-title{
  \tbox-sizing: border-box;
  }
  .side-bar .nav-tabs .nav-link.active, .side-bar .nav-tabs .nav-link:hover{border-bottom:2px solid #ff0000;  text-transform: uppercase; }
  .sidebar-tabing .media{margin-top: 20px}
  .sidebar-tabing img{width: 120px;height: 100px;}
  
  
  
  .section-01{float: left; width: 100%;  border-top: 1px solid #d5d5d5; border-bottom: 1px solid #d5d5d5}
  .section-01 .title-small {margin-bottom: 5px; font-size:17px }
  .section-01 .news-block{border-bottom: 1px dashed #000; padding-bottom: 30px; border: none;}
  .section-01 aside > .news-block{border-bottom: 1px dashed #000; padding-bottom: 19px;}
  .section-01 aside > .news-block:last-child{border-bottom: none; margin-bottom: 20px}
  .section-01 .card{border: none;}
  .section-01 .card-block{padding: 10px 0;}
  .video-sec {float: left; margin-top: 30px; width: 100%;}
  .video-block {float: left; margin-top: 20px; width: 100%;}
  
  .action-sec{width:100%; float:left; background:#222}
  .action-box{float:left; width:100%; text-align:center;}
  .action-box h2{color:#fff; font-size:20px;}
  
  .heading-small {
    border-bottom: 2px solid #222;
    color: #222;
    float: left;
    margin: 7px 0 0;
    width: 100%;
    padding-bottom: 10px;
    font-size: 18px;
  }
  
  
  </style>

  ";
        // line 247
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 248
        echo "  <script>
  \t\$('#myTab a').click(function (e) {
  e.preventDefault()
  \$(this).tab('show')
})


\$(window).load(function() {
    var boxheight = \$('#myCarousel .carousel-inner').innerHeight();
    var itemlength = \$('#myCarousel .item').length;
    var triggerheight = Math.round(boxheight/itemlength+1);
    \$('#myCarousel .list-group-item').outerHeight(triggerheight);
});


  </script>
  ";
        // line 247
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/portadaweb.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 247,  293 => 248,  291 => 247,  114 => 73,  108 => 70,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"margin\" class=\"container \">
    <div class=\"row\">
            <div class=\"col-lg-8 col-md-12\">
        <h2 class=\"titulo\">Bienvenidos a la Secretaría de Investigación</h2>
        <div class=\"\">
                <div class=\"col-lg-6 card\">
            <div class=\"card\"> <img class=\"img-fluid\" src=\"http://grafreez.com/wp-content/temp_demos/river/img/war.jpg\" alt=\"\">
                    <div class=\"card-body\">
                <div class=\"news-title\"><a href=\"https://sic.ues.edu.sv/post/eventos\">
                  <h2 class=\" title-small\">Minorities Suffer From Unequal Pain Treatment</h2>
                  </a></div>
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class=\"card-text\"><small class=\"text-time\"><em>3 mins ago</em></small></p>
              </div>
                  </div>
          </div>
                <div class=\"col-lg-6 card\">
            <div class=\"card\"> <img class=\"img-fluid\" src=\"http://grafreez.com/wp-content/temp_demos/river/img/politics.jpg\" alt=\"\">
                    <div class=\"card-body\">
                <div class=\"news-title\"><a href=\"https://sic.ues.edu.sv/post/noticias\">
                  <h2 class=\" title-small\">Minorities Suffer From Unequal Pain Treatment</h2>
                  </a></div>
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class=\"card-text\"><small class=\"text-time\"><em>3 mins ago</em></small></p>
              </div>
                  </div>
          </div>
                <div class=\"col-lg-6 card\">
            <div class=\"card\"> <img class=\"img-fluid\" src=\"http://grafreez.com/wp-content/temp_demos/river/img/movie.jpg\" alt=\"\">
                    <div class=\"card-body\">
                <div class=\"news-title\"><a href=\"#\">
                  <h2 class=\" title-small\">Minorities Suffer From Unequal Pain Treatment</h2>
                  </a></div>
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class=\"card-text\"><small class=\"text-time\"><em>3 mins ago</em></small></p>
              </div>
                  </div>
          </div>
                <div class=\"col-lg-6 card\">
            <div class=\"card\"> <img class=\"img-fluid\" src=\"http://grafreez.com/wp-content/temp_demos/river/img/travel1.jpg\" alt=\"\">
                    <div class=\"card-body\">
                <div class=\"news-title\"><a href=\"#\">
                  <h2 class=\" title-small\">Minorities Suffer From Unequal Pain Treatment</h2>
                  </a></div>
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class=\"card-text\"><small class=\"text-time\"><em>3 mins ago</em></small></p>
              </div>
                  </div>
          </div>
              </div>
      </div>
            <aside class=\"col-lg-4 side-bar col-md-12\">
        <ul class=\"nav nav-tabs\" role=\"tablist\" id=\"myTab\">
                <li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#sic-ues\" role=\"tab\">SIC-UES</a> </li>
                <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#plataformas\" role=\"tab\">PLATAFORMAS</a> </li>
                <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#repositorios\" role=\"tab\">REPOSITORIOS</a> </li>
              </ul>
        
        <!-- Tab panes -->
        <div class=\"tab-content sidebar-tabing\" id=\"nav-tabContent\">
                <div class=\"tab-pane active\" id=\"sic-ues\" role=\"tabpanel\">
                    <div class=\"media\"> <a href=\"#\"> <img class=\"d-flex mr-3\" src=\"https://sic.ues.edu.sv/themes/sicues/assets/images/equipo-sic.png\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                        <div class=\"news-title\">
                            <h2 class=\"title-small\"><a href=\"#\">Equipo de trabajo de la Secretaría de Investigaciones Científicas</a></h2>
                        </div>
                        <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
                    </div>
                  </div>
            <div class=\"media\"> <a href=\"{{'samples/calendario'|page}}\"> <img class=\"d-flex mr-3\" src=\"https://sic.ues.edu.sv/themes/sicues/assets/images/calendario.png\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                <div class=\"news-title\">
                        <h2 class=\"title-small\"><a href=\"{{'samples/calendario'|page}}\">Consultar calendario de actividades</a></h2>
                      </div>
                <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
              </div>
                  </div>
            <div class=\"media\"> <a href=\"https://sic.ues.edu.sv/noticias/:slug\"> <img class=\"d-flex mr-3\" src=\"https://sic.ues.edu.sv/themes/sicues/assets/images/noticiaseventos.png\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                <div class=\"news-title\">
                        <h2 class=\"title-small\"><a href=\"https://sic.ues.edu.sv/noticias/:slug\">Todas las noticias y eventos de la secretaría</a></h2>
                      </div>
                <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
              </div>
                  </div>
          </div>
                <div class=\"tab-pane\" id=\"plataformas\" role=\"tabpanel\">
            <div class=\"media\"> <a href=\"http://www.minerva.sic.ues.edu.sv\" target=\"_blank\"> <img class=\"d-flex mr-3\" src=\"http://minerva.sic.ues.edu.sv/themes/revista-minerva/assets/images/slider/portada-minerva.jpg\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                <div class=\"news-title\">
                        <h2 class=\"title-small\"><a href=\"http://www.minerva.sic.ues.edu.sv\" target=\"_blank\">Revista Minerva</a></h2>
                      </div>
                <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
              </div>
                  </div>
            <div class=\"media\"> <a href=\"http://www.vinculacion.sic.ues.edu.sv\" target=\"_blank\"> <img class=\"d-flex mr-3\" src=\"https://sic.ues.edu.sv/themes/sicues/assets/images/logo-otrive.png\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                <div class=\"news-title\">
                        <h2 class=\"title-small\"><a href=\"http://www.vinculacion.sic.ues.edu.sv\" target=\"_blank\">Oficina de Transferencia de Resultados de Investigación y Vinculación Externa.</a></h2>
                      </div>
                <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
              </div>
                  </div>
            <div class=\"media\"> <a href=\"https://sipc.sic.ues.edu.sv\" target=\"_blank\"> <img class=\"d-flex mr-3\" src=\"https://sipc.sic.ues.edu.sv/img/fondo.min.jpg\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                <div class=\"news-title\">
                        <h2 class=\"title-small\"><a href=\"https://sipc.sic.ues.edu.sv\" target=\"_blank\">Sistema de Información de la Producción Científica de la UES</a></h2>
                      </div>
                <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
              </div>
                  </div>
          </div>
                <div class=\"tab-pane\" id=\"repositorios\" role=\"tabpanel\">
            <div class=\"media\"> <a href=\"http://ri.ues.edu.sv\" target=\"_blank\"> <img class=\"d-flex mr-3\" src=\"http://ri.ues.edu.sv/style/images/repo_.png\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                <div class=\"news-title\">
                        <h2 class=\"title-small\"><a href=\"http://ri.ues.edu.sv\" target=\"_blank\">Repositorio institucional de la Universidad de El Salvador</a></h2>
                      </div>
                <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
              </div>
                  </div>
            <div class=\"media\"> <a href=\"http://revistas.ues.edu.sv\" target=\"blank\"> <img class=\"d-flex mr-3\" src=\"https://botw-pd.s3.amazonaws.com/styles/logo-thumbnail/s3/102015/ues.png?itok=Y8qnl3dz\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                <div class=\"news-title\">
                        <h2 class=\"title-small\"><a href=\"http://revistas.ues.edu.sv\" target=\"blank\">Portal de revistas de la Universidad de El Salvador</a></h2>
                      </div>
                <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
              </div>
                  </div>
            <div class=\"media\"> <a href=\"http://biblioteca.ues.edu.sv/portal/\" target=\"blank\"> <img class=\"d-flex mr-3\" src=\"http://www.ues.edu.sv/consejobecas/images/morfeoshow/estudiantes_-9901/big/BIBLIOTECAUES.JPG\" alt=\"Generic placeholder image\"></a>
                    <div class=\"media-body\">
                <div class=\"news-title\">
                        <h2 class=\"title-small\"><a href=\"http://biblioteca.ues.edu.sv/portal/\" target=\"_blank\">Biblioteca de la Universidad de El Salvador</a></h2>
                      </div>
                <!-- <div class=\"news-auther\"><span class=\"time\">1h ago</span></div> -->
              </div>
                  </div>
          </div>
              </div>
        <div class=\"video-sec\">
                <h4 class=\"heading-small\">La investigación científica</h4>
                <div class=\"video-block\">
            <div class=\"embed-container\">
                    <iframe width=\"300\" height=\"410\" src=\"https://www.youtube.com/embed/videoseries?list=PL09RA5tZK7yoV2oGyUIdI7olM3R37cfuk\" frameborder=\"0\" allowfullscreen></iframe>
                  </div>
          </div>
              </div>
      </aside>
          </div>
  </div>
  
  <style>
  #margin {
  \tMargin-top:6px;
  }
  .titulo {
    border-bottom: 2px solid #222;
    color: #222;
    float: left;
    width: 100%;
    padding: 0 0 6px;
    margin: 0 0 18px;
    text-align: left;
  }
  
  .img-fluid {
    max-width: 100%;
    height: auto;
  }
  
  .card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
  }
  .media-body{
  flex: 1;
  }
  .news-title {
  box-sizing: border-box;
  }
  .title-small {
    /*color: #141517;*/
    font-size: 16px;
    font-weight: 400;
    line-height: 23px;
    margin: 6px 0 0;
    margin-top: 6px;
    margin-bottom: 0px;
  }
  
  .side-bar .nav-tabs{border-bottom:none;}
  .side-bar .nav-tabs .nav-link {
  \tcolor: #aeaeae; 
  \ttext-transform: uppercase; 
  \tborder: none;
  \tdisplay: block;
  \t
  }
  
  .mr-3, .mx-3 {
    margin-right: 1rem !important;
  }
  
  .media {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
  }
  .media-title{
  \tbox-sizing: border-box;
  }
  .side-bar .nav-tabs .nav-link.active, .side-bar .nav-tabs .nav-link:hover{border-bottom:2px solid #ff0000;  text-transform: uppercase; }
  .sidebar-tabing .media{margin-top: 20px}
  .sidebar-tabing img{width: 120px;height: 100px;}
  
  
  
  .section-01{float: left; width: 100%;  border-top: 1px solid #d5d5d5; border-bottom: 1px solid #d5d5d5}
  .section-01 .title-small {margin-bottom: 5px; font-size:17px }
  .section-01 .news-block{border-bottom: 1px dashed #000; padding-bottom: 30px; border: none;}
  .section-01 aside > .news-block{border-bottom: 1px dashed #000; padding-bottom: 19px;}
  .section-01 aside > .news-block:last-child{border-bottom: none; margin-bottom: 20px}
  .section-01 .card{border: none;}
  .section-01 .card-block{padding: 10px 0;}
  .video-sec {float: left; margin-top: 30px; width: 100%;}
  .video-block {float: left; margin-top: 20px; width: 100%;}
  
  .action-sec{width:100%; float:left; background:#222}
  .action-box{float:left; width:100%; text-align:center;}
  .action-box h2{color:#fff; font-size:20px;}
  
  .heading-small {
    border-bottom: 2px solid #222;
    color: #222;
    float: left;
    margin: 7px 0 0;
    width: 100%;
    padding-bottom: 10px;
    font-size: 18px;
  }
  
  
  </style>

  {% put scripts %}
  <script>
  \t\$('#myTab a').click(function (e) {
  e.preventDefault()
  \$(this).tab('show')
})


\$(window).load(function() {
    var boxheight = \$('#myCarousel .carousel-inner').innerHeight();
    var itemlength = \$('#myCarousel .item').length;
    var triggerheight = Math.round(boxheight/itemlength+1);
    \$('#myCarousel .list-group-item').outerHeight(triggerheight);
});


  </script>
  {% endput%}", "/websicues/themes/sicues/partials/portadaweb.htm", "");
    }
}
