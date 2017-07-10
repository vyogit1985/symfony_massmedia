<?php

/* MassMediaBlogBundle:Category:form.update.html.twig */
class __TwigTemplate_14ad9eb69ef431e74425c65359cf030685cad5a2ceac88fb10332ed5844d9698 extends Twig_Template
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
        $__internal_690e0a3a6083550bdb938d0ed6590232c3672728e201f966054eba3442aafa62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690e0a3a6083550bdb938d0ed6590232c3672728e201f966054eba3442aafa62->enter($__internal_690e0a3a6083550bdb938d0ed6590232c3672728e201f966054eba3442aafa62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Category:form.update.html.twig"));

        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("MassMediaBlogBundle_category_update", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "

    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_update"]) ? $context["form_update"] : $this->getContext($context, "form_update")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
";
        
        $__internal_690e0a3a6083550bdb938d0ed6590232c3672728e201f966054eba3442aafa62->leave($__internal_690e0a3a6083550bdb938d0ed6590232c3672728e201f966054eba3442aafa62_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Category:form.update.html.twig";
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
        return new Twig_Source("{# src/MassMedia/BlogBundle/Resources/views/Category/form.update.html.twig #}
{{ form_start(form, { 'action': path('MassMediaBlogBundle_category_update', { 'id' : category.id }), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}

    {{ form_widget(form_update) }}
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
", "MassMediaBlogBundle:Category:form.update.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Category/form.update.html.twig");
    }
}
