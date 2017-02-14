<?php

/* forms/edit.html.twig */
class __TwigTemplate_c286aec3a2d5b63bfb88ca5e8c7bc9583ce3b1495d817da23464adcc4bdb3bb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "forms/edit.html.twig", 1);
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
        $__internal_81e4f7dd7dc4cd7d3f1ad30029c7a6fe8572c47a3402e91d21661a6a41054af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e4f7dd7dc4cd7d3f1ad30029c7a6fe8572c47a3402e91d21661a6a41054af1->enter($__internal_81e4f7dd7dc4cd7d3f1ad30029c7a6fe8572c47a3402e91d21661a6a41054af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forms/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81e4f7dd7dc4cd7d3f1ad30029c7a6fe8572c47a3402e91d21661a6a41054af1->leave($__internal_81e4f7dd7dc4cd7d3f1ad30029c7a6fe8572c47a3402e91d21661a6a41054af1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af18bdd072c9926484af5e69a88d6c19155773882227c4c9d0395f38a168b786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af18bdd072c9926484af5e69a88d6c19155773882227c4c9d0395f38a168b786->enter($__internal_af18bdd072c9926484af5e69a88d6c19155773882227c4c9d0395f38a168b786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Name"));
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("value" => $this->getAttribute((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "name", array())));
        echo "
        
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destination", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Destination"));
        echo "
        ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destination", array()), 'widget', array("value" => $this->getAttribute((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "destination", array())));
        echo "
        
        ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget', array("value" => $this->getAttribute((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "id", array())));
        echo "

    ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "    
 
";
        
        $__internal_af18bdd072c9926484af5e69a88d6c19155773882227c4c9d0395f38a168b786->leave($__internal_af18bdd072c9926484af5e69a88d6c19155773882227c4c9d0395f38a168b786_prof);

    }

    public function getTemplateName()
    {
        return "forms/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  66 => 13,  61 => 11,  57 => 10,  52 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

    {{ form_start(form) }}

        {{ form_label(form.name, 'Name') }}
        {{ form_widget(form.name, { 'value':link.name}) }}
        
        {{ form_label(form.destination, 'Destination', {'label_attr': {'class': 'foo'}}) }}
        {{ form_widget(form.destination, { 'value':link.destination}) }}
        
        {{ form_widget(form.id, { 'value': link.id }) }}

    {{ form_end(form) }}    
 
{% endblock %}", "forms/edit.html.twig", "/var/www/CodetestMaster/app/Resources/views/forms/edit.html.twig");
    }
}
