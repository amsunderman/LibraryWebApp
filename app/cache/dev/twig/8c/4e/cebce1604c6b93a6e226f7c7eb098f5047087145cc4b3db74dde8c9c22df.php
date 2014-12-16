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
\t<table border=\"1\">
\t<tr>
\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 6
            echo "\t\t\t<td>Shelf ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t</tr>

\t";
        // line 10
        $context["book_matrix"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "book_matrix"), "method");
        // line 11
        echo "
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "    \t<tr>
    \t\t";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 15
                echo "    \t\t\t<td>
    \t\t\t\t";
                // line 16
                if ($this->getAttribute($this->getAttribute((isset($context["book_matrix"]) ? $context["book_matrix"] : null), $context["j"], array(), "array", false, true), $context["i"], array(), "array", true, true)) {
                    // line 17
                    echo "    \t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("getBookDetails", array("bookid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["book_matrix"]) ? $context["book_matrix"] : $this->getContext($context, "book_matrix")), $context["j"], array(), "array"), $context["i"], array(), "array"), "getBookid", array(), "method"), "copyid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["book_matrix"]) ? $context["book_matrix"] : $this->getContext($context, "book_matrix")), $context["j"], array(), "array"), $context["i"], array(), "array"), "getCopyid", array(), "method"))), "html", null, true);
                    echo "\">
    \t\t\t\t\t\t";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "set", array(0 => "bookid", 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["book_matrix"]) ? $context["book_matrix"] : $this->getContext($context, "book_matrix")), $context["j"], array(), "array"), $context["i"], array(), "array"), "getBookid", array(), "method")), "method"), "html", null, true);
                    echo "
    \t\t\t\t\t\t";
                    // line 19
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("getTitle"));
                    echo "
    \t\t\t\t\t</a>
    \t\t\t\t";
                } else {
                    // line 22
                    echo "    \t\t\t\t\t...
    \t\t\t\t";
                }
                // line 24
                echo "    \t\t\t</td>
    \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    \t</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    ";
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "getLibrarian", array(), "method")) {
            // line 30
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
        // line 38
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/library.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 38,  107 => 30,  105 => 29,  102 => 28,  95 => 26,  88 => 24,  84 => 22,  78 => 19,  74 => 18,  69 => 17,  67 => 16,  64 => 15,  60 => 14,  57 => 13,  53 => 12,  50 => 11,  48 => 10,  44 => 8,  35 => 6,  31 => 5,  26 => 2,  20 => 1,);
    }
}
