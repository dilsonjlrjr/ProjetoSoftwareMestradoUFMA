<?php

/* projeto/listTableProjeto.twig */
class __TwigTemplate_f1cf5c2d7c111b0832db96b6eb2e09e4d85a0efbdfe19cc8ee42cc5877ff33c9 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["listProject"]) ? $context["listProject"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 3
            echo "    <tr>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", array()));
            echo "</td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nome", array()));
            echo "</td>
        <td>0</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "projeto/listTableProjeto.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% for project in listProject %}*/
/*     <tr>*/
/*         <td>{{ project.id|e }}</td>*/
/*         <td>{{ project.nome|e }}</td>*/
/*         <td>0</td>*/
/*     </tr>*/
/* {% endfor %}*/
