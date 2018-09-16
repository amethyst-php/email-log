<?php

namespace Railken\LaraOre\EmailLog\Attributes\Name\Exceptions;

use Railken\LaraOre\EmailLog\Exceptions\EmailLogAttributeException;

class EmailLogNameNotDefinedException extends EmailLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'name';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'EMAILLOG_NAME_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
