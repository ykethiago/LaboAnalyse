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

/* registration/register.html.twig */
class __TwigTemplate_94b7d83ac70bd9982c1b17b410e3372c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Inscription
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style>
\t\tbody {
\t\t\tbackground: #fff1c1;
\t\t\tfont-family: 'Roboto', sans-serif;
\t\t}

\t\t.login-box {
\t\t\tmargin-top: 75px;
\t\t\theight: auto;
\t\t    background-image: linear-gradient(to right bottom, #e3ecfb, #dce4fb, #d7dcfa, #d5d3f8, #d5caf4);
\t\t\ttext-align: center;
\t\t\tbox-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
\t\t\tborder-radius:5%;
\t\t}
           
\t\t.login-key {
\t\t\theight: 100px;
\t\t\tfont-size: 80px;
\t\t\tline-height: 100px;
\t\t\tbackground: -webkit-linear-gradient(#27EF9F, #0DB8DE);
\t\t\t-webkit-background-clip: text;
\t\t\t-webkit-text-fill-color: transparent;
\t\t}
        
\t\t.login-title {
\t\t\tmargin-top: 15px;
\t\t\ttext-align: center;
\t\t\tfont-size: 30px;
\t\t\tletter-spacing: 2px;
\t\t\tmargin-top: 15px;
\t\t\tfont-weight: bold;
\t\t\tcolor: black;
\t\t}

\t\t.login-form {
\t\t\tmargin-top: 25px;
\t\t\ttext-align: left;
\t\t}

\t\tinput[type=email],
\t\tinput[type=password],
\t\tinput[type=text] {
\t\t\tbackground-color: #fff;
\t\t\tborder: 1px solid black;
\t\t\tborder-top: 0;
\t\t\tborder-radius: 1rem;
\t\t\tfont-weight: bold;
\t\t\toutline: 0;
\t\t\tmargin-bottom: 20px;
\t\t\tpadding-left: 0;
\t\t\t
\t\t}

\t\t.form-group {
\t\t\tmargin-bottom: 40px;
\t\t\toutline: 0;
\t\t}

\t\tinput[type=email]:focus,
\t\tinput[type=password]:focus,
\t\tinput[type=text]:focus {
\t\t\tborder-color: inherit;
\t\t\t-webkit-box-shadow: none;
\t\t\tbox-shadow: none;
\t\t\tborder-bottom: 2px solid #0DB8DE;
\t\t\toutline: 0;
\t\t\t
\t\t\tcolor: black;
\t\t}

\t\tlabel {
\t\t\tmargin-bottom: 0;
\t\t\tcolor:black; /* Add this line to set label color */
\t\t}

\t\t.form-control-label {
\t\t\tfont-size: 10px;
\t\t\tcolor: #6C6C6C;
\t\t\tfont-weight: bold;
\t\t\tletter-spacing: 1px;
\t\t}

\t\t.btn-outline-primary {
\t\t\tborder-color: #0DB8DE;
\t\t\tcolor: #0DB8DE;
\t\t\tborder-radius: 0;
\t\t\tfont-weight: bold;
\t\t\tletter-spacing: 1px;
\t\t\tbox-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
\t\t}

\t\t.btn-outline-primary:hover {
\t\t\tbackground-color: #0DB8DE;
\t\t\tright: 0;
\t\t}

\t\t.login-btm {
\t\t\tfloat: left;
\t\t}

\t\t.login-button {
\t\t\tpadding-right: 0;
\t\t\ttext-align: right;
\t\t\tmargin-bottom: 25px;
\t\t}

\t\t.login-text {
\t\t\ttext-align: left;
\t\t\tpadding-left: 0;
\t\t\tcolor: #A2A4A4;
\t\t}

\t\t.loginbttm {
\t\t\tpadding: 0;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 127
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 128
        echo "<nav id=\"nav-1\" class=\"navbar navbar-expand-lg bg-color fixed-top\" style=\"background-color: #007bff;\">
\t\t<div class=\"container-fluid d-flex justify-content-between align-items-center\">
\t\t\t<div>
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 132
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
\t\t\t\t\t\t<a class=\"nav-link text-uppercase \" href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" style=\"color: white; margin-right:1em; font-size: 0.8em;\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase \" href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">A Propos</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase \" href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Services</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase \" href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" style=\"color: white; margin-right:1em; font-size: 0.8em; margin-left:1em;\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 154
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "user", [], "any", false, false, false, 154)) {
            // line 155
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
            // line 156
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "request", [], "any", false, false, false, 156), "get", ["_route"], "method", false, false, false, 156) == "app_logout")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 158
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158)) {
                // line 159
                echo "\t\t\t\t\t\t\t";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SECRETAIRE")) {
                    // line 160
                    echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
                    // line 161
                    echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "request", [], "any", false, false, false, 161), "get", ["_route"], "method", false, false, false, 161) == "app_logout")) ? ("active") : (""));
                    echo "\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("secretaire");
                    echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PATIENT")) {
                    // line 164
                    echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
                    // line 165
                    echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "request", [], "any", false, false, false, 165), "get", ["_route"], "method", false, false, false, 165) == "app_logout")) ? ("active") : (""));
                    echo "\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                    echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LABORANTIN")) {
                    // line 168
                    echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
                    // line 169
                    echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "request", [], "any", false, false, false, 169), "get", ["_route"], "method", false, false, false, 169) == "app_logout")) ? ("active") : (""));
                    echo "\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("laborantin");
                    echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Dasbord</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                // line 172
                echo "\t\t\t\t\t\t";
            }
            // line 173
            echo "
