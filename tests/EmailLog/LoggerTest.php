<?php

namespace Railken\LaraOre\Tests\EmailLog;

use Illuminate\Support\Facades\Mail;
use Railken\Bag;
use Railken\LaraOre\EmailLog\EmailLogManager;
use Railken\LaraOre\Support\Testing\ManagerTestableTrait;

class LoggerTest extends BaseTest
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

    public function testLogEmail()
    {
        $bag = new Bag();
        $bag->set('from', 'test@test.net');
        $bag->set('to', ['test@test.net']);
        $bag->set('subject', 'Uhm');
        $bag->set('body', 'Uhm');

        Mail::send([], [], function ($message) use ($bag) {
            $message->to($bag->get('to'))
                ->subject($bag->get('subject'))
                ->setBody($bag->get('body'), 'text/html');
        });

        $log = $this->getManager()->getRepository()->newQuery()->orderBy('id', 'DESC')->first();

        $this->assertEquals($log->to[0], $bag->get('to')[0]);
    }
}
