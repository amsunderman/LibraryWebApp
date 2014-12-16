<?php

/* default/debug.html.twig */
class __TwigTemplate_91fd481983e89d66fd3f01e42a7d7574230e12137810f16fb87383b125f58c8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <p>
\t\t";
        // line 5
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["debugObj"]) ? $context["debugObj"] : $this->getContext($context, "debugObj")));
        echo "
\t</p>
";
    }

    public function getTemplateName()
    {
        return "default/debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,);
    }
}
