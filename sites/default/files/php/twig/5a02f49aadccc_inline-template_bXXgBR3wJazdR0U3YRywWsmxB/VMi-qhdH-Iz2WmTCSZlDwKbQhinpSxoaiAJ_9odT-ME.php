<?php

/* {# inline_template_start #}<div class="about-us container">
   <div class="about-us-lf col-md-8">
      <h2>{{ title }} </h2>
   {{ body }}
   </div>
   <div class="about-us-rt col-md-4"><img src="/themes/drupal8_zymphonies_theme/images/au.png" alt="乾厚佐佑团队"></div>
</div> */
class __TwigTemplate_ce49d2140f330a7b08191520569758e07f35b1aceda33a09e817c370f7020775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"about-us container\">
   <div class=\"about-us-lf col-md-8\">
      <h2>";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo " </h2>
   ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "
   </div>
   <div class=\"about-us-rt col-md-4\"><img src=\"/themes/drupal8_zymphonies_theme/images/au.png\" alt=\"乾厚佐佑团队\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"about-us container\">
   <div class=\"about-us-lf col-md-8\">
      <h2>{{ title }} </h2>
   {{ body }}
   </div>
   <div class=\"about-us-rt col-md-4\"><img src=\"/themes/drupal8_zymphonies_theme/images/au.png\" alt=\"乾厚佐佑团队\"></div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 4,  53 => 3,  49 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"about-us container\">
   <div class=\"about-us-lf col-md-8\">
      <h2>{{ title }} </h2>
   {{ body }}
   </div>
   <div class=\"about-us-rt col-md-4\"><img src=\"/themes/drupal8_zymphonies_theme/images/au.png\" alt=\"乾厚佐佑团队\"></div>
</div>", "");
    }
}
