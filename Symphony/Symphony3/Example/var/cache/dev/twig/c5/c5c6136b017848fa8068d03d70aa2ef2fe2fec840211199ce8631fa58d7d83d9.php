<?php

/* default/index.html.twig */
class __TwigTemplate_bf416f61078b01df7a31a3b74c76d9c132041c5b61fbe49e4b8ca757c05f3d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50cc3b487c4b8b2c6e6d2c3b0103906bced7e10e4de55bf497f3bf2ee635e667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50cc3b487c4b8b2c6e6d2c3b0103906bced7e10e4de55bf497f3bf2ee635e667->enter($__internal_50cc3b487c4b8b2c6e6d2c3b0103906bced7e10e4de55bf497f3bf2ee635e667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50cc3b487c4b8b2c6e6d2c3b0103906bced7e10e4de55bf497f3bf2ee635e667->leave($__internal_50cc3b487c4b8b2c6e6d2c3b0103906bced7e10e4de55bf497f3bf2ee635e667_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_559676d72275e7411fde79fd128d81c0541b663097ec11e648f95cffd9935ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559676d72275e7411fde79fd128d81c0541b663097ec11e648f95cffd9935ed3->enter($__internal_559676d72275e7411fde79fd128d81c0541b663097ec11e648f95cffd9935ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Destination</th>
                <th>Impressions</th>
                <th>Clicks</th>
                <th>Tracking Link</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : $this->getContext($context, "links")));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 18
            echo "                <tr>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "destination", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), $this->getAttribute($context["link"], "id", array()), array(), "array", false, true), "impressions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), $this->getAttribute($context["link"], "id", array()), array(), "array", false, true), "impressions", array()), 0)) : (0)), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), $this->getAttribute($context["link"], "id", array()), array(), "array", false, true), "clicks", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), $this->getAttribute($context["link"], "id", array()), array(), "array", false, true), "clicks", array()), 0)) : (0)), "html", null, true);
            echo "</td>
                    <td>
                        
                    ";
            // line 29
            echo "                    
                        ";
            // line 31
            echo "                        <a href=\"http://codetest.dev";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("click");
            echo "?linkId=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "id", array()), "html", null, true);
            echo "\" onclick=\"reload()\" target=\"_blank\">
                        <pre>http://codetest.dev";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("click");
            echo "?linkId=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "id", array()), "html", null, true);
            echo "</pre>
                        </a>
                        ";
            // line 35
            echo "                    </td>
                    <td>
                        <a href=\"link/edit/";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "id", array()), "html", null, true);
            echo "\">
                            Edit Link
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>

    </table>
";
        
        $__internal_559676d72275e7411fde79fd128d81c0541b663097ec11e648f95cffd9935ed3->leave($__internal_559676d72275e7411fde79fd128d81c0541b663097ec11e648f95cffd9935ed3_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_672989bee4d4ec1f726da6b897a43479a237c27ce95b10fde626c7623ec06f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672989bee4d4ec1f726da6b897a43479a237c27ce95b10fde626c7623ec06f09->enter($__internal_672989bee4d4ec1f726da6b897a43479a237c27ce95b10fde626c7623ec06f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "        <script>
            function reload() {
              location.reload();
            }
        </script>
";
        
        $__internal_672989bee4d4ec1f726da6b897a43479a237c27ce95b10fde626c7623ec06f09->leave($__internal_672989bee4d4ec1f726da6b897a43479a237c27ce95b10fde626c7623ec06f09_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 49,  128 => 48,  118 => 43,  106 => 37,  102 => 35,  95 => 32,  88 => 31,  85 => 29,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  60 => 18,  56 => 17,  41 => 4,  35 => 3,  11 => 1,);
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
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Destination</th>
                <th>Impressions</th>
                <th>Clicks</th>
                <th>Tracking Link</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {% for link in links %}
                <tr>
                    <td>{{ link.id }}</td>
                    <td>{{ link.name }}</td>
                    <td>{{ link.destination }}</td>
                    <td>{{ stats[link.id].impressions|default(0) }}</td>
                    <td>{{ stats[link.id].clicks|default(0) }}</td>
                    <td>
                        
                    {# Old Code <a href=\"http://codetest.dev/click?linkId={{ link.id }}\" target=\"_blank\">
                        <pre>http://codetest.dev/click?linkId={{ link.id }}</pre>
                        </a> Old Code #}
                    
                        {# New Code #}
                        <a href=\"http://codetest.dev{{ path('click') }}?linkId={{ link.id }}\" onclick=\"reload()\" target=\"_blank\">
                        <pre>http://codetest.dev{{ path('click') }}?linkId={{ link.id }}</pre>
                        </a>
                        {# New Code #}
                    </td>
                    <td>
                        <a href=\"link/edit/{{ link.id }}\">
                            Edit Link
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>

    </table>
{% endblock %}
  
{% block javascripts %}
        <script>
            function reload() {
              location.reload();
            }
        </script>
{% endblock %}", "default/index.html.twig", "/var/www/CodetestMaster/app/Resources/views/default/index.html.twig");
    }
}
