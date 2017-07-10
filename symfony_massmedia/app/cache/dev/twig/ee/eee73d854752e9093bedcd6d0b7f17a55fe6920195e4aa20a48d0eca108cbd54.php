<?php

/* ::base.html.twig */
class __TwigTemplate_26062111570f44943a7ae325b4ff6323241adb93933d39af558eab1637705f32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f9f7952b3fcd6fd601153b3129cabb4242897f54308de0ae1ae6fc99975d75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9f7952b3fcd6fd601153b3129cabb4242897f54308de0ae1ae6fc99975d75f->enter($__internal_1f9f7952b3fcd6fd601153b3129cabb4242897f54308de0ae1ae6fc99975d75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - MassMediaBlog</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">

        </div>

        <!-- app/Resources/views/base.html.twig -->
        <hgroup>
            <h2>";
        // line 26
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
            <h3>";
        // line 27
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 35
        $this->displayBlock('sidebar', $context, $blocks);
        // line 36
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 39
        $this->displayBlock('footer', $context, $blocks);
        // line 42
        echo "    </div>
</section>

";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "</body>
</html>";
        
        $__internal_1f9f7952b3fcd6fd601153b3129cabb4242897f54308de0ae1ae6fc99975d75f->leave($__internal_1f9f7952b3fcd6fd601153b3129cabb4242897f54308de0ae1ae6fc99975d75f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d429eda162157359c7c8542c4c198b0af831309d6e304d754440814cfd5fe6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d429eda162157359c7c8542c4c198b0af831309d6e304d754440814cfd5fe6b->enter($__internal_3d429eda162157359c7c8542c4c198b0af831309d6e304d754440814cfd5fe6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MassMediaBlog";
        
        $__internal_3d429eda162157359c7c8542c4c198b0af831309d6e304d754440814cfd5fe6b->leave($__internal_3d429eda162157359c7c8542c4c198b0af831309d6e304d754440814cfd5fe6b_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db774a5ef3503c6adba64eafef20f499a2d508ec3c4842f762c9928950de0641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db774a5ef3503c6adba64eafef20f499a2d508ec3c4842f762c9928950de0641->enter($__internal_db774a5ef3503c6adba64eafef20f499a2d508ec3c4842f762c9928950de0641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_db774a5ef3503c6adba64eafef20f499a2d508ec3c4842f762c9928950de0641->leave($__internal_db774a5ef3503c6adba64eafef20f499a2d508ec3c4842f762c9928950de0641_prof);

    }

    // line 26
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_3ce327e1fd4d0de3935aeca4bb78e9c111b29e9e485d5c7e0fbd96bb17824f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce327e1fd4d0de3935aeca4bb78e9c111b29e9e485d5c7e0fbd96bb17824f58->enter($__internal_3ce327e1fd4d0de3935aeca4bb78e9c111b29e9e485d5c7e0fbd96bb17824f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("MassMediaBlogBundle_homepage");
        echo "\">MassMedia</a>";
        
        $__internal_3ce327e1fd4d0de3935aeca4bb78e9c111b29e9e485d5c7e0fbd96bb17824f58->leave($__internal_3ce327e1fd4d0de3935aeca4bb78e9c111b29e9e485d5c7e0fbd96bb17824f58_prof);

    }

    // line 27
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_a8e78851e8db71bce430391b5e31abf3e7c860213fd1d5ddd28f57d037c68954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e78851e8db71bce430391b5e31abf3e7c860213fd1d5ddd28f57d037c68954->enter($__internal_a8e78851e8db71bce430391b5e31abf3e7c860213fd1d5ddd28f57d037c68954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("MassMediaBlogBundle_homepage");
        echo "\">Блог створений в Symfony</a>";
        
        $__internal_a8e78851e8db71bce430391b5e31abf3e7c860213fd1d5ddd28f57d037c68954->leave($__internal_a8e78851e8db71bce430391b5e31abf3e7c860213fd1d5ddd28f57d037c68954_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_97ca63bd34e4c11cad33887fc6bc2bfcaa1da1cc26da06143d31069cb88fe3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ca63bd34e4c11cad33887fc6bc2bfcaa1da1cc26da06143d31069cb88fe3aa->enter($__internal_97ca63bd34e4c11cad33887fc6bc2bfcaa1da1cc26da06143d31069cb88fe3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_97ca63bd34e4c11cad33887fc6bc2bfcaa1da1cc26da06143d31069cb88fe3aa->leave($__internal_97ca63bd34e4c11cad33887fc6bc2bfcaa1da1cc26da06143d31069cb88fe3aa_prof);

    }

    // line 35
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_71912f8f05e8ff6ce5d7a62bfae912edc8a99eebd48e0be9a5459fad84162ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71912f8f05e8ff6ce5d7a62bfae912edc8a99eebd48e0be9a5459fad84162ae4->enter($__internal_71912f8f05e8ff6ce5d7a62bfae912edc8a99eebd48e0be9a5459fad84162ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_71912f8f05e8ff6ce5d7a62bfae912edc8a99eebd48e0be9a5459fad84162ae4->leave($__internal_71912f8f05e8ff6ce5d7a62bfae912edc8a99eebd48e0be9a5459fad84162ae4_prof);

    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a95591d337a16fee0285f6e61f0b2ecf0b923ceaf100314a51bde6a73962a4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95591d337a16fee0285f6e61f0b2ecf0b923ceaf100314a51bde6a73962a4a2->enter($__internal_a95591d337a16fee0285f6e61f0b2ecf0b923ceaf100314a51bde6a73962a4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 40
        echo "            MassMedia blog created by Yaroslav based on Symfony framework
        ";
        
        $__internal_a95591d337a16fee0285f6e61f0b2ecf0b923ceaf100314a51bde6a73962a4a2->leave($__internal_a95591d337a16fee0285f6e61f0b2ecf0b923ceaf100314a51bde6a73962a4a2_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c0422fddcbe61a736ff913f58a78f7eb54f24434779974dc7e1b2f3dc8c9776a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0422fddcbe61a736ff913f58a78f7eb54f24434779974dc7e1b2f3dc8c9776a->enter($__internal_c0422fddcbe61a736ff913f58a78f7eb54f24434779974dc7e1b2f3dc8c9776a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c0422fddcbe61a736ff913f58a78f7eb54f24434779974dc7e1b2f3dc8c9776a->leave($__internal_c0422fddcbe61a736ff913f58a78f7eb54f24434779974dc7e1b2f3dc8c9776a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 45,  190 => 40,  184 => 39,  173 => 35,  162 => 32,  148 => 27,  134 => 26,  125 => 12,  121 => 10,  115 => 9,  103 => 5,  95 => 46,  93 => 45,  88 => 42,  86 => 39,  81 => 36,  79 => 35,  75 => 33,  73 => 32,  65 => 27,  61 => 26,  45 => 14,  43 => 9,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}MassMediaBlog{% endblock %} - MassMediaBlog</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    {% block stylesheets %}
        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    {% endblock %}
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">

        </div>

        <!-- app/Resources/views/base.html.twig -->
        <hgroup>
            <h2>{% block blog_title %}<a href=\"{{ path('MassMediaBlogBundle_homepage') }}\">MassMedia</a>{% endblock %}</h2>
            <h3>{% block blog_tagline %}<a href=\"{{ path('MassMediaBlogBundle_homepage') }}\">Блог створений в Symfony</a>{% endblock %}</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        {% block body %}{% endblock %}
    </section>
    <aside class=\"sidebar\">
        {% block sidebar %}{% endblock %}
    </aside>

    <div id=\"footer\">
        {% block footer %}
            MassMedia blog created by Yaroslav based on Symfony framework
        {% endblock %}
    </div>
</section>

{% block javascripts %}{% endblock %}
</body>
</html>", "::base.html.twig", "/var/www/html/teach/frameworks/symfony_massmedia/app/Resources/views/base.html.twig");
    }
}
