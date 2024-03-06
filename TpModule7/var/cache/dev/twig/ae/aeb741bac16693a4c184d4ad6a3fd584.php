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
class __TwigTemplate_844b0ed088b555aff555e9d07d0ab6f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("bootstrap.html.twig", "home/index.html.twig", 1);
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

        echo "Caradisiac - Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div class=\"container\">
\t\t<br>
\t\t<div id=\"carouselExampleDark\" class=\"carousel carousel-dark slide\" data-bs-ride=\"carousel\">
\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t</div>
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=\"carousel-item active\" data-bs-interval=\"10000\">
\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600/?car?v1\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\" data-bs-interval=\"2000\">
\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600/?car?v2\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600/?car?v3\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t</a>
\t\t\t<a class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t</a>
\t\t</div>
\t\t<h1 class=\"text-center display-2 py-3\">Notre catalogue</h1>
\t\t<section class=\"container text-center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mt-15\">
\t\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600/?car?v5\" class=\"img-fluid\" alt=\"...\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Berlines</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Les berlines sont des voitures élégantes et spacieuses, idéales pour les longs trajets sur autoroute. Elles offrent un confort exceptionnel.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mt-15\">
\t\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600?v6\" class=\"img-fluid\" alt=\"...\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Sportives</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Les voitures sportives sont conçues pour offrir des performances exceptionnelles et une conduite dynamique sur les routes sinueuses.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mt-15\">
\t\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600/?car?v7\" class=\"img-fluid\" alt=\"...\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Familiales</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Les voitures familiales sont spacieuses et polyvalentes, parfaites pour les déplacements en famille et les vacances.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mt-15\">
\t\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600/?car?v8\" class=\"img-fluid\" alt=\"...\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Électriques</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Les voitures électriques sont écologiques et économiques, elles contribuent à réduire les émissions de CO2 et les coûts de carburant.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"container mt-4\">
\t\t\t<table class=\"table table-striped align-middle\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Référence</th>
\t\t\t\t\t\t<th>Marque</th>
\t\t\t\t\t\t<th>Modéle</th>
\t\t\t\t\t\t<th>Points forts</th>
\t\t\t\t\t\t<th>Date d'arrivée</th>
\t\t\t\t\t\t<th ></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 90
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "nom", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "description", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 95
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "dateCreation", [], "any", false, false, false, 95), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><img src=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "image", [], "any", false, false, false, 96), "html", null, true);
            echo "\" style=\" height:100px; width:12rem\"></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</section>
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
        return "home/index.html.twig";
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
        return array (  210 => 99,  201 => 96,  197 => 95,  193 => 94,  189 => 93,  185 => 92,  181 => 91,  178 => 90,  174 => 89,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'bootstrap.html.twig' %}

{% block title %}Caradisiac - Accueil
{% endblock %}
{% block body %}
\t<div class=\"container\">
\t\t<br>
\t\t<div id=\"carouselExampleDark\" class=\"carousel carousel-dark slide\" data-bs-ride=\"carousel\">
\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t</div>
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=\"carousel-item active\" data-bs-interval=\"10000\">
\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600/?car?v1\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\" data-bs-interval=\"2000\">
\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600/?car?v2\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600/?car?v3\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t</a>
\t\t\t<a class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleDark\" data-bs-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t</a>
\t\t</div>
\t\t<h1 class=\"text-center display-2 py-3\">Notre catalogue</h1>
\t\t<section class=\"container text-center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mt-15\">
\t\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600/?car?v5\" class=\"img-fluid\" alt=\"...\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Berlines</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Les berlines sont des voitures élégantes et spacieuses, idéales pour les longs trajets sur autoroute. Elles offrent un confort exceptionnel.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mt-15\">
\t\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600?v6\" class=\"img-fluid\" alt=\"...\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Sportives</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Les voitures sportives sont conçues pour offrir des performances exceptionnelles et une conduite dynamique sur les routes sinueuses.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mt-15\">
\t\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600/?car?v7\" class=\"img-fluid\" alt=\"...\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Familiales</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Les voitures familiales sont spacieuses et polyvalentes, parfaites pour les déplacements en famille et les vacances.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mt-15\">
\t\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600/?car?v8\" class=\"img-fluid\" alt=\"...\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Électriques</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Les voitures électriques sont écologiques et économiques, elles contribuent à réduire les émissions de CO2 et les coûts de carburant.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"container mt-4\">
\t\t\t<table class=\"table table-striped align-middle\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Référence</th>
\t\t\t\t\t\t<th>Marque</th>
\t\t\t\t\t\t<th>Modéle</th>
\t\t\t\t\t\t<th>Points forts</th>
\t\t\t\t\t\t<th>Date d'arrivée</th>
\t\t\t\t\t\t<th ></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for vehicule in vehicules %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{vehicule.id}}</td>
\t\t\t\t\t\t\t<td>{{vehicule.nom}}</td>
\t\t\t\t\t\t\t<td>{{vehicule.modele}}</td>
\t\t\t\t\t\t\t<td>{{vehicule.description}}</td>
\t\t\t\t\t\t\t<td>{{vehicule.dateCreation|date('d-m-Y')}}</td>
\t\t\t\t\t\t\t<td><img src=\"{{vehicule.image}}\" style=\" height:100px; width:12rem\"></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</section>
\t</div>
{% endblock %}

", "home/index.html.twig", "/var/www/html/TpModule7/templates/home/index.html.twig");
    }
}
