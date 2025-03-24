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

/* cocerba/alex.html.twig */
class __TwigTemplate_056115d5904ffa534daa77d2dc9508bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cocerba/alex.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cocerba/alex.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"ro\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Cocerba Page</title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/cocerba.css"), "html", null, true);
        yield "\">
</head>
<body>
    <header>
        <h1>Bine ai venit pe pagina lui Cocerba Alexandru</h1>
        <nav>
            <ul>
                <li><a href=\"#\">Acasă</a></li>
                <li><a href=\"#\">Despre</a></li>
                <li><a href=\"#\">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class=\"container\">
        <img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/CAimage.jpg"), "html", null, true);
        yield "\" class=\"personal-image\" alt=\"Imagine personală\">

        <div class=\"text-content\">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>

    <div class=\"centered-box\">
        <h3>Îmi plac următoarele lucruri:</h3>
        <ul>
            <li>Sportul</li>
            <li>Animalele</li>
            <li>Tehnologia</li>
            <li>Natura</li>
            <li>Călătoriile</li>
        </ul>

        <h3>Hobby-uri:</h3>
        <ul>
            <li>Citit cărți</li>
            <li>Programare</li>
            <li>Fotografie</li>
            <li>Gătit</li>
        </ul>

        <h3>Experiență:</h3>
        <p>Am lucrat în diverse domenii, de la IT la design grafic, și sunt pasionat de dezvoltarea software-ului. Aș dori să continui să învăț și să contribui la proiecte open-source. De asemenea, îmi place să lucrez în echipe colaborative și să împărtășesc cunoștințele mele cu alții.</p>

        <h3>Certificări și cursuri:</h3>
        <ul>
            <li>Certificat în Programare Avansată</li>
            <li>Diplomă în Design Grafic</li>
            <li>Cursuri online de Web Development</li>
        </ul>
    </div>

    <footer>
        <p>&copy; 2024 Cocerba Alexandru. Toate drepturile rezervate.</p>
    </footer>
</body>
</html>
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
        return "cocerba/alex.html.twig";
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
        return array (  74 => 22,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ro\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Cocerba Page</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/cocerba.css') }}\">
</head>
<body>
    <header>
        <h1>Bine ai venit pe pagina lui Cocerba Alexandru</h1>
        <nav>
            <ul>
                <li><a href=\"#\">Acasă</a></li>
                <li><a href=\"#\">Despre</a></li>
                <li><a href=\"#\">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class=\"container\">
        <img src=\"{{ asset('images/CAimage.jpg') }}\" class=\"personal-image\" alt=\"Imagine personală\">

        <div class=\"text-content\">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>

    <div class=\"centered-box\">
        <h3>Îmi plac următoarele lucruri:</h3>
        <ul>
            <li>Sportul</li>
            <li>Animalele</li>
            <li>Tehnologia</li>
            <li>Natura</li>
            <li>Călătoriile</li>
        </ul>

        <h3>Hobby-uri:</h3>
        <ul>
            <li>Citit cărți</li>
            <li>Programare</li>
            <li>Fotografie</li>
            <li>Gătit</li>
        </ul>

        <h3>Experiență:</h3>
        <p>Am lucrat în diverse domenii, de la IT la design grafic, și sunt pasionat de dezvoltarea software-ului. Aș dori să continui să învăț și să contribui la proiecte open-source. De asemenea, îmi place să lucrez în echipe colaborative și să împărtășesc cunoștințele mele cu alții.</p>

        <h3>Certificări și cursuri:</h3>
        <ul>
            <li>Certificat în Programare Avansată</li>
            <li>Diplomă în Design Grafic</li>
            <li>Cursuri online de Web Development</li>
        </ul>
    </div>

    <footer>
        <p>&copy; 2024 Cocerba Alexandru. Toate drepturile rezervate.</p>
    </footer>
</body>
</html>
", "cocerba/alex.html.twig", "/home/adonkey/Desktop/PSE/templates/cocerba/alex.html.twig");
    }
}
