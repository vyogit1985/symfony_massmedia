<?php

/* MassMediaBlogBundle:Comment:update.html.twig */
class __TwigTemplate_9b0ff7a7f5ff33221dc14136a2ecc1c738e77a801b75bcd6394c87945ccb32f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MassMediaBlogBundle::layout.html.twig", "MassMediaBlogBundle:Comment:update.html.twig", 1);
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
        $__internal_0926b324caf4bad908aec8e024e49c496fc2f5d1995477e94ad2a8455f6e65df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0926b324caf4bad908aec8e024e49c496fc2f5d1995477e94ad2a8455f6e65df->enter($__internal_0926b324caf4bad908aec8e024e49c496fc2f5d1995477e94ad2a8455f6e65df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Comment:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0926b324caf4bad908aec8e024e49c496fc2f5d1995477e94ad2a8455f6e65df->leave($__internal_0926b324caf4bad908aec8e024e49c496fc2f5d1995477e94ad2a8455f6e65df_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b40353e9cf033842b6d65364d4576549540d34eb47c91aec43a8a8e106ba5930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40353e9cf033842b6d65364d4576549540d34eb47c91aec43a8a8e106ba5930->enter($__internal_b40353e9cf033842b6d65364d4576549540d34eb47c91aec43a8a8e106ba5930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Редагувати коментар";
        
        $__internal_b40353e9cf033842b6d65364d4576549540d34eb47c91aec43a8a8e106ba5930->leave($__internal_b40353e9cf033842b6d65364d4576549540d34eb47c91aec43a8a8e106ba5930_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2353e82263e6bc236896be0282f13b43e8bf95562db506816e7aa65eb2403028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2353e82263e6bc236896be0282f13b43e8bf95562db506816e7aa65eb2403028->enter($__internal_2353e82263e6bc236896be0282f13b43e8bf95562db506816e7aa65eb2403028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Редагуйте коментар до блогу \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "postId", array()), "name", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 7
        $this->loadTemplate("MassMediaBlogBundle:Comment:form.update.html.twig", "MassMediaBlogBundle:Comment:update.html.twig", 7)->display(array_merge($context, array("form" => (isset($context["form_update"]) ? $context["form_update"] : $this->getContext($context, "form_update")))));
        
        $__internal_2353e82263e6bc236896be0282f13b43e8bf95562db506816e7aa65eb2403028->leave($__internal_2353e82263e6bc236896be0282f13b43e8bf95562db506816e7aa65eb2403028_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Comment:update.html.twig";
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

{% block title %}Редагувати коментар{% endblock%}

{% block body %}
    <h1>Редагуйте коментар до блогу \"{{ comment.postId.name }}\"</h1>
    {% include 'MassMediaBlogBundle:Comment:form.update.html.twig' with { 'form': form_update } %}
{% endblock %}
", "MassMediaBlogBundle:Comment:update.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Comment/update.html.twig");
    }
}
