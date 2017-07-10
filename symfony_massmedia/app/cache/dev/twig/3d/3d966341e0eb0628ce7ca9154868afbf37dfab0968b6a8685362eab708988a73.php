<?php

/* MassMediaBlogBundle:Category:form.html.twig */
class __TwigTemplate_5697752ea62c5ae2840b4828aa1277bd206d979ca224aaea6a2f505e031eff49 extends Twig_Template
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
        $__internal_2eb8de0944ee878b58f58fa7fafdc99bae82ec997a612a4e6205cac98d77bd88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb8de0944ee878b58f58fa7fafdc99bae82ec997a612a4e6205cac98d77bd88->enter($__internal_2eb8de0944ee878b58f58fa7fafdc99bae82ec997a612a4e6205cac98d77bd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MassMediaBlogBundle:Category:form.html.twig"));

        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("MassMediaBlogBundle_category_create"), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "

    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
";
        
        $__internal_2eb8de0944ee878b58f58fa7fafdc99bae82ec997a612a4e6205cac98d77bd88->leave($__internal_2eb8de0944ee878b58f58fa7fafdc99bae82ec997a612a4e6205cac98d77bd88_prof);

    }

    public function getTemplateName()
    {
        return "MassMediaBlogBundle:Category:form.html.twig";
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
        return new Twig_Source("{# src/MassMedia/BlogBundle/Resources/views/Category/form.html.twig #}
{{ form_start(form, { 'action': path('MassMediaBlogBundle_category_create'), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}

    {{ form_widget(form) }}
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
", "MassMediaBlogBundle:Category:form.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/src/MassMedia/BlogBundle/Resources/views/Category/form.html.twig");
    }
}
