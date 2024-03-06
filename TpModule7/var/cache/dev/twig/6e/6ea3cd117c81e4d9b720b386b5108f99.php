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

/* user/index.html.twig */
class __TwigTemplate_a87d7869fd1f36f8ba6a4fda87291ed9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("bootstrap.html.twig", "user/index.html.twig", 1);
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
        echo "\t<div class=\"container\">
\t\t<h1>
\t\t\tUser List</h1>

\t\t<a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_user");
        echo "\" class=\"btn btn-warning my-3\">
\t\t\tAjouter un nouvel user</a>

\t\t<table class=\"table table-striped align-middle\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>#id</th>
\t\t\t\t\t<th>email</th>
\t\t\t\t\t<th>password</th>
\t\t\t\t\t<th>pseudo</th>
\t\t\t\t\t<th>date_creation</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 22
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "email", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "password", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "pseudo", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "dateCreation", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>


\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_user", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">modifier</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-danger ms-3\">supprimer</a>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
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
        return "user/index.html.twig";
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
        return array (  137 => 38,  125 => 32,  121 => 31,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  95 => 22,  91 => 21,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"bootstrap.html.twig\" %}
{% block body %}
\t<div class=\"container\">
\t\t<h1>
\t\t\tUser List</h1>

\t\t<a href=\"{{ path(\"new_user\") }}\" class=\"btn btn-warning my-3\">
\t\t\tAjouter un nouvel user</a>

\t\t<table class=\"table table-striped align-middle\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>#id</th>
\t\t\t\t\t<th>email</th>
\t\t\t\t\t<th>password</th>
\t\t\t\t\t<th>pseudo</th>
\t\t\t\t\t<th>date_creation</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for key, value in users %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ value.id }}</td>
\t\t\t\t\t\t<td>{{ value.email }}</td>
\t\t\t\t\t\t<td>{{ value.password }}</td>
\t\t\t\t\t\t<td>{{value.pseudo}}</td>
\t\t\t\t\t\t<td>{{ value.dateCreation|date('d/m/Y') }}</td>
\t\t\t\t\t\t<td>


\t\t\t\t\t\t\t<a href=\"{{path(\"update_user\" , { id : value.id}) }}\" class=\"btn btn-secondary\">modifier</a>
\t\t\t\t\t\t\t<a href=\"{{path(\"delete_user\" , { id : value.id}) }}\" class=\"btn btn-danger ms-3\">supprimer</a>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>


\t</div>
{% endblock %}

", "user/index.html.twig", "/var/www/html/TpModule7/templates/user/index.html.twig");
    }
}
