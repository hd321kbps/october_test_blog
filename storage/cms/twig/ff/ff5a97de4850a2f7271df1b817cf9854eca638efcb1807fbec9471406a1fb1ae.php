<?php

/* D:\OSPanel\domains\october/themes/demo/layouts/fallback.htm */
class __TwigTemplate_f0b373e0cec04f0174cc827f924381e337ac868cb54d787e2ae1d7de1904dbf8 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\october/themes/demo/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "D:\\OSPanel\\domains\\october/themes/demo/layouts/fallback.htm", "");
    }
}
