<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Laraish\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register the WordPress actions
     * @var array
     */
    protected $action = [
        'pre_get_posts' => 'App\Listeners\MainQueryListener'
    ];

    /**
     * Register the WordPress filters
     * @var array
     */
    protected $filter = [
        //'the_content' => ['App\Listeners\theContentListener']
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
