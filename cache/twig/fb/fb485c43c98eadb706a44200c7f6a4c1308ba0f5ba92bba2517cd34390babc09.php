<?php

/* atividades/listTableAtividade.twig */
class __TwigTemplate_b4427bdea707f3c4047d81a097f3596ca3ee58cb1d33416ac8aefc73b70a0fbf extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAtividade"]) ? $context["listAtividade"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["atividade"]) {
            // line 2
            echo "    ";
            $context["pessoa"] = $this->getAttribute($context["atividade"], "pessoa", array());
            // line 3
            echo "    <tr>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["atividade"], "id", array()));
            echo "</td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["atividade"], "nome", array()));
            echo "</td>
        <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pessoa"]) ? $context["pessoa"] : null), "nome", array()));
            echo "</td>
        <td>";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["atividade"], "dataconclusao", array()), "d/m/Y"));
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atividade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "atividades/listTableAtividade.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  37 => 6,  33 => 5,  29 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for atividade in listAtividade %}*/
/*     {% set pessoa = atividade.pessoa %}*/
/*     <tr>*/
/*         <td>{{ atividade.id|e }}</td>*/
/*         <td>{{ atividade.nome|e }}</td>*/
/*         <td>{{ pessoa.nome|e }}</td>*/
/*         <td>{{ atividade.dataconclusao|date("d/m/Y")|e }}</td>*/
/*     </tr>*/
/* {% endfor %}*/
