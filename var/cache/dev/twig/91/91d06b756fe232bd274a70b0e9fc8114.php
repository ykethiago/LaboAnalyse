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
\t\t\tbackground: #007bff;
\t\t\tfont-family: 'Roboto', sans-serif;
\t\t}

\t\t.login-box {
\t\t\tmargin-top: 75px;
\t\t\theight: auto;
\t\t\tbackground: #007bff;
\t\t\ttext-align: center;
\t\t\tbox-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
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
\t\t\tcolor: #ECF0F5;
\t\t}

\t\t.login-form {
\t\t\tmargin-top: 25px;
\t\t\ttext-align: left;
\t\t}

\t\tinput[type=email],
\t\tinput[type=password],
\t\tinput[type=text] {
\t\t\tbackground-color: #007bff;
\t\t\tborder: none;
\t\t\tborder-bottom: 2px solid #0DB8DE;
\t\t\tborder-top: 0;
\t\t\tborder-radius: 0;
\t\t\tfont-weight: bold;
\t\t\toutline: 0;
\t\t\tmargin-bottom: 20px;
\t\t\tpadding-left: 0;
\t\t\tcolor: #ECF0F5;
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
\t\t\tbackground-color: #1A2226;
\t\t\tcolor: #ECF0F5;
\t\t}

\t\tlabel {
\t\t\tmargin-bottom: 0;
\t\t\tcolor: #ECF0F5; /* Add this line to set label color */
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
        echo "\t<div class=\"container\">
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
        // line 139
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), 'form_start');
        echo "
\t\t\t\t";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "_token", [], "any", false, false, false, 140), 'widget');
        echo "

\t\t\t\t<form action=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" method=\"POST\" class=\"col-lg-12 login-form\">
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">Adresse Email</label>
\t\t\t\t\t\t";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "email", [], "any", false, false, false, 145), 'widget');
        echo "
\t\t\t\t\t\t<div id=\"emailHelp\" class=\"form-text\">Ne confondez pas votre Adresse email.</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">First Name</label>
\t\t\t\t\t\t";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "first_name", [], "any", false, false, false, 150), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">Last Name</label>
\t\t\t\t\t\t";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "last_name", [], "any", false, false, false, 154), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"Inputpseudo\" class=\"form-label\">UserName</label>
\t\t\t\t\t\t";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "username", [], "any", false, false, false, 158), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"Inputpseudo\" class=\"form-label\">Role</label>
\t\t\t\t\t\t";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "roles", [], "any", false, false, false, 162), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"InputPassword1\" class=\"form-label\">Mot de Passe</label>
\t\t\t\t\t\t";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "plainPassword", [], "any", false, false, false, 166), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"InputPassword1\" class=\"form-label\">Condition</label>
\t\t\t\t\t\t";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "agreeTerms", [], "any", false, false, false, 170), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-text-center\">S'inscrire</button>
\t\t\t\t</form>

\t\t\t\t";
        // line 175
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-2\"></div>
\t\t</div>
\t</div>
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
        return array (  308 => 175,  300 => 170,  293 => 166,  286 => 162,  279 => 158,  272 => 154,  265 => 150,  257 => 145,  251 => 142,  246 => 140,  242 => 139,  229 => 128,  219 => 127,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
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
\t\t\tbackground: #007bff;
\t\t\tfont-family: 'Roboto', sans-serif;
\t\t}

\t\t.login-box {
\t\t\tmargin-top: 75px;
\t\t\theight: auto;
\t\t\tbackground: #007bff;
\t\t\ttext-align: center;
\t\t\tbox-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
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
\t\t\tcolor: #ECF0F5;
\t\t}

\t\t.login-form {
\t\t\tmargin-top: 25px;
\t\t\ttext-align: left;
\t\t}

\t\tinput[type=email],
\t\tinput[type=password],
\t\tinput[type=text] {
\t\t\tbackground-color: #007bff;
\t\t\tborder: none;
\t\t\tborder-bottom: 2px solid #0DB8DE;
\t\t\tborder-top: 0;
\t\t\tborder-radius: 0;
\t\t\tfont-weight: bold;
\t\t\toutline: 0;
\t\t\tmargin-bottom: 20px;
\t\t\tpadding-left: 0;
\t\t\tcolor: #ECF0F5;
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
\t\t\tbackground-color: #1A2226;
\t\t\tcolor: #ECF0F5;
\t\t}

\t\tlabel {
\t\t\tmargin-bottom: 0;
\t\t\tcolor: #ECF0F5; /* Add this line to set label color */
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
\t<div class=\"container\">
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
\t\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">First Name</label>
\t\t\t\t\t\t{{ form_widget(form.first_name) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"InputEmail1\" class=\"form-label\">Last Name</label>
\t\t\t\t\t\t{{ form_widget(form.last_name) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"Inputpseudo\" class=\"form-label\">UserName</label>
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
\t\t\t\t\t\t<label for=\"InputPassword1\" class=\"form-label\">Condition</label>
\t\t\t\t\t\t{{ form_widget(form.agreeTerms) }}
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-text-center\">S'inscrire</button>
\t\t\t\t</form>

\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-2\"></div>
\t\t</div>
\t</div>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\HP\\Desktop\\CFA\\Symfony\\LaboAnalyse\\templates\\registration\\register.html.twig");
    }
}
