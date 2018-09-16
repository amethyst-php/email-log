<?php

namespace Railken\LaraOre\EmailLog\Exceptions;

class EmailLogNotFoundException extends EmailLogException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'EMAILLOG_NOT_FOUND';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'Not found';
}
