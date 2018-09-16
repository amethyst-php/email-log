<?php

namespace Railken\LaraOre\Listeners;

use Illuminate\Mail\Events\MessageSending;
use Railken\LaraOre\EmailLog\EmailLogManager;
use Swift_Message;

class EmailLogger
{
    /**
     * @var EmailLogManager
     */
    protected $manager;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        $this->manager = new EmailLogManager();
    }

    /**
     * Handle the event.
     *
     * @param MessageSending $event
     */
    public function handle(MessageSending $event)
    {
        $message = $event->message;

        $parameters = [
            'from'    => $this->retrieveHeaderField($message, 'from')[0],
            'to'      => $this->retrieveHeaderField($message, 'to'),
            'cc'      => $this->retrieveHeaderField($message, 'cc'),
            'bcc'     => $this->retrieveHeaderField($message, 'bcc'),
            'headers' => array_map(function ($value) {
                return ['name' => $value->getFieldName(), 'body' => $value->getFieldBody()];
            }, $message->getHeaders()->getAll()),
            'subject' => $message->getSubject(),
            'body'    => $message->getBody(),
        ];

        $this->manager->createOrFail($parameters);
    }

    /**
     * Retrieve headers field sender, to, cc, bcc.
     *
     * @param \Swift_Message $message
     * @param $field
     *
     * @return null|string
     */
    public function retrieveHeaderField(Swift_Message $message, $field)
    {
        $headers = $message->getHeaders();

        if (!$headers->has($field)) {
            return [];
        }

        $mailboxes = $headers->get($field)->getFieldBodyModel();
        $results = [];

        foreach ($mailboxes as $email => $name) {
            $mailboxStr = $email;

            if (null !== $name) {
                $mailboxStr = $name.' <'.$mailboxStr.'>';
            }

            $results[] = $mailboxStr;
        }

        return $results;
    }
}
