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

/* articles/searchPrice.html.twig */
class __TwigTemplate_996edf3a6953c71bdb81546ef0bfc58b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/searchPrice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/searchPrice.html.twig"));

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

        yield "Recherche par prix";
        
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
        yield "    <div class=\"container mt-4\">
        <h1>Recherche par prix</h1>

        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        yield "
                    <div class=\"mb-3\">
                        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "minPrice", [], "any", false, false, false, 13), 'label');
        yield "
                        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "minPrice", [], "any", false, false, false, 14), 'widget');
        yield "
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "maxPrice", [], "any", false, false, false, 17), 'label');
        yield "
                        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "maxPrice", [], "any", false, false, false, 18), 'widget');
        yield "
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>

        ";
        // line 25
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 25, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "            <h2 class=\"mt-4\">Resultats (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 26, $this->source); })())), "html", null, true);
            yield ")</h2>
            <div class=\"row\">
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 29
                yield "                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card h-100 shadow-sm\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 32), "html", null, true);
                yield "</h5>
                                <p class=\"card-text\">Prix: ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 33), "html", null, true);
                yield " TND</p>
                                ";
                // line 34
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 35
                    yield "                                    <p class=\"card-text\"><small class=\"text-muted\">Categorie: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 35), "titre", [], "any", false, false, false, 35), "html", null, true);
                    yield "</small></p>
                                ";
                }
                // line 37
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-info\">Voir</a>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "            </div>
        ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 43
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "vars", [], "any", false, false, false, 43), "submitted", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "            <div class=\"alert alert-warning\">Aucun article trouve dans cette fourchette de prix.</div>
        ";
        }
        // line 46
        yield "
        <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" class=\"btn btn-secondary mt-3\">Retour a la liste</a>
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
        return "articles/searchPrice.html.twig";
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
        return array (  196 => 47,  193 => 46,  189 => 44,  187 => 43,  184 => 42,  172 => 37,  166 => 35,  164 => 34,  160 => 33,  156 => 32,  151 => 29,  147 => 28,  141 => 26,  139 => 25,  132 => 21,  126 => 18,  122 => 17,  116 => 14,  112 => 13,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recherche par prix{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1>Recherche par prix</h1>

        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                {{ form_start(form) }}
                    <div class=\"mb-3\">
                        {{ form_label(form.minPrice) }}
                        {{ form_widget(form.minPrice) }}
                    </div>
                    <div class=\"mb-3\">
                        {{ form_label(form.maxPrice) }}
                        {{ form_widget(form.maxPrice) }}
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                {{ form_end(form) }}
            </div>
        </div>

        {% if articles is not empty %}
            <h2 class=\"mt-4\">Resultats ({{ articles|length }})</h2>
            <div class=\"row\">
                {% for article in articles %}
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card h-100 shadow-sm\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ article.nom }}</h5>
                                <p class=\"card-text\">Prix: {{ article.prix }} TND</p>
                                {% if article.category %}
                                    <p class=\"card-text\"><small class=\"text-muted\">Categorie: {{ article.category.titre }}</small></p>
                                {% endif %}
                                <a href=\"{{ path('article_show', {id: article.id}) }}\" class=\"btn btn-sm btn-info\">Voir</a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% elseif form.vars.submitted %}
            <div class=\"alert alert-warning\">Aucun article trouve dans cette fourchette de prix.</div>
        {% endif %}

        <a href=\"{{ path('article_index') }}\" class=\"btn btn-secondary mt-3\">Retour a la liste</a>
    </div>
{% endblock %}
", "articles/searchPrice.html.twig", "/app/templates/articles/searchPrice.html.twig");
    }
}
