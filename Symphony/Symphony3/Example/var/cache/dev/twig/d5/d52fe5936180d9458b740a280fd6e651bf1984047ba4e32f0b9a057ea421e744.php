<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3de85d26caad2a2535fc0b3c0ea2ebed3b2357c2ffdc2826b01f7d8c72bba1f0 extends Twig_Template
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
        $__internal_212bb7e89b7ee2a5bfd6c84ad5a2d668a1740da0ece08f510a3f081cb31126f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212bb7e89b7ee2a5bfd6c84ad5a2d668a1740da0ece08f510a3f081cb31126f0->enter($__internal_212bb7e89b7ee2a5bfd6c84ad5a2d668a1740da0ece08f510a3f081cb31126f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_212bb7e89b7ee2a5bfd6c84ad5a2d668a1740da0ece08f510a3f081cb31126f0->leave($__internal_212bb7e89b7ee2a5bfd6c84ad5a2d668a1740da0ece08f510a3f081cb31126f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_659276e251d511fda79149af3ff66b7776dea157480838a1f2f7f9817e8fbc38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659276e251d511fda79149af3ff66b7776dea157480838a1f2f7f9817e8fbc38->enter($__internal_659276e251d511fda79149af3ff66b7776dea157480838a1f2f7f9817e8fbc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_659276e251d511fda79149af3ff66b7776dea157480838a1f2f7f9817e8fbc38->leave($__internal_659276e251d511fda79149af3ff66b7776dea157480838a1f2f7f9817e8fbc38_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e639f574d260a318eee26583326c01f8a8082f66544bc470d9bf2872722f21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e639f574d260a318eee26583326c01f8a8082f66544bc470d9bf2872722f21d->enter($__internal_7e639f574d260a318eee26583326c01f8a8082f66544bc470d9bf2872722f21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e639f574d260a318eee26583326c01f8a8082f66544bc470d9bf2872722f21d->leave($__internal_7e639f574d260a318eee26583326c01f8a8082f66544bc470d9bf2872722f21d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_efc5807e49d0a3273d2648f17dea46df7b6fc34c35264614a90d75ce7eef5bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc5807e49d0a3273d2648f17dea46df7b6fc34c35264614a90d75ce7eef5bc9->enter($__internal_efc5807e49d0a3273d2648f17dea46df7b6fc34c35264614a90d75ce7eef5bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_efc5807e49d0a3273d2648f17dea46df7b6fc34c35264614a90d75ce7eef5bc9->leave($__internal_efc5807e49d0a3273d2648f17dea46df7b6fc34c35264614a90d75ce7eef5bc9_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/CodetestMaster/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
