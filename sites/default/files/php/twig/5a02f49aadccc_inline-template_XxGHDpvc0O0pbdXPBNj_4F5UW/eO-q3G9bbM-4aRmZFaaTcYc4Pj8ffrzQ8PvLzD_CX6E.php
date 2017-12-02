<?php

/* {# inline_template_start #}<div class="serve">
  <div class="container">
    <div class="serve-tl">
      <b>媒体投放</b>
      <span>MEDIA</span>
    </div>
    <div class="servi-by">
      <ul class="servi-cn">
        <li>
          <div class="pitem-t pt blackp">
          <span class="fa fa-toggle-up"></span>
          <p>了解需求</p>
          <i>Ⅰ</i>
          </div>
        </li>
        <li">
          <div class="pitem-t pt blackp">
          <span class="fa fa-toggle-up"></span>
          <p>
          确定投放策略</p>
          <i>Ⅱ</i>
          </div>
        </li>
        <li">
          <div class="pitem-t pb redp">
          <span class="fa fa-toggle-down"></span><i>Ⅲ</i>
          <p>
          广告提案</p>
          
          </div>
        </li>
        <li">
          <div class="pitem-t pb redp">
          <span class="fa fa-toggle-down"></span><i>Ⅳ</i>
          <p>
          方案确认</p>
          
          </div>
        </li>
        <li">
          <div class="pitem-t pt redp">
          <span class="fa fa-toggle-up"></span>
          <p>
          签订合作协议</p>
          <i>Ⅴ</i>
          </div>
        </li>
        <li">
          <div class="pitem-t pt blackp">
          <span class="fa fa-toggle-up"></span>
          <p>
          画面制作及确定</p>
          <i>Ⅵ</i>
          </div>
        </li>
        <li">
          <div class="pitem-t pb blackp">
          <span class="fa fa-toggle-down"></span><i>Ⅶ</i>
          <p>画面上刊</p>
          
          </div>
        </li>
        <li">
          <div class="pitem-t pb blackp">
          <span class="fa fa-toggle-down"></span><i>Ⅷ</i>
          <p>广告监测</p>
          
          </div>
        </li>
        <li">
          <div class="pitem-t pt blackp">
          <span class="fa fa-toggle-up"></span>
          <p>
          画面下刊</p>
          <i>Ⅸ</i>
          </div>
        </li>
        <li">
          <div class="pitem-t pt redp">
            <span class="fa fa-toggle-up"></span>
            <p>
            提交验收报告</p>
            <i>Ⅹ</i>
          </div>
        </li>
      </ul>
<div class="servi-line"></div>
    </div>
<div class="serve-tl">
      <b>广告策划</b>
      <span>MEDIA</span>
    </div>
    <div class="servi-by">
       <div class="servi-line"></div>
      <ul class="servi-cn">
        <li>
          <div class="pitem-t pt blackp">
          <span class="fa fa-toggle-up"></span>
          <p>了解营销需求和<br>策划类型</p>
          <i>Ⅰ</i>
          </div>
        </li>
        <li">
          <div class="pitem-t pt blackp">
          <span class="fa fa-toggle-up"></span>
          <p>撰写营销方案</p>
          <i>Ⅱ</i>
          </div>
        </li>
        <li">
          <div class="pitem-t pb redp">
          <span class="fa fa-toggle-down"></span><i>Ⅲ</i>
          <p>
          策划提案</p>
          
          </div>
        </li>
        <li">
          <div class="pitem-t pb redp">
          <span class="fa fa-toggle-down"></span><i>Ⅳ</i>
          <p>
          方案修改</p>
          
          </div>
        </li>
        <li">
          <div class="pitem-t pt redp">
          <span class="fa fa-toggle-up"></span>
          <p>
          签订合作协议</p>
          <i>Ⅴ</i>
          </div>
        </li>
        <li">
          <div class="pitem-t pt blackp">
          <span class="fa fa-toggle-up"></span>
          <p>
          策划执行（含画面制作或宣传推广或活动执行）</p>
          <i>Ⅵ</i>
          </div>
        </li>
        <li">
          <div class="pitem-t pb blackp">
          <span class="fa fa-toggle-down"></span><i>Ⅶ</i>
          <p>结案报告
提交</p>
          
          </div>
        </li>
        <li">
          <div class="pitem-t pb blackp">
          <span class="fa fa-toggle-down"></span><i>Ⅷ</i>
          <p>广告监测</p>
          
          </div>
        </li>
        <li">
          <div class="pitem-t pt blackp">
          <span class="fa fa-toggle-up"></span>
          <p>
          画面下刊</p>
          <i>Ⅸ</i>
          </div>
        </li>
        <li">
          <div class="pitem-t pt redp">
            <span class="fa fa-toggle-up"></span>
            <p>
            提交验收报告</p>
            <i>Ⅹ</i>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div> */
class __TwigTemplate_2ca095a533c18025794c3c247a51f6f67e5498955722929ca96a683f8abee0a1 extends Twig_Template
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
        echo "<div class=\"serve\">
  <div class=\"container\">
    <div class=\"serve-tl\">
      <b>媒体投放</b>
      <span>MEDIA</span>
    </div>
    <div class=\"servi-by\">
      <ul class=\"servi-cn\">
        <li>
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>了解需求</p>
          <i>Ⅰ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          确定投放策略</p>
          <i>Ⅱ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb redp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅲ</i>
          <p>
          广告提案</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb redp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅳ</i>
          <p>
          方案确认</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt redp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          签订合作协议</p>
          <i>Ⅴ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          画面制作及确定</p>
          <i>Ⅵ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb blackp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅶ</i>
          <p>画面上刊</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb blackp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅷ</i>
          <p>广告监测</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          画面下刊</p>
          <i>Ⅸ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt redp\">
            <span class=\"fa fa-toggle-up\"></span>
            <p>
            提交验收报告</p>
            <i>Ⅹ</i>
          </div>
        </li>
      </ul>
