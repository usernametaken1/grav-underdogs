<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Users/ragnarmarkus/Developer/grav-underdogs/user/pages/01.artists/artists.md',
    'modified' => 1602105763,
    'size' => 305,
    'data' => [
        'header' => [
            'title' => 'Artists',
            'media_order' => 'artists.jpg',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ]
            ]
        ],
        'frontmatter' => 'title: Artists
media_order: artists.jpg
content:
    items: \'@self.children\'
    order:
        by: date
        dir: desc',
        'markdown' => '## //UNDERDOGS AGENCY

Underdogs is an Estonian booking & artist management agency operating from Tallinn

CONTACT: [kennel@underdogs.agency](mailto:kennel@underdogs.agency)'
    ]
];
