<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\EmailLogFaker;
use Amethyst\Managers\EmailLogManager;
use Amethyst\Tests\BaseTest;
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