<div class=\"servi-line\"></div>
    </div>
<div class=\"serve-tl\">
      <b>广告策划</b>
      <span>MEDIA</span>
    </div>
    <div class=\"servi-by\">
       <div class=\"servi-line\"></div>
      <ul class=\"servi-cn\">
        <li>
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>了解营销需求和<br>策划类型</p>
          <i>Ⅰ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>撰写营销方案</p>
          <i>Ⅱ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb redp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅲ</i>
          <p>
          策划提案</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb redp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅳ</i>
          <p>
          方案修改</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt redp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          签订合作协议</p>
          <i>Ⅴ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          策划执行（含画面制作或宣传推广或活动执行）</p>
          <i>Ⅵ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb blackp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅶ</i>
          <p>结案报告
提交</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb blackp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅷ</i>
          <p>广告监测</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          画面下刊</p>
          <i>Ⅸ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt redp\">
            <span class=\"fa fa-toggle-up\"></span>
            <p>
            提交验收报告</p>
            <i>Ⅹ</i>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"serve\">
  <div class=\"container\">
    <div class=\"serve-tl\">
      <b>媒体投放</b>
      <span>MEDIA</span>
    </div>
    <div class=\"servi-by\">
      <ul class=\"servi-cn\">
        <li>
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>了解需求</p>
          <i>Ⅰ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          确定投放策略</p>
          <i>Ⅱ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb redp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅲ</i>
          <p>
          广告提案</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb redp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅳ</i>
          <p>
          方案确认</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt redp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          签订合作协议</p>
          <i>Ⅴ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          画面制作及确定</p>
          <i>Ⅵ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb blackp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅶ</i>
          <p>画面上刊</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb blackp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅷ</i>
          <p>广告监测</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          画面下刊</p>
          <i>Ⅸ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt redp\">
            <span class=\"fa fa-toggle-up\"></span>
            <p>
            提交验收报告</p>
            <i>Ⅹ</i>
          </div>
        </li>
      </ul>
<div class=\"servi-line\"></div>
    </div>
<div class=\"serve-tl\">
      <b>广告策划</b>
      <span>MEDIA</span>
    </div>
    <div class=\"servi-by\">
       <div class=\"servi-line\"></div>
      <ul class=\"servi-cn\">
        <li>
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>了解营销需求和<br>策划类型</p>
          <i>Ⅰ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>撰写营销方案</p>
          <i>Ⅱ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb redp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅲ</i>
          <p>
          策划提案</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb redp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅳ</i>
          <p>
          方案修改</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt redp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          签订合作协议</p>
          <i>Ⅴ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          策划执行（含画面制作或宣传推广或活动执行）</p>
          <i>Ⅵ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb blackp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅶ</i>
          <p>结案报告
提交</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb blackp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅷ</i>
          <p>广告监测</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          画面下刊</p>
          <i>Ⅸ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt redp\">
            <span class=\"fa fa-toggle-up\"></span>
            <p>
            提交验收报告</p>
            <i>Ⅹ</i>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>";
    }

    public function getDebugInfo()
    {
        return array (  218 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"serve\">
  <div class=\"container\">
    <div class=\"serve-tl\">
      <b>媒体投放</b>
      <span>MEDIA</span>
    </div>
    <div class=\"servi-by\">
      <ul class=\"servi-cn\">
        <li>
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>了解需求</p>
          <i>Ⅰ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          确定投放策略</p>
          <i>Ⅱ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb redp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅲ</i>
          <p>
          广告提案</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb redp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅳ</i>
          <p>
          方案确认</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt redp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          签订合作协议</p>
          <i>Ⅴ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          画面制作及确定</p>
          <i>Ⅵ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb blackp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅶ</i>
          <p>画面上刊</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb blackp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅷ</i>
          <p>广告监测</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          画面下刊</p>
          <i>Ⅸ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt redp\">
            <span class=\"fa fa-toggle-up\"></span>
            <p>
            提交验收报告</p>
            <i>Ⅹ</i>
          </div>
        </li>
      </ul>
<div class=\"servi-line\"></div>
    </div>
<div class=\"serve-tl\">
      <b>广告策划</b>
      <span>MEDIA</span>
    </div>
    <div class=\"servi-by\">
       <div class=\"servi-line\"></div>
      <ul class=\"servi-cn\">
        <li>
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>了解营销需求和<br>策划类型</p>
          <i>Ⅰ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>撰写营销方案</p>
          <i>Ⅱ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb redp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅲ</i>
          <p>
          策划提案</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb redp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅳ</i>
          <p>
          方案修改</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt redp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          签订合作协议</p>
          <i>Ⅴ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          策划执行（含画面制作或宣传推广或活动执行）</p>
          <i>Ⅵ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb blackp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅶ</i>
          <p>结案报告
提交</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pb blackp\">
          <span class=\"fa fa-toggle-down\"></span><i>Ⅷ</i>
          <p>广告监测</p>
          
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt blackp\">
          <span class=\"fa fa-toggle-up\"></span>
          <p>
          画面下刊</p>
          <i>Ⅸ</i>
          </div>
        </li>
        <li\">
          <div class=\"pitem-t pt redp\">
            <span class=\"fa fa-toggle-up\"></span>
            <p>
            提交验收报告</p>
            <i>Ⅹ</i>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>", "");
    }
}
