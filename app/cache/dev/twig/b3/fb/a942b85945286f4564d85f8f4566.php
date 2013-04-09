<?php

/* WbiForumBundle::layout.html.twig */
class __TwigTemplate_b3fba942b85945286f4564d85f8f4566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'wbiforum_body' => array($this, 'block_wbiforum_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " raouf ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "

            ";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
              
";
        // line 11
        $this->displayBlock('wbiforum_body', $context, $blocks);
        // line 15
        echo "                  
         
          

                                    

  ";
    }

    // line 11
    public function block_wbiforum_body($context, array $blocks = array())
    {
        // line 12
        echo "

               ";
    }

    public function getTemplateName()
    {
        return "WbiForumBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  59 => 11,  47 => 11,  43 => 9,  40 => 8,  30 => 3,  101 => 43,  90 => 37,  78 => 33,  74 => 31,  70 => 30,  64 => 27,  60 => 25,  56 => 24,  49 => 15,  31 => 4,  28 => 3,);
    }
}
