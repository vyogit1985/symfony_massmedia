<?php

/* MassMediaBlogBundle:Post:show.html.twig */
class __TwigTemplate_2b1dfb82de53e12d17387db11440967063b56835cc180e82407080c4f661185c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MassMediaBlogBundle::layout.html.twig", "MassMediaBlogBundle:Post:show.html.twig", 2);
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
        $__internal_38f0e2b6e4a516831cc26ab3ef2f0437cd06c2593df96125a9ec17601b017cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f0e2b6e4a516831cc26ab3ef2f0437cd06c2593df96125a9ec17601b017cf9->enter($__internal_38f0e2b6e4a516831cc26ab3ef2f0437cd06c2593df96125a9ec17601b017cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38f0e2b6e4a516831cc26ab3ef2f0437cd06c2593df96125a9ec17601b017cf9->leave($__internal_38f0e2b6e4a516831cc26ab3ef2f0437cd06c2593df96125a9ec17601b017cf9_prof);

    }

    // line 4
    public function block_name($context, array $blocks = array())
    {
        $__internal_f0ac735b7ebcc17ccafbf043c3520cf0418de942e11d231846fe00d024f9cf40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ac735b7ebcc17ccafbf043c3520cf0418de942e11d231846fe00d024f9cf40->enter($__internal_f0ac735b7ebcc17ccafbf043c3520cf0418de942e11d231846fe00d024f9cf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "name", array()), "html", null, true);
        
        $__internal_f0ac735b7ebcc17ccafbf043c3520cf0418de942e11d231846fe00d024f9cf40->leave($__internal_f0ac735b7ebcc17ccafbf043c3520cf0418de942e11d231846fe00d024f9cf40_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d826184bb5d7b15795bc2fb5157eb843e2cecdd251ded623c60eec005ed1c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d826184bb5d7b15795bc2fb5157eb843e2cecdd251ded623c60eec005ed1c5d->enter($__internal_8d826184bb5d7b15795bc2fb5157eb843e2cecdd251ded623c60eec005ed1c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <article class=\"post\">
        <header>
            <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "name", array()), "html", null, true);
        echo "</h2>
        </header>
        <div>
            <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array()), "html", null, true);
        echo "</p>
        </div>
    </article>
            
    <section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Comments</h3>
            ";
        // line 19
        $this->loadTemplate("MassMediaBlogBundle:Comment:index.html.twig", "MassMediaBlogBundle:Post:show.html.twig", 19)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 20
        echo "        </section>
        
        <h3>Add Comment</h3>
        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("MassMediaBlogBundle:Comment:new", array("post_id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))));
        echo " 
    </section>
";
        
        $__internal_8d826184bb5d7b15795bc2fb5157eb843e2cecdd251ded623c60eec005ed1c5d->leave($__internal_8d826184bb5d7b15795bc2fb5157eb843e2cecdd251ded623c60eec005ed1c5d_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Post:show.html.twig";
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
        return new Twig_Source("{# src/MassMedia/BlogBundle/Resouces/views/Post/show.html.twig #}
{% extends 'MassMediaBlogBundle::layout.html.twig' %}

{% block name %}{{ post.name }}{% endblock %}

{% block body %}
    <article class=\"post\">
        <header>
            <h2>{{ post.name }}</h2>
        </header>
        <div>
            <p>{{ post.content }}</p>
        </div>
    </article>
            
    <section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Comments</h3>
            {% include 'MassMediaBlogBundle:Comment:index.html.twig' with { 'comments': comments } %}
        </section>
        
        <h3>Add Comment</h3>
        {{ render(controller('MassMediaBlogBundle:Comment:new',{ 'post_id': post.id })) }} 
    </section>
{% endblock %}
", "MassMediaBlogBundle:Post:show.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Post/show.html.twig");
    }
}
