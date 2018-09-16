<?php

namespace Railken\LaraOre\EmailLog\Exceptions;

class EmailLogNotAuthorizedException extends EmailLogException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'EMAILLOG_NOT_AUTHORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