\t\t\t\t\t";
        } else {
            // line 175
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
            // line 176
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "request", [], "any", false, false, false, 176), "get", ["_route"], "method", false, false, false, 176) == "app_login")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Se connecter</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase ";
            // line 179
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 179, $this->source); })()), "request", [], "any", false, false, false, 179), "get", ["_route"], "method", false, false, false, 179) == "app_register")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Inscription</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 182
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
\t<div class=\"container\" style=\"margin-top: 2rem;\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3 col-md-2\"></div>
\t\t\t<div class=\"col-lg-6 col-md-8 login-box\">
\t\t\t\t<div class=\"col-lg-12 login-key\">
\t\t\t\t\t<i class=\"bi bi-person-fill-add\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12 login-title\">
\t\t\t\t\tINSCRIPTION
\t\t\t\t</div>

\t\t\t\t";
        // line 197
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), 'form_start');
        echo "
\t\t\t\t";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "_token", [], "any", false, false, false, 198), 'widget');
        echo "

\t\t\t\t<form action=\"";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" method=\"POST\" class=\"col-lg-12 login-form\">
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">Adresse Email</label>
\t\t\t\t\t\t";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "email", [], "any", false, false, false, 203), 'widget');
        echo "
\t\t\t\t\t\t<div id=\"emailHelp\" class=\"form-text\">Ne confondez pas votre Adresse email.</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">Votre prénom</label>
\t\t\t\t\t\t";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "first_name", [], "any", false, false, false, 208), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">Votre nom</label>
\t\t\t\t\t\t";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "last_name", [], "any", false, false, false, 212), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"Inputpseudo\" class=\"form-label\">Nom d'utilisateur</label>
\t\t\t\t\t\t";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "username", [], "any", false, false, false, 216), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"Inputpseudo\" class=\"form-label\">Role</label>
\t\t\t\t\t\t";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "roles", [], "any", false, false, false, 220), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"InputPassword1\" class=\"form-label\">Mot de Passe</label>
\t\t\t\t\t\t";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), "plainPassword", [], "any", false, false, false, 224), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"InputPassword1\" class=\"form-label\">Accepter les terms de site</label>
\t\t\t\t\t\t";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "agreeTerms", [], "any", false, false, false, 228), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-text-center\">S'inscrire</button>
\t\t\t\t</form>

