<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1635c7a1ebb1e36814d461610731dd2f20d3f8c0995b4959075715091f54a11e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54f023e856977f91afb3f0e632c0eca3bc9ac4203549c946bc137b251d608548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f023e856977f91afb3f0e632c0eca3bc9ac4203549c946bc137b251d608548->enter($__internal_54f023e856977f91afb3f0e632c0eca3bc9ac4203549c946bc137b251d608548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54f023e856977f91afb3f0e632c0eca3bc9ac4203549c946bc137b251d608548->leave($__internal_54f023e856977f91afb3f0e632c0eca3bc9ac4203549c946bc137b251d608548_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2ff0fb0858124d0fa701ae9eb12a32bd07b4c715dc3cb5047faea1e01360dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ff0fb0858124d0fa701ae9eb12a32bd07b4c715dc3cb5047faea1e01360dae->enter($__internal_d2ff0fb0858124d0fa701ae9eb12a32bd07b4c715dc3cb5047faea1e01360dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d2ff0fb0858124d0fa701ae9eb12a32bd07b4c715dc3cb5047faea1e01360dae->leave($__internal_d2ff0fb0858124d0fa701ae9eb12a32bd07b4c715dc3cb5047faea1e01360dae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_09a5caac5a93dd71f617e39946569e635274876963174f94d2f10c5ad858dc5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a5caac5a93dd71f617e39946569e635274876963174f94d2f10c5ad858dc5c->enter($__internal_09a5caac5a93dd71f617e39946569e635274876963174f94d2f10c5ad858dc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_09a5caac5a93dd71f617e39946569e635274876963174f94d2f10c5ad858dc5c->leave($__internal_09a5caac5a93dd71f617e39946569e635274876963174f94d2f10c5ad858dc5c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c758e39dfca229462c5cca2c93ab2f13d58daef1ea19facf7ab9b9ecbdcd7714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c758e39dfca229462c5cca2c93ab2f13d58daef1ea19facf7ab9b9ecbdcd7714->enter($__internal_c758e39dfca229462c5cca2c93ab2f13d58daef1ea19facf7ab9b9ecbdcd7714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c758e39dfca229462c5cca2c93ab2f13d58daef1ea19facf7ab9b9ecbdcd7714->leave($__internal_c758e39dfca229462c5cca2c93ab2f13d58daef1ea19facf7ab9b9ecbdcd7714_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/CodetestMaster/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
