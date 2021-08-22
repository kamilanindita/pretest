<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mod_page_about-us.phtml */
class __TwigTemplate_02852e09e987a91e5c5ea66bb6cb6a49ffc25de8261dd042b8e220fca2d06ae1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_page_about-us.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("About us");
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-quote\"></span></div>
        <h2>";
        // line 9
        echo gettext("About us");
        echo "</h2>
        <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
    </div>
    <div class=\"block\">
        <div class=\"box\">
            ";
        // line 14
        echo twig_bbmd_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "note", [], "any", false, false, false, 14));
        echo "
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_page_about-us.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  67 => 10,  63 => 9,  57 => 5,  53 => 4,  46 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% block meta_title %}{% trans 'About us' %}{% endblock %}

{% block content %}

<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-quote\"></span></div>
        <h2>{% trans 'About us' %}</h2>
        <p>{{ company.signature }}</p>
    </div>
    <div class=\"block\">
        <div class=\"box\">
            {{ company.note|bbmd }}
        </div>
    </div>
</div>

{% endblock %}", "mod_page_about-us.phtml", "/var/www/public/bb-themes/boxbilling/html/mod_page_about-us.phtml");
    }
}
