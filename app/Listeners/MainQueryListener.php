<?php

namespace App\Listeners;

class MainQueryListener
{
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