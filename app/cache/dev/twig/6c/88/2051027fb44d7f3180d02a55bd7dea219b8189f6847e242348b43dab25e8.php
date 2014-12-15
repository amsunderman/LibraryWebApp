<?php

/* default/login_attempt.html.twig */
class __TwigTemplate_6c882051027fb44d7f3180d02a55bd7dea219b8189f6847e242348b43dab25e8 extends Twig_Template
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
\t\t<form name=\"login_attempt\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login_validate", array("page" => "login_validate"));
        echo "\" method=\"post\">
\t\t\tUsername: <input type=\"text\" name=\"username\"><br>
\t\t\tPassword: <input type=\"password\" name=\"password\"><br>
\t\t\t<input type=\"submit\" value=\"Login\">
\t\t</form>
\t</p>
";
    }

    public function getTemplateName()
    {
        return "default/login_attempt.html.twig";
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
