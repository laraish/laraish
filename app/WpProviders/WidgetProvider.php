<?php

namespace App\WpProviders;

use Laraish\Support\Wp\Providers\WidgetProvider as ServiceProvider;

class WidgetProvider extends ServiceProvider
{
    /**
     * Array of Class names that will be passed to `register_widget()`
     * @var array<class-string>
     */
    protected array $widgets = [];

    /**
     * Array of arguments(array) passed to `register_sidebar()`
     * Usually you should give something like [ 'name' => 'Nice Sidebar', 'id' => 'nice_sidebar']
     * @var array<string, string>
     */
    protected array $widgetAreas = [];


    public function boot(): void
    {
        //

        parent::boot();
    }
}
