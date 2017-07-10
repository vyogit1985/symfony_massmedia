<?php

/* MassMediaBlogBundle:Page:contact.html.twig */
class __TwigTemplate_e8148cd92278463ada7c56b4ae8d2a1ca6816b6885db57a1e7a28f16477f54b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MassMediaBlogBundle::layout.html.twig", "MassMediaBlogBundle:Page:contact.html.twig", 2);
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
        $__internal_850e1fd663c27906c855b916c5c8e282811c40bb009fad520bd6c791f6c9b340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850e1fd663c27906c855b916c5c8e282811c40bb009fad520bd6c791f6c9b340->enter($__internal_850e1fd663c27906c855b916c5c8e282811c40bb009fad520bd6c791f6c9b340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_850e1fd663c27906c855b916c5c8e282811c40bb009fad520bd6c791f6c9b340->leave($__internal_850e1fd663c27906c855b916c5c8e282811c40bb009fad520bd6c791f6c9b340_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_de476794ec0854f487b1c410724198ae6e2065e4c3a90b42c5e31208c1f789f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de476794ec0854f487b1c410724198ae6e2065e4c3a90b42c5e31208c1f789f6->enter($__internal_de476794ec0854f487b1c410724198ae6e2065e4c3a90b42c5e31208c1f789f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_de476794ec0854f487b1c410724198ae6e2065e4c3a90b42c5e31208c1f789f6->leave($__internal_de476794ec0854f487b1c410724198ae6e2065e4c3a90b42c5e31208c1f789f6_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_624140e215d2582417edaea2d3a870bc12a4664b943fb997c039fc4129fc0c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624140e215d2582417edaea2d3a870bc12a4664b943fb997c039fc4129fc0c18->enter($__internal_624140e215d2582417edaea2d3a870bc12a4664b943fb997c039fc4129fc0c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>

    <p>Want to contact symblog?</p>

";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("MassMediaBlogBundle_contact"), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "
";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row');
        echo "

";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

<input type=\"submit\" value=\"Submit\" />

 ";
        
        $__internal_624140e215d2582417edaea2d3a870bc12a4664b943fb997c039fc4129fc0c18->leave($__internal_624140e215d2582417edaea2d3a870bc12a4664b943fb997c039fc4129fc0c18_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  65 => 14,  61 => 13,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/MassMedia/BlogBundle/Resources/views/Page/contact.html.twig #}
{% extends 'MassMediaBlogBundle::layout.html.twig' %}

{% block title %}Contact{% endblock%}

{% block body %}
    <header>
        <h1>Contact symblog</h1>
    </header>

    <p>Want to contact symblog?</p>

{{ form_start(form, { 'action': path('MassMediaBlogBundle_contact'), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}
{{ form_errors(form) }}

{{ form_row(form.name) }}
{{ form_row(form.email) }}
{{ form_row(form.subject) }}
{{ form_row(form.body) }}

{{ form_rest(form) }}

<input type=\"submit\" value=\"Submit\" />

 {% endblock %}
", "MassMediaBlogBundle:Page:contact.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Page/contact.html.twig");
    }
}
