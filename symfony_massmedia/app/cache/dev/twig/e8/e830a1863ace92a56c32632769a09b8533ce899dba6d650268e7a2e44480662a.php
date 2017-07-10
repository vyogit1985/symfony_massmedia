<?php

/* MassMediaBlogBundle:Post:index.html.twig */
class __TwigTemplate_67d87796cb9c4e66be4b7d439c6e43461689ffa3acc693333c72bc938c2920dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_322b0d554be9bd4d24fb8818d1057817f9408dbc99afb8347ef626d0103450e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322b0d554be9bd4d24fb8818d1057817f9408dbc99afb8347ef626d0103450e3->enter($__internal_322b0d554be9bd4d24fb8818d1057817f9408dbc99afb8347ef626d0103450e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Post:index.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "    <article class=\"post ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array())), "html", null, true);
            echo "\" id=\"post-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">
        <header>
          <p><span class=\"highlight\"><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("MassMediaBlogBundle_post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
            echo "</a></span></p>
        </header>
        <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "</p>
        <p class=\"continue\"><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("MassMediaBlogBundle_post_update", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Редагувати...</a></p>
    </article>
";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 12
            echo "    <p>В цій категорії не має постів, будьте першим</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_322b0d554be9bd4d24fb8818d1057817f9408dbc99afb8347ef626d0103450e3->leave($__internal_322b0d554be9bd4d24fb8818d1057817f9408dbc99afb8347ef626d0103450e3_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  62 => 9,  58 => 8,  51 => 6,  43 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/MassMedia/BlogBundle/Resources/views/Post/index.html.twig #}

{% for post in posts %}
    <article class=\"post {{ cycle(['odd', 'even'], loop.index0) }}\" id=\"post-{{ post.id }}\">
        <header>
          <p><span class=\"highlight\"><a href=\"{{ path('MassMediaBlogBundle_post_show', { 'id': post.id }) }}\">{{ post.name }}</a></span></p>
        </header>
        <p>{{ post.content }}</p>
        <p class=\"continue\"><a href=\"{{ path('MassMediaBlogBundle_post_update', { 'id' : post.id }) }}\">Редагувати...</a></p>
    </article>
{% else %}
    <p>В цій категорії не має постів, будьте першим</p>
{% endfor %}
", "MassMediaBlogBundle:Post:index.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Post/index.html.twig");
    }
}
