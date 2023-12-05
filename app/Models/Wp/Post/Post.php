<?php
namespace App\Models\Wp\Post;

use Illuminate\Support\Collection;
use Laraish\Support\Wp\Model\Taxonomy;
use Laraish\Support\Wp\Model\Post as BaseModel;

class Post extends BaseModel
{
    public function __construct($pid = null)
    {
        parent::__construct($pid);

        //
    }

    public function tags(): Collection
    {
        $tags = (new Taxonomy('post_tag'))->theTerms($this);

        return $tags;
    }

    public function categories(): Collection
    {
        $categories = (new Taxonomy('category'))->theTerms($this);

        return $categories;
    }

    /**
     * Change the date output format of parent's
     */
    public function date(string|null $format = 'F jS, Y'): false|int|string
    {
        //December 24th, 2015
        return parent::date($format);
    }
}
