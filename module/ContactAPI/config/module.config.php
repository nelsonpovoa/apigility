<?php
return array(
    'router' => array(
        'routes' => array(
            'contact-api.rest.contacts' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/contacts[/:contacts_id]',
                    'defaults' => array(
                        'controller' => 'ContactAPI\\V1\\Rest\\Contacts\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'contact-api.rest.contacts',
        ),
    ),
    'zf-rest' => array(
        'ContactAPI\\V1\\Rest\\Contacts\\Controller' => array(
            'listener' => 'ContactAPI\\V1\\Rest\\Contacts\\ContactsResource',
            'route_name' => 'contact-api.rest.contacts',
            'route_identifier_name' => 'contacts_id',
            'collection_name' => 'contacts',
            'entity_http_methods' => array(
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
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'ContactAPI\\V1\\Rest\\Contacts\\ContactsEntity',
            'collection_class' => 'ContactAPI\\V1\\Rest\\Contacts\\ContactsCollection',
            'service_name' => 'contacts',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'ContactAPI\\V1\\Rest\\Contacts\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'ContactAPI\\V1\\Rest\\Contacts\\Controller' => array(
                0 => 'application/vnd.contact-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'ContactAPI\\V1\\Rest\\Contacts\\Controller' => array(
                0 => 'application/vnd.contact-api.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'ContactAPI\\V1\\Rest\\Contacts\\ContactsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'contact-api.rest.contacts',
                'route_identifier_name' => 'contacts_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'ContactAPI\\V1\\Rest\\Contacts\\ContactsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'contact-api.rest.contacts',
                'route_identifier_name' => 'contacts_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'ContactAPI\\V1\\Rest\\Contacts\\ContactsResource' => array(
                'adapter_name' => 'DBMysql',
                'table_name' => 'contacts',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'ContactAPI\\V1\\Rest\\Contacts\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'ContactAPI\\V1\\Rest\\Contacts\\ContactsResource\\Table',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'ContactAPI\\V1\\Rest\\Contacts\\Controller' => array(
            'input_filter' => 'ContactAPI\\V1\\Rest\\Contacts\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'ContactAPI\\V1\\Rest\\Contacts\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'telefone',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                ),
            ),
        ),
        'ContactAPI\\V2\\Rest\\Contacts\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '45',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'telefone',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '45',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
