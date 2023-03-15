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

/* test/index.html.twig */
class __TwigTemplate_94218129bdc63ebde40e976496563c1b extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "test/index.html.twig", 1);
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

        echo "Test";
        
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
        echo "    <div class=\"container\">
        SweetAlert
\t\t<div>
\t\t\t<a id=\"bt1\" class=\"btn btn-success\">Info</a>
\t\t\t<a id=\"bt2\" class=\"btn btn-danger\">Delete</a>
\t\t\t<a id=\"bt3\" class=\"btn btn-warning\">Warning</a>
\t\t\t<a id=\"bt4\" class=\"btn btn-danger\">Error</a>
\t\t</div>
\t\tNotyf
\t\t<div>
\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test", ["notyf" => "success"]);
        echo "\" role=\"button\">Succès</a>
\t\t\t<a class=\"btn btn-info\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test", ["notyf" => "info"]);
        echo "\" role=\"button\">Info</a>
\t\t\t<a class=\"btn btn-warning\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test", ["notyf" => "warning"]);
        echo "\" role=\"button\">Warning</a>
\t\t\t<a class=\"btn btn-danger\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test", ["notyf" => "error"]);
        echo "\" role=\"button\">Error</a>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "test/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 19,  108 => 18,  104 => 17,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Test{% endblock %}

{% block body %}
    <div class=\"container\">
        SweetAlert
\t\t<div>
\t\t\t<a id=\"bt1\" class=\"btn btn-success\">Info</a>
\t\t\t<a id=\"bt2\" class=\"btn btn-danger\">Delete</a>
\t\t\t<a id=\"bt3\" class=\"btn btn-warning\">Warning</a>
\t\t\t<a id=\"bt4\" class=\"btn btn-danger\">Error</a>
\t\t</div>
\t\tNotyf
\t\t<div>
\t\t\t<a class=\"btn btn-success\" href=\"{{ path('app_test', {'notyf':'success'}) }}\" role=\"button\">Succès</a>
\t\t\t<a class=\"btn btn-info\" href=\"{{ path('app_test', {'notyf':'info'}) }}\" role=\"button\">Info</a>
\t\t\t<a class=\"btn btn-warning\" href=\"{{ path('app_test', {'notyf':'warning'}) }}\" role=\"button\">Warning</a>
\t\t\t<a class=\"btn btn-danger\" href=\"{{ path('app_test', {'notyf':'error'}) }}\" role=\"button\">Error</a>
\t\t</div>
\t</div>
{% endblock %}
", "test/index.html.twig", "C:\\Users\\dell\\JSBroker\\templates\\test\\index.html.twig");
    }
}
