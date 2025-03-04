<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'accessibility4typo3',
    'description' => 'Accessibility tool that integrates into your website to enhance usability for all visitor utilizing AI',
    'author' => 'Dietmar Schäffer',
    'author_email' => 'info@gsp-software.eu',
    'author_company' => 'GSP Software GmbH',
    'category' => 'plugin',
    'version' => '1.0.4',
    'state' => 'stable',
    'readme' => 'https://github.com/gsp/accessibility4typo3/README.md',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-13.4.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Gsp\\Accessibility4typo3\\' => 'Classes/',
        ],
    ],
];
