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
\t<table border=\"1\">
\t<tr>
\t\t<td>
\t\t\tBook ID
\t\t</td>
\t\t<td>
\t\t\t";
        // line 11
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
        // line 19
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
        // line 27
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
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "getAuthor", array(), "method"), "html", null, true);
        echo "
\t\t</td>
\t</tr>

\t";
        // line 39
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "getLibrarian", array(), "method")) {
            // line 40
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteBook", array("bookid" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "getBookid", array(), "method"))), "html", null, true);
            echo "\">
\t\t\tDelete Book
\t\t</a>
\t";
        } else {
            // line 44
            echo "\t\t";
            if ((isset($context["loaned_out"]) ? $context["loaned_out"] : $this->getContext($context, "loaned_out"))) {
                // line 45
                echo "\t\t\t";
                if ((isset($context["loaned_out_by_me"]) ? $context["loaned_out_by_me"] : $this->getContext($context, "loaned_out_by_me"))) {
                    // line 46
                    echo "\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("returnBook", array("copyid" => (isset($context["copyid"]) ? $context["copyid"] : $this->getContext($context, "copyid")))), "html", null, true);
                    echo "\">
\t\t\t\t\tReturn Book
\t\t\t\t</a>
\t\t\t";
                } else {
                    // line 50
                    echo "\t\t\t\tChecked Out
\t\t\t";
                }
                // line 52
                echo "\t\t";
            } else {
                // line 53
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("checkoutBook", array("copyid" => (isset($context["copyid"]) ? $context["copyid"] : $this->getContext($context, "copyid")))), "html", null, true);
                echo "\">
\t\t\t\tBurrow Book
\t\t\t</a>
\t\t";
            }
            // line 57
            echo "\t";
        }
        // line 58
        echo "
\t<br>
\t<a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Back to Library</a>


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
        return array (  126 => 60,  122 => 58,  119 => 57,  111 => 53,  108 => 52,  104 => 50,  96 => 46,  93 => 45,  90 => 44,  82 => 40,  80 => 39,  73 => 35,  62 => 27,  51 => 19,  40 => 11,  31 => 4,  28 => 3,);
    }
}
