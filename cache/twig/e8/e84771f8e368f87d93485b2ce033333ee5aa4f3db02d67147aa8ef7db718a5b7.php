<?php

/* modular/header.html.twig */
class __TwigTemplate_f719f08ad2c8eedcdc517c87a9c151b0ac8a175aa03ec37a39a2c287cca4697c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header class=\"special container\">
    <span class=\"icon fa-";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "icon", array());
        echo "\"></span>
    <h2>";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h2>
    ";
        // line 4
        echo ($context["content"] ?? null);
        echo "
</header>";
    }

    public function getTemplateName()
    {
        return "modular/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"special container\">
    <span class=\"icon fa-{{ page.header.icon }}\"></span>
    <h2>{{ page.header.title }}</h2>
    {{ content }}
</header>", "modular/header.html.twig", "E:\\emmanuelchristianchurch\\user\\themes\\twenty\\templates\\modular\\header.html.twig");
    }
}
