<?php

/* material/listTableMaterial.twig */
class __TwigTemplate_8b497cdab651e479b2b97d3f48c4d1b0f58103e85d02e71390b16c484d1ef5f4 extends Twig_Template
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMaterial"]) ? $context["listMaterial"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 3
            echo "    <tr>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "id", array()));
            echo "</td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "descricao", array()));
            echo "</td>
        <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "quantidade", array()));
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "material/listTableMaterial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% for material in listMaterial %}*/
/*     <tr>*/
/*         <td>{{ material.id|e }}</td>*/
/*         <td>{{ material.descricao|e }}</td>*/
/*         <td>{{ material.quantidade|e }}</td>*/
/*     </tr>*/
/* {% endfor %}*/
