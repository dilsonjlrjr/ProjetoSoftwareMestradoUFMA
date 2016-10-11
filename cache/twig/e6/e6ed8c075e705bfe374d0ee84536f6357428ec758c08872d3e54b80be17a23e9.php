<?php

/* atividades/listMaterial.twig */
class __TwigTemplate_48d3c0140a7897acfa3d82e1fb095f275cf7fa300533e646d60d2131f8986fad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<option value=\"-\" selected>-</option>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMaterial"]) ? $context["listMaterial"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 3
            echo "    <option data-quantidade=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "quantidade", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "descricao", array()), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "atividades/listMaterial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <option value="-" selected>-</option>*/
/* {% for material in listMaterial %}*/
/*     <option data-quantidade="{{ material.quantidade }}" value="{{ material.id }}">{{ material.descricao }}</option>*/
/* {% endfor %}*/
