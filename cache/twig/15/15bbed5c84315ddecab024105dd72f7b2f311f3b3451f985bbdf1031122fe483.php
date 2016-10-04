<?php

/* layout.twig */
class __TwigTemplate_5544f7c7d829afc980bbe1840c72d5db6ea8e81a49a79d5057f29b666234b02c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Projeto de Software</title>

    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/css/offcanvas.css\" rel=\"stylesheet\">

    <!-- Bootstrap -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\">

    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/css/sweetalert.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>

<nav class=\"navbar navbar-fixed-top navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"
                    aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Projeto de software</a>
        </div>
    </div><!-- /.container -->
</nav>

<div id=\"loader-modal\" style=\"display: none;\">
    <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/img/loader.svg\" />
</div>

<div class=\"container\">

    <div class=\"row row-offcanvas row-offcanvas-right\">
        <div class=\"col-xs-12 col-sm-9\">
            ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "        </div>
        <div class=\"col-xs-6 col-sm-3 sidebar-offcanvas\" id=\"sidebar\">
            <div class=\"list-group\">
                <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/\" class=\"list-group-item active\">Menu</a>
                <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/pessoa\" class=\"list-group-item\">Cadastro pessoas</a>
                <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/projeto\" class=\"list-group-item\">Cadastro Projeto</a>
                <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/atividade\" class=\"list-group-item\">Cadastro de Atividades</a>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script>

    var baseUrl = \"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "\";

</script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/jquery.blockUI.js\"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/sweetalert.min.js\"></script>

<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/common.js\"></script>

";
        // line 77
        $this->displayBlock('scripts', $context, $blocks);
        // line 78
        echo "</body>
</html>";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
    }

    // line 77
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 77,  148 => 49,  143 => 78,  141 => 77,  136 => 75,  131 => 73,  127 => 72,  121 => 69,  114 => 65,  102 => 56,  98 => 55,  94 => 54,  90 => 53,  85 => 50,  83 => 49,  73 => 42,  43 => 15,  38 => 13,  32 => 10,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <title>Projeto de Software</title>*/
/* */
/*     <link href="{{ base_url() }}/css/offcanvas.css" rel="stylesheet">*/
/* */
/*     <!-- Bootstrap -->*/
/*     <link href="{{ base_url() }}/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*     <link href="{{ base_url() }}/css/sweetalert.css" rel="stylesheet">*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/* */
/* <nav class="navbar navbar-fixed-top navbar-inverse">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"*/
/*                     aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#">Projeto de software</a>*/
/*         </div>*/
/*     </div><!-- /.container -->*/
/* </nav>*/
/* */
/* <div id="loader-modal" style="display: none;">*/
/*     <img src="{{ base_url() }}/img/loader.svg" />*/
/* </div>*/
/* */
/* <div class="container">*/
/* */
/*     <div class="row row-offcanvas row-offcanvas-right">*/
/*         <div class="col-xs-12 col-sm-9">*/
/*             {% block content %}{% endblock %}*/
/*         </div>*/
/*         <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">*/
/*             <div class="list-group">*/
/*                 <a href="{{ base_url() }}/" class="list-group-item active">Menu</a>*/
/*                 <a href="{{ base_url() }}/pessoa" class="list-group-item">Cadastro pessoas</a>*/
/*                 <a href="{{ base_url() }}/projeto" class="list-group-item">Cadastro Projeto</a>*/
/*                 <a href="{{ base_url() }}/atividade" class="list-group-item">Cadastro de Atividades</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/* <script>*/
/* */
/*     var baseUrl = "{{ base_url() }}";*/
/* */
/* </script>*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>*/
/* <script src="{{ base_url() }}/js/jquery.blockUI.js"></script>*/
/* */
/* <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/* <script src="{{ base_url() }}/js/bootstrap.min.js"></script>*/
/* <script src="{{ base_url() }}/js/sweetalert.min.js"></script>*/
/* */
/* <script src="{{ base_url() }}/js/common.js"></script>*/
/* */
/* {% block scripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
