<?php

/* partials/sidebar_article.html.twig */
class __TwigTemplate_6bd1d627aa7c135b7d1b04d5a5f50a575e22ef2ae341fe111b366573dbadaa56 extends Twig_Template
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
        echo "<div class=\"content\">
    <section>
        ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "featured_image", array())) {
            // line 4
            echo "            <a href=\"#\" class=\"image featured\"><img src=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "featured_image", array()), array(), "array"), "url", array());
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 6
        echo "        <header>
            <h3>";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h3>
        </header>
        ";
        // line 9
        echo ($context["content"] ?? null);
        echo "
    </section>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/sidebar_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  34 => 7,  31 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content\">
    <section>
        {% if page.header.featured_image %}
            <a href=\"#\" class=\"image featured\"><img src=\"{{ page.media[page.header.featured_image].url }}\" alt=\"\" /></a>
        {% endif %}
        <header>
            <h3>{{ page.header.title }}</h3>
        </header>
        {{ content }}
    </section>
</div>", "partials/sidebar_article.html.twig", "E:\\emmanuelchristianchurch\\user\\themes\\twenty\\templates\\partials\\sidebar_article.html.twig");
    }
}
