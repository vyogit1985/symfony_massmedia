<?php

/* MassMediaBlogBundle:Comment:create.html.twig */
class __TwigTemplate_17a1b01c996b59b1f192a32ec3bc9ab96f1ac852d64df0fb1cf34828eedb1756 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MassMediaBlogBundle::layout.html.twig", "MassMediaBlogBundle:Comment:create.html.twig", 1);
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
        $__internal_69fbb2719054a4a0728830a76498ac46573ce3dbaa48f33271d79b296e9feaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69fbb2719054a4a0728830a76498ac46573ce3dbaa48f33271d79b296e9feaa9->enter($__internal_69fbb2719054a4a0728830a76498ac46573ce3dbaa48f33271d79b296e9feaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69fbb2719054a4a0728830a76498ac46573ce3dbaa48f33271d79b296e9feaa9->leave($__internal_69fbb2719054a4a0728830a76498ac46573ce3dbaa48f33271d79b296e9feaa9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c35fedaac5b653e3c8027cb3a6f8fff0600f9066fba7861470be72dfa5e3f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c35fedaac5b653e3c8027cb3a6f8fff0600f9066fba7861470be72dfa5e3f94->enter($__internal_0c35fedaac5b653e3c8027cb3a6f8fff0600f9066fba7861470be72dfa5e3f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Додати коментар";
        
        $__internal_0c35fedaac5b653e3c8027cb3a6f8fff0600f9066fba7861470be72dfa5e3f94->leave($__internal_0c35fedaac5b653e3c8027cb3a6f8fff0600f9066fba7861470be72dfa5e3f94_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd59cc46ec01319db3f2fa4012be43a813f77345256c97d799fe4eaa285d177f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd59cc46ec01319db3f2fa4012be43a813f77345256c97d799fe4eaa285d177f->enter($__internal_cd59cc46ec01319db3f2fa4012be43a813f77345256c97d799fe4eaa285d177f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Додайте коментар до блогу \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "postId", array()), "name", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 7
        $this->loadTemplate("MassMediaBlogBundle:Comment:form.html.twig", "MassMediaBlogBundle:Comment:create.html.twig", 7)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        
        $__internal_cd59cc46ec01319db3f2fa4012be43a813f77345256c97d799fe4eaa285d177f->leave($__internal_cd59cc46ec01319db3f2fa4012be43a813f77345256c97d799fe4eaa285d177f_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Comment:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Додати коментар{% endblock%}

{% block body %}
    <h1>Додайте коментар до блогу \"{{ comment.postId.name }}\"</h1>
    {% include 'MassMediaBlogBundle:Comment:form.html.twig' with { 'form': form } %}
{% endblock %}
", "MassMediaBlogBundle:Comment:create.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Comment/create.html.twig");
    }
}
