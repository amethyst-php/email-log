<?php

namespace Railken\LaraOre\EmailLog\Attributes\Id\Exceptions;

use Railken\LaraOre\EmailLog\Exceptions\EmailLogAttributeException;

class EmailLogIdNotAuthorizedException extends EmailLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'id';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'EMAILLOG_ID_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
