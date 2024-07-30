<?php
declare(strict_types=1);
use PHP\Mvc\Controller\DeleteVideoController;
use PHP\Mvc\Controller\EditVideoController;
use PHP\Mvc\Controller\NewVideoController;
use PHP\Mvc\Controller\VideoFormController;
use PHP\Mvc\Controller\VideoListController;

return [
    'GET|/'=> VideoListController::class,
    'GET|/novo-video' =>  VideoFormController::class,
    'POST|/novo-video' =>  NewVideoController::class,
    'GET|/editar-video' => VideoFormController::class,
    'POST|/editar-video' => EditVideoController::class,
    'GET|/remover-video' => DeleteVideoController::class
];