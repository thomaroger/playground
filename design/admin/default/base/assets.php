<?php 
return array(
	'assetic_configuration' => array(
		'modules' => array(
			'default_base' => array(
				'root_path' => array(
					__DIR__ . '/../../../../design/admin/default/base/assets',
				),
				'collections' => array(
					'admin_images' => array(
						'assets' => array(
							'images/**/*.jpg',
							'images/**/*.png',
						),
						'options' => array(
							'move_raw' => true,
							'output' => 'zfcadmin/',
						)
					),
					'ckeditor' => array(
                        'assets' => array(
                            'js/lib/ckeditor/*',
                            'js/lib/ckeditor/**/*',
                            'js/lib/ckeditor/**/**/*',
                            'js/lib/ckeditor/**/**/**/*',
                            'js/ckeditor-custom/*',
                            'js/ckeditor-custom/**/*',
                            'css/ckeditor-custom/*',
                        ),
                        'options' => array(
                            'move_raw' => true,
                            'output' => 'zfcadmin/',
                        )
                    ),
				),
			),
		),
	),
);