<?php

/* default/bookdetails.html.twig */
class __TwigTemplate_23ec47948e33013ee5a426c851317e63d1bc09f2e2d4a2c6139dd83c7cf333a4 extends Twig_Template
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
\t";
        // line 6
        echo "\t<div class=\"col-md-6\">
\t<table class=\"table\" border=\"1\">
\t<tr>
\t\t<td>
\t\t\tBook ID
\t\t</td>
\t\t<td>
\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "getBookid", array(), "method"), "html", null, true);
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\tCopy ID
\t\t</td>
\t\t<td>
\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["copyid"]) ? $context["copyid"] : $this->getContext($context, "copyid")), "html", null, true);
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\tTitle
\t\t</td>
\t\t<td>
\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "getBooktitle", array(), "method"), "html", null, true);
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\tAuthor
\t\t</td>
\t\t<td>
\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "getAuthor", array(), "method"), "html", null, true);
        echo "
\t\t</td>
\t</tr>
\t</div>
\t<div class=\"col-md-4\">
\t";
        // line 43
        echo "\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "getLibrarian", array(), "method")) {
            // line 44
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteBook", array("bookid" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "getBookid", array(), "method"))), "html", null, true);
            echo "\">
\t\t\tDelete Book
\t\t</a>

\t";
            // line 49
            echo "\t";
        } else {
            // line 50
            echo "\t\t";
            // line 53
            echo "\t\t";
            if ((isset($context["loaned_out"]) ? $context["loaned_out"] : $this->getContext($context, "loaned_out"))) {
                // line 54
                echo "\t\t\t";
                if ((isset($context["loaned_out_by_me"]) ? $context["loaned_out_by_me"] : $this->getContext($context, "loaned_out_by_me"))) {
                    // line 55
                    echo "\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnBook", array("copyid" => (isset($context["copyid"]) ? $context["copyid"] : $this->getContext($context, "copyid")))), "html", null, true);
                    echo "\">
\t\t\t\t\tReturn Book
\t\t\t\t</a>
\t\t\t";
                } else {
                    // line 59
                    echo "\t\t\t\tChecked Out
\t\t\t";
                }
                // line 61
                echo "\t\t";
                // line 62
                echo "\t\t";
            } else {
                // line 63
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("checkoutBook", array("copyid" => (isset($context["copyid"]) ? $context["copyid"] : $this->getContext($context, "copyid")))), "html", null, true);
                echo "\">
\t\t\t\tBorrow Book
\t\t\t</a>
\t\t";
            }
            // line 67
            echo "\t";
        }
        // line 68
        echo "\t<br>

\t";
        // line 71
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Back to Library</a>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "default/bookdetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 71,  134 => 68,  131 => 67,  123 => 63,  120 => 62,  118 => 61,  114 => 59,  106 => 55,  103 => 54,  100 => 53,  98 => 50,  95 => 49,  87 => 44,  84 => 43,  76 => 37,  65 => 29,  54 => 21,  43 => 13,  34 => 6,  31 => 4,  28 => 3,);
    }
}
