<?php

/* {# inline_template_start #}<div class="win-cneter">
        <div class="win-cn-tl">
            <div class="win-cn-tl-img col-xs-6 col-sm-6 col-md-6">{{ field_log_img }}</div>
            <div class="win-cn-tl-tex col-xs-6 col-sm-6 col-md-6"><h2>{{ title }}</h2><p>{{ field_txt }}</p></div>
        </div>
<div class="clearfix"></div>
<p class="win-bd-text">部分案例：</p>
        <div class="win-bd">
            <ul class="win-db-cn">
            <li><a target="_blank" href="http://finance.ifeng.com/a/20150818/13916506_0.shtml">凤凰网</a></li>
            <li><a target="_blank" href="http://news.163.com/15/0818/15/B1AE769C000146BE.html">网易新闻</a></li>
            <li><a target="_blank" href="http://finance.ce.cn/rolling/201508/18/t20150818_6253679.shtml">中国经济网</a></li>
            <li><a target="_blank" href="http://house.people.com.cn/n/2015/0819/c164220-27484204.html">人民网房产</a></li>
            <li><a target="_blank" href="http://www.pcpop.com/doc/1/1122/1122237.shtml">泡泡网</a></li>
            <li><a target="_blank" href="http://finance.southcn.com/f/2015-08/18/content_130950819.html">南方网</a></li>
            <li><a target="_blank" href="http://www.chinadaily.com.cn/hqcj/zgjj/2015-08-18/content_14117244.html">中国日报</a></li>
            <li><a target="_blank" href="http://chanye.focus.cn/news/2015-08-18/6226496.html">搜狐焦点</a></li>
            <li><a target="_blank" href="http://www.techweb.com.cn/news/2015-08-18/2190449.shtml">TechWeb</a></li>
            <li><a target="_blank" href="http://tech.hexun.com/2015-08-18/178416952.html">和讯科技</a></li>
            </ul>
             <div class="clearfix"></div>
        </div>    
</div> */
class __TwigTemplate_6323232b138c5c67076656549dd0f3f1c9c215284ef468a21cbf6970dd0da031 extends Twig_Template
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
        echo "<div class=\"win-cneter\">
        <div class=\"win-cn-tl\">
            <div class=\"win-cn-tl-img col-xs-6 col-sm-6 col-md-6\">";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_log_img"] ?? null), "html", null, true));
        echo "</div>
            <div class=\"win-cn-tl-tex col-xs-6 col-sm-6 col-md-6\"><h2>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h2><p>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_txt"] ?? null), "html", null, true));
        echo "</p></div>
        </div>
<div class=\"clearfix\"></div>
<p class=\"win-bd-text\">部分案例：</p>
        <div class=\"win-bd\">
            <ul class=\"win-db-cn\">
            <li><a target=\"_blank\" href=\"http://finance.ifeng.com/a/20150818/13916506_0.shtml\">凤凰网</a></li>
            <li><a target=\"_blank\" href=\"http://news.163.com/15/0818/15/B1AE769C000146BE.html\">网易新闻</a></li>
            <li><a target=\"_blank\" href=\"http://finance.ce.cn/rolling/201508/18/t20150818_6253679.shtml\">中国经济网</a></li>
            <li><a target=\"_blank\" href=\"http://house.people.com.cn/n/2015/0819/c164220-27484204.html\">人民网房产</a></li>
            <li><a target=\"_blank\" href=\"http://www.pcpop.com/doc/1/1122/1122237.shtml\">泡泡网</a></li>
            <li><a target=\"_blank\" href=\"http://finance.southcn.com/f/2015-08/18/content_130950819.html\">南方网</a></li>
            <li><a target=\"_blank\" href=\"http://www.chinadaily.com.cn/hqcj/zgjj/2015-08-18/content_14117244.html\">中国日报</a></li>
            <li><a target=\"_blank\" href=\"http://chanye.focus.cn/news/2015-08-18/6226496.html\">搜狐焦点</a></li>
            <li><a target=\"_blank\" href=\"http://www.techweb.com.cn/news/2015-08-18/2190449.shtml\">TechWeb</a></li>
            <li><a target=\"_blank\" href=\"http://tech.hexun.com/2015-08-18/178416952.html\">和讯科技</a></li>
            </ul>
             <div class=\"clearfix\"></div>
        </div>    
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"win-cneter\">
        <div class=\"win-cn-tl\">
            <div class=\"win-cn-tl-img col-xs-6 col-sm-6 col-md-6\">{{ field_log_img }}</div>
            <div class=\"win-cn-tl-tex col-xs-6 col-sm-6 col-md-6\"><h2>{{ title }}</h2><p>{{ field_txt }}</p></div>
        </div>
