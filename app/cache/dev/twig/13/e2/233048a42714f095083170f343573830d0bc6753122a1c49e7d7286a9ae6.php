<?php

/* default/login.html.twig */
class __TwigTemplate_13e2233048a42714f095083170f343573830d0bc6753122a1c49e7d7286a9ae6 extends Twig_Template
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<br/>
<br/>
\t<div class=\"col-md-4\">
\t</div>
\t<div class=\"col-md-4 centered\">
    <p>
\t\t<a class=\"btn btn-default\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\"> Login </a>
\t</p>
\t<p>
\t\t<a class=\"btn btn-default\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("signup");
        echo "\"> Sign Up! </a>
\t</p>
";
    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  39 => 11,  31 => 5,  28 => 4,);
    }
}
