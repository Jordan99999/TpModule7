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

/* security/login.html.twig */
class __TwigTemplate_54b2394a8bced68c491c7e5b7f69125c extends Template
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
        return "bootstrap.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("bootstrap.html.twig", "security/login.html.twig", 1);
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

        echo "Connexion Administrateur
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"container mt-5\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div style=\"height: 50px\"></div>
\t\t\t\t<h1 class=\"mb-4\">Connexion Administrateur</h1>
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", ["success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "\t\t\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t\t";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "\t\t\t\t\t<div class=\"alert alert-danger mt-4\">
\t\t\t\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageKey", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageData", [], "any", false, false, false, 19), "security"), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t<div style=\"height: 25px\"></div>
\t\t\t\t<form action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.login");
        echo "\" method=\"post\" name=\"login\">
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"username\" class=\"form-label mt-4\">Email</label>
\t\t\t\t\t\t<input type=\"email\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\" required autofocus>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"password\" class=\"form-label\">Mot de passe</label>
\t\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary m-3\">Connexion</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<div style=\"height: 150px\"></div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  133 => 26,  127 => 23,  124 => 22,  118 => 19,  115 => 18,  112 => 17,  103 => 14,  100 => 13,  96 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'bootstrap.html.twig' %}

{% block title %}Connexion Administrateur
{% endblock %}

{% block body %}
\t<div class=\"container mt-5\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div style=\"height: 50px\"></div>
\t\t\t\t<h1 class=\"mb-4\">Connexion Administrateur</h1>
\t\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t\t\t{{ message }}
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t{% if error %}
\t\t\t\t\t<div class=\"alert alert-danger mt-4\">
\t\t\t\t\t\t{{ error.messageKey|trans(error.messageData, 'security') }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<div style=\"height: 25px\"></div>
\t\t\t\t<form action=\"{{ path('admin.login') }}\" method=\"post\" name=\"login\">
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"username\" class=\"form-label mt-4\">Email</label>
\t\t\t\t\t\t<input type=\"email\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"\" value=\"{{ last_username }}\" required autofocus>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"password\" class=\"form-label\">Mot de passe</label>
\t\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary m-3\">Connexion</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<div style=\"height: 150px\"></div>
\t</div>
{% endblock %}

", "security/login.html.twig", "/var/www/html/TpModule7/templates/security/login.html.twig");
    }
}
