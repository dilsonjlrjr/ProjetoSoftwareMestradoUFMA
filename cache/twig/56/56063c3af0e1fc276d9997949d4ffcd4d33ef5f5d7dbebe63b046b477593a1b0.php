<?php

/* projeto/index.twig */
class __TwigTemplate_9598f200c3849f73ec542fd2191b6377c227de92431f0794dc4835103f15ba4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "projeto/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Cadastro de Projeto</h1>

<form id=\"frm-projeto\" name=\"frm-projeto\">
    <div class=\"form-group\">
        <label for=\"projeto-id\">ID</label>
        <input type=\"text\" class=\"form-control\" id=\"projeto-id\" disabled>
    </div>
    <div class=\"form-group\">
        <label for=\"projeto-nome\">Nome</label>
        <input type=\"text\" class=\"form-control\" id=\"projeto-nome\" placeholder=\"Nome...\">
    </div>
    <button type=\"button\" id=\"btn-submit-save\" class=\"btn btn-default\">Salvar</button>
</form>

<h2>Registros</h2>
<table class=\"table table-bordered\" id=\"table-projeto\">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Qtd Tarefa</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
";
    }

    // line 31
    public function block_scripts($context, array $blocks = array())
    {
        // line 32
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/negocio/projeto.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "projeto/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 32,  62 => 31,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* {% block content %}*/
/* <h1>Cadastro de Projeto</h1>*/
/* */
/* <form id="frm-projeto" name="frm-projeto">*/
/*     <div class="form-group">*/
/*         <label for="projeto-id">ID</label>*/
/*         <input type="text" class="form-control" id="projeto-id" disabled>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="projeto-nome">Nome</label>*/
/*         <input type="text" class="form-control" id="projeto-nome" placeholder="Nome...">*/
/*     </div>*/
/*     <button type="button" id="btn-submit-save" class="btn btn-default">Salvar</button>*/
/* </form>*/
/* */
/* <h2>Registros</h2>*/
/* <table class="table table-bordered" id="table-projeto">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>#</th>*/
/*             <th>Nome</th>*/
/*             <th>Qtd Tarefa</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     </tbody>*/
/* </table>*/
/* {% endblock %}*/
/* */
/* {% block scripts %}*/
/* <script type="text/javascript" src="{{ base_url() }}/js/negocio/projeto.js"></script>*/
/* {% endblock %}*/
