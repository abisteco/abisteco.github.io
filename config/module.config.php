<?php
namespace Abisteco;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\RootController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'abisteco' => [
                'type'    => 'Literal',
                'options' => [
                    // Altere para algo específico do seu módulo
                    'route'    => '/abisteco',
                    'defaults' => [
                        'controller'    => Controller\RootController::class,
                        'action'        => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                  // Você pode colocar rotas dinamicas que filhas da rota pai abisteco.
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Abisteco' => __DIR__ . '/../view',
        ],
    ],
];
