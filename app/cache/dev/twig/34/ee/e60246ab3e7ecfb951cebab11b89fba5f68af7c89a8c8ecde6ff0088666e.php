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
        echo "    <p>
    \t";
        // line 5
        if (array_key_exists("error", $context)) {
            // line 6
            echo "    \t\t<p class=\"error_message\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</p>
    \t";
        }
        // line 8
        echo "\t\t<form name=\"login_attempt\" action=\"";
        echo $this->env->getExtension('routing')->getPath("signup_validate");
        echo "\" method=\"post\">
\t\t\tUsername: <input type=\"text\" name=\"username\"><br>
\t\t\tPassword: <input type=\"password\" name=\"password\"><br>
\t\t\tConfirm Password: <input type=\"password\" name=\"confirm_password\"><br>
\t\t\tEmail: <input type=\"text\" name=\"email\"><br>
\t\t\tPhone: <input type=\"text\" name=\"phone\"><br>
\t\t\tUser Type: <input type=\"radio\" name=\"user_type\" value=\"Student\">Student <input type=\"radio\" name=\"user_type\" value=\"Librarian\">Librarian<br>
\t\t\tFirst Name: <input type=\"text\" name=\"first_name\"><br>
\t\t\tLast Name: <input type=\"text\" name=\"last_name\"><br>
\t\t\t<input type=\"submit\" value=\"Sign Up\">
\t\t</form>
\t</p>
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
        return array (  42 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
