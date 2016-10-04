<?php

/* pessoa/index.twig */
class __TwigTemplate_df95e0f9d557fb5ab1014b3e16c3ce1732bda7ef7c54c8b7375df6eab5562ef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "pessoa/index.twig", 1);
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
        echo "<h1>Cadastro de Pessoa</h1>

<form id=\"frm-pessoa\" name=\"frm-pessoa\">
    <div class=\"form-group\">
        <label for=\"pessoa-id\">ID</label>
        <input type=\"text\" class=\"form-control\" id=\"pessoa-id\" disabled>
    </div>
    <div class=\"form-group\">
        <label for=\"pessoa-nome\">Nome</label>
        <input type=\"text\" class=\"form-control\" id=\"pessoa-nome\" placeholder=\"Nome...\">
    </div>
    <div class=\"form-group\">
        <label for=\"pessoa-profissao\">Profissão</label>
        <input type=\"text\" class=\"form-control\" id=\"pessoa-profissao\" placeholder=\"Profissão\">
    </div>
    <button type=\"button\" id=\"btn-submit-save\" class=\"btn btn-default\">Salvar</button>
</form>

<h2>Registros</h2>
<table class=\"table table-bordered\" id=\"table-pessoas\">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Profissão</th>
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
        echo "/js/negocio/pessoa.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "pessoa/index.twig";
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
/* <h1>Cadastro de Pessoa</h1>*/
/* */
/* <form id="frm-pessoa" name="frm-pessoa">*/
/*     <div class="form-group">*/
/*         <label for="pessoa-id">ID</label>*/
/*         <input type="text" class="form-control" id="pessoa-id" disabled>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="pessoa-nome">Nome</label>*/
/*         <input type="text" class="form-control" id="pessoa-nome" placeholder="Nome...">*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="pessoa-profissao">Profissão</label>*/
/*         <input type="text" class="form-control" id="pessoa-profissao" placeholder="Profissão">*/
/*     </div>*/
/*     <button type="button" id="btn-submit-save" class="btn btn-default">Salvar</button>*/
/* </form>*/
/* */
/* <h2>Registros</h2>*/
/* <table class="table table-bordered" id="table-pessoas">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>#</th>*/
/*             <th>Nome</th>*/
/*             <th>Profissão</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     </tbody>*/
/* </table>*/
/* {% endblock %}*/
/* */
/* {% block scripts %}*/
/* <script type="text/javascript" src="{{ base_url() }}/js/negocio/pessoa.js"></script>*/
/* {% endblock %}*/
