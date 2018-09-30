<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\EmailLogFaker;
use Railken\Amethyst\Managers\EmailLogManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class EmailLogTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = EmailLogManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = EmailLogFaker::class;
}
