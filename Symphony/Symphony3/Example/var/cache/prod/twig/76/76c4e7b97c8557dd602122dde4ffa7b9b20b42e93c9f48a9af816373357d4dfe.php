<?php

/* default/index.html.twig */
class __TwigTemplate_22aa76211709b12bb0f77c934bf4a94dc112ac24b9b5ac6dd1333a8a7c50e06e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
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
                        <a href=\"http://codetest.dev/click?linkId=";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "id", array()), "html", null, true);
            echo "\" target=\"_blank\">
                        <pre>http://codetest.dev/click?linkId=";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "id", array()), "html", null, true);
            echo "</pre>
                        </a>
                    </td>
                    <td>
                        <a href=\"/link/edit/";
            // line 30
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
        // line 36
        echo "        </tbody>

    </table>
";
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
        return array (  97 => 36,  85 => 30,  78 => 26,  74 => 25,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/var/www/CodetestMaster/app/Resources/views/default/index.html.twig");
    }
}
