<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class EmailLogFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('from', 'test@test.net');
        $bag->set('to', ['test@test.net']);
        $bag->set('cc', ['test1@test.net']);
        $bag->set('bcc', ['test2@test.net']);
        $bag->set('subject', 'Welcome');
        $bag->set('body', 'Hello');

        return $bag;
    }
}
