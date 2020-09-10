<?php

/** 
 * THIS IS NOT NAVBAR CONFIG.
 * 
 * TODO: replace this with some db driven navbar manager like links are done la
 * base it on pages/route names and tie them together
 */

return [
    'main' => [
        'name' => 'Main Navbar',
        'links' => [
            [
                'label' => 'About',
                'href' => 'about',
            ],
            [
                'label' => 'Projects',
                'href' => 'projects',
            ],
            [
                'label' => 'Blog',
                'href' => 'blog',
            ],
            [
                'label' => 'Contact',
                'href' => 'contact',
            ],
            [
                'label' => 'Disabled',
                'href' => 'disabled',
            ],
        ],
    ],
];
