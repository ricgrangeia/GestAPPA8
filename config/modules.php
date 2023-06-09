<?php

use Nwidart\Modules\Activators\FileActivator;
use Nwidart\Modules\Commands;

return [

    /*
    |--------------------------------------------------------------------------
    | Module Namespace
    |--------------------------------------------------------------------------
    |
    | Default module namespace.
    |
    */

    'namespace' => 'App',

    /*
    |--------------------------------------------------------------------------
    | Module Stubs
    |--------------------------------------------------------------------------
    |
    | Default module stubs.
    |
    */

	'stubs' => [
		'enabled' => false,
		'path'    => base_path() . '/vendor/nwidart/laravel-modules/src/Commands/stubs',
		'files'   => [
			'routes/web'      => 'Routes/web.php',
			'routes/api'      => 'Routes/api.php',
			'scaffold/config' => 'Config/config.php',
			'composer'        => 'composer.json',
		],
		'replacements' => [
			'routes/web'      => ['LOWER_NAME', 'STUDLY_NAME'],
			'routes/api'      => ['LOWER_NAME'],
			'webpack'         => ['LOWER_NAME'],
			'json'            => ['LOWER_NAME', 'STUDLY_NAME', 'MODULE_NAMESPACE'],
			'views/index'     => ['LOWER_NAME'],
			'views/master'    => ['LOWER_NAME', 'STUDLY_NAME'],
			'scaffold/config' => ['STUDLY_NAME'],
			'composer'        => [
				'LOWER_NAME',
				'STUDLY_NAME',
				'VENDOR',
				'AUTHOR_NAME',
				'AUTHOR_EMAIL',
				'MODULE_NAMESPACE',
			],
		],
		'gitkeep' => true,
    ],
    'paths' => [
        /*
        |--------------------------------------------------------------------------
        | Modules path
        |--------------------------------------------------------------------------
        |
        | This path used for save the generated module. This path also will be added
        | automatically to list of scanned folders.
        |
        */

        'modules' => base_path('app'),
        /*
        |--------------------------------------------------------------------------
        | Modules assets path
        |--------------------------------------------------------------------------
        |
        | Here you may update the modules assets path.
        |
        */

        'assets' => public_path('modules'),
        /*
        |--------------------------------------------------------------------------
        | The migrations path
        |--------------------------------------------------------------------------
        |
        | Where you run 'module:publish-migration' command, where do you publish the
        | the migration files?
        |
        */

        'migration' => base_path('database/migrations'),
        /*
        |--------------------------------------------------------------------------
        | Generator path
        |--------------------------------------------------------------------------
        | Customise the paths where the folders will be generated.
        | Set the generate key to false to not generate that folder
        */
		'generator' => [
			/*
			*|--------------------------------------------------------------------------
			*| Application
			*|--------------------------------------------------------------------------
			*/
			'controller'      => ['path' => 'App/Http/Controllers', 'generate' => true],
			'resource'        => ['path' => 'App/Http/Resources', 'generate' => true],
			'request'         => ['path' => 'App/Http/Requests', 'generate' => true],
			'command'         => ['path' => 'App/Console', 'generate' => true],
			'exception'       => ['path' => 'App/Exceptions', 'generate' => true],
			'provider'        => ['path' => 'App/Providers', 'generate' => true],
			'rules'           => ['path' => 'App/Rules', 'generate' => true], //TODO: Or domain!

			/*
			*|--------------------------------------------------------------------------
			*| Domain
			*|--------------------------------------------------------------------------
			*/
			'model'         => ['path' => 'Domain/Entities', 'generate' => true],
			'repository'    => ['path' => 'Domain/Repositories', 'generate' => true],
			'service'       => ['path' => 'Domain/Services', 'generate' => true],
			'event'         => ['path' => 'Domain/Events', 'generate' => true],
			'listener'      => ['path' => 'Domain/Listeners', 'generate' => true],
			'policies'      => ['path' => 'Domain/Policies', 'generate' => true], //TODO: Or Domain!
			'jobs'          => ['path' => 'Domain/Jobs', 'generate' => true], //TODO: Or Domain!

			/*
			 *|--------------------------------------------------------------------------
			 *| Infrastructure
			 *|--------------------------------------------------------------------------
			 */
			'emails'        => ['path' => 'Infrastructure/Emails', 'generate' => true],
			'notifications' => ['path' => 'Infrastructure/Notifications', 'generate' => true],
			'migration'     => ['path' => 'Infrastructure/Database/Migrations', 'generate' => true],
			'seeder'        => ['path' => 'Infrastructure/Database/Seeders', 'generate' => true],
			'factory'       => ['path' => 'Infrastructure/Database/factories', 'generate' => true],
			'config'        => ['path' => 'Infrastructure/Config', 'generate' => true],

			/*
			*|--------------------------------------------------------------------------
			*| TDD
			*|--------------------------------------------------------------------------
			*/
			'test'          => ['path' => 'tests/Unit', 'generate' => true],
			'test-feature'  => ['path' => 'tests/Feature', 'generate' => true],

			'assets'        => ['path' => 'Resources/assets', 'generate' => false],
			'lang'          => ['path' => 'Resources/lang', 'generate' => false],
			'views'         => ['path' => 'Resources/views', 'generate' => false],
		],
    ],

    /*
    |--------------------------------------------------------------------------
    | Package commands
    |--------------------------------------------------------------------------
    |
    | Here you can define which commands will be visible and used in your
    | application. If for example you don't use some of the commands provided
    | you can simply comment them out.
    |
    */
    'commands' => [
        Commands\CommandMakeCommand::class,
        Commands\ComponentClassMakeCommand::class,
        Commands\ComponentViewMakeCommand::class,
        Commands\ControllerMakeCommand::class,
        Commands\DisableCommand::class,
        Commands\DumpCommand::class,
        Commands\EnableCommand::class,
        Commands\EventMakeCommand::class,
        Commands\JobMakeCommand::class,
        Commands\ListenerMakeCommand::class,
        Commands\MailMakeCommand::class,
        Commands\MiddlewareMakeCommand::class,
        Commands\NotificationMakeCommand::class,
        Commands\ProviderMakeCommand::class,
        Commands\RouteProviderMakeCommand::class,
        Commands\InstallCommand::class,
        Commands\ListCommand::class,
        Commands\ModuleDeleteCommand::class,
        Commands\ModuleMakeCommand::class,
        Commands\FactoryMakeCommand::class,
        Commands\PolicyMakeCommand::class,
        Commands\RequestMakeCommand::class,
        Commands\RuleMakeCommand::class,
        Commands\MigrateCommand::class,
        Commands\MigrateFreshCommand::class,
        Commands\MigrateRefreshCommand::class,
        Commands\MigrateResetCommand::class,
        Commands\MigrateRollbackCommand::class,
        Commands\MigrateStatusCommand::class,
        Commands\MigrationMakeCommand::class,
        Commands\ModelMakeCommand::class,
        Commands\PublishCommand::class,
        Commands\PublishConfigurationCommand::class,
        Commands\PublishMigrationCommand::class,
        Commands\PublishTranslationCommand::class,
        Commands\SeedCommand::class,
        Commands\SeedMakeCommand::class,
        Commands\SetupCommand::class,
        Commands\UnUseCommand::class,
        Commands\UpdateCommand::class,
        Commands\UseCommand::class,
        Commands\ResourceMakeCommand::class,
        Commands\TestMakeCommand::class,
        Commands\LaravelModulesV6Migrator::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Scan Path
    |--------------------------------------------------------------------------
    |
    | Here you define which folder will be scanned. By default will scan vendor
    | directory. This is useful if you host the package in packagist website.
    |
    */

    'scan' => [
        'enabled' => false,
        'paths' => [
            base_path('vendor/*/*'),
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Composer File Template
    |--------------------------------------------------------------------------
    |
    | Here is the config for composer.json file, generated by this package
    |
    */

    'composer' => [
        'vendor' => 'appa8',
        'author' => [
            'name' => 'Ricardo Grangeia',
            'email' => 'ricardograngeia@gmail.com',
        ],
        'composer-output' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Caching
    |--------------------------------------------------------------------------
    |
    | Here is the config for setting up caching feature.
    |
    */
    'cache' => [
        'enabled' => false,
        'driver' => 'file',
        'key' => 'laravel-modules',
        'lifetime' => 60,
    ],
    /*
    |--------------------------------------------------------------------------
    | Choose what laravel-modules will register as custom namespaces.
    | Setting one to false will require you to register that part
    | in your own Service Provider class.
    |--------------------------------------------------------------------------
    */
    'register' => [
        'translations' => true,
        /**
         * load files on boot or register method
         *
         * Note: boot not compatible with asgardcms
         *
         * @example boot|register
         */
        'files' => 'register',
    ],

    /*
    |--------------------------------------------------------------------------
    | Activators
    |--------------------------------------------------------------------------
    |
    | You can define new types of activators here, file, database etc. The only
    | required parameter is 'class'.
    | The file activator will store the activation status in storage/installed_modules
    */
    'activators' => [
        'file' => [
            'class' => FileActivator::class,
            'statuses-file' => base_path('modules_statuses.json'),
            'cache-key' => 'activator.installed',
            'cache-lifetime' => 604800,
        ],
    ],

    'activator' => 'file',
];
