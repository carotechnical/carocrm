<?php

$dictionary['UA_Quotes'] = array(
    'table' => 'ua_quotes',
    'audited' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'opportunity_id' =>
            array(
                'required' => false,
                'name' => 'opportunity_id',
                'vname' => 'LBL_OPPORTUNITY_ID',
                'type' => 'id',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => false,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 36,
                'size' => '20',
            ),
        'opportunity_name' =>
            array(
                'required' => false,
                'source' => 'non-db',
                'name' => 'opportunity_name',
                'vname' => 'LBL_OPPORTUNITY_NAME',
                'type' => 'relate',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => '255',
                'size' => '20',
                'id_name' => 'opportunity_id',
                'ext2' => 'Opportunities',
                'module' => 'Opportunities',
                'rname' => 'name',
                'quicksearch' => 'enabled',
                'studio' => 'visible',
            ),
        'quote_number' =>
            array(
                'required' => false,
                'name' => 'quote_number',
                'vname' => 'LBL_QUOTE_NUMBER',
                'type' => 'varchar',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => '255',
                'size' => '20',
            ),
        'quote_stage' =>
            array(
                'required' => false,
                'name' => 'quote_stage',
                'vname' => 'LBL_QUOTE_STAGE',
                'type' => 'enum',
                'massupdate' => 0,
                'default' => 'Draft',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
                'options' => 'quote_stage_dom',
                'studio' => 'visible',
                'dependency' => false,
            ),
        'contact_id' =>
            array(
                'required' => false,
                'name' => 'contact_id',
                'vname' => 'LBL_CONTACT_ID',
                'type' => 'id',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => false,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 36,
                'size' => '20',
            ),
        'contact_name' =>
            array(
                'required' => false,
                'source' => 'non-db',
                'name' => 'contact_name',
                'vname' => 'LBL_CONTACT_NAME',
                'type' => 'relate',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => '255',
                'size' => '20',
                'id_name' => 'contact_id',
                'ext2' => 'Contacts',
                'module' => 'Contacts',
                'rname' => 'name',
                'quicksearch' => 'enabled',
                'studio' => 'visible',
            ),
        'account_id' =>
            array(
                'required' => false,
                'name' => 'account_id',
                'vname' => 'LBL_ACCOUNT_ID',
                'type' => 'id',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => false,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 36,
                'size' => '20',
            ),
        'account_name' =>
            array(
                'required' => false,
                'source' => 'non-db',
                'name' => 'account_name',
                'vname' => 'LBL_ACCOUNT_NAME',
                'type' => 'relate',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => '255',
                'size' => '20',
                'id_name' => 'account_id',
                'ext2' => 'Accounts',
                'module' => 'Accounts',
                'rname' => 'name',
                'quicksearch' => 'enabled',
                'studio' => 'visible',
            ),
        'valid_until' =>
            array(
                'required' => false,
                'name' => 'valid_until',
                'vname' => 'LBL_VALID_UNTIL',
                'type' => 'date',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'size' => '20',
                'enable_range_search' => false,
                'display_default' => 'now',
            ),
        'payment_terms' =>
            array(
                'required' => false,
                'name' => 'payment_terms',
                'vname' => 'LBL_PAYMENT_TERMS',
                'type' => 'enum',
                'massupdate' => 0,
                'default' => 'NET15',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
                'options' => 'payment_terms_dom',
                'studio' => 'visible',
                'dependency' => false,
            ),
        'billing_address_city' =>
            array(
                'required' => false,
                'name' => 'billing_address_city',
                'vname' => 'LBL_BILLING_ADDRESS_CITY',
                'type' => 'varchar',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
            ),
        'billing_address_state' =>
            array(
                'required' => false,
                'name' => 'billing_address_state',
                'vname' => 'LBL_BILLING_ADDRESS_STATE',
                'type' => 'varchar',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
            ),
        'billing_address_postalcode' =>
            array(
                'required' => false,
                'name' => 'billing_address_postalcode',
                'vname' => 'LBL_BILLING_ADDRESS_POSTALCODE',
                'type' => 'varchar',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 20,
                'size' => '20',
            ),
        'billing_address_country' =>
            array(
                'required' => false,
                'name' => 'billing_address_country',
                'vname' => 'LBL_BILLING_ADDRESS_COUNTRY',
                'type' => 'varchar',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
            ),
        'billing_address' =>
            array(
                'required' => false,
                'name' => 'billing_address',
                'vname' => 'LBL_BILLING_ADDRESS',
                'type' => 'varchar',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => '255',
                'size' => '20',
            ),
        'shipping_address_city' =>
            array(
                'required' => false,
                'name' => 'shipping_address_city',
                'vname' => 'LBL_SHIPPING_ADDRESS_CITY',
                'type' => 'varchar',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
            ),
        'shipping_address_state' =>
            array(
                'required' => false,
                'name' => 'shipping_address_state',
                'vname' => 'LBL_SHIPPING_ADDRESS_STATE',
                'type' => 'varchar',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
            ),
        'shipping_address_postalcode' =>
            array(
                'required' => false,
                'name' => 'shipping_address_postalcode',
                'vname' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
                'type' => 'varchar',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 20,
                'size' => '20',
            ),
        'shipping_address_country' =>
            array(
                'required' => false,
                'name' => 'shipping_address_country',
                'vname' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
                'type' => 'varchar',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
            ),
        'shipping_address' =>
            array(
                'required' => false,
                'name' => 'shipping_address',
                'vname' => 'LBL_SHIPPING_ADDRESS',
                'type' => 'varchar',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => '255',
                'size' => '20',
            ),
        'terms_and_conditions' =>
            array(
                'required' => false,
                'name' => 'terms_and_conditions',
                'vname' => 'LBL_TERMS_AND_CONDITIONS',
                'type' => 'text',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'size' => '20',
                'studio' => 'visible',
                'rows' => '4',
                'cols' => '20',
            ),
        'net_total_amount' => array(
            'required' => false,
            'name' => 'net_total_amount',
            'vname' => 'LBL_NET_TOTAL_AMOUNT',
            'type' => 'currency',
            'massupdate' => 0,
            'default' => 0.00,
        ),
        'tax' => array(
            'required' => false,
            'name' => 'tax',
            'vname' => 'LBL_TAX',
            'type' => 'currency',
            'massupdate' => 0,
            'default' => 0.00,
        ),
        'total_amount' => array(
            'required' => false,
            'name' => 'total_amount',
            'vname' => 'LBL_TOTAL_AMOUNT',
            'type' => 'currency',
            'massupdate' => 0,
            'default' => 0.00,
        ),

        'ua_contracts' => array(
            'name' => 'ua_contracts',
            'type' => 'link',
            'vname' => 'LBL_CONTRACTS',
            'relationship' => 'ua_contracts_quotes',
            'link_type' => 'one',
            'source' => 'non-db',
        ),

        'tasks' => array(
            'name' => 'tasks',
            'type' => 'link',
            'relationship' => 'ua_quotes_tasks',
            'module' => 'Tasks',
            'bean_name' => 'Task',
            'source' => 'non-db',
            'vname' => 'LBL_TASKS',
        ),
        'notes' => array(
            'name' => 'notes',
            'type' => 'link',
            'relationship' => 'ua_quotes_notes',
            'module' => 'Notes',
            'bean_name' => 'Note',
            'source' => 'non-db',
            'vname' => 'LBL_NOTES',
        ),
        'meetings' => array(
            'name' => 'meetings',
            'type' => 'link',
            'relationship' => 'ua_quotes_meetings',
            'module' => 'Meetings',
            'bean_name' => 'Meeting',
            'source' => 'non-db',
            'vname' => 'LBL_MEETINGS',
        ),
        'calls' => array(
            'name' => 'calls',
            'type' => 'link',
            'relationship' => 'ua_quotes_calls',
            'module' => 'Calls',
            'bean_name' => 'Call',
            'source' => 'non-db',
            'vname' => 'LBL_CALLS',
        ),
    ),
    'relationships' => array(
        'ua_quotes_tasks' => array(
            'lhs_module' => 'UA_Quotes',
            'lhs_table' => 'ua_quotes',
            'lhs_key' => 'id',
            'rhs_module' => 'Tasks',
            'rhs_table' => 'tasks',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'UA_Quotes'
        ),

        'ua_quotes_notes' => array(
            'lhs_module' => 'UA_Quotes',
            'lhs_table' => 'ua_quotes',
            'lhs_key' => 'id',
            'rhs_module' => 'Notes',
            'rhs_table' => 'notes',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'UA_Quotes'
        ),

        'ua_quotes_meetings' => array(
            'lhs_module' => 'UA_Quotes',
            'lhs_table' => 'ua_quotes',
            'lhs_key' => 'id',
            'rhs_module' => 'Meetings',
            'rhs_table' => 'meetings',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'UA_Quotes'
        ),

        'ua_quotes_calls' => array(
            'lhs_module' => 'UA_Quotes',
            'lhs_table' => 'ua_quotes',
            'lhs_key' => 'id',
            'rhs_module' => 'Calls',
            'rhs_table' => 'calls',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'UA_Quotes'
        ),
    ),
    'optimistic_locking' => true,
    'unified_search' => true,
);

if (!class_exists('VardefManager'))
{
    require_once('include/SugarObjects/VardefManager.php');
}

VardefManager::createVardef('UA_Quotes', 'UA_Quotes', array(
    'basic',
    'assignable'
));
