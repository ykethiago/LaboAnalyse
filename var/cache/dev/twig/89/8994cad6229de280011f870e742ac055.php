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
class __TwigTemplate_11146130a375a8e5aff0b18a7b84881f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Hello HomeController!
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
        echo "\t<nav id=\"nav-1\" class=\"navbar navbar-expand-lg bg-color fixed-top\" style=\"background-color: #007bff;\">
\t\t<div class=\"container-fluid d-flex justify-content-between align-items-center\">
\t\t\t<div>
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo1.jpg"), "html", null, true);
        echo "\" width=\"100px\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<h1 style=\"color: white; text-transform: uppercase; font-size: 2em; font-family: 'Kdam Thmor Pro', sans-serif;\">Laboratoire médicale</h1>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
        // line 22
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", ["_route"], "method", false, false, false, 22) == "app_home")) ? ("active") : (""));
        echo "\" href=\"#1\" style=\"color: white; margin-right:1em; font-size: 0.8em;\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
        // line 25
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "get", ["_route"], "method", false, false, false, 25) == "a_propos")) ? ("active") : (""));
        echo "\" href=\"#2\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">A Propos</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
        // line 28
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "get", ["_route"], "method", false, false, false, 28) == "services")) ? ("active") : (""));
        echo "\" href=\"#3\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Services</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
        // line 31
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "get", ["_route"], "method", false, false, false, 31) == "contact")) ? ("active") : (""));
        echo "\" href=\"#4\" style=\"color: white; margin-right:1em; font-size: 0.8em; margin-left:1em;\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
            // line 35
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "get", ["_route"], "method", false, false, false, 35) == "app_logout")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 37
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37)) {
                // line 38
                echo "\t\t\t\t\t\t\t";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SECRETAIRE")) {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
                    // line 40
                    echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "get", ["_route"], "method", false, false, false, 40) == "app_logout")) ? ("active") : (""));
                    echo "\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("secretaire");
                    echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PATIENT")) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
                    // line 44
                    echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "get", ["_route"], "method", false, false, false, 44) == "app_logout")) ? ("active") : (""));
                    echo "\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                    echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LABORANTIN")) {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
                    // line 48
                    echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "get", ["_route"], "method", false, false, false, 48) == "app_logout")) ? ("active") : (""));
                    echo "\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("laborantin");
                    echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t\t";
            }
            // line 52
            echo "
\t\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
            // line 55
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "get", ["_route"], "method", false, false, false, 55) == "app_login")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
            // line 58
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "get", ["_route"], "method", false, false, false, 58) == "app_register")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Inscription</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t<div data-bs-spy=\"scroll\" data-bs-target=\"nav-1\" data-bs-root-margin=\"0px 0px -40%\" data-bs-smooth-scroll=\"true\" class=\"scrollspy-example bg-body-tertiary p-3 rounded-2\" tabindex=\"0\">
\t\t<section id=\"1\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\" style=\"background: linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.1)), url('";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/imageA.png"), "html", null, true);
        echo "') no-repeat center/cover; height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center;\">
\t\t\t\t\t\t<div style=\"text-align: center; color: white;\">
\t\t\t\t\t\t\t<h1 style=\"font-size: 3em; color: #007bff;\">SOINS MÉDICAUX SANS RDV</h1>
\t\t\t\t\t\t\t<h3 style=\"font-size: 1.5em; color: #0056b3;\">POUR ADULTES ET ENFANTS</h3>
\t\t\t\t\t\t\t<p style=\"color: #003366;\">Lundi - Samedi : 7h00 - 19h30</p>
\t\t\t\t\t\t\t<p style=\"color: #00284d;\">Dimanche : 7h00 - 16h30</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"#\" style=\"display: inline-block; background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;\">Connection</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"2\" style=\"height: 100vh; background-color:;\">
\t\t\t<div class=\"container-fluid\" style=\"margin-left: 2em; margin-right: 2em; height: 100%; display: flex; align-items: center;\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-4\"></div>

