<?php
/**
 * The manifest of files that are local to specific environment.
 * This file returns a list of environments that the application
 * may be installed under. The returned data must be in the following
 * format:
 *
 * ```php
 * return [
 *     'environment name' => [
 *         'path' => 'directory storing the local files',
 *         'skipFiles'  => [
 *             // list of files that should only copied once and skipped if they already exist
 *         ],
 *         'setWritable' => [
 *             // list of directories that should be set writable
 *         ],
 *         'setExecutable' => [
 *             // list of files that should be set executable
 *         ],
 *         'setCookieValidationKey' => [
 *             // list of config files that need to be inserted with automatically generated cookie validation keys
 *         ],
 *         'createSymlink' => [
 *             // list of symlinks to be created. Keys are symlinks, and values are the targets.
 *         ],
 *     ],
 * ];
 * ```
 */
return [
    'Peppers Development' => [
        'path' => 'peppers_dev',
        'setWritable' => [
            'admin/runtime',
            'api/runtime',
			'htdocs/uploads',
        ],
        'setExecutable' => [
            'yii',
            'yii_test',
        ],
        'setCookieValidationKey' => [
            'admin/config/main-local.php',
            'api/config/main-local.php',
        ],
    ],
	'Stage Development' => [
        'path' => 'stage_dev',
        'setWritable' => [
            'admin/runtime',
            'api/runtime',
			'htdocs/uploads',
        ],
        'setExecutable' => [
            'yii',
        ],
        'setCookieValidationKey' => [
            'admin/config/main-local.php',
            'api/config/main-local.php',
        ],
    ],
    'Stage Production' => [
        'path' => 'stage_prod',
        'setWritable' => [
            'admin/runtime',
            'api/runtime',
			'htdocs/uploads',
        ],
        'setExecutable' => [
            'yii',
        ],
        'setCookieValidationKey' => [
            'admin/config/main-local.php',
            'api/config/main-local.php',
        ],
    ],
];
