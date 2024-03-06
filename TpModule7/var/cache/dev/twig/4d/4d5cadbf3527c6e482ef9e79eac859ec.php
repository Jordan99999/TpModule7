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

/* vehicule/index.html.twig */
class __TwigTemplate_b93b8480c898e6f6d4fa5c18cde7063d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/index.html.twig"));

        $this->parent = $this->loadTemplate("bootstrap.html.twig", "vehicule/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t<div class=\"container\">
\t\t<h1>
\t\t\tListe de tous les véhicules disponibles</h1>

\t\t<a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_vehicule");
        echo "\" class=\"btn btn-warning my-3\">
\t\t\tAjouter un nouveau véhicule</a>

\t\t<table class=\"table table-striped align-middle\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>#id</th>
\t\t\t\t\t<th>nom</th>
\t\t\t\t\t<th>modele</th>
\t\t\t\t\t<th>description</th>
\t\t\t\t\t<th>date_creation</th>
\t\t\t\t\t<th>image</th>
\t\t\t\t\t<th>en_vente</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 25
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "modele", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "description", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "dateCreation", [], "any", false, false, false, 30), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td><img src=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 31), "html", null, true);
            echo "\" style=\" height:100px; width:12rem\"></td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "EnVente", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_vehicule", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">modifier</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_vehicule", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-danger ms-3\">supprimer</a>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t</tbody>
\t\t</table>
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
        return "vehicule/index.html.twig";
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
        return array (  147 => 42,  135 => 36,  131 => 35,  125 => 32,  121 => 31,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  98 => 25,  94 => 24,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"bootstrap.html.twig\" %}
{% block body %}

\t<div class=\"container\">
\t\t<h1>
\t\t\tListe de tous les véhicules disponibles</h1>

\t\t<a href=\"{{ path(\"new_vehicule\") }}\" class=\"btn btn-warning my-3\">
\t\t\tAjouter un nouveau véhicule</a>

\t\t<table class=\"table table-striped align-middle\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>#id</th>
\t\t\t\t\t<th>nom</th>
\t\t\t\t\t<th>modele</th>
\t\t\t\t\t<th>description</th>
\t\t\t\t\t<th>date_creation</th>
\t\t\t\t\t<th>image</th>
\t\t\t\t\t<th>en_vente</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for key, value in vehicules %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ value.id }}</td>
\t\t\t\t\t\t<td>{{ value.nom }}</td>
\t\t\t\t\t\t<td>{{value.modele}}</td>
\t\t\t\t\t\t<td>{{ value.description }}</td>
\t\t\t\t\t\t<td>{{value.dateCreation|date('d-m-Y')}}</td>
\t\t\t\t\t\t<td><img src=\"{{value.image}}\" style=\" height:100px; width:12rem\"></td>
\t\t\t\t\t\t<td>{{ value.EnVente }}</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{path(\"update_vehicule\" , { id : value.id}) }}\" class=\"btn btn-secondary\">modifier</a>
\t\t\t\t\t\t\t<a href=\"{{path(\"delete_vehicule\" , { id : value.id}) }}\" class=\"btn btn-danger ms-3\">supprimer</a>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>

{% endblock %}

", "vehicule/index.html.twig", "C:\\Users\\MB\\Desktop\\TPMalik\\TpModule7\\templates\\vehicule\\index.html.twig");
    }
}
