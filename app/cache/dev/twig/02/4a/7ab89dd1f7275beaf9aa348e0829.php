<?php

/* ::base.html.twig */
class __TwigTemplate_024a7ab89dd1f7275beaf9aa348e0829 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"utf-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"../assets/js/html5shiv.js\"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png\">
      <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png\">
                    <link rel=\"apple-touch-icon-precomposed\" href=\"http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png\">
                                   <link rel=\"shortcut icon\" href=\"http://twitter.github.com/bootstrap/assets/ico/favicon.png\">
  <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/mzroute.js"), "html", null, true);
        echo "\" async=\"\" type=\"text/javascript\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/_wildcard.js"), "html", null, true);
        echo "\" async=\"\" type=\"text/javascript\"></script>
    </head>
    <body>
   

         
              
   
\t <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
          <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"brand\" href=\"#\">Art de l'informatique</a>
          <div class=\"nav-collapse collapse\">
            <p class=\"navbar-text pull-right\">
              ";
        // line 63
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 64
            echo "    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Déconnexion</a>
";
        } else {
            // line 66
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Connexion</a>
";
        }
        // line 68
        echo "            </p>
            <ul class=\"nav\">
              <li class=\"active\"><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("domain"), "html", null, true);
        echo "\">Home</a></li>
              <li><a href=\"#about\">About</a></li>
              <li><a href=\"#contact\">Contact</a></li>
\t    </ul>
\t\t<form class=\"navbar-search pull-left\">
\t\t\t\t<input type=\"text\" class=\"search-query\" placeholder=\"Search\">
        </form>
                           
        
                        
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class=\"container-fluid\">
      <div class=\"row-fluid\">
        <div class=\"span2\">
          <div class=\"well sidebar-nav\">
            <ul class=\"nav nav-list\">
              <li class=\"nav-header\">Les differents domaines</li>
              
                  <li class=\"dropdown-submenu\">
                    <a href=\"#\">Auto Moto</a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"dropdown-submenu\">
                            <a href=\"#\">Voiture</a>
                            <ul class=\"dropdown-menu\">
                               <li><a href=\"#\">Renault</a></li>
                             </ul>
                     
                        </li>
                     
                    </ul>
                   
                </li>
               
              <li class=\"dropdown-submenu\">
                    <a href=\"#\">Immobilier</a>
                    <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Villa</a></li>
                    <li><a href=\"#\">Apportement</a></li>
                    <li><a href=\"#\">Commerciale</a></li>
                    </ul>
              </li>
              <li><a href=\"#\">Informatique</a></li>
              <li class=\"dropdown-submenu\">
                    <a href=\"#\">Telephonie</a>
                    <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Smar Phone</a></li>
                    <li><a href=\"#\">Samsung</a></li>
                    <li><a href=\"#\">Nokia</a></li>
                    <li><a href=\"#\">LG</a></li>
                    </ul>
              </li>
              <li class=\"dropdown-submenu\">
                    <a href=\"#\">Electromenager</a>
                    <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Refregirateur</a></li>
                    <li><a href=\"#\">Machine a Laver</a></li>
                    <li><a href=\"#\">Four Gar Haute</a></li>
                    <li><a href=\"#\">TV</a></li>
                    </ul>
              </li>
              <li><a href=\"#\">Emploi</a></li>
              <li><a href=\"#\">Animaux</a></li>
              <li><a href=\"#\">Services</a></li>
              <li><a href=\"#\">Bonnes Affaires</a></li>
              <li class=\"nav-header\">Web business Intelligence</li>
              <li><a href=\"#\">Communauté de Wbi</a></li>
              <li class=\"nav-header\">Contact</li>
              <li><a href=\"#\">Contactez nous</a></li>
              <li class=\"divider\">about</li>
              <li><a href=\"#\">Info</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
      

        
         
            
         
\t
            \t\t\t";
        // line 154
        $this->displayBlock('body', $context, $blocks);
        // line 155
        echo "          
    

  </div>\t     
</div>
      <footer>
        <p>© Company 2013</p>
      </footer>

    </div><!--/.fluid-container-->
        
        ";
        // line 166
        $this->displayBlock('javascripts', $context, $blocks);
        // line 185
        echo " 
    </body>
<iframe src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/analytics.htm"), "html", null, true);
        echo "\" style=\"border: 0px none; position: absolute; top: -100px; left: -100px;\" height=\"1\" width=\"1\"></iframe>

</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Bootstrap, from Twitter!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t\t<!-- Le styles -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
     <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <style type=\"text/css\">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
\t\t";
    }

    // line 154
    public function block_body($context, array $blocks = array())
    {
    }

    // line 166
    public function block_javascripts($context, array $blocks = array())
    {
        // line 167
        echo "\t\t<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-transition.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-alert.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-tab.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-button.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-typeahead.js"), "html", null, true);
        echo "\"></script>
   
\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 182,  317 => 181,  313 => 180,  309 => 179,  305 => 178,  301 => 177,  297 => 176,  293 => 175,  289 => 174,  285 => 173,  281 => 172,  277 => 171,  273 => 170,  268 => 167,  265 => 166,  260 => 154,  236 => 11,  232 => 10,  228 => 9,  225 => 8,  222 => 7,  216 => 6,  208 => 187,  204 => 185,  202 => 166,  189 => 155,  187 => 154,  100 => 70,  96 => 68,  90 => 66,  82 => 64,  80 => 63,  56 => 44,  41 => 32,  36 => 31,  34 => 7,  30 => 6,  23 => 1,);
    }
}
