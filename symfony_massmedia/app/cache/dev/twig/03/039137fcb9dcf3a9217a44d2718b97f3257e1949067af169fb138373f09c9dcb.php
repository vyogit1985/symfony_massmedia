<?php

/* MassMediaBlogBundle:Post:form.html.twig */
class __TwigTemplate_600cb5757cb18e781e3436c67816aebd06d66d4c482f6f4cb4909bed9039d86f extends Twig_Template
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
        $__internal_1cb693c38ce4aecac89a3f73cddcc323249ab0efe0bad1baa3937c9361648b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb693c38ce4aecac89a3f73cddcc323249ab0efe0bad1baa3937c9361648b99->enter($__internal_1cb693c38ce4aecac89a3f73cddcc323249ab0efe0bad1baa3937c9361648b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Post:form.html.twig"));

        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("MassMediaBlogBundle_post_create", array("category_id" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "categoryId", array()), "id", array()))), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "

    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
";
        
        $__internal_1cb693c38ce4aecac89a3f73cddcc323249ab0efe0bad1baa3937c9361648b99->leave($__internal_1cb693c38ce4aecac89a3f73cddcc323249ab0efe0bad1baa3937c9361648b99_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Post:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/MassMedia/BlogBundle/Resources/views/Post/form.html.twig #}
{{ form_start(form, { 'action': path('MassMediaBlogBundle_post_create' , { 'category_id' : post.categoryId.id }), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}

    {{ form_widget(form) }}
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
", "MassMediaBlogBundle:Post:form.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Post/form.html.twig");
    }
}
