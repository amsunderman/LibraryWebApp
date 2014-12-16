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
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrapOverrides.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class = \"jumbotron\">
            <h1>Library Web App</h1>
            ";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "has", array(0 => "user"), "method")) {
            // line 17
            echo "                <p class=\"user_info\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "getUsername", array(), "method"), "html", null, true);
            echo "
                    ";
            // line 19
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "getLibrarian", array(), "method")) {
                // line 20
                echo "                         (librarian)
                    ";
            } else {
                // line 22
                echo "                         (student)
                    ";
            }
            // line 24
            echo "                </p>
                <p class=\"user_info\">
                    <a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">logout</a>
                </p>
            ";
        }
        // line 29
        echo "        </div>
        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
    }

    // line 31
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
        return array (  113 => 31,  108 => 30,  103 => 10,  97 => 5,  91 => 32,  88 => 31,  86 => 30,  83 => 29,  77 => 26,  73 => 24,  69 => 22,  65 => 20,  63 => 19,  59 => 18,  56 => 17,  54 => 16,  45 => 11,  43 => 10,  38 => 8,  34 => 7,  29 => 5,  23 => 1,);
    }
}
