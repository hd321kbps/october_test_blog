<?php

/* D:\OSPanel\domains\october/themes/demo/pages/test.htm */
class __TwigTemplate_fb16e441f4581ce3fffce1f7e4727fd4e02f9934ed869b257528f1a5bf84e59b extends Twig_Template
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
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "getPosts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo " <!--Вызывем метод getPosts в нашем компоненте и проходимся циклом по полученынм запиям!-->
    <h4>";
            // line 2
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</h4> <!--Выводим заголовок!-->
    <p>";
            // line 3
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "description", array());
            echo "</p> <!--Выводим описание!-->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/demo/pages/test.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for post in posts.getPosts %} <!--Вызывем метод getPosts в нашем компоненте и проходимся циклом по полученынм запиям!-->
    <h4>{{ post.title }}</h4> <!--Выводим заголовок!-->
    <p>{{ post.description|raw }}</p> <!--Выводим описание!-->
{% endfor %}", "D:\\OSPanel\\domains\\october/themes/demo/pages/test.htm", "");
    }
}
