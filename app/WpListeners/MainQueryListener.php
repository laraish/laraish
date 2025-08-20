<?php

namespace App\WpListeners;

use Laraish\Foundation\WpHook\WpHookType;
use Laraish\Foundation\WpHook\WpHookListener;

class MainQueryListener extends WpHookListener
{
    protected string $hookName = 'pre_get_posts';
    protected WpHookType $hookType = WpHookType::ACTION;

    public function handle(\WP_Query $query)
    {
        if (is_admin() || ! $query->is_main_query()) {
            return;
        }

        if ($query->is_home()) {
            //$query->set('posts_per_page', '10');
        }

        //$query->set( 'posts_per_page', '2' );
    }
}



