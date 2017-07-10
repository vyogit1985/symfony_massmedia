<?php

/* MassMediaBlogBundle:Category:update.html.twig */
class __TwigTemplate_efef6fb8e2faa8f906f0603930404b3acadfab106f62fd09f08ce0d9516bf6c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MassMediaBlogBundle::layout.html.twig", "MassMediaBlogBundle:Category:update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MassMediaBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5961f81d25a181049efcc3311b716e3f281468c843d0e477b41ee0a41bd558ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5961f81d25a181049efcc3311b716e3f281468c843d0e477b41ee0a41bd558ea->enter($__internal_5961f81d25a181049efcc3311b716e3f281468c843d0e477b41ee0a41bd558ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Category:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5961f81d25a181049efcc3311b716e3f281468c843d0e477b41ee0a41bd558ea->leave($__internal_5961f81d25a181049efcc3311b716e3f281468c843d0e477b41ee0a41bd558ea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_339d04ede88c9eb616d3aff91bf418c7a67cefe3454e256ca1048410ff835ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339d04ede88c9eb616d3aff91bf418c7a67cefe3454e256ca1048410ff835ca6->enter($__internal_339d04ede88c9eb616d3aff91bf418c7a67cefe3454e256ca1048410ff835ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Редагування категорії";
        
        $__internal_339d04ede88c9eb616d3aff91bf418c7a67cefe3454e256ca1048410ff835ca6->leave($__internal_339d04ede88c9eb616d3aff91bf418c7a67cefe3454e256ca1048410ff835ca6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_57bccb0bc34117fc4a6804e12012167ab1b984d7bf687f4ed741af13e4eaba5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bccb0bc34117fc4a6804e12012167ab1b984d7bf687f4ed741af13e4eaba5a->enter($__internal_57bccb0bc34117fc4a6804e12012167ab1b984d7bf687f4ed741af13e4eaba5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Редагування категорії </h1>
    ";
        // line 7
        $this->loadTemplate("MassMediaBlogBundle:Category:form.update.html.twig", "MassMediaBlogBundle:Category:update.html.twig", 7)->display(array_merge($context, array("form" => (isset($context["form_update"]) ? $context["form_update"] : $this->getContext($context, "form_update")))));
        
        $__internal_57bccb0bc34117fc4a6804e12012167ab1b984d7bf687f4ed741af13e4eaba5a->leave($__internal_57bccb0bc34117fc4a6804e12012167ab1b984d7bf687f4ed741af13e4eaba5a_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Category:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MassMediaBlogBundle::layout.html.twig' %}

{% block title %}Редагування категорії{% endblock%}

{% block body %}
    <h1>Редагування категорії </h1>
    {% include 'MassMediaBlogBundle:Category:form.update.html.twig' with { 'form': form_update } %}
{% endblock %}
", "MassMediaBlogBundle:Category:update.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Category/update.html.twig");
    }
}
