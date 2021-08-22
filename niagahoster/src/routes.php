<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    // $app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
    //     // Sample log message
    //     $container->get('logger')->info("Slim-Skeleton '/' route");

    //     // Render index view
    //     return $container->get('renderer')->render($response, 'index.phtml', $args);
    // });

    $app->get('/', function (Request $request, Response $response, array $args) {
        $sql = "SELECT * FROM  product_service";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $data['product_service']=$result;

        // Render template dengan Twig
        return $this->view->render($response, 'index.html', $data);
    });
};
