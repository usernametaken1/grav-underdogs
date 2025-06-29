<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugin://flex-objects/permissions.yaml',
    'modified' => 1730085300,
    'size' => 683,
    'data' => [
        'actions' => [
            'admin.flex-objects' => [
                'type' => 'crudl',
                'label' => 'Flex Objects'
            ]
        ],
        'types' => [
            'crudpl' => [
                'type' => 'crud',
                'use' => [
                    0 => 'crudp',
                    1 => 'crudl'
                ]
            ],
            'crudp' => [
                'type' => 'crud',
                'letters' => [
                    'p' => [
                        'action' => 'publish',
                        'label' => 'PLUGIN_ADMIN.PUBLISH'
                    ]
                ]
            ],
            'crudl' => [
                'type' => 'crud',
                'letters' => [
                    'l' => [
                        'action' => 'list',
                        'label' => 'PLUGIN_ADMIN.LIST'
                    ]
                ]
            ],
            'crud' => [
                'type' => 'compact',
                'letters' => [
                    'c' => [
                        'action' => 'create',
                        'label' => 'PLUGIN_ADMIN.CREATE'
                    ],
                    'r' => [
                        'action' => 'read',
                        'label' => 'PLUGIN_ADMIN.READ'
                    ],
                    'u' => [
                        'action' => 'update',
                        'label' => 'PLUGIN_ADMIN.UPDATE'
                    ],
                    'd' => [
                        'action' => 'delete',
                        'label' => 'PLUGIN_ADMIN.DELETE'
                    ]
                ]
            ],
            'default' => [
                'type' => 'access'
            ]
        ]
    ]
];
