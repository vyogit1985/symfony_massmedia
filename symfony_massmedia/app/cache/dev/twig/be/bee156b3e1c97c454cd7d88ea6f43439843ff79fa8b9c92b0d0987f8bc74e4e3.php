<?php

/* MassMediaBlogBundle:Page:about.html.twig */
class __TwigTemplate_651c2bec5f96916c3da2b2ef05870c14caffe5383b9878056280876fbda0b523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MassMediaBlogBundle::layout.html.twig", "MassMediaBlogBundle:Page:about.html.twig", 2);
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
        $__internal_69685e54fb69cc190a1b5206e278fde150af9c9acf70a11480afaaeafb61b10e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69685e54fb69cc190a1b5206e278fde150af9c9acf70a11480afaaeafb61b10e->enter($__internal_69685e54fb69cc190a1b5206e278fde150af9c9acf70a11480afaaeafb61b10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69685e54fb69cc190a1b5206e278fde150af9c9acf70a11480afaaeafb61b10e->leave($__internal_69685e54fb69cc190a1b5206e278fde150af9c9acf70a11480afaaeafb61b10e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_be9ab657ebba8c8e38560551df60ec1b71b979a7dc844e9cf8069435e8989fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9ab657ebba8c8e38560551df60ec1b71b979a7dc844e9cf8069435e8989fb0->enter($__internal_be9ab657ebba8c8e38560551df60ec1b71b979a7dc844e9cf8069435e8989fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_be9ab657ebba8c8e38560551df60ec1b71b979a7dc844e9cf8069435e8989fb0->leave($__internal_be9ab657ebba8c8e38560551df60ec1b71b979a7dc844e9cf8069435e8989fb0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e49fffe777aeb0c98f2686e2facebd95399ba34a4cb997eb6d915c82b385ac77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49fffe777aeb0c98f2686e2facebd95399ba34a4cb997eb6d915c82b385ac77->enter($__internal_e49fffe777aeb0c98f2686e2facebd95399ba34a4cb997eb6d915c82b385ac77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
            amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
            Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
            urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
            tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
            condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
            vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
            lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae.</p>
    </article>
";
        
        $__internal_e49fffe777aeb0c98f2686e2facebd95399ba34a4cb997eb6d915c82b385ac77->leave($__internal_e49fffe777aeb0c98f2686e2facebd95399ba34a4cb997eb6d915c82b385ac77_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/MassMedia/BlogBundle/Resources/views/Page/about.html.twig #}
{% extends 'MassMediaBlogBundle::layout.html.twig' %}

{% block title %}About{% endblock%}

{% block body %}
    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
            amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
            Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
            urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
            tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
            condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
            vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
            lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae.</p>
    </article>
{% endblock %}
", "MassMediaBlogBundle:Page:about.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Page/about.html.twig");
    }
}
