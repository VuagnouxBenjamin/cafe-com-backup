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

/* base.html.twig */
class __TwigTemplate_ccc1a362447d6bd975ef11daf7ef0a6cea075ec7489739c86d7d70c17218f38b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 10
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
    ";
        // line 15
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\">


    ";
        // line 19
        echo "    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=ABeeZee&display=swap\" rel=\"stylesheet\">

    ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "</head>
<body>
";
        // line 29
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/navbar.css"), "html", null, true);
        echo "\" type=\"text/css\">
";
        // line 31
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/navbar.js"), "html", null, true);
        echo "\" defer></script>
<nav>
    <div class=\"to-hide nav-l2\">
        <div>
            <ul>
                <li><a href=\"#\" class=\"first-nav-item\">Livraison & Paiement</a></li>
            </ul>
        </div>
        <div class=\"nav-center\">
            <ul>
                <li><a href=\"#\" class=\"nav-item\">Fidélité</a></li>
                <li><a href=\"#\" class=\"nav-item\">Actualités</a></li>
                <li><a href=\"#\" class=\"nav-item\">Avis</a></li>
                <li><a href=\"#\" class=\"nav-item\">A propos</a></li>
            </ul>
        </div>
        <div>
            <ul>
                <li><a href=\"#\" class=\"nav-item\">Inscription</a></li>
                <li><a href=\"#\" class=\"last-nav-item\">Mon compte</a></li>
            </ul>
        </div>
    </div>
    <div class=\"nav-l1\">
        <div class=\"mobile-only first-nav-item\" id=\"burger\" hidden>
            <a href=\"#\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/navbar/mobile_hamburger_logo.svg"), "html", null, true);
        echo "\"
                             alt=\"Cliquez ici pour ouvrir la navigation mobile\"></a>
        </div>
        <div class=\"nav-left\">
            <ul><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"first-nav-item\" id=\"main-logo\">Café<span class=\"accent-brow\">.com</span></a></ul>
        </div>
        <div class=\"to-hide\">
            <ul class=\"nav-center\">
                <li><a href=\"#\" class=\"nav-item\">Sélection du moment</a></li>
                <li><a href=\"#\" class=\"nav-item\">Nouveautés</a></li>
                <li><a href=\"#\" class=\"nav-item\">Cadeaux</a></li>
                <li><a href=\"#\" class=\"nav-item test\">Promotions</a></li>
            </ul>
        </div>
        <div class=\"nav-right to-hide\">
            <ul>
                <li>
                    <a href=\"#\" class=\"nav-item nav-logo nav-search\"><img
                                src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/navbar/search_logo.svg"), "html", null, true);
        echo "\"
                                alt=\"Rechercher un élément sur le site\"></a>
                </li>
                <li>
                    <a href=\"#\" class=\"last-nav-item nav-logo\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/navbar/cart_logo.svg"), "html", null, true);
        echo "\"
                                                                    alt=\"Aller vers votre panier\"></a>
                </li>
            </ul>
        </div>
        <div class=\"mobile-only\" hidden>
            <a href=\"#\" class=\"last-nav-item nav-logo\"><img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/navbar/mobile_cart_logo.svg"), "html", null, true);
        echo "\"
                                                            alt=\"Aller vers votre panier\"></a>
        </div>
    </div>
</nav>

";
        // line 91
        echo "<div id=\"sidebar\">
    <div id=\"sidebar-75\">
        <div id=\"side-l1\">
            <ul>
                <li><a href=\"#\" class=\"side-item\">Sélection du moment</a></li>
                <li><a href=\"#\" class=\"side-item\">Nouveautés</a></li>
                <li><a href=\"#\" class=\"side-item\">Cadeaux</a></li>
                <li><a href=\"#\" class=\"side-item\">Promotions</a></li>
                <li><a href=\"#\" class=\"side-item\">Recherche</a></li>
            </ul>
        </div>
        <div id=\"side-l2\">
            <ul>
                <li><a href=\"#\" class=\"nav-item\">Livraison & Paiements</a></li>
                <li><a href=\"#\" class=\"nav-item\">Fidélité</a></li>
                <li><a href=\"#\" class=\"nav-item\">Actualités</a></li>
                <li><a href=\"#\" class=\"nav-item\">Avis</a></li>
                <li><a href=\"#\" class=\"nav-item\">A propos</a></li>
            </ul>
        </div>
        <div id=\"side-l3\">
            <a href=\"#\" class=\"btn-box\">Inscription</a>
            <a href=\"#\" class=\"btn-box\">Mon compte</a>
        </div>
    </div>
    <div id=\"sidebar-window\">
        ";
        // line 118
        echo "    </div>
