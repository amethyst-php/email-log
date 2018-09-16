<?php

namespace Railken\LaraOre\Tests\EmailLog;

use Railken\LaraOre\EmailLog\EmailLogFaker;
use Railken\LaraOre\EmailLog\EmailLogManager;
use Railken\LaraOre\Support\Testing\ManagerTestableTrait;

class ManagerTest extends BaseTest
{
    use ManagerTestableTrait;

    /**
     * Retrieve basic url.
     *
     * @return \Railken\Laravel\Manager\Contracts\ManagerContract
     */
    public function getManager()
    {
        return new EmailLogManager();
    }

    public function testSuccessCommon()
    {
        $this->commonTest($this->getManager(), EmailLogFaker::make()->parameters());
    }
}
