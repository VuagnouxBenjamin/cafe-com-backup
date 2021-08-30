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

/* home/index.html.twig */
class __TwigTemplate_abc49deb31b6c9685acf6ddcb361b55ecd1ee5c8dcc780e170cd510cfac778d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Votre expert café fair trade & bio sourcé - café.com";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        // line 9
        echo "
    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/hero.css"), "html", null, true);
        echo "\" type=\"text/css\">

    ";
        // line 14
        echo "    <div id=\"hero-banner\">
        <div id=\"hero-text\">
            <h2>Découvrez un nouveau café exotique</h2>
            <p id=\"hero-description\">L'arôme délicat de la noix de coco donne de la douceur au goût riche du café. Le
                duo exotique vous plongera
                dans l'atmosphère de vacances à la plage et vous transportera sur la côte paradisiaque.</p>
            <a href=\"#\" class=\"hero-btn button-shadow\">Voir la promotion</a>
        </div>
    </div>
    <div id=\"hero-banner-mobile\">
        <h2>
            Les cafés du moment...
        </h2>
    </div>


    ";
        // line 31
        echo "    ";
        // line 32
        echo "    ";
        // line 33
        echo "
    ";
        // line 35
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/categories.css"), "html", null, true);
        echo "\" type=\"text/css\">

    ";
        // line 38
        echo "    <div id=\"categorie-container\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 40
            echo "            <div class=\"category-card\">
                <h2 class=\"cat-title\">
                    ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nomCategorie", [], "any", false, false, false, 42), "html", null, true);
            echo "
                </h2>
                <p class=\"cat-description\">
                    ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "descCategorie", [], "any", false, false, false, 45), "html", null, true);
            echo "
                </p>
                <button class=\"cat-btn button-shadow\">
                    Details
                </button>
                <img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["categorie"], "categorieImage", [], "any", false, false, false, 50)), "html", null, true);
            echo "\" alt=\"Image de description de la categorie : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nomCategorie", [], "any", false, false, false, 50), "html", null, true);
            echo "\" class=\"cat-img\">
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 53,  159 => 50,  151 => 45,  145 => 42,  141 => 40,  137 => 39,  134 => 38,  128 => 35,  125 => 33,  123 => 32,  121 => 31,  103 => 14,  97 => 11,  94 => 9,  92 => 8,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre expert café fair trade & bio sourcé - café.com{% endblock %}

{% block body %}
    {# ----------------------- #}
    {# ---      HERO BANNER #}
    {# ----------------------- #}

    {# Hero Banner Style #}
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/hero.css\") }}\" type=\"text/css\">

    {# Hero Banner HTML #}
    <div id=\"hero-banner\">
        <div id=\"hero-text\">
            <h2>Découvrez un nouveau café exotique</h2>
            <p id=\"hero-description\">L'arôme délicat de la noix de coco donne de la douceur au goût riche du café. Le
                duo exotique vous plongera
                dans l'atmosphère de vacances à la plage et vous transportera sur la côte paradisiaque.</p>
            <a href=\"#\" class=\"hero-btn button-shadow\">Voir la promotion</a>
        </div>
    </div>
    <div id=\"hero-banner-mobile\">
        <h2>
            Les cafés du moment...
        </h2>
    </div>


    {# ----------------------- #}
    {# ---      CATEGORIES     #}
    {# ----------------------- #}

    {# Categories Style #}
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/categories.css\") }}\" type=\"text/css\">

    {# Categories HTML #}
    <div id=\"categorie-container\">
        {% for categorie in categories %}
            <div class=\"category-card\">
                <h2 class=\"cat-title\">
                    {{ categorie.nomCategorie }}
                </h2>
                <p class=\"cat-description\">
                    {{ categorie.descCategorie }}
                </p>
                <button class=\"cat-btn button-shadow\">
                    Details
                </button>
                <img src=\"{{ asset(categorie.categorieImage) }}\" alt=\"Image de description de la categorie : {{ categorie.nomCategorie }}\" class=\"cat-img\">
            </div>
        {% endfor %}
    </div>

{% endblock %}
", "home/index.html.twig", "/home/benj/Bureau/Sites/SYMFONY/fil_rouge_cafe/templates/home/index.html.twig");
    }
}
