<?php
// Register Custom Post Type
function custom_post_type_rehabs() {

	$labels = array(
		'name'                => _x( 'Rehabs', 'Post Type General Name', 'tabula_rasa' ),
		'singular_name'       => _x( 'Rehab', 'Post Type Singular Name', 'tabula_rasa' ),
		'menu_name'           => __( 'Rehab', 'tabula_rasa' ),
		'parent_item_colon'   => __( 'Rehab Product:', 'tabula_rasa' ),
		'all_items'           => __( 'All Rehabs', 'tabula_rasa' ),
		'view_item'           => __( 'View Rehab', 'tabula_rasa' ),
		'add_new_item'        => __( 'Add New Rehab', 'tabula_rasa' ),
		'add_new'             => __( 'New Rehab', 'tabula_rasa' ),
		'edit_item'           => __( 'Edit Rehab', 'tabula_rasa' ),
		'update_item'         => __( 'Update Rehab', 'tabula_rasa' ),
		'search_items'        => __( 'Search rehabs', 'tabula_rasa' ),
		'not_found'           => __( 'No rehabs found', 'tabula_rasa' ),
		'not_found_in_trash'  => __( 'No rehabs found in Trash', 'tabula_rasa' ),
	);
	$args = array(
		'label'               => __( 'rehabs', 'tabula_rasa' ),
		'description'         => __( 'Rehab information pages', 'tabula_rasa' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'rehabs', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type_rehabs', 0 );

/**************
TAXONOMIES
**************/

/** Residential Options
-------------------------------------------------------------- */
function custom_taxonomy_rehabs_residential_options()  {
	$labels = array(
		'name'                       => _x( 'Residential Options', 'Taxonomy General Name', 'tabula_rasa' ),
		'singular_name'              => _x( 'Residential Option', 'Taxonomy Singular Name', 'tabula_rasa' ),
		'all_items'                  => __( 'All Residential Options', 'tabula_rasa' ),
		'new_item_name'              => __( 'New Residential Option Name', 'tabula_rasa' ),
		'add_new_item'               => __( 'Add New Residential Option', 'tabula_rasa' ),
		'edit_item'                  => __( 'Edit Residential Option', 'tabula_rasa' ),
		'update_item'                => __( 'Update Residential Option', 'tabula_rasa' ),
		'search_items'               => __( 'Search Residential Options', 'tabula_rasa' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
	);

	register_taxonomy( 'residential_options', 'rehabs', $args );
}
// Hook into the 'init' action
add_action( 'init', 'custom_taxonomy_rehabs_residential_options', 0 );

/** Treatment Services
-------------------------------------------------------------- */
function custom_taxonomy_rehabs_treatment_services()  {
	$labels = array(
		'name'                       => _x( 'Treatment Services', 'Taxonomy General Name', 'tabula_rasa' ),
		'singular_name'              => _x( 'Treatment Service', 'Taxonomy Singular Name', 'tabula_rasa' ),
		'all_items'                  => __( 'All Treatment Services', 'tabula_rasa' ),
		'new_item_name'              => __( 'New Treatment Service Name', 'tabula_rasa' ),
		'add_new_item'               => __( 'Add New Treatment Service', 'tabula_rasa' ),
		'edit_item'                  => __( 'Edit Treatment Service', 'tabula_rasa' ),
		'update_item'                => __( 'Update Treatment Service', 'tabula_rasa' ),
		'search_items'               => __( 'Search Treatment Services', 'tabula_rasa' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
	);

	register_taxonomy( 'treatment_services', 'rehabs', $args );
}
// Hook into the 'init' action
add_action( 'init', 'custom_taxonomy_rehabs_treatment_services', 0 );

/** Treatment Methods
-------------------------------------------------------------- */
function custom_taxonomy_rehabs_treatment_methods()  {
	$labels = array(
		'name'                       => _x( 'Treatment Methods', 'Taxonomy General Name', 'tabula_rasa' ),
		'singular_name'              => _x( 'Treatment Method', 'Taxonomy Singular Name', 'tabula_rasa' ),
		'all_items'                  => __( 'All Treatment Methods', 'tabula_rasa' ),
		'new_item_name'              => __( 'New Treatment Method Name', 'tabula_rasa' ),
		'add_new_item'               => __( 'Add New Treatment Method', 'tabula_rasa' ),
		'edit_item'                  => __( 'Edit Treatment Method', 'tabula_rasa' ),
		'update_item'                => __( 'Update Treatment Method', 'tabula_rasa' ),
		'search_items'               => __( 'Search Treatment Methods', 'tabula_rasa' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
	);

	register_taxonomy( 'treatment_methods', 'rehabs', $args );
}
// Hook into the 'init' action
add_action( 'init', 'custom_taxonomy_rehabs_treatment_methods', 0 );

/** Client Types
-------------------------------------------------------------- */
function custom_taxonomy_rehabs_client_types()  {
	$labels = array(
		'name'                       => _x( 'Client Types', 'Taxonomy General Name', 'tabula_rasa' ),
		'singular_name'              => _x( 'Client Type', 'Taxonomy Singular Name', 'tabula_rasa' ),
		'all_items'                  => __( 'All Client Types', 'tabula_rasa' ),
		'new_item_name'              => __( 'New Client Type Name', 'tabula_rasa' ),
		'add_new_item'               => __( 'Add New Client Type', 'tabula_rasa' ),
		'edit_item'                  => __( 'Edit Client Type', 'tabula_rasa' ),
		'update_item'                => __( 'Update Client Type', 'tabula_rasa' ),
		'search_items'               => __( 'Search Client Types', 'tabula_rasa' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
	);

	register_taxonomy( 'client_types', 'rehabs', $args );
}
// Hook into the 'init' action
add_action( 'init', 'custom_taxonomy_rehabs_client_types', 0 );

/** Payment Forms
-------------------------------------------------------------- */
function custom_taxonomy_rehabs_payment_forms()  {
	$labels = array(
		'name'                       => _x( 'Payment Forms', 'Taxonomy General Name', 'tabula_rasa' ),
		'singular_name'              => _x( 'Payment Forms', 'Taxonomy Singular Name', 'tabula_rasa' ),
		'all_items'                  => __( 'All Payment Forms', 'tabula_rasa' ),
		'new_item_name'              => __( 'New Payment Forms Name', 'tabula_rasa' ),
		'add_new_item'               => __( 'Add New Payment Forms', 'tabula_rasa' ),
		'edit_item'                  => __( 'Edit Payment Forms', 'tabula_rasa' ),
		'update_item'                => __( 'Update Payment Forms', 'tabula_rasa' ),
		'search_items'               => __( 'Search Payment Forms', 'tabula_rasa' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
	);

	register_taxonomy( 'payment_forms', 'rehabs', $args );
}
// Hook into the 'init' action
add_action( 'init', 'custom_taxonomy_rehabs_payment_forms', 0 );

/** Insurance Plans
-------------------------------------------------------------- */
function custom_taxonomy_rehabs_insurance_plans()  {
	$labels = array(
		'name'                       => _x( 'Insurance Plans', 'Taxonomy General Name', 'tabula_rasa' ),
		'singular_name'              => _x( 'Insurance Plans', 'Taxonomy Singular Name', 'tabula_rasa' ),
		'all_items'                  => __( 'All Insurance Plans', 'tabula_rasa' ),
		'new_item_name'              => __( 'New Insurance Plans Name', 'tabula_rasa' ),
		'add_new_item'               => __( 'Add New Insurance Plans', 'tabula_rasa' ),
		'edit_item'                  => __( 'Edit Insurance Plans', 'tabula_rasa' ),
		'update_item'                => __( 'Update Insurance Plans', 'tabula_rasa' ),
		'search_items'               => __( 'Search Insurance Plans', 'tabula_rasa' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
	);

	register_taxonomy( 'insurance_plans', 'rehabs', $args );
}
// Hook into the 'init' action
add_action( 'init', 'custom_taxonomy_rehabs_insurance_plans', 0 );


/***********************************
META BOXES
************************************/

/** Basic Information
-------------------------------------------------------------- */
function prc_basicinfo_metaboxes( $meta_boxes ) {
	$prefix = 'prc_'; // Prefix for all fields
	$meta_boxes[] = array(
		'id' => 'prc_basicinfo_metabox',
		'title' => 'Basic Information',
		'pages' => array('rehabs'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name'    => 'Address',
				'desc'    => '',
				'id'      => $prefix . 'address',
				'type'    => 'text',
			),			
			array(
				'name'    => 'Email',
				'desc'    => '',
				'id'      => $prefix . 'email',
				'type'    => 'text',
			),		
			array(
				'name'    => 'Website',
				'desc'    => '',
				'id'      => $prefix . 'website',
				'type'    => 'text',
			),
			array(
				'name'    => 'License #',
				'desc'    => '',
				'id'      => $prefix . 'license',
				'type'    => 'text',
			),
			array(
				'name'     => 'Years in Practice',
				'desc'     => '',
				'id'      => $prefix . 'years',
				'type'    => 'text',
			),		
			array(
				'name'    => 'Average Number of Staff',
				'desc'    => '',
				'id'      => $prefix . 'staff',
				'type'    => 'text',
			),
			array(
				'name'    => 'Occupancy',
				'desc'    => '',
				'id'      => $prefix . 'occupancy',
				'type'    => 'text',
			),
			array(
				'name'    => 'Contact Person',
				'desc'    => '',
				'id'      => $prefix . 'contact_person',
				'type'    => 'text',
			),	
			array(
				'name'    => 'Contact Number',
				'desc'    => '',
				'id'      => $prefix . 'contact_number',
				'type'    => 'text',
			),
			array(
				'name'    => 'Latitude',
				'desc'    => '',
				'id'      => $prefix . 'lat',
				'type'    => 'text',
			),	
			array(
				'name'    => 'Longitude',
				'desc'    => '',
				'id'      => $prefix . 'lng',
				'type'    => 'text',
			),			
		),
	);
	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'prc_basicinfo_metaboxes' );

/** Treatment Information
-------------------------------------------------------------- */
function prc_treatment_metaboxes( $meta_boxes ) {
	$prefix = 'prc_'; // Prefix for all fields
	$meta_boxes[] = array(
		'id' => 'prc_treatment_metabox',
		'title' => 'Treatment Information',
		'pages' => array('rehabs'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name'    => 'Residential Options',
				'desc'    => '',
				'id'      => $prefix . 'residential_options',
				'type'		=> 'taxonomy_multicheck',
				'taxonomy'	=> 'residential_options', 
			),
			array(
				'name'    => 'Treatment Services for: ',
				'desc'    => '',
				'id'      => $prefix . 'treatment_services',
				'type'		=> 'taxonomy_multicheck',
				'taxonomy'	=> 'treatment_services', 
			),
			array(
				'name'    => 'Treatment Methods',
				'desc'    => '',
				'id'      => $prefix . 'treatment_methods',
				'type'		=> 'taxonomy_multicheck',
				'taxonomy'	=> 'treatment_methods', 
			),
			array(
				'name'    => 'Type of Clients Accepted',
				'desc'    => '',
				'id'      => $prefix . 'client_types',
				'type'		=> 'taxonomy_multicheck',
				'taxonomy'	=> 'client_types', 
			),
		),
	);
	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'prc_treatment_metaboxes' );

/** Payments Information
-------------------------------------------------------------- */
function prc_payments_metaboxes( $meta_boxes ) {
	$prefix = 'prc_'; // Prefix for all fields
	$meta_boxes[] = array(
		'id' => 'prc_payments_metabox',
		'title' => 'Payment Information',
		'pages' => array('rehabs'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name'    => 'Forms of Payment Accepted',
				'desc'    => '',
				'id'      => $prefix . 'payment_forms',
				'type'		=> 'taxonomy_multicheck',
				'taxonomy'	=> 'payment_forms', 
			),
			array(
				'name'    => 'Insurance Plans Accepted',
				'desc'    => '',
				'id'      => $prefix . 'insurance_plans',
				'type'		=> 'taxonomy_multicheck',
				'taxonomy'	=> 'insurance_plans', 
			),
		),
	);
	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'prc_payments_metaboxes' );
?>