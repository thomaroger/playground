<?php

return array(
    // If you want some games attached to a specific hostname
    'custom_games' => array(
        'alfie' => array(
            'url' => 'www.alfie.fr',
            'classType' => 'postvote',
            'assetic_configuration' => array(
                'modules' => array(
                    'alfie' => array(
                        'collections' => array(
                            'head_alfie_css' => array(
                                'assets' => array(
                                    'css/alfie.css',
                                    'css/elements.css',
                                    'css/style.css'
                                ),
                                'filters' => array(),
                                'options' => array(
                                    'output' => 'frontend/alfie/css/head_alfie.css'
                                )
                            ),
                            'head_alfie_js' => array(
                                'assets' => array(
                                    'js/logging.js',
                                    'js/alfie.js'
                                ),
                                'filters' => array(),
                                'options' => array(
                                    'output' => 'frontend/alfie/js/head_alfie.js'
                                )
                            ),
                            'frontend_images' => array(
                                'assets' => array(
                                    'images/*.png',
                                    'images/*.ico',
                                    'images/*.jpg',
                                    'images/**/*.jpg',
                                    'images/**/*.ico',
                                    'images/**/*.png'
                                ),
                                'options' => array(
                                    'move_raw' => true,
                                    'output' => 'frontend/alfie'
                                )
                            ),
                            'frontend_fronts' => array(
                                'assets' => array(
                                    'fonts/*.eot',
                                    'fonts/*.woff',
                                    'fonts/*.ttf',
                                    'fonts/*.svg',
                                    'fonts/**/*.eot',
                                    'fonts/**/*.woff',
                                    'fonts/**/*.ttf',
                                    'fonts/**/*.svg',
                                ),
                                'options' => array(
                                    'move_raw' => true,
                                    'output' => 'frontend/alfie'
                                )
                            )
                        )
                    )
                ),
                'routes' => array(
                    'frontend/postvote.*' => array(
                        'params' => array('channel' => 'embed'),
                        '@head_alfie_js' => '@head_alfie_js',
                        '@head_alfie_css' => '@head_alfie_css'
                    )
                )
            )
        )
    ),
);
