<?php

/* material/index.twig */
class __TwigTemplate_a2dfb8589f3fcecd57cb1e5b119f161b8fc351f435a639b50f59d2810d2dc2b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "material/index.twig", 1);
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
        echo "<h1>Cadastro de Material</h1>

<form id=\"frm-material\" name=\"frm-material\">
    <div class=\"form-group\">
        <label for=\"material-id\">ID</label>
        <input type=\"text\" class=\"form-control\" id=\"material-id\" disabled>
    </div>
    <div class=\"form-group\">
        <label for=\"material-nome\">Nome</label>
        <input type=\"text\" class=\"form-control\" id=\"material-nome\" placeholder=\"Nome...\">
    </div>
    <div class=\"form-group\">
        <label for=\"material-quantidade\">Quantidade</label>
        <input type=\"number\" class=\"form-control\" id=\"material-quantidade\">
    </div>
    <button type=\"button\" id=\"btn-submit-save\" class=\"btn btn-default\">Salvar</button>
</form>

<h2>Registros</h2>
<table class=\"table table-bordered\" id=\"table-material\">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Quantidade</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
";
    }

    // line 35
    public function block_scripts($context, array $blocks = array())
    {
        // line 36
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/negocio/material.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "material/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 36,  66 => 35,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* {% block content %}*/
/* <h1>Cadastro de Material</h1>*/
/* */
/* <form id="frm-material" name="frm-material">*/
/*     <div class="form-group">*/
/*         <label for="material-id">ID</label>*/
/*         <input type="text" class="form-control" id="material-id" disabled>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="material-nome">Nome</label>*/
/*         <input type="text" class="form-control" id="material-nome" placeholder="Nome...">*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="material-quantidade">Quantidade</label>*/
/*         <input type="number" class="form-control" id="material-quantidade">*/
/*     </div>*/
/*     <button type="button" id="btn-submit-save" class="btn btn-default">Salvar</button>*/
/* </form>*/
/* */
/* <h2>Registros</h2>*/
/* <table class="table table-bordered" id="table-material">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>#</th>*/
/*             <th>Nome</th>*/
/*             <th>Quantidade</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     </tbody>*/
/* </table>*/
/* {% endblock %}*/
/* */
/* {% block scripts %}*/
/* <script type="text/javascript" src="{{ base_url() }}/js/negocio/material.js"></script>*/
/* {% endblock %}*/