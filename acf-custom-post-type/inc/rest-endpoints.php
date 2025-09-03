<?php
// Expose ACF fields in REST API
add_action('rest_api_init', function() {
    register_rest_field('portfolio', 'client_name', [
        'get_callback' => function($object) {
            return get_field('client_name', $object['id']);
        },
        'schema' => ['type' => 'string'],
    ]);

    register_rest_field('portfolio', 'project_url', [
        'get_callback' => function($object) {
            return get_field('project_url', $object['id']);
        },
        'schema' => ['type' => 'string'],
    ]);
});
