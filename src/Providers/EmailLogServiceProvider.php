<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Mail\Events\MessageSending;
use Illuminate\Support\Facades\Event;
use Railken\Amethyst\Common\CommonServiceProvider;
use Railken\Amethyst\Listeners\EmailLogger;

class EmailLogServiceProvider extends CommonServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        parent::boot();

        Event::listen(MessageSending::class, EmailLogger::class);
    }
}
