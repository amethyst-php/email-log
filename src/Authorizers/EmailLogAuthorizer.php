<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class EmailLogAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'email-log.create',
        Tokens::PERMISSION_UPDATE => 'email-log.update',
        Tokens::PERMISSION_SHOW   => 'email-log.show',
        Tokens::PERMISSION_REMOVE => 'email-log.remove',
    ];
}
