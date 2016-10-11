<?php

/* pessoa/listTablePessoa.twig */
class __TwigTemplate_bf87c080ba16815acf088152defec7c332613d18004404280a26f1dfb285e5e3 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["listPessoas"]) ? $context["listPessoas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pessoa"]) {
            // line 3
            echo "    <tr>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["pessoa"], "id", array()));
            echo "</td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["pessoa"], "nome", array()));
            echo "</td>
        <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["pessoa"], "profissao", array()));
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pessoa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "pessoa/listTablePessoa.twig";
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
/* {% for pessoa in listPessoas %}*/
/*     <tr>*/
/*         <td>{{ pessoa.id|e }}</td>*/
/*         <td>{{ pessoa.nome|e }}</td>*/
/*         <td>{{ pessoa.profissao|e }}</td>*/
/*     </tr>*/
/* {% endfor %}*/
