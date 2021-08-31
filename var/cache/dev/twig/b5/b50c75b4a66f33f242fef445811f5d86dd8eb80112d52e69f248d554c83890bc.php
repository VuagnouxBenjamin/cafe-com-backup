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
        // line 56
        echo "    ";
        // line 57
        echo "    ";
        // line 58
        echo "
    ";
        // line 60
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.css"), "html", null, true);
        echo "\" type=\"text/css\">

    ";
        // line 63
        echo "    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\" integrity=\"sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm\" crossorigin=\"anonymous\">

    ";
        // line 66
        echo "    <div id=\"App-container\">

        ";
        // line 69
        echo "
        <div id=\"App-link\">
            <div id=\"App-text\">
                <h2 id=\"titre-h2\">D&eacute;couvrez toutes les fonctionnalit&eacute;s de notre application !</h2>
                <p id=\"App-description\">T&eacute;l&eacute;chargez-la vite et profites de 5% de remise suppl&eacute;mentaire sur
                    votre prochain achat.</p>
            </div>

            ";
        // line 78
        echo "
            <div id=\"App-button\">

                ";
        // line 82
        echo "
                <div id=\"App-qrcode\">
                    <a href='https://www.unitag.io/qrcode'>
                        <img src='https://www.unitag.io/qreator/generate?crs=Ppv8rOENN3V1lAwTz82zPpEYgrTpeQPpAxSJGcmyf1zqoOPAufHCjI4ccbj8leQIffpWitL50YSc%252FcPVAqhvQcY8L%252ByEXXE2GKn8SsxpZk4WZaQp7PKE7yfTgH2P3e9CKW00WL5%252F1cMS7FElOQtZuX8mpOG0vfXH1R11ooGrRdY%253D&crd=fhOysE0g3Bah%252BuqXA7NPQ87MoHrnzb%252BauJLKoOEbJsoOCuw%252BX4ighugFhTGaFhdwMowFnzz1VqZrff9HkhEKAQ%253D%253D' alt='QR Code'/>
                    </a>
                </div>

                <div id=\"App-column\">

                    ";
        // line 92
        echo "
                    <div id=\"text-button\">
                        <p id=\"grey-text\">Visez le QR Code avec la cam&eacute;ra de votre smartphone et t&eacute;l&eacute;chargez l'application mobile gratuite.</p>
                    </div>

                    ";
        // line 98
        echo "
                    <div id=\"App-container-icons\">
                        <div class=\"button-icons\">
                            <i  class=\"fab fa-apple icons\"></i>
                            <a class=\"icons\" href=\"https://www.apple.com/fr/app-store/\" target=\"_blank\" title=\"app-store\">Download on the<br><span class=\"icons-bold\">App Store</span></a>
                        </div>
                        <div class=\"button-icons\">
                            <i class=\"fab fa-google-play icons\"></i>
                            <a class=\"icons\" href=\"https://play.google.com/store?gl=FR\"target=\"_blank\" title=\"google-play\">Get it on<br><span class=\"icons-bold\">Google Play</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 114
        echo "
        <div id=\"cafe_img\">
            <img class=\"smartphone\" src=\"/images/app/portable.png\"  alt=\"img-portable\">
        </div>
    </div>


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
        return array (  245 => 114,  228 => 98,  221 => 92,  210 => 82,  205 => 78,  195 => 69,  191 => 66,  187 => 63,  181 => 60,  178 => 58,  176 => 57,  174 => 56,  170 => 53,  159 => 50,  151 => 45,  145 => 42,  141 => 40,  137 => 39,  134 => 38,  128 => 35,  125 => 33,  123 => 32,  121 => 31,  103 => 14,  97 => 11,  94 => 9,  92 => 8,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

    {# ----------------------- #}
    {# ---      APP    ------- #}
    {# ----------------------- #}

    {# App Styles #}
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/app.css\") }}\" type=\"text/css\">

    {# Font Awesome link #}
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\" integrity=\"sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm\" crossorigin=\"anonymous\">

    {# App Html #}
    <div id=\"App-container\">

        {# first upper left text #}

        <div id=\"App-link\">
            <div id=\"App-text\">
                <h2 id=\"titre-h2\">D&eacute;couvrez toutes les fonctionnalit&eacute;s de notre application !</h2>
                <p id=\"App-description\">T&eacute;l&eacute;chargez-la vite et profites de 5% de remise suppl&eacute;mentaire sur
                    votre prochain achat.</p>
            </div>

            {# text Qr code and button#}

            <div id=\"App-button\">

                {# Qr Code #}

                <div id=\"App-qrcode\">
                    <a href='https://www.unitag.io/qrcode'>
                        <img src='https://www.unitag.io/qreator/generate?crs=Ppv8rOENN3V1lAwTz82zPpEYgrTpeQPpAxSJGcmyf1zqoOPAufHCjI4ccbj8leQIffpWitL50YSc%252FcPVAqhvQcY8L%252ByEXXE2GKn8SsxpZk4WZaQp7PKE7yfTgH2P3e9CKW00WL5%252F1cMS7FElOQtZuX8mpOG0vfXH1R11ooGrRdY%253D&crd=fhOysE0g3Bah%252BuqXA7NPQ87MoHrnzb%252BauJLKoOEbJsoOCuw%252BX4ighugFhTGaFhdwMowFnzz1VqZrff9HkhEKAQ%253D%253D' alt='QR Code'/>
                    </a>
                </div>

                <div id=\"App-column\">

                    {# Grey text bottom #}

                    <div id=\"text-button\">
                        <p id=\"grey-text\">Visez le QR Code avec la cam&eacute;ra de votre smartphone et t&eacute;l&eacute;chargez l'application mobile gratuite.</p>
                    </div>

                    {# link icons and textlink #}

                    <div id=\"App-container-icons\">
                        <div class=\"button-icons\">
                            <i  class=\"fab fa-apple icons\"></i>
                            <a class=\"icons\" href=\"https://www.apple.com/fr/app-store/\" target=\"_blank\" title=\"app-store\">Download on the<br><span class=\"icons-bold\">App Store</span></a>
                        </div>
                        <div class=\"button-icons\">
                            <i class=\"fab fa-google-play icons\"></i>
                            <a class=\"icons\" href=\"https://play.google.com/store?gl=FR\"target=\"_blank\" title=\"google-play\">Get it on<br><span class=\"icons-bold\">Google Play</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {# img smartphone right #}

        <div id=\"cafe_img\">
            <img class=\"smartphone\" src=\"/images/app/portable.png\"  alt=\"img-portable\">
        </div>
    </div>


{% endblock %}
", "home/index.html.twig", "/home/miguigno/Desktop/projet_cafe.com/templates/home/index.html.twig");
    }
}
