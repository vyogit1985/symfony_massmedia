<?php

/* MassMediaBlogBundle:Category:show.html.twig */
class __TwigTemplate_99fd8f0bbe49a1460fa0aaaef92e75ffbf284860b17d1fbd1a63e3a5ad05694a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MassMediaBlogBundle::layout.html.twig", "MassMediaBlogBundle:Category:show.html.twig", 2);
        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MassMediaBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d5da3e22954753bf7d958f19f530965eb8f6be163c17afdaf87d6233aa25fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5da3e22954753bf7d958f19f530965eb8f6be163c17afdaf87d6233aa25fde->enter($__internal_2d5da3e22954753bf7d958f19f530965eb8f6be163c17afdaf87d6233aa25fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d5da3e22954753bf7d958f19f530965eb8f6be163c17afdaf87d6233aa25fde->leave($__internal_2d5da3e22954753bf7d958f19f530965eb8f6be163c17afdaf87d6233aa25fde_prof);

    }

    // line 4
    public function block_name($context, array $blocks = array())
    {
        $__internal_6456d8d3b29adad40e5653ba7a272ca7b817bccd01afa33da3cd026142cf680f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6456d8d3b29adad40e5653ba7a272ca7b817bccd01afa33da3cd026142cf680f->enter($__internal_6456d8d3b29adad40e5653ba7a272ca7b817bccd01afa33da3cd026142cf680f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        
        $__internal_6456d8d3b29adad40e5653ba7a272ca7b817bccd01afa33da3cd026142cf680f->leave($__internal_6456d8d3b29adad40e5653ba7a272ca7b817bccd01afa33da3cd026142cf680f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e21864b574c2504923e1281f4b924c7e13a02786ee60c057acd963a90aa0b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e21864b574c2504923e1281f4b924c7e13a02786ee60c057acd963a90aa0b11->enter($__internal_6e21864b574c2504923e1281f4b924c7e13a02786ee60c057acd963a90aa0b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <article class=\"category\">
        <header>
            <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</h2>
        </header>
        <div>
            <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "description", array()), "html", null, true);
        echo "</p>
        </div>
    </article>
            
    <section class=\"posts\" id=\"posts\">
        <section class=\"previous-posts\">
            <h3>Posts</h3>
            ";
        // line 19
        $this->loadTemplate("MassMediaBlogBundle:Post:index.html.twig", "MassMediaBlogBundle:Category:show.html.twig", 19)->display(array_merge($context, array("posts" => (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")))));
        // line 20
        echo "        </section>
        
        <h3>Add post</h3>
        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("MassMediaBlogBundle:Post:new", array("category_id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))));
        echo "   
    </section>
";
        
        $__internal_6e21864b574c2504923e1281f4b924c7e13a02786ee60c057acd963a90aa0b11->leave($__internal_6e21864b574c2504923e1281f4b924c7e13a02786ee60c057acd963a90aa0b11_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  75 => 20,  73 => 19,  63 => 12,  57 => 9,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/MassMedia/BlogBundle/Resouces/views/Category/show.html.twig #}
{% extends 'MassMediaBlogBundle::layout.html.twig' %}

{% block name %}{{ category.name }}{% endblock %}

{% block body %}
    <article class=\"category\">
        <header>
            <h2>{{ category.name }}</h2>
        </header>
        <div>
            <p>{{ category.description }}</p>
        </div>
    </article>
            
    <section class=\"posts\" id=\"posts\">
        <section class=\"previous-posts\">
            <h3>Posts</h3>
            {% include 'MassMediaBlogBundle:Post:index.html.twig' with { 'posts': posts } %}
        </section>
        
        <h3>Add post</h3>
        {{ render(controller('MassMediaBlogBundle:Post:new',{ 'category_id': category.id })) }}   
    </section>
{% endblock %}
", "MassMediaBlogBundle:Category:show.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Category/show.html.twig");
    }
}
