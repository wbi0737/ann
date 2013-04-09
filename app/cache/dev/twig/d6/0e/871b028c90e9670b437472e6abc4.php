<?php

/* WbiForumBundle:Underdomain:show.html.twig */
class __TwigTemplate_d60e871b028c90e9670b437472e6abc4 extends Twig_Template
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
        echo "<div class=\"span9\">
    <ul class=\"breadcrumb\">
        <li><a href=\"#\"></a> <span class=\"divider\">/</span></li>
        <li><a href=\"#\"></a> <span class=\"divider\">/</span></li>
        <li class=\"active\">Articles</li>
     </ul>

<table class=\"table table-hover table-bordered table-condensed\">
  <caption><h4>Liste des Voitures</h4></caption>
  <thead>
    <tr>
      <th>Annonce</th>
      <th>Modele</th>
      <th>Marque</th>
      <th>Région</th>
      <th>Prix</th>
    </tr>
  </thead>
 
  <tbody>
  
";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "types"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 26
            echo "   ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "posts"));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 27
                echo "  
    <tr>
      <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postTitle"), "html", null, true);
                echo "</td>
      <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type"), "underdomain"), "label"), "html", null, true);
                echo "</td>
      <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "type"), "labeltype"), "html", null, true);
                echo "</td>
      <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postVille"), "html", null, true);
                echo "</td>
      <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postPrice"), "html", null, true);
                echo "</td>
    </tr>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "     
    
  </tbody>

  \t
</table>
<div id=\"page_navigation\"></div> 
 </div>     

";
    }

    public function getTemplateName()
    {
        return "WbiForumBundle:Underdomain:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 38,  83 => 33,  79 => 32,  75 => 31,  71 => 30,  67 => 29,  63 => 27,  58 => 26,  54 => 25,  31 => 4,  28 => 3,);
    }
}