</div>

";
        // line 121
        $this->displayBlock('body', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        if (array_key_exists("email_form", $context)) {
            // line 124
            echo "    ";
            // line 125
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/footer.css"), "html", null, true);
            echo "\">

    <footer id=\"main-footer\">
        <h2 class=\"footer-title\">Recevez l’actualité café.com par e-mail</h2>
        <p class=\"footer-subtitle\">Inscrivez-vous ici</p>
        ";
            // line 130
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["email_form"]) || array_key_exists("email_form", $context) ? $context["email_form"] : (function () { throw new RuntimeError('Variable "email_form" does not exist.', 130, $this->source); })()), 'form_start');
            echo "
        <div class=\"footer-input\">
            ";
            // line 132
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["email_form"]) || array_key_exists("email_form", $context) ? $context["email_form"] : (function () { throw new RuntimeError('Variable "email_form" does not exist.', 132, $this->source); })()), "email", [], "any", false, false, false, 132), 'widget');
            echo "
            <button type=\"submit\" class=\"footer-submit\">S'abonner</button>
        </div>
        ";
            // line 135
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["email_form"]) || array_key_exists("email_form", $context) ? $context["email_form"] : (function () { throw new RuntimeError('Variable "email_form" does not exist.', 135, $this->source); })()), 'form_end');
            echo "
        <p class=\"footer-small\">En cliquant sur S'abonner vous acceptez <br> les <a href=\"#\" class=\"underline-a\">conditions
                d'utilisations.</a></p>
        <div id=\"footer-links\">
            <ul>
                <li><a href=\"#\">Conditions générales de vente</a></li>
                <li><a href=\"#\">Charte de protection</a></li>
                <li><a href=\"#\">Recrutement</a></li>
                <li><a href=\"#\">Contacts</a></li>
            </ul>
        </div>
    </footer>
