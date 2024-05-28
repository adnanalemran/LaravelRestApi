<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
=======
use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;
>>>>>>> 7d1b6d8454c92a518cc2b24a08c9408be49cea16

class EventServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
=======
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \App\Events\ExampleEvent::class => [
            \App\Listeners\ExampleListener::class,
>>>>>>> 7d1b6d8454c92a518cc2b24a08c9408be49cea16
        ],
    ];

    /**
<<<<<<< HEAD
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
=======
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
>>>>>>> 7d1b6d8454c92a518cc2b24a08c9408be49cea16
    {
        return false;
    }
}
