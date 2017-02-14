<?php

/* forms/link.html.twig */
class __TwigTemplate_1138fc37dfd82ed6b230a5b69d18a86ebf587a01ecc244fdbc9e0061ac3a91d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "forms/link.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d760ee1c36c321878cd8eab1ffc71f2bd52314ad7fb9778e2c84165004922424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d760ee1c36c321878cd8eab1ffc71f2bd52314ad7fb9778e2c84165004922424->enter($__internal_d760ee1c36c321878cd8eab1ffc71f2bd52314ad7fb9778e2c84165004922424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forms/link.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d760ee1c36c321878cd8eab1ffc71f2bd52314ad7fb9778e2c84165004922424->leave($__internal_d760ee1c36c321878cd8eab1ffc71f2bd52314ad7fb9778e2c84165004922424_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf42060b31ef3073cbef29a5467fd6fb329e677be4f3b80250515b760562090b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf42060b31ef3073cbef29a5467fd6fb329e677be4f3b80250515b760562090b->enter($__internal_cf42060b31ef3073cbef29a5467fd6fb329e677be4f3b80250515b760562090b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add a link";
        
        $__internal_cf42060b31ef3073cbef29a5467fd6fb329e677be4f3b80250515b760562090b->leave($__internal_cf42060b31ef3073cbef29a5467fd6fb329e677be4f3b80250515b760562090b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_122bb9a353588f027c75b03d67712494537a4d9b7342054f22eb6f7cf9b177e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122bb9a353588f027c75b03d67712494537a4d9b7342054f22eb6f7cf9b177e7->enter($__internal_122bb9a353588f027c75b03d67712494537a4d9b7342054f22eb6f7cf9b177e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
";
        // line 21
        echo " 

";
        // line 24
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
    <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Back</a>
";
        // line 30
        echo "
";
        
        $__internal_122bb9a353588f027c75b03d67712494537a4d9b7342054f22eb6f7cf9b177e7->leave($__internal_122bb9a353588f027c75b03d67712494537a4d9b7342054f22eb6f7cf9b177e7_prof);

    }

    public function getTemplateName()
    {
        return "forms/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  74 => 28,  69 => 26,  65 => 25,  60 => 24,  56 => 21,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Add a link{% endblock %}
{% block body %}
    
{#old code#}
{#    <form action=\"/link/add\" method=\"post\">
        <div class=\"form-group\">
            <label id=\"name\">Name of link</label>
            <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" />
        </div>

        <div class=\"form-group\">
            <label for=\"destination\">Destination URL</label>
            <input type=\"text\" name=\"destination\" id=\"destination\" class=\"form-control\" />
        </div>

        <button type=\"submit\" class=\"btn btn-default\">Go</button>
    </form>

    <a href=\"/\">Back</a>#}
{#old code#} 

{#New #}
    {{ form_start(form)}}
    {{ form_widget(form) }}
    {{ form_end(form) }}
    
    <a href=\"{{ path('homepage') }}\">Back</a>
{#New #}

{% endblock %}", "forms/link.html.twig", "/var/www/CodetestMaster/app/Resources/views/forms/link.html.twig");
    }
}