";
        }
        // line 148
        echo "
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        ";
        // line 12
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "        ";
        // line 25
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  321 => 121,  311 => 25,  309 => 24,  299 => 23,  289 => 12,  287 => 11,  277 => 10,  258 => 7,  245 => 148,  229 => 135,  223 => 132,  218 => 130,  209 => 125,  207 => 124,  205 => 123,  202 => 122,  200 => 121,  195 => 118,  167 => 91,  158 => 84,  149 => 78,  142 => 74,  125 => 60,  118 => 56,  89 => 31,  84 => 29,  80 => 26,  78 => 23,  72 => 19,  65 => 15,  62 => 13,  59 => 10,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>{% block title %}Welcome!{% endblock %}</title>
    {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
    {% block stylesheets %}
        {# {{ encore_entry_link_tags('app') }} #}
    {% endblock %}

    {# base CSS #}
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/base.css\") }}\" type=\"text/css\">


    {# font import #}
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=ABeeZee&display=swap\" rel=\"stylesheet\">

    {% block javascripts %}
        {# {{ encore_entry_script_tags('app') }} #}
    {% endblock %}
</head>
<body>
{# Navbar CSS #}
<link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/navbar.css\") }}\" type=\"text/css\">
{# navbar JS #}
<script src=\"{{ asset(\"assets/js/navbar.js\") }}\" defer></script>
<nav>
    <div class=\"to-hide nav-l2\">
        <div>
            <ul>
                <li><a href=\"#\" class=\"first-nav-item\">Livraison & Paiement</a></li>
            </ul>
        </div>
        <div class=\"nav-center\">
            <ul>
                <li><a href=\"#\" class=\"nav-item\">Fidélité</a></li>
                <li><a href=\"#\" class=\"nav-item\">Actualités</a></li>
                <li><a href=\"#\" class=\"nav-item\">Avis</a></li>
                <li><a href=\"#\" class=\"nav-item\">A propos</a></li>
            </ul>
        </div>
        <div>
            <ul>
                <li><a href=\"#\" class=\"nav-item\">Inscription</a></li>
                <li><a href=\"#\" class=\"last-nav-item\">Mon compte</a></li>
            </ul>
        </div>
    </div>
    <div class=\"nav-l1\">
        <div class=\"mobile-only first-nav-item\" id=\"burger\" hidden>
            <a href=\"#\"><img src=\"{{ asset('images/navbar/mobile_hamburger_logo.svg') }}\"
                             alt=\"Cliquez ici pour ouvrir la navigation mobile\"></a>
        </div>
        <div class=\"nav-left\">
            <ul><a href=\"{{ path(\"home\") }}\" class=\"first-nav-item\" id=\"main-logo\">Café<span class=\"accent-brow\">.com</span></a></ul>
        </div>
        <div class=\"to-hide\">
            <ul class=\"nav-center\">
                <li><a href=\"#\" class=\"nav-item\">Sélection du moment</a></li>
                <li><a href=\"#\" class=\"nav-item\">Nouveautés</a></li>
                <li><a href=\"#\" class=\"nav-item\">Cadeaux</a></li>
                <li><a href=\"#\" class=\"nav-item test\">Promotions</a></li>
            </ul>
        </div>
        <div class=\"nav-right to-hide\">
            <ul>
                <li>
                    <a href=\"#\" class=\"nav-item nav-logo nav-search\"><img
                                src=\"{{ asset(\"images/navbar/search_logo.svg\") }}\"
                                alt=\"Rechercher un élément sur le site\"></a>
                </li>
                <li>
                    <a href=\"#\" class=\"last-nav-item nav-logo\"><img src=\"{{ asset(\"images/navbar/cart_logo.svg\") }}\"
                                                                    alt=\"Aller vers votre panier\"></a>
                </li>
            </ul>
        </div>
        <div class=\"mobile-only\" hidden>
            <a href=\"#\" class=\"last-nav-item nav-logo\"><img src=\"{{ asset(\"images/navbar/mobile_cart_logo.svg\") }}\"
                                                            alt=\"Aller vers votre panier\"></a>
        </div>
    </div>
</nav>

{# Side bar #}
<div id=\"sidebar\">
    <div id=\"sidebar-75\">
        <div id=\"side-l1\">
            <ul>
                <li><a href=\"#\" class=\"side-item\">Sélection du moment</a></li>
                <li><a href=\"#\" class=\"side-item\">Nouveautés</a></li>
                <li><a href=\"#\" class=\"side-item\">Cadeaux</a></li>
                <li><a href=\"#\" class=\"side-item\">Promotions</a></li>
                <li><a href=\"#\" class=\"side-item\">Recherche</a></li>
            </ul>
        </div>
        <div id=\"side-l2\">
            <ul>
                <li><a href=\"#\" class=\"nav-item\">Livraison & Paiements</a></li>
                <li><a href=\"#\" class=\"nav-item\">Fidélité</a></li>
                <li><a href=\"#\" class=\"nav-item\">Actualités</a></li>
                <li><a href=\"#\" class=\"nav-item\">Avis</a></li>
                <li><a href=\"#\" class=\"nav-item\">A propos</a></li>
            </ul>
        </div>
        <div id=\"side-l3\">
            <a href=\"#\" class=\"btn-box\">Inscription</a>
            <a href=\"#\" class=\"btn-box\">Mon compte</a>
        </div>
    </div>
    <div id=\"sidebar-window\">
        {# opacity black #}
    </div>
</div>

{% block body %}{% endblock %}

{% if email_form is defined %}
    {# Footer CSS #}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/footer.css') }}\">

    <footer id=\"main-footer\">
        <h2 class=\"footer-title\">Recevez l’actualité café.com par e-mail</h2>
        <p class=\"footer-subtitle\">Inscrivez-vous ici</p>
        {{ form_start(email_form) }}
        <div class=\"footer-input\">
            {{ form_widget(email_form.email ) }}
            <button type=\"submit\" class=\"footer-submit\">S'abonner</button>
        </div>
        {{ form_end(email_form) }}
        <p class=\"footer-small\">En cliquant sur S'abonner vous acceptez <br> les <a href=\"#\" class=\"underline-a\">conditions
                d'utilisations.</a></p>
        <div id=\"footer-links\">
            <ul>
                <li><a href=\"#\">Conditions générales de vente</a></li>
                <li><a href=\"#\">Charte de protection</a></li>
                <li><a href=\"#\">Recrutement</a></li>
                <li><a href=\"#\">Contacts</a></li>
            </ul>
        </div>
    </footer>
{% endif %}

</body>
</html>
", "base.html.twig", "/home/miguigno/Desktop/projet_cafe.com/templates/base.html.twig");
    }
}
