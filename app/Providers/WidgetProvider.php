<?php

namespace App\Providers;

use Laraish\WpSupport\Providers\WidgetProvider as ServiceProvider;

class WidgetProvider extends ServiceProvider
{
    /**
     * Array of Class names that will be passed to `register_widget()`
     * @type array
     */
    protected $widgets = [];

    /**
     * Array of arguments(array) passed to `register_sidebar()`
     * Usually you should give something like [ 'name' => 'Nice Sidebar', 'id' => 'nice_sidebar']
     * @type array
     */
    protected $widgetAreas = [];


    public function boot()
    {
        //

        parent::boot();
    }
}
