<?php

/* default/signup_attempt.html.twig */
class __TwigTemplate_34eee60246ab3e7ecfb951cebab11b89fba5f68af7c89a8c8ecde6ff0088666e extends Twig_Template
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
        echo "    \t";
        // line 5
        echo "    \t";
        if (array_key_exists("error", $context)) {
            // line 6
            echo "    \t\t<p class=\"error_message\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</p>
    \t";
        }
        // line 8
        echo "
    \t";
        // line 10
        echo "
    \t<br/>
    \t<div class=\"col-md-4\">
\t\t</div>
\t\t<div class=\"col-md-4 centered\">
\t\t\t<form name=\"login_attempt\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("signup_validate");
        echo "\" method=\"post\">
\t\t\t\t<div class=\"input-group detail\">
\t\t\t\t\t<span class=\"input-group-addon\">Username</span>
\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"username\">
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group detail\">
\t\t\t\t\t<span class=\"input-group-addon\">Password</span>
\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"password\">
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group detail\">
\t\t\t\t\t<span class=\"input-group-addon\">Confirm Password</span>
\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"confirm_password\">
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group detail\">
\t\t\t\t\t<span class=\"input-group-addon\">Email</span>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\">
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group detail\">
\t\t\t\t\t<span class=\"input-group-addon\">Phone</span>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone\">
\t\t\t\t</div>

\t\t\t\t<p>
\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
                \t\tUser Type: <input type=\"radio\" checked=\"checked\" name=\"user_type\" value=\"Student\"> Student
                \t\t<input type=\"radio\" name=\"user_type\" value=\"Librarian\"> Librarian
                </div>
                </p>
\t\t\t\t<div class=\"input-group detail\">
\t\t\t\t\t<span class=\"input-group-addon\">First Name</span>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"first_name\">
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group detail\">
\t\t\t\t\t<span class=\"input-group-addon\">Last Name</span>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"last_name\">
\t\t\t\t</div>

\t\t\t\t<input type=\"submit\" class=\"btn btn-default\" value=\"Sign Up\">
\t\t\t</form>
\t\t<div>
";
    }

    public function getTemplateName()
    {
        return "default/signup_attempt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  45 => 10,  42 => 8,  36 => 6,  33 => 5,  31 => 4,  28 => 3,);
    }
}
