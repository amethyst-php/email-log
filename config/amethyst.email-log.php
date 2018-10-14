<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components.
    |
    */
    'data' => [
        'email-log' => [
            'table'      => 'amethyst_email_logs',
            'comment'    => 'Email Log',
            'model'      => Railken\Amethyst\Models\EmailLog::class,
            'schema'     => Railken\Amethyst\Schemas\EmailLogSchema::class,
            'repository' => Railken\Amethyst\Repositories\EmailLogRepository::class,
            'serializer' => Railken\Amethyst\Serializers\EmailLogSerializer::class,
            'validator'  => Railken\Amethyst\Validators\EmailLogValidator::class,
            'authorizer' => Railken\Amethyst\Authorizers\EmailLogAuthorizer::class,
            'faker'      => Railken\Amethyst\Fakers\EmailLogFaker::class,
            'manager'    => Railken\Amethyst\Managers\EmailLogManager::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'email-log' => [
                'enabled'     => true,
                'controller'  => Railken\Amethyst\Http\Controllers\Admin\EmailLogsController::class,
                'router'      => [
                    'as'        => 'email-log.',
                    'prefix'    => '/email-logs',
                ],
            ],
        ],
    ],
];
