<?php

namespace Amethyst\Tests\Listeners;

use Amethyst\Managers\EmailLogManager;
use Amethyst\Tests\BaseTest;
use Illuminate\Support\Facades\Mail;
use Railken\Bag;

class LoggerTest extends BaseTest
{
    /**
     * Retrieve basic url.
     *
     * @return \Railken\Lem\Contracts\ManagerContract
     */
    public function getManager()
    {
        return new EmailLogManager();
    }

    public function testLogEmail()
    {
        $source = getcwd().'/var/cache/attachment.txt';

        if (!file_exists(dirname($source))) {
            mkdir(dirname($source), 0755, true);
        }

        file_put_contents($source, 'test');

        $bag = new Bag();
        $bag->set('from', 'test@test.net');
        $bag->set('to', ['test1@test.net']);
        $bag->set('cc', ['test2@test.net']);
        $bag->set('bcc', ['test3@test.net']);
        $bag->set('subject', 'Uhm');
        $bag->set('body', 'Uhm');
        $bag->set('attachments', [
            [
                'as'     => 'test.txt',
                'source' => $source,
            ],
        ]);

        Mail::send([], [], function ($message) use ($bag) {
            $message->to($bag->get('to'))
                ->from($bag->get('from'))
                ->cc($bag->get('cc'))
                ->bcc($bag->get('bcc'))
                ->subject($bag->get('subject'))
                ->setBody($bag->get('body'), 'text/html');

            foreach ($bag->get('attachments') as $attachment) {
                $message->attach($attachment['source'], ['as' => $attachment['as']]);
            }
        });

        $log = $this->getManager()->getRepository()->newQuery()->orderBy('id', 'DESC')->first();

        $this->assertEquals($log->to[0], $bag->get('to')[0]);
        $this->assertEquals($log->from, $bag->get('from'));
        $this->assertEquals($log->cc[0], $bag->get('cc')[0]);
        $this->assertEquals($log->bcc[0], $bag->get('bcc')[0]);
        $this->assertEquals($log->subject, $bag->get('subject'));
        $this->assertEquals($log->body, $bag->get('body'));
    }
}
