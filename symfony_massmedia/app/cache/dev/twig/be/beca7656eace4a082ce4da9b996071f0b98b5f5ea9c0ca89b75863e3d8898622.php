<?php

/* MassMediaBlogBundle:Comment:form.html.twig */
class __TwigTemplate_521b8daef52941abe067c2f24b9aba557295014d732c9af3f4a7e0fcd7772a76 extends Twig_Template
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
        $__internal_05a5f5d8cd1620ca602ea8c840c52b2677dd4b755e0ba0d2d9c5f052789458bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a5f5d8cd1620ca602ea8c840c52b2677dd4b755e0ba0d2d9c5f052789458bb->enter($__internal_05a5f5d8cd1620ca602ea8c840c52b2677dd4b755e0ba0d2d9c5f052789458bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Comment:form.html.twig"));

        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("MassMediaBlogBundle_comment_create", array("post_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "postId", array()), "id", array()))), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "

    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
";
        
        $__internal_05a5f5d8cd1620ca602ea8c840c52b2677dd4b755e0ba0d2d9c5f052789458bb->leave($__internal_05a5f5d8cd1620ca602ea8c840c52b2677dd4b755e0ba0d2d9c5f052789458bb_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Comment:form.html.twig";
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
        return new Twig_Source("{# src/MassMedia/BlogBundle/Resources/views/Comment/form.html.twig #}
{{ form_start(form, { 'action': path('MassMediaBlogBundle_comment_create' , { 'post_id' : comment.postId.id }), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}

    {{ form_widget(form) }}
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
", "MassMediaBlogBundle:Comment:form.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Comment/form.html.twig");
    }
}
