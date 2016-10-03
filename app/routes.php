<?php
// Routes

$app->get('/', 'App\Controller\HomeController:indexAction')
    ->setName('homepage');

$app->group('/pessoa', function () {
    $this->get('[/]', 'App\Controller\PessoaController:indexAction')
        ->setName('homepessoa');

    $this->post('/save', 'App\Controller\PessoaController:saveAction')
        ->setName('savepessoa');

    $this->get('/listtable', 'App\Controller\PessoaController:listTablePessoaAction')
        ->setName('listtablepessoa');
});

$app->group('/projeto', function () {
    $this->get('[/]', 'App\Controller\ProjetoController:indexAction')
        ->setName('homeprojeto');

    $this->post('/save', 'App\Controller\ProjetoController:saveAction')
        ->setName('saveprojeto');

    $this->get('/listtable', 'App\Controller\ProjetoController:listTableProjetoAction')
        ->setName('listtableprojeto');
});

$app->group('/atividade', function () {
    $this->get('[/]', 'App\Controller\AtividadeController:indexAction')
        ->setName('homeatividade');

    $this->post('/listtable', 'App\Controller\AtividadeController:listTableProjetoAction')
        ->setName('listtableatividade');

    $this->get('/listmaterial', 'App\Controller\AtividadeController:listMaterialAction')
        ->setName('listmaterial');
});

$app->group('/material', function () {
    $this->get('[/]', 'App\Controller\MaterialController:indexAction')
        ->setName('homematerial');

    $this->post('/save', 'App\Controller\MaterialController:saveAction')
        ->setName('saveprojeto');

    $this->get('/listtable', 'App\Controller\MaterialController:listTableMaterialAction')
        ->setName('listtablematerial');
});