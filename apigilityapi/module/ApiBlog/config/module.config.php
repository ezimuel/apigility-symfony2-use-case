<?php
return array(
    'router' => array(
        'routes' => array(
            'apiblog.rest.post' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/post[/:id]',
                    'defaults' => array(
                        'controller' => 'ApiBlog\\V1\\Rest\\Post\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'apiblog.rest.post',
        ),
    ),
    'service_manager' => array(
        'invokables' => array(
            'ApiBlog\\V1\\Rest\\Post\\PostResource' => 'ApiBlog\\V1\\Rest\\Post\\PostResource',
        ),
    ),
    'zf-rest' => array(
        'ApiBlog\\V1\\Rest\\Post\\Controller' => array(
            'listener' => 'ApiBlog\\V1\\Rest\\Post\\PostResource',
            'route_name' => 'apiblog.rest.post',
            'identifier_name' => 'id',
            'collection_name' => 'post',
            'resource_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '25',
            'page_size_param' => '',
            'entity_class' => 'Blog\\ExampleBundle\\Entity\\Post',
            'collection_class' => 'ApiBlog\\V1\\Rest\\Post\\PostCollection',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'ApiBlog\\V1\\Rest\\Post\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'ApiBlog\\V1\\Rest\\Post\\Controller' => array(
                0 => 'application/vnd.blog.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'ApiBlog\\V1\\Rest\\Post\\Controller' => array(
                0 => 'application/vnd.blog.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Blog\\ExampleBundle\\Entity\\Post' => array(
                'identifier_name' => 'id',
                'route_name' => 'apiblog.rest.post',
                'hydrator' => 'ClassMethods'
            ),
            'ApiBlog\\V1\\Rest\\Post\\PostCollection' => array(
                'identifier_name' => 'id',
                'route_name' => 'apiblog.rest.post',
                'is_collection' => '1',
            ),
        ),
    )
);
