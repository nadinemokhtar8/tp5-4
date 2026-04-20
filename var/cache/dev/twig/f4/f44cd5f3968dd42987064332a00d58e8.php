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

/* articles/index.html.twig */
class __TwigTemplate_0e8ab371a372ab31c8561c078e884e52 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste des articles";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"mb-1\">Liste des articles</h1>
            <p class=\"text-muted mb-0\">TP4 Doctrine ORM et opérations CRUD</p>
        </div>
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
        yield "\" class=\"btn btn-primary\">Ajouter un article</a>
    </div>

    <div class=\"card shadow-sm\">
        <div class=\"card-body p-0\">
            <table class=\"table table-striped mb-0\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th class=\"text-end\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 27
            yield "                        <tr>
                            <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                            <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                            <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                            <td class=\"text-end\">
                                <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\">Voir</a>
                                <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">Modifier</a>
                                <form method=\"post\" action=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_article_" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 35))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" onclick=\"return confirm('Supprimer cet article ?');\">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 40
        if (!$context['_iterated']) {
            // line 41
            yield "                        <tr>
                            <td colspan=\"4\" class=\"text-center py-4 text-muted\">Aucun article trouvé.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "articles/index.html.twig";
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
        return array (  179 => 45,  170 => 41,  168 => 40,  158 => 35,  154 => 34,  150 => 33,  146 => 32,  141 => 30,  137 => 29,  133 => 28,  130 => 27,  125 => 26,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des articles{% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"mb-1\">Liste des articles</h1>
            <p class=\"text-muted mb-0\">TP4 Doctrine ORM et opérations CRUD</p>
        </div>
        <a href=\"{{ path('article_new') }}\" class=\"btn btn-primary\">Ajouter un article</a>
    </div>

    <div class=\"card shadow-sm\">
        <div class=\"card-body p-0\">
            <table class=\"table table-striped mb-0\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th class=\"text-end\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for article in articles %}
                        <tr>
                            <td>{{ article.id }}</td>
                            <td>{{ article.nom }}</td>
                            <td>{{ article.prix }}</td>
                            <td class=\"text-end\">
                                <a href=\"{{ path('article_show', {'id': article.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">Voir</a>
                                <a href=\"{{ path('article_edit', {'id': article.id}) }}\" class=\"btn btn-sm btn-outline-primary\">Modifier</a>
                                <form method=\"post\" action=\"{{ path('article_delete', {'id': article.id}) }}\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_article_' ~ article.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" onclick=\"return confirm('Supprimer cet article ?');\">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\" class=\"text-center py-4 text-muted\">Aucun article trouvé.</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "articles/index.html.twig", "/app/templates/articles/index.html.twig");
    }
}
