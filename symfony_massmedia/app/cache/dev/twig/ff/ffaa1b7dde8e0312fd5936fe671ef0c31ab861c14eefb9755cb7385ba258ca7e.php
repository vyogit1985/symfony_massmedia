<?php

/* MassMediaBlogBundle::layout.html.twig */
class __TwigTemplate_ebd17168155f0c03939098d4a0dc66d1747bb3e947b4be3cd22579aabafbb791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "MassMediaBlogBundle::layout.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1525d1bca00c37391fe89d50f2441bf6c9b5985a40cef63612111eca2d11e0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1525d1bca00c37391fe89d50f2441bf6c9b5985a40cef63612111eca2d11e0f0->enter($__internal_1525d1bca00c37391fe89d50f2441bf6c9b5985a40cef63612111eca2d11e0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1525d1bca00c37391fe89d50f2441bf6c9b5985a40cef63612111eca2d11e0f0->leave($__internal_1525d1bca00c37391fe89d50f2441bf6c9b5985a40cef63612111eca2d11e0f0_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_724e59d54104739ea5582770a608330bcd85c172ab710b05809ac10ed8e9e966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724e59d54104739ea5582770a608330bcd85c172ab710b05809ac10ed8e9e966->enter($__internal_724e59d54104739ea5582770a608330bcd85c172ab710b05809ac10ed8e9e966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/massmediablog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_724e59d54104739ea5582770a608330bcd85c172ab710b05809ac10ed8e9e966->leave($__internal_724e59d54104739ea5582770a608330bcd85c172ab710b05809ac10ed8e9e966_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7fc7001ba249a4f04a1cc1fe70e2712def52205d1998be7fb3ae52e25c8f7501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc7001ba249a4f04a1cc1fe70e2712def52205d1998be7fb3ae52e25c8f7501->enter($__internal_7fc7001ba249a4f04a1cc1fe70e2712def52205d1998be7fb3ae52e25c8f7501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    Sidebar content
";
        
        $__internal_7fc7001ba249a4f04a1cc1fe70e2712def52205d1998be7fb3ae52e25c8f7501->leave($__internal_7fc7001ba249a4f04a1cc1fe70e2712def52205d1998be7fb3ae52e25c8f7501_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  55 => 9,  46 => 6,  41 => 5,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/MassMedia/BlogBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('bundles/massmediablog/css/blog.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block sidebar %}
    Sidebar content
{% endblock %}", "MassMediaBlogBundle::layout.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/layout.html.twig");
    }
}
