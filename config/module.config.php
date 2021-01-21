<?php
namespace FieldsAsTags;

return [
    'block_layouts' => [
        'invokables' => [
            'tag_browse_preview' => Site\BlockLayout\TagBrowsePreview::class,
        ]
    ],

    'view_manager' => [
        'template_path_stack' => [
            dirname(__DIR__) . '/view',
        ],
    ]
        
];
