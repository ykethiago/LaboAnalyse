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
class __TwigTemplate_fa5f34a736e8cdce23e0b827990fa696 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 5
        echo "        <h1 style=\"text-align: center;\"><i class=\"bi bi-person-fill-add\"></i>INSRIPTION </h1>
            <h3>Créer Votre compte dans notre site </h3>
            <hr class=\"mb-3\">
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-2\">
        
                    </div>

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "_token", [], "any", false, false, false, 14), 'widget');
        echo "
    <form action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" method=\"POST\">
        <div class=\"mb-3\">
          <label for=\"InputEmail1\" class=\"form-label\"> Addresse Email</label>
          ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), 'widget');
        echo "
          <div id=\"emailHelp\" class=\"form-text\">Ne confondez pas votre Adresse email.</div>
        </div>
        <div class=\"mb-3\">
          <label for=\"InputEmail1\" class=\"form-label\"> First Name</label>
          ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "first_name", [], "any", false, false, false, 23), 'widget');
        echo "
        </div>
        <div class=\"mb-3\">
          <label for=\"InputEmail1\" class=\"form-label\"> Last Name</label>
          ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "last_name", [], "any", false, false, false, 27), 'widget');
        echo "
        </div>
        <div class=\"mb-3\">
            <label for=\"Inputpseudo\" class=\"form-label\">UserName</label>
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "username", [], "any", false, false, false, 31), 'widget');
        echo "
          </div>
          <div class=\"mb-3\">
            <label for=\"Inputpseudo\" class=\"form-label\">Role</label>
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "roles", [], "any", false, false, false, 35), 'widget');
        echo "
          </div>
        <div class=\"mb-3\">
          <label for=\"InputPassword1\" class=\"form-label\">Mot de Passe</label>
          ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "plainPassword", [], "any", false, false, false, 39), 'widget');
        echo "
        </div>
        <div class=\"mb-3\">
            <label for=\"InputPassword1\" class=\"form-label\">Condition</label>
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "agreeTerms", [], "any", false, false, false, 43), 'widget');
        echo "
          </div>
        <button type=\"submit\" class=\"btn btn-primary btn-text-center\">S'inscrire</button>
      </form>
</div>
<div class=\"col-lg-2 col-md-2\">

</div>
</div>
";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
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
        return array (  167 => 52,  155 => 43,  148 => 39,  141 => 35,  134 => 31,  127 => 27,  120 => 23,  112 => 18,  106 => 15,  102 => 14,  98 => 13,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Inscription{% endblock %}

    {% block container %}
        <h1 style=\"text-align: center;\"><i class=\"bi bi-person-fill-add\"></i>INSRIPTION </h1>
            <h3>Créer Votre compte dans notre site </h3>
            <hr class=\"mb-3\">
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-2\">
        
                    </div>

    {{ form_start(form) }}
    {{ form_widget(form._token) }}
    <form action=\"{{path('app_register')}}\" method=\"POST\">
        <div class=\"mb-3\">
          <label for=\"InputEmail1\" class=\"form-label\"> Addresse Email</label>
          {{ form_widget(form.email) }}
          <div id=\"emailHelp\" class=\"form-text\">Ne confondez pas votre Adresse email.</div>
        </div>
        <div class=\"mb-3\">
          <label for=\"InputEmail1\" class=\"form-label\"> First Name</label>
          {{ form_widget(form.first_name) }}
        </div>
        <div class=\"mb-3\">
          <label for=\"InputEmail1\" class=\"form-label\"> Last Name</label>
          {{ form_widget(form.last_name) }}
        </div>
        <div class=\"mb-3\">
            <label for=\"Inputpseudo\" class=\"form-label\">UserName</label>
            {{ form_widget(form.username) }}
          </div>
          <div class=\"mb-3\">
            <label for=\"Inputpseudo\" class=\"form-label\">Role</label>
            {{ form_widget(form.roles) }}
          </div>
        <div class=\"mb-3\">
          <label for=\"InputPassword1\" class=\"form-label\">Mot de Passe</label>
          {{ form_widget(form.plainPassword) }}
        </div>
        <div class=\"mb-3\">
            <label for=\"InputPassword1\" class=\"form-label\">Condition</label>
            {{ form_widget(form.agreeTerms) }}
          </div>
        <button type=\"submit\" class=\"btn btn-primary btn-text-center\">S'inscrire</button>
      </form>
</div>
<div class=\"col-lg-2 col-md-2\">

</div>
</div>
{{ form_end(form) }}
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\mariama.saddoudiallo\\OneDrive - Acelys\\Desktop\\ProjetCDA\\Labo\\templates\\registration\\register.html.twig");
    }
}
