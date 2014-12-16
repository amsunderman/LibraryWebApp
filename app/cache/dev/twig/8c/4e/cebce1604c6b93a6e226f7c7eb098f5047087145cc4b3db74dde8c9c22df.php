<?php

/* default/library.html.twig */
class __TwigTemplate_8c4ecebce1604c6b93a6e226f7c7eb098f5047087145cc4b3db74dde8c9c22df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "
    ";
        // line 4
        echo "\t<table border=\"1\">
\t<tr>
\t\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "\t\t\t<td>Shelf ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</tr>

    ";
        // line 12
        echo "\t";
        $context["book_matrix"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "book_matrix"), "method");
        // line 13
        echo "
    ";
        // line 15
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "    \t<tr>
    \t\t";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 18
                echo "    \t\t\t<td>
    \t\t\t\t";
                // line 19
                if ($this->getAttribute($this->getAttribute((isset($context["book_matrix"]) ? $context["book_matrix"] : null), $context["j"], array(), "array", false, true), $context["i"], array(), "array", true, true)) {
                    // line 20
                    echo "    \t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("getBookDetails", array("bookid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["book_matrix"]) ? $context["book_matrix"] : $this->getContext($context, "book_matrix")), $context["j"], array(), "array"), $context["i"], array(), "array"), "getBookid", array(), "method"), "copyid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["book_matrix"]) ? $context["book_matrix"] : $this->getContext($context, "book_matrix")), $context["j"], array(), "array"), $context["i"], array(), "array"), "getCopyid", array(), "method"))), "html", null, true);
                    echo "\">
    \t\t\t\t\t\t";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "set", array(0 => "bookid", 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["book_matrix"]) ? $context["book_matrix"] : $this->getContext($context, "book_matrix")), $context["j"], array(), "array"), $context["i"], array(), "array"), "getBookid", array(), "method")), "method"), "html", null, true);
                    echo "
    \t\t\t\t\t\t";
                    // line 22
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("getTitle"));
                    echo "
    \t\t\t\t\t</a>
    \t\t\t\t";
                } else {
                    // line 25
                    echo "    \t\t\t\t\t...
    \t\t\t\t";
                }
                // line 27
                echo "    \t\t\t</td>
    \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    \t</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    ";
        // line 33
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "getLibrarian", array(), "method")) {
            // line 34
            echo "    \t<form name=\"addbook\" action=\"";
            echo $this->env->getExtension('routing')->getPath("addBook");
            echo "\" method=\"post\">
\t\t\tBook ID: <input type=\"text\" name=\"bookid\"><br>
\t\t\tBook Name: <input type=\"text\" name=\"name\"><br>
\t\t\tBook Author: <input type=\"text\" name=\"author\"><br>
\t\t\tNumber Copies: <input type=\"text\" name=\"numcopies\"><br>
\t\t\t<input type=\"submit\" value=\"Add Book\">
\t\t</form>
    ";
        }
        // line 42
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/library.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  112 => 34,  109 => 33,  106 => 31,  99 => 29,  92 => 27,  88 => 25,  82 => 22,  78 => 21,  73 => 20,  71 => 19,  68 => 18,  64 => 17,  61 => 16,  56 => 15,  53 => 13,  50 => 12,  46 => 9,  37 => 7,  33 => 6,  29 => 4,  26 => 2,  20 => 1,);
    }
}
