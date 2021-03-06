<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/amit/vishi/glugnith_site_new/user/plugins/smileys/blueprints.yaml',
    'modified' => 1538509411,
    'data' => [
        'name' => 'Smileys',
        'version' => '1.2.1',
        'description' => 'This plugin substitutes text emoticons, also known as smilies like :-), with images.',
        'icon' => 'smile-o',
        'author' => [
            'name' => 'Sommerregen',
            'email' => 'sommerregen@benjamin-regler.de'
        ],
        'homepage' => 'https://github.com/sommerregen/grav-plugin-smileys',
        'keywords' => [
            0 => 'smilies',
            1 => 'emotes',
            2 => 'emoticons',
            3 => 'filter',
            4 => 'formatter',
            5 => 'plugin'
        ],
        'docs' => 'https://github.com/sommerregen/grav-plugin-smileys/blob/master/README.md',
        'bugs' => 'https://github.com/sommerregen/grav-plugin-smileys/issues',
        'license' => 'MIT/GPL',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'global' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.SMILEYS.GLOBAL_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.SMILEYS.PLUGIN_STATUS',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'built_in_css' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.SMILEYS.BUILTIN_CSS',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'weight' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGINS.SMILEYS.WEIGHT',
                            'help' => 'PLUGINS.SMILEYS.WEIGHT_HELP',
                            'default' => 1,
                            'validate' => [
                                'type' => 'int',
                                'min' => -100,
                                'max' => 100
                            ]
                        ]
                    ]
                ],
                'default' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.SMILEYS.DEFAULT_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'pack' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'label' => 'PLUGINS.SMILEYS.PACK',
                            'help' => 'PLUGINS.SMILEYS.PACK_HELP',
                            '@data-options' => '\\Grav\\Plugin\\SmileysPlugin::getSmileyPacks',
                            'default' => '',
                            'options' => [
                                '' => 'PLUGINS.SMILEYS.PACK_DEFAULT'
                            ],
                            'validate' => [
                                'required' => true,
                                'type' => 'string'
                            ]
                        ]
                    ]
                ],
                'specific' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.SMILEYS.SPECIFIC_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'exclude.tags' => [
                            'type' => 'selectize',
                            'size' => 'medium',
                            'label' => 'PLUGINS.SMILEYS.EXCLUDE.TAGS',
                            'help' => 'PLUGINS.SMILEYS.EXCLUDE.TAGS_HELP',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ],
                        'exclude.classes' => [
                            'type' => 'selectize',
                            'size' => 'medium',
                            'label' => 'PLUGINS.SMILEYS.EXCLUDE.CLASSES',
                            'help' => 'PLUGINS.SMILEYS.EXCLUDE.CLASSES_HELP',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ],
                        'process' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.SMILEYS.PROCESS',
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
