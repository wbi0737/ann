<?php

/* WbiForumBundle:Posts:new.html.twig */
class __TwigTemplate_b73248ba0c711e947a4aae217ffc610d extends Twig_Template
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
<h2>Ajouter Votre Annonce</h2>

<form class=\"well\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("posts_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <button class=\"btn btn-primary\" type=\"submit\">Create</button>
    </p>
</form>


</div>

<script type=\"text/javascript\">

  
       
    \$(\"#wbi_forumbundle_poststype_domain\").change(function() {
        console.log('change');   
        \$.ajax({
                type: 'POST',
                dataType: 'json',
                url:  '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("get_underdomain"), "html", null, true);
        echo "',
                data: 'domain_id=' + \$(this).val(),
                success: function(response)
                {
                    \$('#wbi_forumbundle_poststype_underdomain').find(\"option\").remove();
                
                    \$.each(response, function(i, item) {
                        \$('#wbi_forumbundle_poststype_underdomain').append(new Option(item, i));
                    });
                    \$('#wbi_forumbundle_poststype_underdomain').css('width', '150px');
                    
                    
                    
                }
            });
                     
   });
   
   \$(\"#wbi_forumbundle_poststype_underdomain\").change(function() {
            console.log('change');   
            \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url:  '";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("get_type"), "html", null, true);
        echo "',
                    data: 'underdomain_id=' + \$(this).val(),
                    success: function(response)
                    {
                        \$('#wbi_forumbundle_poststype_type').find(\"option\").remove();
                        \$.each(response, function(i, item) {
                            \$('#wbi_forumbundle_poststype_type').append(new Option(item, i));
                        });
                        \$('#wbi_forumbundle_poststype_type').css('width', '150px');
                    }
                });    

       }); 
         
   
    </script>
 ";
    }

    public function getTemplateName()
    {
        return "WbiForumBundle:Posts:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 49,  63 => 26,  42 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
