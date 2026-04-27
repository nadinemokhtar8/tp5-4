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
        </div>
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
        yield "\" class=\"btn btn-primary\">Ajouter un article</a>
    </div>

    <div class=\"row mb-4\">
        <div class=\"col-lg-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h2 class=\"h5 mb-3\">Recherche par nom</h2>
                    ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        yield "
                        <div class=\"input-group\">
                            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'widget');
        yield "
                            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                        </div>
                    ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>

    <div class=\"card shadow-sm\">
        <div class=\"card-body p-0\">
            <table class=\"table table-striped mb-0\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Categorie</th>
                        <th class=\"text-end\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 43
            yield "                        <tr>
                            <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                            <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                            <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                            <td>";
            // line 47
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 47), "titre", [], "any", false, false, false, 47), "html", null, true)) : ("Aucune"));
            yield "</td>
                            <td class=\"text-end\">
                                <a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\">Voir</a>
                                <a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">Modifier</a>
                                <form method=\"post\" action=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_article_" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 52))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" onclick=\"return confirm('Supprimer cet article ?');\">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 57
        if (!$context['_iterated']) {
            // line 58
            yield "                        <tr>
                            <td colspan=\"5\" class=\"text-center py-4 text-muted\">Aucun article trouve.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
        return array (  208 => 62,  199 => 58,  197 => 57,  187 => 52,  183 => 51,  179 => 50,  175 => 49,  170 => 47,  166 => 46,  162 => 45,  158 => 44,  155 => 43,  150 => 42,  128 => 23,  122 => 20,  117 => 18,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des articles{% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"mb-1\">Liste des articles</h1>
        </div>
        <a href=\"{{ path('article_new') }}\" class=\"btn btn-primary\">Ajouter un article</a>
    </div>

    <div class=\"row mb-4\">
        <div class=\"col-lg-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h2 class=\"h5 mb-3\">Recherche par nom</h2>
                    {{ form_start(form) }}
                        <div class=\"input-group\">
                            {{ form_widget(form.nom) }}
                            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>

    <div class=\"card shadow-sm\">
        <div class=\"card-body p-0\">
            <table class=\"table table-striped mb-0\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Categorie</th>
                        <th class=\"text-end\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for article in articles %}
                        <tr>
                            <td>{{ article.id }}</td>
                            <td>{{ article.nom }}</td>
                            <td>{{ article.prix }}</td>
                            <td>{{ article.category ? article.category.titre : 'Aucune' }}</td>
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
                            <td colspan=\"5\" class=\"text-center py-4 text-muted\">Aucun article trouve.</td>
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
