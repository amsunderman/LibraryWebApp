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
        echo "
\t<br/>
\t";
        // line 7
        echo "\t";
        if (array_key_exists("error", $context)) {
            // line 8
            echo "\t\t<p class=\"error_message\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</p>
\t";
        }
        // line 10
        echo "
\t";
        // line 12
        echo "\t<form name=\"login_attempt\" action=\"";
        echo $this->env->getExtension('routing')->getPath("login_validate");
        echo "\" method=\"post\">\t\t
\t\t<div class=\"col-md-4\">
\t\t</div>
\t\t<div class=\"col-md-4 centered\">
\t\t\t<div class=\"input-group detail\">
\t\t\t\t<span class=\"input-group-addon\">Username</span>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\"><br>
\t\t\t</div>
\t\t\t<br/>
\t\t\t<div class=\"input-group detail\">
\t\t\t\t<span class=\"input-group-addon\">Password</span>
\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"password\"><br>
\t\t\t</div>
\t\t\t<br/>
\t\t\t<input class=\"btn btn-default\" type=\"submit\" value=\"Login\">
\t\t</div>
\t</form>
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
        return array (  47 => 12,  44 => 10,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
