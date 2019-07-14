<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\EmailLog newEntity()
 * @method \Amethyst\Schemas\EmailLogSchema getSchema()
 * @method \Amethyst\Repositories\EmailLogRepository getRepository()
 * @method \Amethyst\Serializers\EmailLogSerializer getSerializer()
 * @method \Amethyst\Validators\EmailLogValidator getValidator()
 * @method \Amethyst\Authorizers\EmailLogAuthorizer getAuthorizer()
 */
class EmailLogManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.email-log.data.email-log';
}
