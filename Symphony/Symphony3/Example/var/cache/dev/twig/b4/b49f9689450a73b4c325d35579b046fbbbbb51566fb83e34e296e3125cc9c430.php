<?php

/* error/index.html.twig */
class __TwigTemplate_93402e3bd614bb7561541c78602cd3a63c2d52d6ffc5b6fb08af7c2b21947c69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "error/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b4c1c776eb7e89afca7975c8d676e9cafdc1f29f33a508a6481df97c150d911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4c1c776eb7e89afca7975c8d676e9cafdc1f29f33a508a6481df97c150d911->enter($__internal_9b4c1c776eb7e89afca7975c8d676e9cafdc1f29f33a508a6481df97c150d911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "error/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b4c1c776eb7e89afca7975c8d676e9cafdc1f29f33a508a6481df97c150d911->leave($__internal_9b4c1c776eb7e89afca7975c8d676e9cafdc1f29f33a508a6481df97c150d911_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_baa2e5cf9df9e252dabd309b2f77e68f875248babe1e05d697a16534955b40d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa2e5cf9df9e252dabd309b2f77e68f875248babe1e05d697a16534955b40d1->enter($__internal_baa2e5cf9df9e252dabd309b2f77e68f875248babe1e05d697a16534955b40d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
";
        
        $__internal_baa2e5cf9df9e252dabd309b2f77e68f875248babe1e05d697a16534955b40d1->leave($__internal_baa2e5cf9df9e252dabd309b2f77e68f875248babe1e05d697a16534955b40d1_prof);

    }

    public function getTemplateName()
    {
        return "error/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block body %}
  {{message}}
{% endblock %}", "error/index.html.twig", "/var/www/CodetestMaster/app/Resources/views/error/index.html.twig");
    }
}
