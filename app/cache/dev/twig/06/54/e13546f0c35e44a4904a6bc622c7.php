<?php

/* WbiForumBundle:Domain:index.html.twig */
class __TwigTemplate_0654e13546f0c35e44a4904a6bc622c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WbiForumBundle::layout.html.twig");

        $this->blocks = array(
            'wbiforum_body' => array($this, 'block_wbiforum_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WbiForumBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_wbiforum_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"span9\">
    <div class=\"row\" id=\"section1\">
        <div class=\"page-header\">
             <div class=\"hero-unit\"><h2>Liste des Produits les plus vendus</h2>

                 <blockquote><p class=\"text-info\">Négociez le prix avec le vendeur</p>
                    <small>Avec les membres les plus célèbre en informatique..</small></blockquote>

            </div>
       </div>
            <div class=\"row\" id=\"section2\">
                <div class=\"span9\"></div>
            </div>  
    
            <article>
                <button class=\"btn btn-large btn-block btn-inverse\" type=\"button\"><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("posts_new"), "html", null, true);
        echo "\">Ajouter une annonce gratuite</a></button>
            </article>
         
            
     ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 25
            echo "          <div class=\"span3\">
            <div id=\"cadre-box\">
                <div id=\"title-domain\" class=\"text-center\"><strong>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "label"), "html", null, true);
            echo "</strong></div>
                <div id=\"list-underdomain\">    
                    <ul class=\"unstyled\">
                        ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "underdomains"));
            foreach ($context['_seq'] as $context["_key"] => $context["underdomain"]) {
                // line 31
                echo "                            
                         <div id=\"\">
                            <li><a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("underdomain_show", array("id" => $this->getAttribute((isset($context["underdomain"]) ? $context["underdomain"] : $this->getContext($context, "underdomain")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["underdomain"]) ? $context["underdomain"] : $this->getContext($context, "underdomain")), "label"), "html", null, true);
                echo "</a></li>
                         </div>
                                
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['underdomain'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 37
            echo "                    </ul>
                </div>
        </div>
      </div>
              
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "   </div>  

</div> 
        
    
<style type=\"text/css\">
#title-domain{
padding-left: 5px;
background-color: rgba(35, 28, 204, 0.61);
color: rgb(255, 255, 255);
height: 32px;
padding-top: 10px;
}
#cadre-box{
background-color:  rgb(255, 255, 255);
border: solid 1px;
width: 266px;
height: 199px;
border-radius: 5px;
box-shadow: 0px 2px 5px rgb(163, 163, 185);
margin-bottom: 30px;
}
#section1{
border-radius: 10px;
box-shadow: 4px 18px 18px rgb(163, 163, 185);
border: 2px;
padding-bottom: 30px;
}
article{
moz-border-radius: 5px;
-webkit-border-radius: 5px;
width: 254px;
height: 400px;
background-color: #fff;
border: 1px solid rgb(188, 18, 241);
float: right;
margin-right: 5px;
}
#section2{
border: solid 1px;
height: 120px;
width: 1135px;
margin-left: 32px;
margin-bottom: 20px;
border-radius: 10px;
box-shadow: 4px 18px 18px rgb(163, 163, 185);
border: 1px solid rgb(188, 18, 241);
}
#list-underdomain{
padding-top: 5px;
padding-left: 10px;
}
    </style>            
             ";
    }

    public function getTemplateName()
    {
        return "WbiForumBundle:Domain:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 43,  90 => 37,  78 => 33,  74 => 31,  70 => 30,  64 => 27,  60 => 25,  56 => 24,  49 => 20,  31 => 4,  28 => 3,);
    }
}
