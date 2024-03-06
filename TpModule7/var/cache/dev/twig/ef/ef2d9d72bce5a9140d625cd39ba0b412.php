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
class __TwigTemplate_7bb471276db2195910c091e056b84c80 extends Template
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
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

\t\t<h1 class=\"display-2 py-3\">Notre catalogue</h1>

\t\t<section class=\"container text-center\">

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col\">

\t\t\t\t\t<div class=\"card\" style=\"margin-top: 15px;\">
\t\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600/?car?v5\" class=\"img-fluid\" alt=\"...\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Berlines</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Les berlines sont des voitures élégantes et spacieuses, idéales pour les longs trajets sur autoroute. Elles offrent un confort exceptionnel.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card\" style=\"margin-top: 15px;\">
\t\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600?v6\" class=\"img-fluid\" alt=\"...\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Sportives</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Les voitures sportives sont conçues pour offrir des performances exceptionnelles et une conduite dynamique sur les routes sinueuses.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card\" style=\"margin-top: 15px;\">
\t\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600/?car?v7\" class=\"img-fluid\" alt=\"...\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Familiales</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Les voitures familiales sont spacieuses et polyvalentes, parfaites pour les déplacements en famille et les vacances.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card\" style=\"margin-top: 15px;\">
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
\t\t\t\t\t\t<th>#id</th>
\t\t\t\t\t\t<th>nom</th>
\t\t\t\t\t\t<th>modele</th>
\t\t\t\t\t\t<th>description</th>
\t\t\t\t\t\t<th>date_creation</th>
\t\t\t\t\t\t<th>image</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 101
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "nom", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "description", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 106
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "dateCreation", [], "any", false, false, false, 106), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><img src=\"";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "image", [], "any", false, false, false, 107), "html", null, true);
            echo "\" style=\" height:100px; width:12rem\"></td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
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
        return array (  221 => 111,  211 => 107,  207 => 106,  203 => 105,  199 => 104,  195 => 103,  191 => 102,  188 => 101,  184 => 100,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
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

\t\t<h1 class=\"display-2 py-3\">Notre catalogue</h1>

\t\t<section class=\"container text-center\">

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col\">

\t\t\t\t\t<div class=\"card\" style=\"margin-top: 15px;\">
\t\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600/?car?v5\" class=\"img-fluid\" alt=\"...\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Berlines</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Les berlines sont des voitures élégantes et spacieuses, idéales pour les longs trajets sur autoroute. Elles offrent un confort exceptionnel.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card\" style=\"margin-top: 15px;\">
\t\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600?v6\" class=\"img-fluid\" alt=\"...\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Sportives</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Les voitures sportives sont conçues pour offrir des performances exceptionnelles et une conduite dynamique sur les routes sinueuses.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card\" style=\"margin-top: 15px;\">
\t\t\t\t\t\t<img src=\"https://source.unsplash.com/random/1500x600/?car?v7\" class=\"img-fluid\" alt=\"...\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Familiales</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Les voitures familiales sont spacieuses et polyvalentes, parfaites pour les déplacements en famille et les vacances.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card\" style=\"margin-top: 15px;\">
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
\t\t\t\t\t\t<th>#id</th>
\t\t\t\t\t\t<th>nom</th>
\t\t\t\t\t\t<th>modele</th>
\t\t\t\t\t\t<th>description</th>
\t\t\t\t\t\t<th>date_creation</th>
\t\t\t\t\t\t<th>image</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for vehicule in vehicules %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ vehicule.id }}</td>
\t\t\t\t\t\t\t<td>{{ vehicule.nom }}</td>
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

", "home/index.html.twig", "C:\\Users\\MB\\Desktop\\TPMalik\\TpModule7\\templates\\home\\index.html.twig");
    }
}
