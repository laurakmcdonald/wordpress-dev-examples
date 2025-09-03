<?php
// Register Portfolio CPT
add_action('init', function() {
    register_post_type('portfolio', [
        'labels' => [
            'name' => 'Portfolios',
            'singular_name' => 'Portfolio'
        ],
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail']
    ]);
});