\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t<div style=\"text-align: center; color: white; margin-bottom: 3em;\">
\t\t\t\t\t\t\t<h1 style=\"font-size: 3em; color: #007bff; margin-bottom: 2em; margin-top: 2em;\">A PROPOS</h1>
\t\t\t\t\t\t\t<p style=\"color: #003366; margin-bottom: 6em; text-align: center; \">Bienvenue chez LABO, votre partenaire de confiance pour des services d'analyse médicale de qualité. Forts de notre engagement envers l'excellence, nous sommes déterminés à fournir des résultats précis et rapides pour répondre à vos besoins de santé.Nous investissons continuellement dans les dernières technologies pour assurer la précision et la fiabilité de nos analyses. Notre laboratoire est équipé des instruments les plus modernes, gérés par une équipe de techniciens compétents.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-4\"></div>

\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t<h3 style=\"color: #007bff;\">
\t\t\t\t\t\t\t\t<div style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-heart-pulse\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tLaboratoire sur place
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t<h3 style=\"color: #007bff; \">
\t\t\t\t\t\t\t\t<div style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-hospital\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tOuvert 7 jours sur 7
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t<h3 style=\"color: #007bff;\">
\t\t\t\t\t\t\t\t<div style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-shield-check\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tNombreuses
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tmutuelles partenaires
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t<h3 style=\"color: #007bff;\">
\t\t\t\t\t\t\t\t<div style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-alarm\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tPeu d'attente
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t<h3 style=\"color: #007bff;\">
\t\t\t\t\t\t\t\t<div style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar2-check\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tAvec rendez-vous
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<section id=\"3\" style=\"height: 100vh; background-color: #f0f0f0;\">
\t\t\t<div class=\"container-fluid\" style=\"margin-left: 2em; margin-right: 2em; height: 100%; display: flex; align-items: center;\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-4\"></div>

\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t<div style=\"text-align: center; color: white; margin-bottom: 3em;\">
\t\t\t\t\t\t\t<h1 style=\"font-size: 3em; color: #007bff; margin-bottom: 2em; margin-top: 2em;\">SERVICES</h1>
\t\t\t\t\t\t\t<p style=\"color: #003366; margin-bottom: 6em; text-align: center;\">Bienvenue chez LABO, votre partenaire de confiance pour des services d'analyse médicale de qualité. Forts de notre engagement envers l'excellence, nous sommes déterminés à fournir des résultats précis et rapides pour répondre à vos besoins de santé. Nous investissons continuellement dans les dernières technologies pour assurer la précision et la fiabilité de nos analyses. Notre laboratoire est équipé des instruments les plus modernes, gérés par une équipe de techniciens compétents.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Bootstrap Card Integration -->
\t\t\t\t\t<div class=\"row row-cols-1 row-cols-md-3 g-4 justify-content-center\">
\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t<div class=\"card h-60\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image3.jpg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Radiographie et analyses</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t<div class=\"card h-60\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image4.jpg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Médecine du travail</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t<div class=\"card h-60\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image5.jpg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Vaccins pour l'étranger</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"4\" style=\"height: 70vh; background-color: #007bff; color: white; margin-top: 5vh;\">
\t\t\t<div>
\t\t\t\t<!-- FOOTER -->
\t\t\t\t<footer class=\"w-100 py-4 flex-shrink-0\">
\t\t\t\t\t<div class=\"container py-4\">
\t\t\t\t\t\t<div class=\"row gy-4 gx-5\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<h5 class=\"h1\">Labo.</h5>
\t\t\t\t\t\t\t\t<p class=\"small\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
\t\t\t\t\t\t\t\t<p class=\"small mb-0\">&copy; Copyrights. All rights reserved.
\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">Bootstrapious.com</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Quick links</h5>
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">About</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">Get started</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">FAQ</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Quick links</h5>
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">About</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">Get started</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">FAQ</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Newsletter</h5>
\t\t\t\t\t\t\t\t<p class=\"small\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Recipient's username\" aria-label=\"Recipient's username\" aria-describedby=\"button-addon2\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" id=\"button-addon2\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paper-plane\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t</div>
\t\t</section>


