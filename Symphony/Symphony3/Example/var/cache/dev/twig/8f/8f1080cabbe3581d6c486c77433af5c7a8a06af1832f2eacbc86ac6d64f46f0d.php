<?php

/* default/edit.html.twig */
class __TwigTemplate_413ec16442bedaa6c8415c3bf095bebce3df95af7b0e8903606d713997322173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/edit.html.twig", 1);
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
        $__internal_e8e4e920ee65253afc38eac631dd018ec688166ef6e12e3884f9668e878b400d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e4e920ee65253afc38eac631dd018ec688166ef6e12e3884f9668e878b400d->enter($__internal_e8e4e920ee65253afc38eac631dd018ec688166ef6e12e3884f9668e878b400d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8e4e920ee65253afc38eac631dd018ec688166ef6e12e3884f9668e878b400d->leave($__internal_e8e4e920ee65253afc38eac631dd018ec688166ef6e12e3884f9668e878b400d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5afdacc6b09ac5288982d4f93719ea58a70a42bcf42ecaf0304cd60ebc6db431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5afdacc6b09ac5288982d4f93719ea58a70a42bcf42ecaf0304cd60ebc6db431->enter($__internal_5afdacc6b09ac5288982d4f93719ea58a70a42bcf42ecaf0304cd60ebc6db431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
  
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["links"]) ? $context["links"] : $this->getContext($context, "links")), "name", array()), "html", null, true);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["links"]) ? $context["links"] : $this->getContext($context, "links")), "destination", array()), "html", null, true);
        echo "
    
 
";
        
        $__internal_5afdacc6b09ac5288982d4f93719ea58a70a42bcf42ecaf0304cd60ebc6db431->leave($__internal_5afdacc6b09ac5288982d4f93719ea58a70a42bcf42ecaf0304cd60ebc6db431_prof);

    }

    public function getTemplateName()
    {
        return "default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    
  
    {{ links.name }}
    {{ links.destination }}
    
 
{% endblock %}", "default/edit.html.twig", "/var/www/CodetestMaster/app/Resources/views/default/edit.html.twig");
    }
}
