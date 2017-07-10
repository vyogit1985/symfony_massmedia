<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_910973f4792b2930df965b24146508f6dddd0ff3389cf9d3eefeaafabdd06fe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ab64f94729f8bcf59b93a248dfc7296ae1c5a72844227eddb2ce04bb98d1bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab64f94729f8bcf59b93a248dfc7296ae1c5a72844227eddb2ce04bb98d1bd9->enter($__internal_8ab64f94729f8bcf59b93a248dfc7296ae1c5a72844227eddb2ce04bb98d1bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ab64f94729f8bcf59b93a248dfc7296ae1c5a72844227eddb2ce04bb98d1bd9->leave($__internal_8ab64f94729f8bcf59b93a248dfc7296ae1c5a72844227eddb2ce04bb98d1bd9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b2d3045e4b736912a6da4c820bd211178968384a7f2f27a2fba23da6dc48cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2d3045e4b736912a6da4c820bd211178968384a7f2f27a2fba23da6dc48cc9->enter($__internal_6b2d3045e4b736912a6da4c820bd211178968384a7f2f27a2fba23da6dc48cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6b2d3045e4b736912a6da4c820bd211178968384a7f2f27a2fba23da6dc48cc9->leave($__internal_6b2d3045e4b736912a6da4c820bd211178968384a7f2f27a2fba23da6dc48cc9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4304609fc60c2640fa16d2aeef2cd8dc128495f43faa4d4ad9a10d00a503e361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4304609fc60c2640fa16d2aeef2cd8dc128495f43faa4d4ad9a10d00a503e361->enter($__internal_4304609fc60c2640fa16d2aeef2cd8dc128495f43faa4d4ad9a10d00a503e361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4304609fc60c2640fa16d2aeef2cd8dc128495f43faa4d4ad9a10d00a503e361->leave($__internal_4304609fc60c2640fa16d2aeef2cd8dc128495f43faa4d4ad9a10d00a503e361_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cb4bb7d51a6fa56d2e1799fab20cb3b1fcd6ab6b7b3f72f53e165c86b953f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb4bb7d51a6fa56d2e1799fab20cb3b1fcd6ab6b7b3f72f53e165c86b953f8f->enter($__internal_4cb4bb7d51a6fa56d2e1799fab20cb3b1fcd6ab6b7b3f72f53e165c86b953f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4cb4bb7d51a6fa56d2e1799fab20cb3b1fcd6ab6b7b3f72f53e165c86b953f8f->leave($__internal_4cb4bb7d51a6fa56d2e1799fab20cb3b1fcd6ab6b7b3f72f53e165c86b953f8f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
