<?php

/* base.html.twig */
class __TwigTemplate_660f8f7ac55a499f6940452b3cdca8b11a727c5a6fd6b31f3de801fdde519029 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\">
        ";
        // line 8
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrapOverrides.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 16
        echo "        <div class = \"jumbotron\">
            <h1>Library Web App</h1>
            ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "has", array(0 => "user"), "method")) {
            // line 19
            echo "                <p class=\"user_info\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "getUsername", array(), "method"), "html", null, true);
            echo "
                    ";
            // line 21
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "getLibrarian", array(), "method")) {
                // line 22
                echo "                         (librarian)
                    ";
            } else {
                // line 24
                echo "                         (student)
                    ";
            }
            // line 26
            echo "                </p>
                <p class=\"user_info\">
                    <a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">logout</a>
                </p>
            ";
        }
        // line 31
        echo "        </div>

        ";
        // line 34
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 35,  113 => 34,  108 => 11,  102 => 5,  96 => 36,  93 => 35,  90 => 34,  86 => 31,  80 => 28,  76 => 26,  72 => 24,  68 => 22,  66 => 21,  62 => 20,  59 => 19,  57 => 18,  53 => 16,  46 => 12,  44 => 11,  39 => 9,  34 => 8,  29 => 5,  23 => 1,);
    }
}
