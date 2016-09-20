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
});