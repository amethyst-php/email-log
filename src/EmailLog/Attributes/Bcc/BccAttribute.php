<?php

namespace Railken\LaraOre\EmailLog\Attributes\Bcc;

use Railken\Laravel\Manager\Attributes\BaseAttribute;
use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\Tokens;
use Respect\Validation\Validator as v;

class BccAttribute extends BaseAttribute
{
    /**
     * Describe this attribute.
     *
     * @var string
     */
    public $comment = '...';
    /**
     * Name attribute.
     *
     * @var string
     */
    protected $name = 'bcc';

    /**
     * Is the attribute required
     * This will throw not_defined exception for non defined value and non existent model.
     *
     * @var bool
     */
    protected $required = false;

    /**
     * Is the attribute unique.
     *
     * @var bool
     */
    protected $unique = false;

    /**
     * Is the attribute fillable.
     *
     * @var bool
     */
    protected $fillable = false;

    /**
     * List of all exceptions used in validation.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_DEFINED    => Exceptions\EmailLogBccNotDefinedException::class,
        Tokens::NOT_VALID      => Exceptions\EmailLogBccNotValidException::class,
        Tokens::NOT_AUTHORIZED => Exceptions\EmailLogBccNotAuthorizedException::class,
        Tokens::NOT_UNIQUE     => Exceptions\EmailLogBccNotUniqueException::class,
    ];

    /**
     * List of all permissions.
     */
    protected $permissions = [
        Tokens::PERMISSION_FILL => 'emaillog.attributes.bcc.fill',
        Tokens::PERMISSION_SHOW => 'emaillog.attributes.bcc.show',
    ];

    /**
     * Is a value valid ?
     *
     * @param \Railken\Laravel\Manager\Contracts\EntityContract $entity
     * @param mixed                                             $value
     *
     * @return bool
     */
    public function valid(EntityContract $entity, $value)
    {
        return true;
    }
}
