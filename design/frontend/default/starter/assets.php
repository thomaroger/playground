<?php
return array(
	'assetic_configuration' => array(
		'modules' => array(
			'default_base' => array(
				'root_path' => array(
					__DIR__ . '/../../../../design/frontend/default/starter/assets',
				),
		    'collections' => array(
					'frontend_images' => array(
						'assets' => array(
							'images/**/*.png',
							'images/**/*.jpg',
						),
						'options' => array(
							'move_raw' => true,
							'output' => 'frontend',
						)
					),
					'frontend_css' => array(
						'assets' => array(
							'css/starter.css'
						),
						'options' => array(
							'output' => 'frontend/css/starter'
						)
					),

					'frontend_js' => array(
						'assets' => array(
							'js/respond.src.js'
						),
						'options' => array(
							'output' => 'frontend/js/frontend_js'
						)
					)
        ),
			),
		),
    'routes' => array(
      'frontend.*' => array(
        '@frontend_css' => '@frontend_css',
        '@frontend_js' => '@frontend_js',
      ),
    ),
	),
);