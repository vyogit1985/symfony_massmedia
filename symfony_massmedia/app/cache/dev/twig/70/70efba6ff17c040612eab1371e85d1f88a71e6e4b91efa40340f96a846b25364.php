<?php

/* MassMediaBlogBundle:Page:index.html.twig */
class __TwigTemplate_fdd14ac83f2586ace15c9c6d48d70e6ff20e13dd2d529252ec47097dd1d90577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MassMediaBlogBundle::layout.html.twig", "MassMediaBlogBundle:Page:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MassMediaBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fce3b7adc17a6e9c3e7a86136227afb6b4dde747c10efb3418817882e7e7736d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce3b7adc17a6e9c3e7a86136227afb6b4dde747c10efb3418817882e7e7736d->enter($__internal_fce3b7adc17a6e9c3e7a86136227afb6b4dde747c10efb3418817882e7e7736d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fce3b7adc17a6e9c3e7a86136227afb6b4dde747c10efb3418817882e7e7736d->leave($__internal_fce3b7adc17a6e9c3e7a86136227afb6b4dde747c10efb3418817882e7e7736d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_06824bcaa650784b5dd5a6342af51c519bf60b5247a6ea09a5e8e5b3552f8e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06824bcaa650784b5dd5a6342af51c519bf60b5247a6ea09a5e8e5b3552f8e1f->enter($__internal_06824bcaa650784b5dd5a6342af51c519bf60b5247a6ea09a5e8e5b3552f8e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "        <article class=\"category\">
            <header>
                <h2><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("MassMediaBlogBundle_category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "description", array(0 => 100), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("MassMediaBlogBundle_category_update", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">Редагувати тут...</a></p>
            </div>
            
            <footer class=\"meta\">
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 20
            echo "        <p>There are no categories entries for MassMedia blog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            
    <h3>Add Category</h3>
    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("MassMediaBlogBundle:Category:new"));
        echo "    
            
";
        
        $__internal_06824bcaa650784b5dd5a6342af51c519bf60b5247a6ea09a5e8e5b3552f8e1f->leave($__internal_06824bcaa650784b5dd5a6342af51c519bf60b5247a6ea09a5e8e5b3552f8e1f_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  82 => 22,  75 => 20,  63 => 13,  59 => 12,  50 => 8,  46 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/MassMedia/BlogBundle/Resources/views/Page/index.html.twig #}
{% extends 'MassMediaBlogBundle::layout.html.twig' %}

{% block body %}
    {% for category in categories %}
        <article class=\"category\">
            <header>
                <h2><a href=\"{{ path('MassMediaBlogBundle_category_show', { 'id': category.id }) }}\">{{ category.name }}</a></h2>
            </header>

            <div class=\"snippet\">
                <p>{{ category.description(100) }}</p>
                <p class=\"continue\"><a href=\"{{ path('MassMediaBlogBundle_category_update', { 'id': category.id }) }}\">Редагувати тут...</a></p>
            </div>
            
            <footer class=\"meta\">
            </footer>
        </article>
    {% else %}
        <p>There are no categories entries for MassMedia blog</p>
    {% endfor %}
            
    <h3>Add Category</h3>
    {{ render(controller('MassMediaBlogBundle:Category:new')) }}    
            
{% endblock %}", "MassMediaBlogBundle:Page:index.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Page/index.html.twig");
    }
}
