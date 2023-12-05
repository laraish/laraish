<?php

namespace App\Providers;

use Laraish\Support\Wp\Providers\WidgetProvider as ServiceProvider;

class WidgetProvider extends ServiceProvider
{
    /**
     * Array of Class names that will be passed to `register_widget()`
     * @var array<class-string>
     */
    protected $widgets = [];

    /**
     * Array of arguments(array) passed to `register_sidebar()`
     * Usually you should give something like [ 'name' => 'Nice Sidebar', 'id' => 'nice_sidebar']
     * @var array<string, string>
     */
    protected $widgetAreas = [];


    public function boot(): void
    {
        //

        parent::boot();
    }
}
