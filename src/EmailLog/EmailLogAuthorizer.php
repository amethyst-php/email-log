<?php

namespace Railken\LaraOre\EmailLog;

use Railken\Laravel\Manager\ModelAuthorizer;
use Railken\Laravel\Manager\Tokens;

class EmailLogAuthorizer extends ModelAuthorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'email_log.create',
        Tokens::PERMISSION_UPDATE => 'email_log.update',
        Tokens::PERMISSION_SHOW   => 'email_log.show',
        Tokens::PERMISSION_REMOVE => 'email_log.remove',
    ];
}
