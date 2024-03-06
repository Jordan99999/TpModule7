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

/* fragment/header.html.twig */
class __TwigTemplate_189ca1fe599dca834d97edda392eb9aa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fragment/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fragment/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
\t<div class=\"container\">
\t\t<a class=\"navbar-brand \" href=\"#\">Caradisiac</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<!-- Ajout de la classe \"justify-content-end\" pour aligner les éléments à droite -->
\t\t<div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarColor02\">
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li
\t\t\t\t\tclass=\"nav-item\">
\t\t\t\t\t<!-- Utilisation de la classe \"active\" pour indiquer l'élément actif -->
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Connexion</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_user");
        echo "\" class=\"nav-link\">Gérer les users</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_vehicule");
        echo "\" class=\"nav-link\">Gérer les véhicules</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mentions");
        echo "\">Mentions Legales</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "fragment/header.html.twig";
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
        return array (  78 => 25,  72 => 22,  66 => 19,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
\t<div class=\"container\">
\t\t<a class=\"navbar-brand \" href=\"#\">Caradisiac</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<!-- Ajout de la classe \"justify-content-end\" pour aligner les éléments à droite -->
\t\t<div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarColor02\">
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li
\t\t\t\t\tclass=\"nav-item\">
\t\t\t\t\t<!-- Utilisation de la classe \"active\" pour indiquer l'élément actif -->
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_home') }}\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Connexion</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"{{ path('index_user') }}\" class=\"nav-link\">Gérer les users</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"{{path('index_vehicule')}}\" class=\"nav-link\">Gérer les véhicules</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_mentions') }}\">Mentions Legales</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>

", "fragment/header.html.twig", "C:\\Users\\MB\\Desktop\\TPMalik\\TpModule7\\templates\\fragment\\header.html.twig");
    }
}