\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  348 => 187,  337 => 179,  326 => 171,  222 => 70,  211 => 61,  203 => 58,  195 => 55,  192 => 54,  188 => 52,  185 => 51,  177 => 48,  174 => 47,  166 => 44,  163 => 43,  155 => 40,  152 => 39,  149 => 38,  147 => 37,  140 => 35,  137 => 34,  135 => 33,  130 => 31,  124 => 28,  118 => 25,  112 => 22,  98 => 11,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!
{% endblock %}

{% block container %}
\t<nav id=\"nav-1\" class=\"navbar navbar-expand-lg bg-color fixed-top\" style=\"background-color: #007bff;\">
\t\t<div class=\"container-fluid d-flex justify-content-between align-items-center\">
\t\t\t<div>
\t\t\t\t<a class=\"navbar-brand\" href=\"{{path('app_home')}}\">
\t\t\t\t\t<img src=\"{{ asset('images/logo1.jpg') }}\" width=\"100px\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<h1 style=\"color: white; text-transform: uppercase; font-size: 2em; font-family: 'Kdam Thmor Pro', sans-serif;\">Laboratoire médicale</h1>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_home' ? 'active' : '' }}\" href=\"#1\" style=\"color: white; margin-right:1em; font-size: 0.8em;\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'a_propos' ? 'active' : '' }}\" href=\"#2\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">A Propos</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'services' ? 'active' : '' }}\" href=\"#3\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Services</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'contact' ? 'active' : '' }}\" href=\"#4\" style=\"color: white; margin-right:1em; font-size: 0.8em; margin-left:1em;\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_logout' ? 'active' : '' }}\" href=\"{{ path('app_logout') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t{% if is_granted('ROLE_SECRETAIRE') %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_logout' ? 'active' : '' }}\" href=\"{{ path('secretaire') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif is_granted('ROLE_PATIENT') %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_logout' ? 'active' : '' }}\" href=\"{{ path('admin') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif is_granted('ROLE_LABORANTIN') %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_logout' ? 'active' : '' }}\" href=\"{{ path('laborantin') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_login' ? 'active' : '' }}\" href=\"{{ path('app_login') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_register' ? 'active' : '' }}\" href=\"{{ path('app_register') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Inscription</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t<div data-bs-spy=\"scroll\" data-bs-target=\"nav-1\" data-bs-root-margin=\"0px 0px -40%\" data-bs-smooth-scroll=\"true\" class=\"scrollspy-example bg-body-tertiary p-3 rounded-2\" tabindex=\"0\">
\t\t<section id=\"1\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\" style=\"background: linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.1)), url('{{ asset('images/imageA.png') }}') no-repeat center/cover; height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center;\">
\t\t\t\t\t\t<div style=\"text-align: center; color: white;\">
\t\t\t\t\t\t\t<h1 style=\"font-size: 3em; color: #007bff;\">SOINS MÉDICAUX SANS RDV</h1>
\t\t\t\t\t\t\t<h3 style=\"font-size: 1.5em; color: #0056b3;\">POUR ADULTES ET ENFANTS</h3>
\t\t\t\t\t\t\t<p style=\"color: #003366;\">Lundi - Samedi : 7h00 - 19h30</p>
\t\t\t\t\t\t\t<p style=\"color: #00284d;\">Dimanche : 7h00 - 16h30</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"#\" style=\"display: inline-block; background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;\">Connection</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"2\" style=\"height: 100vh; background-color:;\">
\t\t\t<div class=\"container-fluid\" style=\"margin-left: 2em; margin-right: 2em; height: 100%; display: flex; align-items: center;\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-4\"></div>

