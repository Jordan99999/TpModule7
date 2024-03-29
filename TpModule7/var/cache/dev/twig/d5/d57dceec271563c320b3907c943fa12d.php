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

/* home/mentions.html.twig */
class __TwigTemplate_0af0b2048824ed197fcbdb625e8e811d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/mentions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/mentions.html.twig"));

        $this->parent = $this->loadTemplate("bootstrap.html.twig", "home/mentions.html.twig", 1);
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

        echo "Mentions légales";
        
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
        echo "
<div class=\"container\">
    <div class=\"jumbotron mentions-wrap\">
        <div class=\"tw-my-3\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>Mentions légales</h1>
                    <p>Conformément à la LOI n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique :</p>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-4\">
                    <br><h2>Informations éditeur</h2><hr>

                    <p>
                        <strong>Editeur :</strong>
                        Caradisiac, société par actions simplifiée au capital social de 20 000 euros<br>
                        SIREN 123 456 789 (RCS de Paris)<br>
                        TVA Intracommunautaire : FR123456789</p>
                    <p></p>
                    <p>123 rue de la Liberté<br>
                        75001 Paris<br>
                        01 23 45 67 89<br>
                        contact@Caradisiac.com</p>
                    <p>
                        <strong>Directeur de la publication :</strong>
                        Jean Bonot</p>

                </div>
                <div class=\"col-md-4\">
                    <br><h2>Hébergement</h2><hr>
                    <p>Entreprise Hébergeur<br>
                        123 rue de l'Hébergement<br>
                        75002 Paris<br>
                        01 23 45 67 89</p>

                </div>
                <div class=\"col-md-4\">
                    <br><h2>Mentions CNIL</h2><hr>

                    <p>Conformément à la loi du 6 janvier 1978, tout utilisateur dispose d'un droit d'accès, de rectification et de radiation aux informations le concernant. Sauf opposition de l'utilisateur, ces informations pourront être cédées, louées ou échangées.</p>
                    <p>Ce droit s'exerce auprès de : Caradisiac</p>
                    <p>N° identifiant CNIL : 987654321</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <br><h2>Conditions d'utilisation</h2><hr>

                    <p>Toute personne qui accède au site entreprise-xyz.com (ci-après le \"Site\") s'engage à respecter les présentes conditions d'utilisation, qui pourront pour certains services être complétées par des conditions particulières. Les données diffusées sur le réseau internet et extranet peuvent être réglementées en termes d'usage ou être protégées par un droit de propriété.</p>
                    <p>Toute personne est responsable des données qu'elle diffuse, utilise et/ou transfère et s'engage à ce titre à respecter la réglementation française en vigueur, notamment celle relative aux contenus manifestement illicites (pédophilie, incitation à la haine raciale...) ou la protection des droits des tiers (droits de propriété intellectuelle....). L'éditeur n'est pas responsable de l'usage des données, du contenu diffusé ou des prestations d'une autre personne et qui, notamment, ne respecterait pas la réglementation en vigueur.</p>
                    <p>Les données, comprenant leur contenu, les profils et les outils qui y sont rattachés, les documents téléchargeables, les représentations iconographiques et photographiques, et les marques commerciales présentes sur le Site, sont protégées par un droit de propriété intellectuelle. Toute reproduction ou représentation, même partielle des éléments susmentionnés, à d'autres fins qu'une utilisation privative, sur un quelconque support, est interdite et pourrait engager la responsabilité civile et pénale de la personne qui ne respecterait pas cette interdiction.</p>
                    <p>Les caractéristiques et la disponibilité des produits et services mentionnés sur le Site sont valables pour la France métropolitaine.</p>
                    <p>Nous vous invitons à prendre connaissance de nos
                        <a href=\"/pages/termes-et-conditions-d-utilisation\">termes et conditions d'utilisation</a>.</p>

                    <br><h2>Protection des données personnelles</h2><hr>

                    <p>Nous vous invitons à prendre connaissance de notre
                        <a href=\"/pages/politique-de-confidentialite\">politique de confidentialité</a>
                        qui présente les règles de protection des données personnelles dans le cadre de l'utilisation de notre plateforme.</p>

                    <br><h2>Utilisation du courrier électronique</h2><hr>

                    <p>Si vous souhaitez utiliser le courrier électronique mis à votre disposition sur ce site, vous êtes informé(e) que le secret des correspondances transmises sur le réseau Internet n'est pas garanti.</p>

                    <br><h2>Copyright</h2><hr>

                    <p>Toutes reproductions ou représentations, intégrales ou partielles, par quelque procédé que ce soit, toutes requêtes automatisées ou semi automatisées des données publiées sur ce site, faites sans l'autorisation de Caradisiac sont illicites et constituent une contrefaçon (Loi du 11 mars 1957 article 40/41 Code Pénal article 425).
                    </p>
                    <p>Le contenu du site est mis à jour et surveillé de manière constante.</p>


                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/mentions.html.twig";
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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"bootstrap.html.twig\" %}

{% block title %}Mentions légales{% endblock %}

{% block body %}

<div class=\"container\">
    <div class=\"jumbotron mentions-wrap\">
        <div class=\"tw-my-3\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>Mentions légales</h1>
                    <p>Conformément à la LOI n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique :</p>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-4\">
                    <br><h2>Informations éditeur</h2><hr>

                    <p>
                        <strong>Editeur :</strong>
                        Caradisiac, société par actions simplifiée au capital social de 20 000 euros<br>
                        SIREN 123 456 789 (RCS de Paris)<br>
                        TVA Intracommunautaire : FR123456789</p>
                    <p></p>
                    <p>123 rue de la Liberté<br>
                        75001 Paris<br>
                        01 23 45 67 89<br>
                        contact@Caradisiac.com</p>
                    <p>
                        <strong>Directeur de la publication :</strong>
                        Jean Bonot</p>

                </div>
                <div class=\"col-md-4\">
                    <br><h2>Hébergement</h2><hr>
                    <p>Entreprise Hébergeur<br>
                        123 rue de l'Hébergement<br>
                        75002 Paris<br>
                        01 23 45 67 89</p>

                </div>
                <div class=\"col-md-4\">
                    <br><h2>Mentions CNIL</h2><hr>

                    <p>Conformément à la loi du 6 janvier 1978, tout utilisateur dispose d'un droit d'accès, de rectification et de radiation aux informations le concernant. Sauf opposition de l'utilisateur, ces informations pourront être cédées, louées ou échangées.</p>
                    <p>Ce droit s'exerce auprès de : Caradisiac</p>
                    <p>N° identifiant CNIL : 987654321</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <br><h2>Conditions d'utilisation</h2><hr>

                    <p>Toute personne qui accède au site entreprise-xyz.com (ci-après le \"Site\") s'engage à respecter les présentes conditions d'utilisation, qui pourront pour certains services être complétées par des conditions particulières. Les données diffusées sur le réseau internet et extranet peuvent être réglementées en termes d'usage ou être protégées par un droit de propriété.</p>
                    <p>Toute personne est responsable des données qu'elle diffuse, utilise et/ou transfère et s'engage à ce titre à respecter la réglementation française en vigueur, notamment celle relative aux contenus manifestement illicites (pédophilie, incitation à la haine raciale...) ou la protection des droits des tiers (droits de propriété intellectuelle....). L'éditeur n'est pas responsable de l'usage des données, du contenu diffusé ou des prestations d'une autre personne et qui, notamment, ne respecterait pas la réglementation en vigueur.</p>
                    <p>Les données, comprenant leur contenu, les profils et les outils qui y sont rattachés, les documents téléchargeables, les représentations iconographiques et photographiques, et les marques commerciales présentes sur le Site, sont protégées par un droit de propriété intellectuelle. Toute reproduction ou représentation, même partielle des éléments susmentionnés, à d'autres fins qu'une utilisation privative, sur un quelconque support, est interdite et pourrait engager la responsabilité civile et pénale de la personne qui ne respecterait pas cette interdiction.</p>
                    <p>Les caractéristiques et la disponibilité des produits et services mentionnés sur le Site sont valables pour la France métropolitaine.</p>
                    <p>Nous vous invitons à prendre connaissance de nos
                        <a href=\"/pages/termes-et-conditions-d-utilisation\">termes et conditions d'utilisation</a>.</p>

                    <br><h2>Protection des données personnelles</h2><hr>

                    <p>Nous vous invitons à prendre connaissance de notre
                        <a href=\"/pages/politique-de-confidentialite\">politique de confidentialité</a>
                        qui présente les règles de protection des données personnelles dans le cadre de l'utilisation de notre plateforme.</p>

                    <br><h2>Utilisation du courrier électronique</h2><hr>

                    <p>Si vous souhaitez utiliser le courrier électronique mis à votre disposition sur ce site, vous êtes informé(e) que le secret des correspondances transmises sur le réseau Internet n'est pas garanti.</p>

                    <br><h2>Copyright</h2><hr>

                    <p>Toutes reproductions ou représentations, intégrales ou partielles, par quelque procédé que ce soit, toutes requêtes automatisées ou semi automatisées des données publiées sur ce site, faites sans l'autorisation de Caradisiac sont illicites et constituent une contrefaçon (Loi du 11 mars 1957 article 40/41 Code Pénal article 425).
                    </p>
                    <p>Le contenu du site est mis à jour et surveillé de manière constante.</p>


                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "home/mentions.html.twig", "/var/www/html/TpModule7/templates/home/mentions.html.twig");
    }
}
