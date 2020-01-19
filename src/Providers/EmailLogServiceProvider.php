<?php

namespace Amethyst\Providers;

use Amethyst\Core\Providers\CommonServiceProvider;
use Amethyst\Listeners\EmailLogger;
use Illuminate\Mail\Events\MessageSending;
use Illuminate\Support\Facades\Event;

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
