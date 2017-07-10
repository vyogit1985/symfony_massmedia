<?php

/* MassMediaBlogBundle:Post:update.html.twig */
class __TwigTemplate_4952f3cb70709ade139aa7614fa2b42530b6f5d4db7512281dea9742bf13d1b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MassMediaBlogBundle::layout.html.twig", "MassMediaBlogBundle:Post:update.html.twig", 1);
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
        $__internal_171130006919d9e72abe7a63f39f26614165046fbe170c3ebbdbcd3671dae3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171130006919d9e72abe7a63f39f26614165046fbe170c3ebbdbcd3671dae3b7->enter($__internal_171130006919d9e72abe7a63f39f26614165046fbe170c3ebbdbcd3671dae3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Post:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_171130006919d9e72abe7a63f39f26614165046fbe170c3ebbdbcd3671dae3b7->leave($__internal_171130006919d9e72abe7a63f39f26614165046fbe170c3ebbdbcd3671dae3b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_52e71cfb1acf5a537c8b7daf01a13ed46da986f0579489656b04723c20bcc90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e71cfb1acf5a537c8b7daf01a13ed46da986f0579489656b04723c20bcc90f->enter($__internal_52e71cfb1acf5a537c8b7daf01a13ed46da986f0579489656b04723c20bcc90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Редагування посту";
        
        $__internal_52e71cfb1acf5a537c8b7daf01a13ed46da986f0579489656b04723c20bcc90f->leave($__internal_52e71cfb1acf5a537c8b7daf01a13ed46da986f0579489656b04723c20bcc90f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d450601ba4e5048c659fa09a18ee3160ca4c47a92b9ce89b4a4053dbd3b39d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d450601ba4e5048c659fa09a18ee3160ca4c47a92b9ce89b4a4053dbd3b39d1->enter($__internal_8d450601ba4e5048c659fa09a18ee3160ca4c47a92b9ce89b4a4053dbd3b39d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Редагувати пост до категоії \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "categoryId", array()), "name", array()), "html", null, true);
        echo "\" \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "name", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 7
        $this->loadTemplate("MassMediaBlogBundle:Post:form.update.html.twig", "MassMediaBlogBundle:Post:update.html.twig", 7)->display(array_merge($context, array("form" => (isset($context["form_update"]) ? $context["form_update"] : $this->getContext($context, "form_update")))));
        
        $__internal_8d450601ba4e5048c659fa09a18ee3160ca4c47a92b9ce89b4a4053dbd3b39d1->leave($__internal_8d450601ba4e5048c659fa09a18ee3160ca4c47a92b9ce89b4a4053dbd3b39d1_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Post:update.html.twig";
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

{% block title %}Редагування посту{% endblock%}

{% block body %}
    <h1>Редагувати пост до категоії \"{{ post.categoryId.name }}\" \"{{ post.name }}\"</h1>
    {% include 'MassMediaBlogBundle:Post:form.update.html.twig' with { 'form': form_update } %}
{% endblock %}
", "MassMediaBlogBundle:Post:update.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Post/update.html.twig");
    }
}
