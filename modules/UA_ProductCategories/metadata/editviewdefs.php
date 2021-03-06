<?php
$module_name = 'UA_ProductCategories';
$viewdefs [$module_name] = array(
    'EditView' => array(
        'templateMeta' => array(
            'maxColumns' => '2',
            'widths' => array(
                array(
                    'label' => '10',
                    'field' => '30',
                ),
                array(
                    'label' => '10',
                    'field' => '30',
                ),
            ),
            'useTabs' => false,
            'tabDefs' => array(
                'DEFAULT' => array(
                    'newTab' => false,
                    'panelDefault' => 'expanded',
                ),
            ),
        ),
        'panels' => array(
            'default' => array(
                array(
                    'name',
                    'assigned_user_name',
                ),
                array(
                    'parent_name',
                    array(
                        'name' => 'list_order',
                        'label' => 'LBL_LIST_ORDER',
                    ),
                ),
                array(
                    'description',
                ),
            ),
        ),
    ),
);