<?php

/* {# inline_template_start #}<div class="agreement-tl">
  <div class="agreement-tl-img">
    {{ field_image }} 
  </div>
  <div class="agreement-tl-text container">
    <h2>{{ title }}</h2>
    <p>{{ field_text }}</p>
  </div>
<div class="clearfix"></div>
</div> */
class __TwigTemplate_8837ca1b849c1c380e18c6935085705f68e3c69350e891e5a3fe057f3b27f024 extends Twig_Template
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
        echo "<div class=\"agreement-tl\">
  <div class=\"agreement-tl-img\">
    ";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo " 
  </div>
  <div class=\"agreement-tl-text container\">
    <h2>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h2>
    <p>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_text"] ?? null), "html", null, true));
        echo "</p>
  </div>
<div class=\"clearfix\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"agreement-tl\">
  <div class=\"agreement-tl-img\">
    {{ field_image }} 
  </div>
  <div class=\"agreement-tl-text container\">
    <h2>{{ title }}</h2>
    <p>{{ field_text }}</p>
  </div>
<div class=\"clearfix\"></div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 7,  62 => 6,  56 => 3,  52 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"agreement-tl\">
  <div class=\"agreement-tl-img\">
    {{ field_image }} 
  </div>
  <div class=\"agreement-tl-text container\">
    <h2>{{ title }}</h2>
    <p>{{ field_text }}</p>
  </div>
<div class=\"clearfix\"></div>
</div>", "");
    }
}
