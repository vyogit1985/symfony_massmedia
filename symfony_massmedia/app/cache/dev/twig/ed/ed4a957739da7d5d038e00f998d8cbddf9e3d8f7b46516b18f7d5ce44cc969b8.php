<?php

/* MassMediaBlogBundle:Post:form.update.html.twig */
class __TwigTemplate_43250b6c82802042db59bc3c0ab6f343c4f8c5101925fcadcdab6380f9df94fe extends Twig_Template
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
        $__internal_e34710c814b83f22c53cec97a197549232ac07cf7cd7ac83ccc7a4872a730aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34710c814b83f22c53cec97a197549232ac07cf7cd7ac83ccc7a4872a730aba->enter($__internal_e34710c814b83f22c53cec97a197549232ac07cf7cd7ac83ccc7a4872a730aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Post:form.update.html.twig"));

        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("MassMediaBlogBundle_post_update", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "

    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_update"]) ? $context["form_update"] : $this->getContext($context, "form_update")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
";
        
        $__internal_e34710c814b83f22c53cec97a197549232ac07cf7cd7ac83ccc7a4872a730aba->leave($__internal_e34710c814b83f22c53cec97a197549232ac07cf7cd7ac83ccc7a4872a730aba_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Post:form.update.html.twig";
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
        return new Twig_Source("{# src/MassMedia/BlogBundle/Resources/views/Post/form.update.html.twig #}
{{ form_start(form, { 'action': path('MassMediaBlogBundle_post_update' , { 'id' : post.id }), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}

    {{ form_widget(form_update) }}
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
", "MassMediaBlogBundle:Post:form.update.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Post/form.update.html.twig");
    }
}
