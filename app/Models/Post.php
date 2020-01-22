<?php
namespace App\Models;

use Laraish\WpSupport\Model\Taxonomy;
use Laraish\WpSupport\Model\Post as BaseModel;

class Post extends BaseModel
{
    public function __construct($pid = null)
    {
        parent::__construct($pid);

        //
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function tags()
    {
        $tags = (new Taxonomy('post_tag'))->theTerms($this);

        return $tags;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function categories()
    {
        $categories = (new Taxonomy('category'))->theTerms($this);

        return $categories;
    }

    /**
     * Change the date output format of parent's
     *
     * @param string $format
     *
     * @return mixed
     */
    public function date($format = 'F jS, Y')
    {
        //December 24th, 2015
        return parent::date($format);
    }

}
