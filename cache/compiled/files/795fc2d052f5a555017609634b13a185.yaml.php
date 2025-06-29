<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugin://admin/permissions.yaml',
    'modified' => 1730086092,
    'size' => 1357,
    'data' => [
        'actions' => [
            'site' => [
                'label' => 'PLUGIN_ADMIN.ACCESS_SITE',
                'actions' => [
                    'login' => [
                        'label' => 'PLUGIN_ADMIN.ACCESS_SITE_LOGIN'
                    ]
                ]
            ],
            'admin' => [
                'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN',
                'actions' => [
                    'login' => [
                        'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN_LOGIN'
                    ],
                    'super' => [
                        'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN_SUPER'
                    ],
                    'cache' => [
                        'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN_CACHE'
                    ],
                    'configuration' => [
                        'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN_CONFIGURATION',
                        'actions' => [
                            'system' => [
                                'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN_CONFIGURATION_SYSTEM'
                            ],
                            'site' => [
                                'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN_CONFIGURATION_SITE'
                            ],
                            'media' => [
                                'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN_CONFIGURATION_MEDIA'
                            ],
                            'security' => [
                                'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN_CONFIGURATION_SECURITY'
                            ],
                            'info' => [
                                'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN_CONFIGURATION_INFO'
                            ]
                        ]
                    ],
                    'pages' => [
                        'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN_PAGES'
                    ],
                    'maintenance' => [
                        'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN_MAINTENANCE'
                    ],
                    'statistics' => [
                        'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN_STATISTICS'
                    ],
                    'plugins' => [
                        'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN_PLUGINS'
                    ],
                    'themes' => [
                        'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN_THEMES'
                    ],
                    'tools' => [
                        'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN_TOOLS'
                    ],
                    'users' => [
                        'label' => 'PLUGIN_ADMIN.ACCESS_ADMIN_USERS'
                    ]
                ]
            ]
        ],
        'types' => [
            'default' => [
                'type' => 'access'
            ]
        ]
    ]
];
