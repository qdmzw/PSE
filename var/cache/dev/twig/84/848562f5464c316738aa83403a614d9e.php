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

/* bzoviielena.html.twig */
class __TwigTemplate_21285aa6f63bdb9d60ef6030b2322008 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bzoviielena.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bzoviielena.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bzoviielena.html.twig", 1);
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

        yield "Pagina Personală";
        
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
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bzoviielena.css"), "html", null, true);
        yield "\">

    <div class=\"personal-container\">
        <div class=\"image-name-container\">
            <div class=\"image-container\">
                <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Bzovii_Elena_PSE_Project.jpg"), "html", null, true);
        yield "\" alt=\"Imagine personală\">
            </div>
            <div class=\"name-container\">
                <h1>Bzovii Elena</h1>
            </div>
        </div>
        
        <div class=\"text-container\">
            <h2>Despre Mine</h2>
            <p>Sunt Bzovii Elena, studenta la master la specializarea programare avansata si baza de date, la facultatea de informatica si inginerie, la universitatea \"1 Decembrie 1918\" din Alba Iulia.</p>
            <p>Momentan sunt angajata la Continental Sibiu ca si agile junior software engineer, si am o experienta de lucru in domeniu de aproximativ un an si jumatate.</p>
            <p>In timpul liber sunt pasionata de arte vizuale, musica si carti si am calatorit cu ajutorul proiectelor Erasmus in mai multe tari.</p>
            
            <h2>Tarile vizitate</h2>
            <ul>
                <li>Belgia</li>
                <li>Spania</li>
                <li>Bulgaria</li>
                <li>Polonia</li>
                <li>Lituania</li>
                <li>Marea Britanie</li>
            </ul>
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
        return "bzoviielena.html.twig";
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
        return array (  109 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pagina Personală{% endblock %}

{% block body %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/bzoviielena.css') }}\">

    <div class=\"personal-container\">
        <div class=\"image-name-container\">
            <div class=\"image-container\">
                <img src=\"{{ asset('images/Bzovii_Elena_PSE_Project.jpg') }}\" alt=\"Imagine personală\">
            </div>
            <div class=\"name-container\">
                <h1>Bzovii Elena</h1>
            </div>
        </div>
        
        <div class=\"text-container\">
            <h2>Despre Mine</h2>
            <p>Sunt Bzovii Elena, studenta la master la specializarea programare avansata si baza de date, la facultatea de informatica si inginerie, la universitatea \"1 Decembrie 1918\" din Alba Iulia.</p>
            <p>Momentan sunt angajata la Continental Sibiu ca si agile junior software engineer, si am o experienta de lucru in domeniu de aproximativ un an si jumatate.</p>
            <p>In timpul liber sunt pasionata de arte vizuale, musica si carti si am calatorit cu ajutorul proiectelor Erasmus in mai multe tari.</p>
            
            <h2>Tarile vizitate</h2>
            <ul>
                <li>Belgia</li>
                <li>Spania</li>
                <li>Bulgaria</li>
                <li>Polonia</li>
                <li>Lituania</li>
                <li>Marea Britanie</li>
            </ul>
        </div>
    </div>
{% endblock %}
", "bzoviielena.html.twig", "/home/adonkey/Desktop/PSE/templates/bzoviielena.html.twig");
    }
}
