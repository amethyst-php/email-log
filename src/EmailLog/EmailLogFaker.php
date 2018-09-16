<?php

namespace Railken\LaraOre\EmailLog;

use Faker\Factory;
use Railken\Bag;
use Railken\Laravel\Manager\BaseFaker;

class EmailLogFaker extends BaseFaker
{
    /**
     * @var string
     */
    protected $manager = EmailLogManager::class;

    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('from', 'test@test.net');
        $bag->set('to', ['test@test.net']);
        $bag->set('cc', 'test1@test.net');
        $bag->set('bcc', 'test2@test.net');
        $bag->set('subject', 'Welcome');
        $bag->set('body', 'Hello');

        return $bag;
    }
}
