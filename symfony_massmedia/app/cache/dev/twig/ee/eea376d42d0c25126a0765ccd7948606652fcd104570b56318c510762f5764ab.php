<?php

/* MassMediaBlogBundle:Post:create.html.twig */
class __TwigTemplate_98667d3e8f29878510ec2272c390aa4f8d8d411ff80861a086c8cab388fdb78a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MassMediaBlogBundle::layout.html.twig", "MassMediaBlogBundle:Post:create.html.twig", 1);
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
        $__internal_6eba2e9237a35edaa6baeafb8342c9a8539f0482953826e62c4cda73271327c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eba2e9237a35edaa6baeafb8342c9a8539f0482953826e62c4cda73271327c9->enter($__internal_6eba2e9237a35edaa6baeafb8342c9a8539f0482953826e62c4cda73271327c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Post:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eba2e9237a35edaa6baeafb8342c9a8539f0482953826e62c4cda73271327c9->leave($__internal_6eba2e9237a35edaa6baeafb8342c9a8539f0482953826e62c4cda73271327c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fac1e243447a7c01b0b88e9e0916f3b767b27201c93ff8f706770491b7972680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac1e243447a7c01b0b88e9e0916f3b767b27201c93ff8f706770491b7972680->enter($__internal_fac1e243447a7c01b0b88e9e0916f3b767b27201c93ff8f706770491b7972680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Додавання посту";
        
        $__internal_fac1e243447a7c01b0b88e9e0916f3b767b27201c93ff8f706770491b7972680->leave($__internal_fac1e243447a7c01b0b88e9e0916f3b767b27201c93ff8f706770491b7972680_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bab11b10004f6726563e48be51039efc78cdf86a013ac056c7a465b2b46de117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab11b10004f6726563e48be51039efc78cdf86a013ac056c7a465b2b46de117->enter($__internal_bab11b10004f6726563e48be51039efc78cdf86a013ac056c7a465b2b46de117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Додати/редагувати пост до категоії \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "categoryId", array()), "name", array()), "html", null, true);
        echo "\" \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "name", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 7
        $this->loadTemplate("MassMediaBlogBundle:Post:form.html.twig", "MassMediaBlogBundle:Post:create.html.twig", 7)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        
        $__internal_bab11b10004f6726563e48be51039efc78cdf86a013ac056c7a465b2b46de117->leave($__internal_bab11b10004f6726563e48be51039efc78cdf86a013ac056c7a465b2b46de117_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Post:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Додавання посту{% endblock%}

{% block body %}
    <h1>Додати/редагувати пост до категоії \"{{ post.categoryId.name }}\" \"{{ post.name }}\"</h1>
    {% include 'MassMediaBlogBundle:Post:form.html.twig' with { 'form': form } %}
{% endblock %}
", "MassMediaBlogBundle:Post:create.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Post/create.html.twig");
    }
}
