<?php

/* default/test.html.twig */
class __TwigTemplate_86a771fc990910912442824a501f8c55239f5323d88cbdbfaf5ecc6f7b369704 extends Twig_Template
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
        echo "    Hello World!
";
    }

    public function getTemplateName()
    {
        return "default/test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