\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t<div style=\"text-align: center; color: white; margin-bottom: 3em;\">
\t\t\t\t\t\t\t<h1 style=\"font-size: 3em; color: #007bff; margin-bottom: 2em; margin-top: 2em;\">A PROPOS</h1>
\t\t\t\t\t\t\t<p style=\"color: #003366; margin-bottom: 6em; text-align: center; \">Bienvenue chez LABO, votre partenaire de confiance pour des services d'analyse médicale de qualité. Forts de notre engagement envers l'excellence, nous sommes déterminés à fournir des résultats précis et rapides pour répondre à vos besoins de santé.Nous investissons continuellement dans les dernières technologies pour assurer la précision et la fiabilité de nos analyses. Notre laboratoire est équipé des instruments les plus modernes, gérés par une équipe de techniciens compétents.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-4\"></div>

\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t<h3 style=\"color: #007bff;\">
\t\t\t\t\t\t\t\t<div style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-heart-pulse\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tLaboratoire sur place
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t<h3 style=\"color: #007bff; \">
\t\t\t\t\t\t\t\t<div style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-hospital\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tOuvert 7 jours sur 7
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t<h3 style=\"color: #007bff;\">
\t\t\t\t\t\t\t\t<div style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-shield-check\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tNombreuses
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tmutuelles partenaires
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t<h3 style=\"color: #007bff;\">
\t\t\t\t\t\t\t\t<div style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-alarm\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tPeu d'attente
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t<h3 style=\"color: #007bff;\">
\t\t\t\t\t\t\t\t<div style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar2-check\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tAvec rendez-vous
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<section id=\"3\" style=\"height: 100vh; background-color: #f0f0f0;\">
\t\t\t<div class=\"container-fluid\" style=\"margin-left: 2em; margin-right: 2em; height: 100%; display: flex; align-items: center;\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-4\"></div>

\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t<div style=\"text-align: center; color: white; margin-bottom: 3em;\">
\t\t\t\t\t\t\t<h1 style=\"font-size: 3em; color: #007bff; margin-bottom: 2em; margin-top: 2em;\">SERVICES</h1>
\t\t\t\t\t\t\t<p style=\"color: #003366; margin-bottom: 6em; text-align: center;\">Bienvenue chez LABO, votre partenaire de confiance pour des services d'analyse médicale de qualité. Forts de notre engagement envers l'excellence, nous sommes déterminés à fournir des résultats précis et rapides pour répondre à vos besoins de santé. Nous investissons continuellement dans les dernières technologies pour assurer la précision et la fiabilité de nos analyses. Notre laboratoire est équipé des instruments les plus modernes, gérés par une équipe de techniciens compétents.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Bootstrap Card Integration -->
\t\t\t\t\t<div class=\"row row-cols-1 row-cols-md-3 g-4 justify-content-center\">
\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t<div class=\"card h-60\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/image3.jpg') }}\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Radiographie et analyses</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t<div class=\"card h-60\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/image4.jpg') }}\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Médecine du travail</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t<div class=\"card h-60\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/image5.jpg') }}\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Vaccins pour l'étranger</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"4\" style=\"height: 70vh; background-color: #007bff; color: white; margin-top: 5vh;\">
\t\t\t<div>
\t\t\t\t<!-- FOOTER -->
\t\t\t\t<footer class=\"w-100 py-4 flex-shrink-0\">
\t\t\t\t\t<div class=\"container py-4\">
\t\t\t\t\t\t<div class=\"row gy-4 gx-5\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<h5 class=\"h1\">Labo.</h5>
\t\t\t\t\t\t\t\t<p class=\"small\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
\t\t\t\t\t\t\t\t<p class=\"small mb-0\">&copy; Copyrights. All rights reserved.
\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">Bootstrapious.com</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Quick links</h5>
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">About</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">Get started</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">FAQ</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-6\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Quick links</h5>
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">About</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">Get started</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">FAQ</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Newsletter</h5>
\t\t\t\t\t\t\t\t<p class=\"small\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Recipient's username\" aria-label=\"Recipient's username\" aria-describedby=\"button-addon2\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" id=\"button-addon2\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-paper-plane\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t</div>
\t\t</section>


\t</div>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\mariama.saddoudiallo\\OneDrive - Acelys\\Desktop\\ProjetCDA\\Labo\\templates\\home\\index.html.twig");
    }
}
