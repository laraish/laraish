<?php
namespace App\Models;

use Laraish\WpSupport\Model\Post as BaseModel;

class Post extends BaseModel
{
    public function __construct($pid = null)
    {
        parent::__construct($pid);

        //
    }

    /**
     * Get the tags attached to this post
     * @return array
     */
    public function tags()
    {
        $tags = get_the_tags($this->wp_post);
        if (is_array($tags)) {
            return array_map(function ($tag) {
                return (object)array_merge((array)$tag, ['url' => get_tag_link($tag->term_id)]);
            }, $tags);
        } else {
            return [];
        }
    }

    /**
     * Get the categories attached to this post
     * @return array
     */
    public function categories()
    {
        $categories = get_the_category($this->wp_post);

        return array_map(function ($category) {
            return (object)array_merge((array)$category, ['url' => get_category_link($category->term_id)]);
        }, $categories);
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

    /**
     * Get the related posts of this post by using YARPP
     *
     * @param array $args
     *
     * @return mixed
     */
    public function relatedPosts($args = [])
    {
        $args = array_merge(['limit' => 6], $args);

        return array_map(function ($post) {
            return new static($post);
        }, yarpp_get_related($args, $this->pid));
    }
}