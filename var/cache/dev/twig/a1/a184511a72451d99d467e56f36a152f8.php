<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* inc/navbar.html.twig */
class __TwigTemplate_014a2ba2192885c61ede016737d8c43e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        // line 1
        yield "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\">Gestion Articles</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#main-nav\" aria-controls=\"main-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"main-nav\">
            <div class=\"navbar-nav me-auto\">
                <a class=\"nav-link\" href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\">Accueil</a>
                <a class=\"nav-link\" href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
        yield "\">Nouvel article</a>
                <a class=\"nav-link\" href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_category");
        yield "\">Ajouter categorie</a>
                <div class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Rechercher</a>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"dropdown-item\" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_search_category");
        yield "\">Par categorie</a></li>
                        <li><a class=\"dropdown-item\" href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_search_price");
        yield "\">Par prix</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "inc/navbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  80 => 16,  76 => 15,  69 => 11,  65 => 10,  61 => 9,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('article_index') }}\">Gestion Articles</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#main-nav\" aria-controls=\"main-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"main-nav\">
            <div class=\"navbar-nav me-auto\">
                <a class=\"nav-link\" href=\"{{ path('article_index') }}\">Accueil</a>
                <a class=\"nav-link\" href=\"{{ path('article_new') }}\">Nouvel article</a>
                <a class=\"nav-link\" href=\"{{ path('new_category') }}\">Ajouter categorie</a>
                <div class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Rechercher</a>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"dropdown-item\" href=\"{{ path('article_search_category') }}\">Par categorie</a></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('article_search_price') }}\">Par prix</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
", "inc/navbar.html.twig", "/app/templates/inc/navbar.html.twig");
    }
}
