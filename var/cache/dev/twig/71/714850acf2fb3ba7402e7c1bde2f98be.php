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

/* user/secretaire.html.twig */
class __TwigTemplate_3ad977f6e3473b3234d3da6a41ca22e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'container' => [$this, 'block_container'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/secretaire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/secretaire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/secretaire.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Profile patient!
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 7
        echo "        <nav class=\"navbar navbar-expand-lg bg-color fixed-top\" style=\"background-color: #007bff;\">
            <div class=\"container-fluid d-flex justify-content-between align-items-center\">
                <div>
                    <a class=\"navbar-brand\" href=\"#\">
                        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Labo-logo.png"), "html", null, true);
        echo "\" width=\"100px\">
                    </a>
                </div>
                <h1 style=\"color: white; text-transform: uppercase; font-size: 2em; font-family: 'Kdam Thmor Pro', sans-serif;\">Laboratoire médicale</h1>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
    
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-uppercase ";
        // line 22
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", ["_route"], "method", false, false, false, 22) == "app_home")) ? ("active") : (""));
        echo "\" href=\"#1\" style=\"color: white; margin-right:1em; font-size: 1em;\">
                                <i class=\"bi bi-person-circle\"></i>
                                ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "username", [], "any", false, false, false, 24), "html", null, true);
        echo "
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <section style=\"margin-top: 100px;\">
            <div class=\"d-flex align-items-start\">
                <div class=\"nav flex-column nav-pills me-3\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                    <button class=\"nav-link active\" id=\"v-pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-home\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">Home</button>
                    <button class=\"nav-link\" id=\"v-pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Profile</button>
                    <button class=\"nav-link\" id=\"v-pills-disabled-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-disabled\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-disabled\" aria-selected=\"false\">Mes Patient</button>
                    <button class=\"nav-link\" id=\"v-pills-messages-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-messages\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">mes Messages</button>
                    <button class=\"nav-link\" id=\"v-pills-settings-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-settings\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Parametrage</button>

                    ";
        // line 43
        echo "                    <button class=\"nav-link\" id=\"v-pills-creneaux-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-creneaux\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-creneaux\" aria-selected=\"false\">Gestion de créneaux</button>
                </div>

                <div class=\"tab-content\" id=\"v-pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\" tabindex=\"0\">Bienvenue secretaire</div>
                    <div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\" tabindex=\"0\">C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI</div>
                    <div class=\"tab-pane fade\" id=\"v-pills-disabled\" role=\"tabpanel\" aria-labelledby=\"v-pills-disabled-tab\" tabindex=\"0\">dETAIL</div>
                    <div class=\"tab-pane fade\" id=\"v-pills-messages\" role=\"tabpanel\" aria-labelledby=\"v-pills-messages-tab\" tabindex=\"0\">mes Messages</div>
                    <div class=\"tab-pane fade\" id=\"v-pills-settings\" role=\"tabpanel\" aria-labelledby=\"v-pills-settings-tab\" tabindex=\"0\">SETTING</div>

                    ";
        // line 54
        echo "                    <div class=\"tab-pane fade\" id=\"v-pills-creneaux\" role=\"tabpanel\" aria-labelledby=\"v-pills-creneaux-tab\" tabindex=\"0\">
                        <h2>Gestion de créneaux</h2>

                        ";
        // line 58
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "dateRV", [], "any", false, false, false, 59), 'row');
        echo "
                        <button type=\"submit\">Submit</button>
                        ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </section>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/secretaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 61,  157 => 59,  152 => 58,  147 => 54,  135 => 43,  114 => 24,  109 => 22,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

    {% block title %}Profile patient!
    {% endblock %}
    
    {% block container %}
        <nav class=\"navbar navbar-expand-lg bg-color fixed-top\" style=\"background-color: #007bff;\">
            <div class=\"container-fluid d-flex justify-content-between align-items-center\">
                <div>
                    <a class=\"navbar-brand\" href=\"#\">
                        <img src=\"{{ asset('images/Labo-logo.png') }}\" width=\"100px\">
                    </a>
                </div>
                <h1 style=\"color: white; text-transform: uppercase; font-size: 2em; font-family: 'Kdam Thmor Pro', sans-serif;\">Laboratoire médicale</h1>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
    
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_home' ? 'active' : '' }}\" href=\"#1\" style=\"color: white; margin-right:1em; font-size: 1em;\">
                                <i class=\"bi bi-person-circle\"></i>
                                {{ user.username }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <section style=\"margin-top: 100px;\">
            <div class=\"d-flex align-items-start\">
                <div class=\"nav flex-column nav-pills me-3\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                    <button class=\"nav-link active\" id=\"v-pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-home\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">Home</button>
                    <button class=\"nav-link\" id=\"v-pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Profile</button>
                    <button class=\"nav-link\" id=\"v-pills-disabled-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-disabled\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-disabled\" aria-selected=\"false\">Mes Patient</button>
                    <button class=\"nav-link\" id=\"v-pills-messages-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-messages\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">mes Messages</button>
                    <button class=\"nav-link\" id=\"v-pills-settings-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-settings\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Parametrage</button>

                    {# Add the new tab for \"Gestion de créneaux\" #}
                    <button class=\"nav-link\" id=\"v-pills-creneaux-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-creneaux\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-creneaux\" aria-selected=\"false\">Gestion de créneaux</button>
                </div>

                <div class=\"tab-content\" id=\"v-pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\" tabindex=\"0\">Bienvenue secretaire</div>
                    <div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\" tabindex=\"0\">C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI C'EST MOI</div>
                    <div class=\"tab-pane fade\" id=\"v-pills-disabled\" role=\"tabpanel\" aria-labelledby=\"v-pills-disabled-tab\" tabindex=\"0\">dETAIL</div>
                    <div class=\"tab-pane fade\" id=\"v-pills-messages\" role=\"tabpanel\" aria-labelledby=\"v-pills-messages-tab\" tabindex=\"0\">mes Messages</div>
                    <div class=\"tab-pane fade\" id=\"v-pills-settings\" role=\"tabpanel\" aria-labelledby=\"v-pills-settings-tab\" tabindex=\"0\">SETTING</div>

                    {# Add the content for the \"Gestion de créneaux\" tab #}
                    <div class=\"tab-pane fade\" id=\"v-pills-creneaux\" role=\"tabpanel\" aria-labelledby=\"v-pills-creneaux-tab\" tabindex=\"0\">
                        <h2>Gestion de créneaux</h2>

                        {# Render the CreneauType form #}
                        {{ form_start(form) }}
                        {{ form_row(form.dateRV) }}
                        <button type=\"submit\">Submit</button>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </section>
    {% endblock %}
    ", "user/secretaire.html.twig", "/Users/thiagohenriquedasilva/Downloads/Labo/templates/user/secretaire.html.twig");
    }
}
