<?php

/* MassMediaBlogBundle:Comment:form.update.html.twig */
class __TwigTemplate_3eec32fb9bc9d44c2a84d68ece07ff2f005522c8deeaedc86b0b12e3f3aca99f extends Twig_Template
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
        $__internal_2303b154a865f7acbaff0ff45b96b9f7074b78eeced72d454071bd3201e9ebe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2303b154a865f7acbaff0ff45b96b9f7074b78eeced72d454071bd3201e9ebe9->enter($__internal_2303b154a865f7acbaff0ff45b96b9f7074b78eeced72d454071bd3201e9ebe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Comment:form.update.html.twig"));

        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("MassMediaBlogBundle_comment_update", array("id" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()))), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "

    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_update"]) ? $context["form_update"] : $this->getContext($context, "form_update")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
";
        
        $__internal_2303b154a865f7acbaff0ff45b96b9f7074b78eeced72d454071bd3201e9ebe9->leave($__internal_2303b154a865f7acbaff0ff45b96b9f7074b78eeced72d454071bd3201e9ebe9_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Comment:form.update.html.twig";
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
        return new Twig_Source("{# src/MassMedia/BlogBundle/Resources/views/Comment/form.update.html.twig #}
{{ form_start(form, { 'action': path('MassMediaBlogBundle_comment_update' , { 'id' : comment.id }), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}

    {{ form_widget(form_update) }}
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
", "MassMediaBlogBundle:Comment:form.update.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Comment/form.update.html.twig");
    }
}
