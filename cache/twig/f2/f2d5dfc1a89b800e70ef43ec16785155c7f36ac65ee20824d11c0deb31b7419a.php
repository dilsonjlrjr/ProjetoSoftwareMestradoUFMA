<?php

/* atividades/index.twig */
class __TwigTemplate_99a89a35511dce83d10620a396f8f372d4c2728ca58d56a4af2a8e23b47fc1b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "atividades/index.twig", 1);
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
        echo "<h1>Cadastro de Atividade</h1>

<form id=\"frm-atividade\" name=\"frm-atividade\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <fieldset>
                <legend>Projeto</legend>

                <div class=\"form-group\">
                    <label for=\"atividade-id\">ID</label>
                    <input type=\"text\" class=\"form-control\" id=\"projeto-id\" disabled>
                </div>

                <div class=\"form-group\">
                    <label for=\"projeto-atividade\">Projeto</label>
                    <select class=\"form-control\" id=\"select-project\">
                        <option value=\"-\">-</option>
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listProjetos"]) ? $context["listProjetos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 21
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "nome", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                    </select>
                </div>

                <div class=\"form-group\">
                    <label for=\"projeto-atividade\">Pessoa</label>
                    <select class=\"form-control\" id=\"select-project\">
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPessoa"]) ? $context["listPessoa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pessoa"]) {
            // line 30
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pessoa"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pessoa"], "nome", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pessoa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    </select>
                </div>

                <div class=\"form-group\">
                    <label for=\"atividade-nome\">Nome da Atividade</label>
                    <input type=\"text\" class=\"form-control\" id=\"projeto-nome\" placeholder=\"Nome...\">
                </div>
                <div class=\"form-group\">
                    <label for=\"atividade-dataconclusao\">Data Conclusão</label>
                    <input type=\"date\" class=\"form-control\" id=\"projeto-dataconclusao\">
                </div>
            </fieldset>
        </div>
        <div class=\"col-lg-6\">
            <fieldset>
                <legend>Material</legend>

                <div class=\"form-group\">
                    <label for=\"detalhamentoatividade-material\">Material</label>
                    <select class=\"form-control\" id=\"detalhamentoatividade-material\">
                    </select>
                </div>

                <div class=\"form-group\">
                    <label for=\"detalhamentoatividade-quantidade\">Quantidade</label>
                    <input type=\"number\" class=\"form-control\" id=\"detalhamentoatividade-quantidade\" min=\"1\" max=\"5\">
                </div>

                <button type=\"button\" id=\"btn-add-item\" class=\"btn btn-default\">Adicionar Material</button>

                <br /><br />

                <table class=\"table table-bordered\" id=\"table-material\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Material</th>
                        <th>Quantidade</th>
                        <th>id-material</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </fieldset>
        </div>
    </div>

    <button type=\"button\" id=\"btn-submit-save\" class=\"btn btn-default pull-right\">Salvar Atividade</button>
</form>

<h2>Registros</h2>
<table class=\"table table-bordered\" id=\"table-atividade\">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Pessoa</th>
            <th>Data Conclusão</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
";
    }

    // line 98
    public function block_scripts($context, array $blocks = array())
    {
        // line 99
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/negocio/atividade.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "atividades/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 99,  157 => 98,  89 => 32,  78 => 30,  74 => 29,  66 => 23,  55 => 21,  51 => 20,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* {% block content %}*/
/* <h1>Cadastro de Atividade</h1>*/
/* */
/* <form id="frm-atividade" name="frm-atividade">*/
/*     <div class="row">*/
/*         <div class="col-lg-6">*/
/*             <fieldset>*/
/*                 <legend>Projeto</legend>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="atividade-id">ID</label>*/
/*                     <input type="text" class="form-control" id="projeto-id" disabled>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="projeto-atividade">Projeto</label>*/
/*                     <select class="form-control" id="select-project">*/
/*                         <option value="-">-</option>*/
/*                         {% for project in listProjetos %}*/
/*                             <option value="{{ project.id }}">{{ project.nome }}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="projeto-atividade">Pessoa</label>*/
/*                     <select class="form-control" id="select-project">*/
/*                         {% for pessoa in listPessoa %}*/
/*                             <option value="{{ pessoa.id }}">{{ pessoa.nome }}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="atividade-nome">Nome da Atividade</label>*/
/*                     <input type="text" class="form-control" id="projeto-nome" placeholder="Nome...">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="atividade-dataconclusao">Data Conclusão</label>*/
/*                     <input type="date" class="form-control" id="projeto-dataconclusao">*/
/*                 </div>*/
/*             </fieldset>*/
/*         </div>*/
/*         <div class="col-lg-6">*/
/*             <fieldset>*/
/*                 <legend>Material</legend>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="detalhamentoatividade-material">Material</label>*/
/*                     <select class="form-control" id="detalhamentoatividade-material">*/
/*                     </select>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="detalhamentoatividade-quantidade">Quantidade</label>*/
/*                     <input type="number" class="form-control" id="detalhamentoatividade-quantidade" min="1" max="5">*/
/*                 </div>*/
/* */
/*                 <button type="button" id="btn-add-item" class="btn btn-default">Adicionar Material</button>*/
/* */
/*                 <br /><br />*/
/* */
/*                 <table class="table table-bordered" id="table-material">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>#</th>*/
/*                         <th>Material</th>*/
/*                         <th>Quantidade</th>*/
/*                         <th>id-material</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     </tbody>*/
/*                 </table>*/
/*             </fieldset>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <button type="button" id="btn-submit-save" class="btn btn-default pull-right">Salvar Atividade</button>*/
/* </form>*/
/* */
/* <h2>Registros</h2>*/
/* <table class="table table-bordered" id="table-atividade">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>#</th>*/
/*             <th>Nome</th>*/
/*             <th>Pessoa</th>*/
/*             <th>Data Conclusão</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     </tbody>*/
/* </table>*/
/* {% endblock %}*/
/* */
/* {% block scripts %}*/
/* <script type="text/javascript" src="{{ base_url() }}/js/negocio/atividade.js"></script>*/
/* {% endblock %}*/
