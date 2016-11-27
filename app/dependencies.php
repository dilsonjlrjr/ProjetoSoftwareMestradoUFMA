<?php
// DIC configuration

$container = $app->getContainer();


// -----------------------------------------------------------------------------
// Service providers
// -----------------------------------------------------------------------------
// Twig
$container['view'] = function (Interop\Container\ContainerInterface $container) {
    $settings = $container->get('settings');
    $view = new Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);
    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($container->get('router'), $container->get('request')->getUri()));
    $view->addExtension(new Twig_Extension_Debug());
    return $view;
};

// -----------------------------------------------------------------------------
// Service factories
// -----------------------------------------------------------------------------

// Flash messages
$container['flash'] = function () {
    return new Slim\Flash\Messages;
};


// monolog
$container['logger'] = function (\Interop\Container\ContainerInterface $container) {
    $settings = $container->get('settings');
    $logger = new Monolog\Logger($settings['logger']['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['logger']['path'], Monolog\Logger::DEBUG));
    return $logger;
};

// Database Connection
$container['database'] = function () {
    return \App\Facilitator\Database\DatabaseFacilitator::getConnection();
};

//Error Handler
$container['errorHandler'] = function (\Interop\Container\ContainerInterface $container) {
    return function ($request, $response, $exception) use ($container) {
        $arrayJson = [ "code" => $exception->getCode(), "message" => 'Something went wrong! Cause: ' . $exception->getMessage()];

        return $container['response']->withStatus(500)
            ->withHeader('Content-Type', 'text/html')
            ->withJson($arrayJson);
    };
};

//Session Slim 3
$container['session'] = function () {
    return new \RKA\Session();
};