<div class=\"clearfix\"></div>
<p class=\"win-bd-text\">部分案例：</p>
        <div class=\"win-bd\">
            <ul class=\"win-db-cn\">
            <li><a target=\"_blank\" href=\"http://finance.ifeng.com/a/20150818/13916506_0.shtml\">凤凰网</a></li>
            <li><a target=\"_blank\" href=\"http://news.163.com/15/0818/15/B1AE769C000146BE.html\">网易新闻</a></li>
            <li><a target=\"_blank\" href=\"http://finance.ce.cn/rolling/201508/18/t20150818_6253679.shtml\">中国经济网</a></li>
            <li><a target=\"_blank\" href=\"http://house.people.com.cn/n/2015/0819/c164220-27484204.html\">人民网房产</a></li>
            <li><a target=\"_blank\" href=\"http://www.pcpop.com/doc/1/1122/1122237.shtml\">泡泡网</a></li>
            <li><a target=\"_blank\" href=\"http://finance.southcn.com/f/2015-08/18/content_130950819.html\">南方网</a></li>
            <li><a target=\"_blank\" href=\"http://www.chinadaily.com.cn/hqcj/zgjj/2015-08-18/content_14117244.html\">中国日报</a></li>
            <li><a target=\"_blank\" href=\"http://chanye.focus.cn/news/2015-08-18/6226496.html\">搜狐焦点</a></li>
            <li><a target=\"_blank\" href=\"http://www.techweb.com.cn/news/2015-08-18/2190449.shtml\">TechWeb</a></li>
            <li><a target=\"_blank\" href=\"http://tech.hexun.com/2015-08-18/178416952.html\">和讯科技</a></li>
            </ul>
             <div class=\"clearfix\"></div>
        </div>    
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 4,  69 => 3,  65 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"win-cneter\">
        <div class=\"win-cn-tl\">
            <div class=\"win-cn-tl-img col-xs-6 col-sm-6 col-md-6\">{{ field_log_img }}</div>
            <div class=\"win-cn-tl-tex col-xs-6 col-sm-6 col-md-6\"><h2>{{ title }}</h2><p>{{ field_txt }}</p></div>
        </div>
<div class=\"clearfix\"></div>
<p class=\"win-bd-text\">部分案例：</p>
        <div class=\"win-bd\">
            <ul class=\"win-db-cn\">
            <li><a target=\"_blank\" href=\"http://finance.ifeng.com/a/20150818/13916506_0.shtml\">凤凰网</a></li>
            <li><a target=\"_blank\" href=\"http://news.163.com/15/0818/15/B1AE769C000146BE.html\">网易新闻</a></li>
            <li><a target=\"_blank\" href=\"http://finance.ce.cn/rolling/201508/18/t20150818_6253679.shtml\">中国经济网</a></li>
            <li><a target=\"_blank\" href=\"http://house.people.com.cn/n/2015/0819/c164220-27484204.html\">人民网房产</a></li>
            <li><a target=\"_blank\" href=\"http://www.pcpop.com/doc/1/1122/1122237.shtml\">泡泡网</a></li>
            <li><a target=\"_blank\" href=\"http://finance.southcn.com/f/2015-08/18/content_130950819.html\">南方网</a></li>
            <li><a target=\"_blank\" href=\"http://www.chinadaily.com.cn/hqcj/zgjj/2015-08-18/content_14117244.html\">中国日报</a></li>
            <li><a target=\"_blank\" href=\"http://chanye.focus.cn/news/2015-08-18/6226496.html\">搜狐焦点</a></li>
            <li><a target=\"_blank\" href=\"http://www.techweb.com.cn/news/2015-08-18/2190449.shtml\">TechWeb</a></li>
            <li><a target=\"_blank\" href=\"http://tech.hexun.com/2015-08-18/178416952.html\">和讯科技</a></li>
            </ul>
             <div class=\"clearfix\"></div>
        </div>    
</div>", "");
    }
}
