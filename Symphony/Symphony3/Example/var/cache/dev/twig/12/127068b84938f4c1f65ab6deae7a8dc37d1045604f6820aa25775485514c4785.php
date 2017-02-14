<?php

/* base.html.twig */
class __TwigTemplate_920d0ff8791036be6093b4b44bc25bfda1e0cb575c437570bb4c2e5386920d7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58d6a6cdc70c4dbeb50d7953102b74b84dc599a6575a8eeec92966fc146a7c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d6a6cdc70c4dbeb50d7953102b74b84dc599a6575a8eeec92966fc146a7c94->enter($__internal_58d6a6cdc70c4dbeb50d7953102b74b84dc599a6575a8eeec92966fc146a7c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    </head>
    <body>

        <div class=\"row\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "                <div class=\"alert alert-info\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "                <div class=\"alert alert-error\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "                <div class=\"alert alert-error\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </div>

        ";
        // line 35
        $this->displayBlock('menu', $context, $blocks);
        // line 43
        echo "
        <div class=\"col-sm-8 col-sm-offset-2\">
            ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "        </div>
        ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "    </body>
</html>
";
        
        $__internal_58d6a6cdc70c4dbeb50d7953102b74b84dc599a6575a8eeec92966fc146a7c94->leave($__internal_58d6a6cdc70c4dbeb50d7953102b74b84dc599a6575a8eeec92966fc146a7c94_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_535ab9605f196ab421866e8d62c66d3fb340340e217d3e02e05fe052dcbf2fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535ab9605f196ab421866e8d62c66d3fb340340e217d3e02e05fe052dcbf2fdc->enter($__internal_535ab9605f196ab421866e8d62c66d3fb340340e217d3e02e05fe052dcbf2fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_535ab9605f196ab421866e8d62c66d3fb340340e217d3e02e05fe052dcbf2fdc->leave($__internal_535ab9605f196ab421866e8d62c66d3fb340340e217d3e02e05fe052dcbf2fdc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b21c55c84e9309a776c2f8f5a8ab989ab6326300d11ead4bd691d12e430976e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21c55c84e9309a776c2f8f5a8ab989ab6326300d11ead4bd691d12e430976e1->enter($__internal_b21c55c84e9309a776c2f8f5a8ab989ab6326300d11ead4bd691d12e430976e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b21c55c84e9309a776c2f8f5a8ab989ab6326300d11ead4bd691d12e430976e1->leave($__internal_b21c55c84e9309a776c2f8f5a8ab989ab6326300d11ead4bd691d12e430976e1_prof);

    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        $__internal_76b8c8fad328130d3ea26ece4cd5c44a96a00e79780944a8e05741f15206e18d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b8c8fad328130d3ea26ece4cd5c44a96a00e79780944a8e05741f15206e18d->enter($__internal_76b8c8fad328130d3ea26ece4cd5c44a96a00e79780944a8e05741f15206e18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 36
        echo "            <nav class=\"nav\">
                <ul>
                    <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("link.add");
        echo "\">Add a new link</a></li>
                </ul>
            </nav>
        ";
        
        $__internal_76b8c8fad328130d3ea26ece4cd5c44a96a00e79780944a8e05741f15206e18d->leave($__internal_76b8c8fad328130d3ea26ece4cd5c44a96a00e79780944a8e05741f15206e18d_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_0afd48ba94525d2eba5d1f8bb72e76993a8949ac664a4f0e53a63585918f36ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afd48ba94525d2eba5d1f8bb72e76993a8949ac664a4f0e53a63585918f36ca->enter($__internal_0afd48ba94525d2eba5d1f8bb72e76993a8949ac664a4f0e53a63585918f36ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0afd48ba94525d2eba5d1f8bb72e76993a8949ac664a4f0e53a63585918f36ca->leave($__internal_0afd48ba94525d2eba5d1f8bb72e76993a8949ac664a4f0e53a63585918f36ca_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f2e8706953ff30dbf01f3a2433af9f9a090ace3f1224c171fa69616ad87d0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2e8706953ff30dbf01f3a2433af9f9a090ace3f1224c171fa69616ad87d0d6->enter($__internal_1f2e8706953ff30dbf01f3a2433af9f9a090ace3f1224c171fa69616ad87d0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1f2e8706953ff30dbf01f3a2433af9f9a090ace3f1224c171fa69616ad87d0d6->leave($__internal_1f2e8706953ff30dbf01f3a2433af9f9a090ace3f1224c171fa69616ad87d0d6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 47,  190 => 45,  179 => 39,  175 => 38,  171 => 36,  165 => 35,  154 => 6,  142 => 5,  133 => 48,  131 => 47,  128 => 46,  126 => 45,  122 => 43,  120 => 35,  116 => 33,  107 => 30,  104 => 29,  99 => 28,  90 => 25,  87 => 24,  82 => 23,  73 => 20,  70 => 19,  65 => 18,  56 => 15,  53 => 14,  49 => 13,  39 => 7,  37 => 6,  33 => 5,  27 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    </head>
    <body>

        <div class=\"row\">
            {% for flashMessage in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success\">
                    {{ flashMessage|trans }}
                </div>
            {% endfor %}
            {% for flashMessage in app.session.flashbag.get('info') %}
                <div class=\"alert alert-info\">
                    {{ flashMessage|trans }}
                </div>
            {% endfor %}
            {% for flashMessage in app.session.flashbag.get('warning') %}
                <div class=\"alert alert-error\">
                    {{ flashMessage|trans }}
                </div>
            {% endfor %}
            {% for flashMessage in app.session.flashbag.get('error') %}
                <div class=\"alert alert-error\">
                    {{ flashMessage|trans }}
                </div>
            {% endfor %}
        </div>

        {% block menu %}
            <nav class=\"nav\">
                <ul>
                    <li><a href=\"{{ path('homepage') }}\">Home</a></li>
                    <li><a href=\"{{ path('link.add') }}\">Add a new link</a></li>
                </ul>
            </nav>
        {% endblock %}

        <div class=\"col-sm-8 col-sm-offset-2\">
            {% block body %}{% endblock %}
        </div>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/CodetestMaster/app/Resources/views/base.html.twig");
    }
}