\t\t\t\t";
        // line 233
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-2\"></div>
\t\t</div>
\t</div>
\t<section id=\"4\" style=\" background-color: #007bff; color: white; margin-top: 5vh;\">
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
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">About </a>
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 233,  426 => 228,  419 => 224,  412 => 220,  405 => 216,  398 => 212,  391 => 208,  383 => 203,  377 => 200,  372 => 198,  368 => 197,  351 => 182,  343 => 179,  335 => 176,  332 => 175,  328 => 173,  325 => 172,  317 => 169,  314 => 168,  306 => 165,  303 => 164,  295 => 161,  292 => 160,  289 => 159,  287 => 158,  280 => 156,  277 => 155,  275 => 154,  270 => 152,  264 => 149,  258 => 146,  252 => 143,  238 => 132,  234 => 131,  229 => 128,  219 => 127,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription
{% endblock %}

{% block stylesheets %}
\t{{ parent() }}
\t<style>
\t\tbody {
\t\t\tbackground: #fff1c1;
\t\t\tfont-family: 'Roboto', sans-serif;
\t\t}

\t\t.login-box {
\t\t\tmargin-top: 75px;
\t\t\theight: auto;
\t\t    background-image: linear-gradient(to right bottom, #e3ecfb, #dce4fb, #d7dcfa, #d5d3f8, #d5caf4);
\t\t\ttext-align: center;
\t\t\tbox-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
\t\t\tborder-radius:5%;
\t\t}
           
\t\t.login-key {
\t\t\theight: 100px;
\t\t\tfont-size: 80px;
\t\t\tline-height: 100px;
\t\t\tbackground: -webkit-linear-gradient(#27EF9F, #0DB8DE);
\t\t\t-webkit-background-clip: text;
\t\t\t-webkit-text-fill-color: transparent;
\t\t}
        
\t\t.login-title {
\t\t\tmargin-top: 15px;
\t\t\ttext-align: center;
\t\t\tfont-size: 30px;
\t\t\tletter-spacing: 2px;
\t\t\tmargin-top: 15px;
\t\t\tfont-weight: bold;
\t\t\tcolor: black;
\t\t}

\t\t.login-form {
\t\t\tmargin-top: 25px;
\t\t\ttext-align: left;
\t\t}

\t\tinput[type=email],
\t\tinput[type=password],
\t\tinput[type=text] {
\t\t\tbackground-color: #fff;
\t\t\tborder: 1px solid black;
\t\t\tborder-top: 0;
\t\t\tborder-radius: 1rem;
\t\t\tfont-weight: bold;
\t\t\toutline: 0;
\t\t\tmargin-bottom: 20px;
\t\t\tpadding-left: 0;
\t\t\t
\t\t}

\t\t.form-group {
\t\t\tmargin-bottom: 40px;
\t\t\toutline: 0;
\t\t}

\t\tinput[type=email]:focus,
\t\tinput[type=password]:focus,
\t\tinput[type=text]:focus {
\t\t\tborder-color: inherit;
\t\t\t-webkit-box-shadow: none;
\t\t\tbox-shadow: none;
\t\t\tborder-bottom: 2px solid #0DB8DE;
\t\t\toutline: 0;
\t\t\t
\t\t\tcolor: black;
\t\t}

\t\tlabel {
\t\t\tmargin-bottom: 0;
\t\t\tcolor:black; /* Add this line to set label color */
\t\t}

\t\t.form-control-label {
\t\t\tfont-size: 10px;
\t\t\tcolor: #6C6C6C;
\t\t\tfont-weight: bold;
\t\t\tletter-spacing: 1px;
\t\t}

\t\t.btn-outline-primary {
\t\t\tborder-color: #0DB8DE;
\t\t\tcolor: #0DB8DE;
\t\t\tborder-radius: 0;
\t\t\tfont-weight: bold;
\t\t\tletter-spacing: 1px;
\t\t\tbox-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
\t\t}

\t\t.btn-outline-primary:hover {
\t\t\tbackground-color: #0DB8DE;
\t\t\tright: 0;
\t\t}

\t\t.login-btm {
\t\t\tfloat: left;
\t\t}

\t\t.login-button {
\t\t\tpadding-right: 0;
\t\t\ttext-align: right;
\t\t\tmargin-bottom: 25px;
\t\t}

\t\t.login-text {
\t\t\ttext-align: left;
\t\t\tpadding-left: 0;
\t\t\tcolor: #A2A4A4;
\t\t}

\t\t.loginbttm {
\t\t\tpadding: 0;
\t\t}
\t</style>
{% endblock %}


{% block container %}
<nav id=\"nav-1\" class=\"navbar navbar-expand-lg bg-color fixed-top\" style=\"background-color: #007bff;\">
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
\t\t\t\t\t\t<a class=\"nav-link text-uppercase \" href=\"{{path('app_home')}}\" style=\"color: white; margin-right:1em; font-size: 0.8em;\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase \" href=\"{{path('app_home')}}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">A Propos</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase \" href=\"{{path('app_home')}}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Services</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link text-uppercase \" href=\"{{path('app_contact')}}\" style=\"color: white; margin-right:1em; font-size: 0.8em; margin-left:1em;\">Contact</a>
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
\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_login' ? 'active' : '' }}\" href=\"{{ path('app_login') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Se connecter</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-uppercase {{ app.request.get('_route') == 'app_register' ? 'active' : '' }}\" href=\"{{ path('app_register') }}\" style=\"color: white; margin-right:1em; margin-left:1em; font-size: 0.8em;\">Inscription</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
\t<div class=\"container\" style=\"margin-top: 2rem;\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3 col-md-2\"></div>
\t\t\t<div class=\"col-lg-6 col-md-8 login-box\">
\t\t\t\t<div class=\"col-lg-12 login-key\">
\t\t\t\t\t<i class=\"bi bi-person-fill-add\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12 login-title\">
\t\t\t\t\tINSCRIPTION
\t\t\t\t</div>

\t\t\t\t{{ form_start(form) }}
\t\t\t\t{{ form_widget(form._token) }}

\t\t\t\t<form action=\"{{ path('app_register') }}\" method=\"POST\" class=\"col-lg-12 login-form\">
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">Adresse Email</label>
\t\t\t\t\t\t{{ form_widget(form.email) }}
\t\t\t\t\t\t<div id=\"emailHelp\" class=\"form-text\">Ne confondez pas votre Adresse email.</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">Votre prénom</label>
\t\t\t\t\t\t{{ form_widget(form.first_name) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">Votre nom</label>
\t\t\t\t\t\t{{ form_widget(form.last_name) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"Inputpseudo\" class=\"form-label\">Nom d'utilisateur</label>
\t\t\t\t\t\t{{ form_widget(form.username) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"Inputpseudo\" class=\"form-label\">Role</label>
\t\t\t\t\t\t{{ form_widget(form.roles) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"InputPassword1\" class=\"form-label\">Mot de Passe</label>
\t\t\t\t\t\t{{ form_widget(form.plainPassword) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"InputPassword1\" class=\"form-label\">Accepter les terms de site</label>
\t\t\t\t\t\t{{ form_widget(form.agreeTerms) }}
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-text-center\">S'inscrire</button>
\t\t\t\t</form>

\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-2\"></div>
\t\t</div>
\t</div>
\t<section id=\"4\" style=\" background-color: #007bff; color: white; margin-top: 5vh;\">
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
\t\t\t\t\t\t\t\t\t\t<a class=\"text-white\" href=\"#\">About </a>
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
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\HP\\Desktop\\CFA\\Symfony\\LaboAnalyse\\templates\\registration\\register.html.twig");
    }
}
