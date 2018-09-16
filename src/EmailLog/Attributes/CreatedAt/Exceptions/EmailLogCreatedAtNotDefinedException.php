<?php

namespace Railken\LaraOre\EmailLog\Attributes\CreatedAt\Exceptions;

use Railken\LaraOre\EmailLog\Exceptions\EmailLogAttributeException;

class EmailLogCreatedAtNotDefinedException extends EmailLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'created_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'EMAILLOG_CREATED_AT_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
