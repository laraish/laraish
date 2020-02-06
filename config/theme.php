<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Add theme support
    |--------------------------------------------------------------------------
    |
    | Arrays passed to the add_theme_support function.
    |
    */

    'add_theme_support' => [
        [
            'feature' => 'post-thumbnails',
            'options' => ['post']
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Register custom post types
    |--------------------------------------------------------------------------
    | A series of array taking the form of:
    |
    | name: string,
    | slug: string,
    | [ args: array ]
    |
    */

    //'post_types' => [
    //    [
    //        'name' => 'post-type-name',
    //        'slug' => 'post-type-slug',
    //    ],
    //],

    /*
    |--------------------------------------------------------------------------
    | Register custom taxonomies
    |--------------------------------------------------------------------------
    | A series of array taking the form of:
    |
    | name: string,
    | slug: string,
    | [ object_type: array|string ],
    | [ args: array ]
    |
    */

    //'taxonomies' => [
    //    [
    //        'name' => 'taxonomy-name',
    //        'slug' => 'taxonomy-slug',
    //    ],
    //],

    /*
    |--------------------------------------------------------------------------
    | Hint Text For Thumbnail
    |--------------------------------------------------------------------------
    |
    | Set your hint text for thumbnails.
    | For example : 'The default size of thumbnail is 300×200'
    | the usual Laravel view path has already been registered for you.
    |
    */

    'thumbnail_hint_text' => [
        'post' => 'Image size：655 × 368'
    ],

    /*
    |--------------------------------------------------------------------------
    | Editor Styles
    |--------------------------------------------------------------------------
    |
    | CSS for WordPress's rich editor.
    |
    */

    //'editor_styles' => public_url('css/article-style.css'),

    /*
    |--------------------------------------------------------------------------
    | Title Placeholder
    |--------------------------------------------------------------------------
    |
    | Set the tile-placeholder for Custom-Post-Type
    | key is the slug of custom post type
    | value is the placeholder text
    |
    */

    //'title_placeholder' => [
    //    'author' => 'Author Name',
    //    'books'    => 'Book Title',
    //],

    /*
    |--------------------------------------------------------------------------
    | Remove Menu Page
    |--------------------------------------------------------------------------
    |
    | remove unused page from admin page.
    |
    */

    //'remove_menu_page' => ['edit.php', 'edit-comments.php'],

    /*
    |---------------------------------------------------------------------------
    | Navigation menus
    |---------------------------------------------------------------------------
    |
    | Register navigation menus for a theme
    |
    */

    //'menus' => ['menu_location' => 'menu_description'],

    /*
    |--------------------------------------------------------------------------
    | Image Sizes
    |--------------------------------------------------------------------------
    |
    | Set image-size for custom-post-type
    |
    */

    //'image_sizes' => [
    //    ['single--blog', 655, 368, true],
    //],

    /*
    |--------------------------------------------------------------------------
    | Excerpt Length
    |--------------------------------------------------------------------------
    |
    | Set the length of excerpt
    |
    */

    //'excerpt_length' => 100,

    /*
    |--------------------------------------------------------------------------
    | Excerpt More String
    |--------------------------------------------------------------------------
    |
    | Excerpt More String
    |
    */

    'excerpt_more' => '...',

    /*
    |--------------------------------------------------------------------------
    | Remove Version
    |--------------------------------------------------------------------------
    |
    | If remove the WordPress version meta tag inside <head>
    |
    */

    'remove_version' => true,

    /*
    |--------------------------------------------------------------------------
    | Page Templates
    |--------------------------------------------------------------------------
    |
    | Register your page templates.
    | You can refer the template name by `$post->page_template`.
    | Chances are that you are going to lookup `$post->page_template` in
    | controllers to determine which view is going to be used.
    |
    */

    //'page_templates' => [
    //    [
    //        'post_type' => ['page', 'post'],
    //        'name'      => 'Template Name'
    //    ],
    //    [
    //        'post' => [$post_id, $post_object],
    //        'name' => 'Template Name'
    //    ]
    //],

    /*
    |--------------------------------------------------------------------------
    | Admin Page Assets
    |--------------------------------------------------------------------------
    |
    | Enqueuing both scripts and styles to admin page.
    |
    */

    'admin_page_assets' => [
        'scripts' => [],
        'styles'  => [],
        'hook'    => ''
    ],

    /*
    |--------------------------------------------------------------------------
    | Format ACF Value
    |--------------------------------------------------------------------------
    |
    | Format value got from ACF.
    | Value can be a class name or a closure which returns the class name.
    |
    */

    'format_acf_value' => [
        'post' => function (WP_Post $post) {
            $modelName = \Illuminate\Support\Str::camel($post->post_type);
            $modelClassName = "\App\Models\{$modelName}";

            if (class_exists($modelClassName)) {
                return new $modelClassName($post);
            }

            return new \App\Models\Post($post);
        },
        'term' => \Laraish\WpSupport\Model\Term::class,
        'user' => \Laraish\WpSupport\Model\User::class,
        'assoc_array_to_object' => true,
    ],
];
