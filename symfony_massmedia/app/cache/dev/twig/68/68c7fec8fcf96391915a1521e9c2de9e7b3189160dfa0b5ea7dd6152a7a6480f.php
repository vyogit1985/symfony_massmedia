<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2e0f063e5be35e8405dc461930108ac57963d67bf5c0c7cded9b29a352e2c8b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57f9f3d693feb777b082a6fa08cc4a1403d13e42f5e7bff7ffd8db6f06fcd628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f9f3d693feb777b082a6fa08cc4a1403d13e42f5e7bff7ffd8db6f06fcd628->enter($__internal_57f9f3d693feb777b082a6fa08cc4a1403d13e42f5e7bff7ffd8db6f06fcd628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57f9f3d693feb777b082a6fa08cc4a1403d13e42f5e7bff7ffd8db6f06fcd628->leave($__internal_57f9f3d693feb777b082a6fa08cc4a1403d13e42f5e7bff7ffd8db6f06fcd628_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8fc37416ba257bfc35914cf4490645bcfae9ec8603044cfc09d20f603ab155fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc37416ba257bfc35914cf4490645bcfae9ec8603044cfc09d20f603ab155fb->enter($__internal_8fc37416ba257bfc35914cf4490645bcfae9ec8603044cfc09d20f603ab155fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8fc37416ba257bfc35914cf4490645bcfae9ec8603044cfc09d20f603ab155fb->leave($__internal_8fc37416ba257bfc35914cf4490645bcfae9ec8603044cfc09d20f603ab155fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e1d53c46b49f4d8490495696723436139bef1a151e9d44ae95ed846f0776361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1d53c46b49f4d8490495696723436139bef1a151e9d44ae95ed846f0776361->enter($__internal_2e1d53c46b49f4d8490495696723436139bef1a151e9d44ae95ed846f0776361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2e1d53c46b49f4d8490495696723436139bef1a151e9d44ae95ed846f0776361->leave($__internal_2e1d53c46b49f4d8490495696723436139bef1a151e9d44ae95ed846f0776361_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_43c4105bb2d9d7f37458032483bec0251a3fed91bb7cbd2f8a41e1f64ad76dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c4105bb2d9d7f37458032483bec0251a3fed91bb7cbd2f8a41e1f64ad76dd0->enter($__internal_43c4105bb2d9d7f37458032483bec0251a3fed91bb7cbd2f8a41e1f64ad76dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_43c4105bb2d9d7f37458032483bec0251a3fed91bb7cbd2f8a41e1f64ad76dd0->leave($__internal_43c4105bb2d9d7f37458032483bec0251a3fed91bb7cbd2f8a41e1f64ad76dd0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
