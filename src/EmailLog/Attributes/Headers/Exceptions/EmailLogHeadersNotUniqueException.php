<?php

namespace Railken\LaraOre\EmailLog\Attributes\Headers\Exceptions;

use Railken\LaraOre\EmailLog\Exceptions\EmailLogAttributeException;

class EmailLogHeadersNotUniqueException extends EmailLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'headers';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'EMAILLOG_HEADERS_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
