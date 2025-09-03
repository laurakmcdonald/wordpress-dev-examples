<?php
// Register ACF fields programmatically (if ACF is active)
if( function_exists('acf_add_local_field_group') ) {
    acf_add_local_field_group([
        'key' => 'group_portfolio',
        'title' => 'Portfolio Fields',
        'fields' => [
            [
                'key' => 'field_client_name',
                'label' => 'Client Name',
                'name' => 'client_name',
                'type' => 'text',
            ],
            [
                'key' => 'field_project_url',
                'label' => 'Project URL',
                'name' => 'project_url',
                'type' => 'url',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'portfolio',
                ],
            ],
        ],
    ]);
}
