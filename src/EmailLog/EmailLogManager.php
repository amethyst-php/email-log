<?php

namespace Railken\LaraOre\EmailLog;

use Illuminate\Support\Facades\Config;
use Railken\Laravel\Manager\Contracts\AgentContract;
use Railken\Laravel\Manager\ModelManager;
use Railken\Laravel\Manager\Tokens;

class EmailLogManager extends ModelManager
{
    /**
     * Class name entity.
     *
     * @var string
     */
    public $entity = EmailLog::class;

    /**
     * Describe this manager.
     *
     * @var string
     */
    public $comment = '...';

    /**
     * List of all attributes.
     *
     * @var array
     */
    protected $attributes = [
        Attributes\Id\IdAttribute::class,
        Attributes\Name\NameAttribute::class,
        Attributes\CreatedAt\CreatedAtAttribute::class,
        Attributes\UpdatedAt\UpdatedAtAttribute::class,
        Attributes\From\FromAttribute::class,
        Attributes\To\ToAttribute::class,
        Attributes\Subject\SubjectAttribute::class,
        Attributes\Body\BodyAttribute::class,
    ];

    /**
     * List of all exceptions.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_AUTHORIZED => Exceptions\EmailLogNotAuthorizedException::class,
    ];

    /**
     * Construct.
     *
     * @param AgentContract $agent
     */
    public function __construct(AgentContract $agent = null)
    {
        $this->entity = Config::get('ore.email-log.entity');
        $this->attributes = array_merge($this->attributes, array_values(Config::get('ore.email-log.attributes')));

        $classRepository = Config::get('ore.email-log.repository');
        $this->setRepository(new $classRepository($this));

        $classSerializer = Config::get('ore.email-log.serializer');
        $this->setSerializer(new $classSerializer($this));

        $classAuthorizer = Config::get('ore.email-log.authorizer');
        $this->setAuthorizer(new $classAuthorizer($this));

        $classValidator = Config::get('ore.email-log.validator');
        $this->setValidator(new $classValidator($this));

        parent::__construct($agent);
    }
}
