<?php

namespace App\Http\Controllers\Generic;

use App\Models\Page as PageModel;
use App\Http\Controllers\Controller;

class Page extends Controller
{
    /**
     * Page constructor.
     */
    public function __construct()
    {
        if (!empty($GLOBALS['post'])) {
            setup_postdata($GLOBALS['post']);
        }
    }

    public function index()
    {
        /** @var \WP_Post $post */
        $post = get_queried_object();
        $view = "page.{$post->post_name}";
        $defaultView = 'generic.page';

        return $this->view(view()->exists($view) ? $view : $defaultView, $this->getViewData());
    }

    protected function getViewData(): array
    {
        $page = new PageModel();

        return [
            'page' => $page,
        ];
    }
}
