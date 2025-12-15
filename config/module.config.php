<?php
namespace PageBlockAdno;

return [
    'block_layouts' => [
        'invokables' => [
            'Adno' => Site\BlockLayout\Adno::class // @translate
        ],
    ],
    'form_elements' => [
        'invokables' => [
            Form\AdnoFieldset::class => Form\AdnoFieldset::class,
        ],
    ],
    'translator' => [
        'translation_file_patterns' => [
            [
                'type' => 'gettext',
                'base_dir' => dirname(__DIR__) . '/language',
                'pattern' => '%s.mo',
                'text_domain' => null,
            ],
        ],
    ],
];
