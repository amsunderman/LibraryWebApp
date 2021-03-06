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
\t\t\t<div class=\"row\">
                <div class=\"col-md-4\">
                </div>
                <div class=\"col-md-4 centered\">
                    <img id=\"logo\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" style=\"width:25em; padding-top:3em\" />
                </div>
\t\t\t\t";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "has", array(0 => "user"), "method")) {
            // line 24
            echo "\t\t\t\t\t<div class=\"col-md-4 centered\">
\t\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "getUsername", array(), "method"), "html", null, true);
            echo "
\t\t\t\t\t\t";
            // line 26
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "getLibrarian", array(), "method")) {
                // line 27
                echo "\t\t\t\t\t\t\t (librarian)
\t\t\t\t\t\t";
            } else {
                // line 29
                echo "\t\t\t\t\t\t\t (student)
\t\t\t\t\t\t";
            }
            // line 30
            echo "<br/>
                        <a class=\"headerLink\" href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">logout</a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t";
        }
        // line 35
        echo "            </div>
        </div>

        ";
        // line 39
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
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

    // line 39
    public function block_body($context, array $blocks = array())
    {
    }

    // line 40
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
        return array (  127 => 40,  122 => 39,  117 => 11,  111 => 5,  105 => 41,  102 => 40,  99 => 39,  94 => 35,  87 => 31,  84 => 30,  80 => 29,  76 => 27,  74 => 26,  70 => 25,  67 => 24,  65 => 23,  60 => 21,  53 => 16,  46 => 12,  44 => 11,  39 => 9,  34 => 8,  29 => 5,  23 => 1,);
    }
}
